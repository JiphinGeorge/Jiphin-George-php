<?php
if ($_GET) {
    $name = $_GET['name'];
    $basic = $_GET['basic'];
    $desig = $_GET['desig'];
    $CA = 0;
    $EA = 0;
    $HRA = ($basic * 25) / 100;
    $inc_tax = 0;

    if ($desig == "Manager") {
        $CA = 1000;
        $EA = 500;
    } elseif ($desig == "Supervisor") {
        $CA = 750;
        $EA = 200;
    } elseif ($desig == "Clerk") {
        $CA = 500;
        $EA = 100;
    } elseif ($desig == "Peon") {
        $CA = 250;
    }

    $gross = $basic + $HRA + $CA + $EA;
    if ($gross <= 2500) {
        $inc_tax = 0;
    } elseif ($gross > 2500 && $gross <= 4000) {
        $inc_tax = (3 / 100) * $gross;
    } elseif ($gross > 4000 && $gross <= 5000) {
        $inc_tax = (5 / 100) * $gross;
    } else {
        $inc_tax = (8 / 100) * $gross;
    }

    $net = $gross - $inc_tax;
   
    echo "<br><h1 style='text-align: center;'>Pay Slip</h1>";
    echo "<div style='text-align: center;'>";
    echo "<table border='1' cellpadding='10'  style='border-collapse: collapse; margin: 0 auto;'>";
    echo "<tr><th colspan='2' style='text-align:center;'>Employee Details</th></tr>";
    echo "<tr><td><strong>Name:</strong></td><td>" . $name . "</td></tr>";
    echo "<tr><td><strong>Designation:</strong></td><td>" . $desig . "</td></tr>";
    echo "<tr><td><strong>Basic Pay:</strong></td><td>" . $basic . "</td></tr>";
    echo "<tr><td><strong>Conveyance Allowance:</strong></td><td>" . $CA . "</td></tr>";
    echo "<tr><td><strong>Extra Allowance:</strong></td><td>" . $EA . "</td></tr>";
    echo "<tr><td><strong>HRA:</strong></td><td>" . $HRA . "</td></tr>";
    echo "<tr><td><strong>Gross Salary:</strong></td><td>" . $gross . "</td></tr>";
    echo "<tr><td><strong>Income Tax:</strong></td><td>" . $inc_tax . "</td></tr>";
    echo "<tr><td><strong>Net Salary:</strong></td><td>" . $net . "</td></tr>";
    echo "</table>";
    echo "</div>";
}
?>
