<?php

if ($_POST) {
    
    $usrname = $_POST['usr'];
    $passwd = $_POST['pass'];
  
   
    $con = pg_connect("host=localhost port=5433 dbname=postgres user=postgres password=devagiri");
   
    if ($con) {
        $qry = "select * from login where username = '$usrname' and password = '$passwd'";
        $result = pg_query($con, $qry);
        $nos = pg_num_rows($result);
        if ($nos){
            echo "<center><br><br><b><h2>Successfully Connected.</h2></b><br><br> ";
            echo " <br> $usrname, You are Logged Successfully... <br>";
    }
        else
            echo "<center><br><h1>Incorrect username or password </h1><br>";
    }
    
}
