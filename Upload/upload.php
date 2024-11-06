<?php
$target_dir = "Upload/";
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));

// Check if file was uploaded without errors
if ($_FILES["fileToUpload"]["error"] != 0) {
    echo "Error: " . $_FILES["fileToUpload"]["error"];
    $uploadOk = 0;
}

// Check if file is an image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }
}

// Limit allowed file types (only image files)
$allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($imageFileType, $allowedTypes)) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
}

// Limit file size to 5MB
if ($_FILES["fileToUpload"]["size"] > 5000000) { // 5MB
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br>";
} else {
    // Generate a unique file name to avoid overwriting
    $target_file = $target_dir . uniqid('img_', true) . "." . $imageFileType;

    // Try to upload file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file has been uploaded to: " . $target_file . "<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}
?>