<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="text-align: center;">
        <h1 style="margin-bottom: 20px;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
        <p style="margin-bottom: 30px;">Welcome to your dashboard.</p>
        <p>
            <a href="logout.php" class="btn" style="background-color: #e74c3c; width: auto; padding: 10px 20px; text-decoration: none;">Sign Out of Your Account</a>
        </p>
    </div>
</body>
</html>
