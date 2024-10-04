<html>
<head>
    <title>Biodata Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: auto;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Personal Biodata Form</h1>
    <form method="POST" action="">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="3" required></textarea>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        $gender = htmlspecialchars($_POST['gender']);
        $address = htmlspecialchars($_POST['address']);
        $email = htmlspecialchars($_POST['email']);

        echo "<h2>Biodata</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Email:</strong> $email</p>";
    }
    ?>
</body>
</html>
