<html>

<body>
    <center>
    <form action="" method="POST">
        <h2>Choose any fruit</h2>
        <select name="fruits" id="fruits">
            <option value="Mango">Mango</option>
            <option value="Grape">Grape</option>
            <option value="Banana">Banana</option>
            <option value="Jackfruit">Jackfruit</option>
            <option value="Apple">Apple</option>
            <option value="Orange">Orange</option>
            <option value="Pappaya">Pappaya</option>
        </select><br><br>
                <script>document.getElementById("fruits").selectedIndex=-1;
                </script>
        <input type="submit" value="SELECT">
    </form>  <center>
</body>
</html>

<?php
if ($_POST) {
    echo "<h3> You have selected : </h3>";
    echo $_POST["fruits"];
}
?>