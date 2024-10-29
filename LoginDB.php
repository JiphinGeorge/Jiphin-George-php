<html>
<head> </head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
        Username:<input type="text" name="usr"><br><br>
        Password:<input type="password" name="pass"><br><br><br>
        <input type="submit" value="login">
    </form>
</body>
</html>
<?php
if ($_POST) {
    $usrname = $_POST['usr'];
    $passwd = $_POST['pass'];
    $dbname = "login";
    $con = mysqli_connect("localhost","root", "password",$dbname);
    if ($con) {
        echo "Successfully Connected.";
        $qry = "select username,password from login where username='$usrname and password='$passwd'";
        $result = mysqli_query($con, $qry);
        $nos = mysqli_num_rows($result);
        if ($nos)
            echo " <br> $usrname, You are Logged Successfully...";
        else
            echo "Incorrect username or password";
    }
    else{
        echo "Error Connecting to the database";
    }
}
?>