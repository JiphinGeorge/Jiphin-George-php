<?php
if ($_POST) {
    // Get the roll number from the POST request
    $rg = $_POST['txtreg'];

    // Establish a connection to the PostgreSQL database
    $con = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");

    if ($con) {
        // Query to select the student details based on the roll number
        $qry = "SELECT * FROM student WHERE rollno = '$rg'";
        $result = pg_query($con, $qry);

        // Check if any rows are returned
        $nos = pg_num_rows($result);
        
        if ($nos > 0) {
            // If the roll number exists, display the student details
            while ($row = pg_fetch_row($result)) {
                echo "<br>\n";
                echo "<center>";
                echo "<table border='1' width='70%'>";
                echo "<caption><b><u>MarkList</u></b></caption>";
                echo "<tr><td>Name</td><td>$row[1]</td></tr>";
                echo "<tr><td>Rollno</td><td>$row[0]</td></tr>";
                echo "<tr><td>Mark</td><td>$row[2]</td></tr>";
                echo "<tr><td>Grade</td><td>$row[3]</td></tr>";
                echo "</table>";
                echo "</center>";
            }
        } else {
            // If no rows are returned, display an error message centered on the page
            echo "<div style='text-align: center; font-size: 28px; color: red;'><b><u>Error:</u></b> No student found with roll number $rg.</div>";
        }

        // Close the database connection
        pg_close($con);
    } else {
        echo "<center><b><u>Error:</u></b> Unable to connect to the database.</center>";
    }
}
?>
