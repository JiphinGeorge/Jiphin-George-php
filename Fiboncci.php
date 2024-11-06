<html>
<head>
    <title>Fibonacci Series Generator</title> 
</head>
<body>
    <h1>Fibonacci Series Generator</h1> 
    <form method="POST"> 
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
            echo "<h2>Fibonacci Series up to $limit:</h2>"; 
            echo implode(", ", $series); 
        }
    ?>
</body>
</html>
