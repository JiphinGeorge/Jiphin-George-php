<?php

if ($_POST) {
    // Get the form data
    $acc = $_POST['account_no']; // Account number from HTML form
    $amt = $_POST['amount'];      // Amount from HTML form
    $type = $_POST['transaction_type']; // Transaction type (deposit/withdraw) from HTML form

    // Establish PostgreSQL connection
    $con = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");

    if ($con) {
        echo "<center><br>";

        // Validate inputs (basic example)
        if (empty($acc) || empty($amt) || !is_numeric($amt) || !in_array($type, ['deposit', 'withdrawal'])) {
            echo "Invalid input data. Please try again.<br>";
            exit;
        }

        // Begin a transaction to ensure atomicity
        pg_query($con, "BEGIN");

        try {
            // Prepare and execute query based on transaction type
            if ($type == 'deposit') {
                // Deposit: Add amount to the account balance
                $query = "UPDATE bank SET balance = balance + $1 WHERE accno = $2";
                $result = pg_query_params($con, $query, array($amt, $acc));
            } else {
                // Withdrawal: Check balance first
                $checkBalanceQuery = "SELECT balance FROM bank WHERE accno = $1";
                $balanceResult = pg_query_params($con, $checkBalanceQuery, array($acc));

                if ($balanceResult) {
                    $row = pg_fetch_row($balanceResult);
                    $currentBalance = $row[0];

                    // Check if there is enough balance
                    if ($amt > $currentBalance) {
                        echo "Insufficient balance for withdrawal.<br>";
                        pg_query($con, "ROLLBACK");
                        exit; // Stop further processing
                    }

                    // Perform withdrawal: Subtract amount from account balance
                    $query = "UPDATE bank SET balance = balance - $1 WHERE accno = $2";
                    $result = pg_query_params($con, $query, array($amt, $acc));
                } else {
                    echo "Error checking balance for withdrawal.<br>";
                    pg_query($con, "ROLLBACK");
                    exit;
                }
            }
            // If query succeeds, commit transaction
            if ($result) {
                pg_query($con, "COMMIT");

                // Retrieve and display updated account info
                $qry = "SELECT * FROM bank WHERE accno = $1";
                $result1 = pg_query_params($con, $qry, array($acc));

                while ($row = pg_fetch_row($result1)) {
                    echo "<br>\n";
                    echo "<center>";
                    echo "<h1>Account Book</h1>";
                    echo "<table border='1' width='40%'> 
                            <tr> <td>Account no</td> <td>$row[0]</td></tr>
                            <tr> <td>Name</td> <td>$row[1]</td></tr> 
                            <tr><td>Transaction Type</td> <td>$type</td></tr>
                            <tr><td>Amount</td> <td>$amt</td></tr>
                            <tr><td>Balance</td> <td>$row[2]</td></tr>
                          </table>";
                    echo "</center>";
                }
            } else {
                echo "Transaction failed.<br>";
                pg_query($con, "ROLLBACK");
            }
        } catch (Exception $e) {
            // In case of an exception, roll back the transaction
            pg_query($con, "ROLLBACK");
            echo "An error occurred: " . $e->getMessage();
        }

        // Close connection
        pg_close($con);
    } else {
        echo "Connection to database failed.<br>";
    }
}
?>
