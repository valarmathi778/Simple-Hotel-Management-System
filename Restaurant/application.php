<?php

require('connect.php');

$Name = $_POST['name'];

$Number = $_POST['phone'];

$Email = $_POST['email'];

$Password = $_POST['password'];

$resume = $_FILES['resume']['name'];
$resume_tmp = $_FILES['resume']['tmp_name'];
$uploadDir = 'uploads/resumes/';

    // Move the uploaded resume to the uploads directory
    move_uploaded_file($resume_tmp, $uploadDir . $resume);

    // Insert data into the database
    $sql = "INSERT INTO jobapplication (`name`,`phone`, `email`, `password`, `resume`) 
            VALUES ('$Name', '$Number', '$Email', '$Password', '$resume')";

    if ($con->query($sql) === TRUE) {
        // Redirect on successful submission
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $con->error;
    }


?>
