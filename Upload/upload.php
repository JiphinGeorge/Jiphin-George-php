<?php
// Define the target directory where the uploaded files will be stored
$targetDirectory = "uploads/";

// Ensure the target directory exists
if (!is_dir($targetDirectory)) {
    mkdir($targetDirectory, 0777, true); // Create the directory if it doesn't exist
}

// Define the target file path
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

// Flag to check if there are errors
$uploadOk = 1;

// Check if the file is an actual image or not (optional)
if (isset($_POST["submit"])) {
    // Check if the file is a valid upload
    if ($_FILES["fileToUpload"]["error"] !== UPLOAD_ERR_OK) {
        echo "Error uploading file.";
        $uploadOk = 0;
    }
}

// Check file size (limit to 5MB in this case)
if ($_FILES["fileToUpload"]["size"] > 5000000) { // 5MB limit
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats (optional)
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
$allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "docx", "txt");
if (!in_array($fileType, $allowedTypes)) {
    echo "Sorry, only JPG, JPEG, PNG, GIF, PDF, DOCX, and TXT files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    // Try to upload the file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
