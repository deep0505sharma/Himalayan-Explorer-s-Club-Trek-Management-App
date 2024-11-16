<?php
// Hardcoded admin credentials
$admin_username = "admin";
$admin_password = "admin@123"; // You should use a secure password hash in production
//check is logged in
if(isset($_COOKIE['admin_username']) and isset($_COOKIE['admin_password'])){
if($_COOKIE['admin_username'] && $_COOKIE['admin_password'] = md5($admin_password)){
    header('Location: manage.php');
}
}
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve login credentials from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login credentials
    if ($username === $admin_username && md5($password) === md5($admin_password)) { // Using md5 for demonstration purpose only, use a secure password hashing algorithm in production
        // Login successful, set cookies and redirect to manage.php
        setcookie("admin_username", $username, time() + (86400 * 30), "/");
        setcookie("admin_password", md5($password), time() + (86400 * 30), "/"); // Store password hash in cookie for demonstration purpose only (not recommended)
        header("Location: manage.php");
        exit;
    } else {
        // Invalid credentials, redirect back to admin.php with error message
        header("Location: admin.php?error=Invalid%20login%20credentials");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<?php
require 'general.php';
?>
<div class="container">
    <h2>Admin Login</h2>
    <?php if (isset($_GET['error'])): ?>
    <div class="error"><?php echo $_GET['error']; ?></div>
    <?php endif; ?>

    <form id="adminLoginForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>
<?php require 'footer.php';?>
</body>
</html>
