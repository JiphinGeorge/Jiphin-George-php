<?php
$num=$_GET['num'];
$limit=$_GET['limit'];

for($i = 1;$i <= $limit; $i++)
	{
	echo $num . " * " . $i . " = " . $i*$num . "<br>";
	}

?>
