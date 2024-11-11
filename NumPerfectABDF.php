<html>
<head>
    <title>Perfect, Abundant, or Deficient Number</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Perfect, Abundant or Deficient</h2>
        <form  method="post">
            Enter the number: 
            <input type="text" name="number" required />
            <input type="submit" />
        </form>
    <?php
    if ($_POST) {
        $no = $_POST['number'];
        $sum = 0;

        for ($i = 1; $i < $no; $i++) {
            if ($no % $i == 0) {
                $sum = $sum + $i;
            }
        }
        if ($sum == $no) {
            echo "Perfect Number";
        } elseif ($sum > $no) {
            echo "Abundant Number";
        } else {
            echo "Deficient Number";
        }
    }
    ?>
</body>
</html>
