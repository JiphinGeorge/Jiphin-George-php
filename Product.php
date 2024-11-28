<?php
$code=$_GET['itemcode'];
$name=$_GET['itemname'];
$unit=$_GET['unitprice'];
$db=pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");
if($db)
{
    $iqry="insert into product values('$code','$name','$unit')";
    $insert=pg_query($db,$iqry);
    $sqry="select * from product";
    $select=pg_query($db,$sqry);
    $bg_color ="yellow";
    echo "<body style='background-color: $bg_color;'><center><h1>PRODUCT DETAILS</h1></center>";
    echo "<br><br><table border='2' align='center' rules='all' width='40%'>";
    echo "<tr><th>Product Code</th><th>Product Name</th><th>Unit Price</th></tr>";
    while($row=pg_fetch_row($select))
    {
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>