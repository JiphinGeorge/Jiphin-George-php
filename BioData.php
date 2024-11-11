<html>
<head>
    <title>Biodata Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left; 
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            margin-left: auto;
            margin-right: auto;
        }
        input[type="submit"] {
            width: auto;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            text-align: left;
        }
        .submit-container {
            text-align: center; 
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Personal Biodata Form</h1>
    <div class="form-container">
        <form method="POST" action="">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <label for="education">Educational Qualification:</label>
            <input type="text" id="education" name="education" required>

            <label for="father_name">Father's Name:</label>
            <input type="text" id="father_name" name="father_name" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="3" required></textarea>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="^\d{10}$" required placeholder="e.g., 1234567890">

            <label for="nationality">Nationality:</label>
            <input type="text" id="nationality" name="nationality" required>

            <label for="marital_status">Marital Status:</label>
            <select id="marital_status" name="marital_status" required>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
            </select>

            <label for="hobbies">Hobbies:</label>
            <textarea id="hobbies" name="hobbies" rows="3"></textarea>

            <div class="submit-container">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
      
        echo "<h2>Biodata</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Educational Qualification:</strong> $education</p>";
        echo "<p><strong>Father's Name:</strong> $father_name</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone Number:</strong> $phone</p>";
        echo "<p><strong>Nationality:</strong> $nationality</p>";
        echo "<p><strong>Marital Status:</strong> $marital_status</p>";
        echo "<p><strong>Hobbies:</strong> $hobbies</p>";
    }
    ?>
</body>
</html>
