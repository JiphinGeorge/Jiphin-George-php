<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a String</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        form {
            background: goldenrod;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .output {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>Reverse a String</h1>
        Enter the string:
        <input type="text" name="str" required />
        <input type="submit" value="Reverse" />
    </form>
    
    <?php
    if ($_POST) {
        $string = htmlspecialchars($_POST["str"]);
        $len = strlen($string);
        echo "<div class='output'><h2>Reversed String: ";
        for ($i = ($len - 1); $i >= 0; $i--) {
            echo $string[$i];
        }
        echo "</h2></div>";
    }
    ?>
</body>
</html>
