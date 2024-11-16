<?php
require 'db_con.php';

// Check if the user is already logged in using cookies
if ((isset($_COOKIE['enrollmentNumber']) && isset($_COOKIE['password'])) || (isset($_COOKIE['whatsappNumber']) && isset($_COOKIE['password']))) {
    $enrollmentNumber = isset($_COOKIE['enrollmentNumber']) ? $_COOKIE['enrollmentNumber'] : '';
    $whatsappNumber = isset($_COOKIE['whatsappNumber']) ? $_COOKIE['whatsappNumber'] : '';
    $password = $_COOKIE['password'];

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE (enrollmentNumber='$enrollmentNumber' OR whatsappNumber='$whatsappNumber') AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, redirect to feed.php
        header("Location: feed.php");
        exit;
    }
}


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve login credentials from the form
    $loginIdentifier = $_POST['loginIdentifier'];
    $password = md5($_POST['password']);

    // Validate login credentials
    $sql = "SELECT * FROM users WHERE (enrollmentNumber='$loginIdentifier' OR whatsappNumber='$loginIdentifier') AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, set cookies for 30 days and redirect to feed.php
        $row = $result->fetch_assoc();
        $enrollmentNumber = $row['enrollmentNumber'];
        $whatsappNumber = $row['whatsappNumber'];

        setcookie("enrollmentNumber", $enrollmentNumber, time() + (86400 * 30), "/");
        setcookie("whatsappNumber", $whatsappNumber, time() + (86400 * 30), "/");
        setcookie("password", $password, time() + (86400 * 30), "/");
        header("Location: feed.php");
        exit;
    } else {
        // Invalid credentials, redirect back to login.php with error message
        header("Location: index.php?error=Invalid%20login%20credentials");
        exit;
    }
}
else{
    header("Location: index.php?error=Login%20first%20to%20continue");
    exit;
    
}
?>