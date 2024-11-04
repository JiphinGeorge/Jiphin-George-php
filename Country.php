<html>
<body><center>
    <h1>Array Operations</h1>
    <form action="" method="post">
        <table style="border: 1px solid black;"> 
        <tr><td><input type=radio name=choice value=display>Display Array<br /></td><tr>
        <tr><td><input type=radio name=choice value=sort>   Sorted Array<br /></td><tr>
        <tr><td> <input type=radio name=choice value=dupli>   Without Duplicate<br /></td><tr>
        <tr><td> <input type=radio name=choice value=pop>      Delete Last<br /></td><tr>
        <tr><td> <input type=radio name=choice value=rev>     Array Reverse<br /></td><tr>
        <tr><td><input type=radio name=choice value=search>  Array Search:<input type=text name=search><br /><br/></td><tr>
        </table>
        <input type=Submit>
    <center>
</body>

</html>

<?php
if ($_POST) {
    $countries = array("","Chile", "Colombia", "Pakistan", "Pakistan", "Italy","Chile", "Austria", "New Zealand", "United States","India");
    $val = $_POST['choice'];
    
    
    switch ($val) {
        case "display":
            foreach ($countries as $value)
                echo "<br>" . $value;
            break;
        case "sort":
            sort($countries);
            foreach ($countries as $value)
                echo "<br>" . $value;
            break;
        case "dupli":
            $uarray = array_unique($countries);
            foreach ($uarray as $value)
                echo "<br>" . $value;
            break;
        case "pop":
            array_pop($countries);
            foreach ($countries as $value)
                echo "<br>" . $value;
            break;
        case "rev":
            $revarr = array_reverse($countries);
            foreach ($revarr as $value)
                echo "<br>" . $value;
            break;
            case "search":
                $searchValue = $_POST["search"];
                $position = array_search($searchValue, $countries);
                if ($position !== false) {
                    echo "<br><br>Position is - " . $position;
                } else {
                    echo "Not Found";
                }
                break;
              
    
    }
}
?>