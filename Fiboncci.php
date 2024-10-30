<html>
<head>
    <title>Fibonacci Series Generator</title> <!-- Title of the web page -->
</head>
<body>
    <h1>Fibonacci Series Generator</h1> <!-- Main heading of the page -->
    <form method="POST"> <!-- Form to collect user input -->
        <label for="limit">Enter a number:</label> <!-- Label for the input field -->
        <input type="number" id="limit" name="limit" required> <!-- Input field for the limit -->
        <input type="submit" value="Generate"> <!-- Submit button to generate the series -->
    </form>

    <?php
       
        if (isset($_POST['limit'])) {
            $limit = $_POST['limit']; // Retrieve the limit entered by the user
            
            // Function to generate Fibonacci series up to the given limit
            function fibonacci($limit) {
                $fib = [0, 1]; // Initialize the array with the first two Fibonacci numbers
                
                while (true) { // Start an infinite loop to calculate Fibonacci numbers
                    // Calculate the next Fibonacci number
                    $next = $fib[count($fib) - 1] + $fib[count($fib) - 2];
                    
                    // Check if the next number exceeds the user-defined limit
                    if ($next > $limit) {
                        break; // Exit the loop if the limit is exceeded
                    }
                    
                    // Add the next Fibonacci number to the array
                    $fib[] = $next;
                }
                
                return $fib; // Return the array of Fibonacci numbers
            }
            
            // Call the Fibonacci function with the user-defined limit
            $series = fibonacci($limit);
            
            // Output the result
            echo "<h2>Fibonacci Series up to $limit:</h2>"; // Heading for the results
            echo implode(", ", $series); // Display the series as a comma-separated string
        }
    ?>
</body>
</html>
