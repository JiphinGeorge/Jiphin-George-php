<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h1>Armstrong Number Checker</h1>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        function isArmstrong($number) {
            $digits = str_split($number);
            $numDigits = count($digits);
            $sum = 0;

            foreach ($digits as $digit) {
                $sum += pow($digit, $numDigits);
            }

            return $sum == $number;
        }

        if (isArmstrong($number)) {
            echo "<p>$number is an Armstrong number.</p>";
        } else {
            echo "<p>$number is not an Armstrong number.</p>";
        }
    }
    ?>
</body>
</html>
