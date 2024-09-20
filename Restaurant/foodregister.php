<?php
session_start();
require('connect.php');

// Sanitize and validate input
$EmailId = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$Password = $_POST['Password']; // This needs to be hashed
$PasswordHash = password_hash($Password, PASSWORD_BCRYPT); // Hash the password
$Name = $_POST['name'];
$Phone = $_POST['phno'];
$Country = $_POST['country'];
$State = $_POST['state'];
// Prepare and execute the statement to insert user data
$stmt = $con->prepare("INSERT INTO foodregister (`Email`, `Password`,`Name`,`Phone_No`,`Country`,`States`) VALUES (?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Failed to prepare the SQL statement: " . $con->error);
}

$stmt->bind_param("ssssss", $EmailId, $PasswordHash, $Name, $Phone, $Country, $State);

if ($stmt->execute()) {
    $_SESSION["emailid"] = $EmailId;
    $_SESSION["password"] = $PasswordHash;

    // Retrieve the last inserted ID
    $ID = $con->insert_id;

    // Check if $ID is valid
    if ($ID > 0) {
        // Store the user ID in session
        $_SESSION['userid'] = $ID;

        // Insert into `orderform` table
        $orderInsertStmt = $con->prepare("INSERT INTO orderform (`ID`) VALUES (?)");
        if ($orderInsertStmt === false) {
            die("Failed to prepare the SQL statement for orderform: " . $con->error);
        }

        $orderInsertStmt->bind_param("i", $ID);
        if (!$orderInsertStmt->execute()) {
            error_log("Failed to execute the SQL statement for orderform: " . $orderInsertStmt->error);
            echo "An error occurred while saving order details. Please try again.";
        }

        $orderInsertStmt->close();

        // Redirect to index.php
        header('Location: index.php');
        exit();
    } else {
        die("Failed to retrieve the user ID.");
    }
} else {
    // Error handling: Log or display the error
    error_log("Failed to execute the SQL statement: " . $stmt->error);
    echo "An error occurred. Please try again.";
}

// Close the statement and connection
$stmt->close();
$con->close();
?>
