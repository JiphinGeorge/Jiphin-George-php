<html>
<head>
    <title>Fibonacci Series Generator</title> 
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        .output {
            text-align: center;
            font-size: 20px;
            color: #4CAF50;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Fibonacci Series Generator</h1> 
    <form method="POST" style="text-align:center;"> 
        <label for="limit">Enter a number:</label> 
        <input type="number" id="limit" name="limit" required> 
        <input type="submit" value="Generate"> 
    </form>

    <?php
        if (isset($_POST['limit'])) {
            $limit = $_POST['limit']; 
            function fibonacci($limit) {
                $fib = [0, 1];
                while (true) { 
                    $next = $fib[count($fib) - 1] + $fib[count($fib) - 2];
                    if ($next > $limit) {
                        break;
                    }
                    $fib[] = $next;
                }
                
                return $fib; 
            }
            $series = fibonacci($limit);
            echo "<div class='output'>";
            echo "<h2>Fibonacci Series up to $limit:</h2>"; 
            echo implode(", ", $series); 
            echo "</div>";
        }
    ?>
</body>
</html>
