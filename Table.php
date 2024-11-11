<?php
$num = $_GET['num'];
$limit = $_GET['limit'];

// Check if both num and limit are valid numbers
if (is_numeric($num) && is_numeric($limit)) {
    for ($i = 1; $i <= $limit; $i++) {
        echo $num . " * " . $i . " = " . $i * $num . "<br>";
    }
} else {
    echo "Please enter valid numbers.";
}
?>
