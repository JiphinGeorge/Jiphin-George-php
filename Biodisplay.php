<html>
<head>
    <title>Biodata Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Biodata Details</h1>
    <table>
        <tr><th>Field</th><th>Details</th></tr>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Fetching and sanitizing form data
            $name = htmlspecialchars($_POST['name']);
            $dob = htmlspecialchars($_POST['dob']); 
            $age = htmlspecialchars($_POST['age']);
            $gender = htmlspecialchars($_POST['gender']);
            $address = htmlspecialchars($_POST['address']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $nationality = htmlspecialchars($_POST['nationality']);
            $marital_status = htmlspecialchars($_POST['marital_status']);
            $hobbies = htmlspecialchars($_POST['hobbies']);
            $education = htmlspecialchars($_POST['education']);
            $father_name = htmlspecialchars($_POST['father_name']);

            // Displaying data in a table format
            echo "<tr><td><strong>Name</strong></td><td>$name</td></tr>";
            echo "<tr><td><strong>Date of Birth</strong></td><td>$dob</td></tr>";
            echo "<tr><td><strong>Age</strong></td><td>$age</td></tr>";
            echo "<tr><td><strong>Gender</strong></td><td>$gender</td></tr>";
            echo "<tr><td><strong>Educational Qualification</strong></td><td>$education</td></tr>";
            echo "<tr><td><strong>Father's Name</strong></td><td>$father_name</td></tr>";
            echo "<tr><td><strong>Address</strong></td><td>$address</td></tr>";
            echo "<tr><td><strong>Email</strong></td><td>$email</td></tr>";
            echo "<tr><td><strong>Phone Number</strong></td><td>$phone</td></tr>";
            echo "<tr><td><strong>Nationality</strong></td><td>$nationality</td></tr>";
            echo "<tr><td><strong>Marital Status</strong></td><td>$marital_status</td></tr>";
            echo "<tr><td><strong>Hobbies</strong></td><td>$hobbies</td></tr>";
        }
        ?>
    </table>
</body>
</html>
