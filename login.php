<?php
require_once 'includes/config.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<center>
<body>
    <br>
<h3>Login</h3>
<form action="includes/login.inc.php" method="POST">
        <input type="text" name="username" placeholder = "Type your Username or email or Phone number" required><br><br>
        <input type="password" name="pwd" placeholder = "password" required><br><br>
        <button>Login</button>
</form> 
        <?php
            check_login_errors(); 
        ?>
        <br>
 <button><a href="index.php">Register Here</a></button>
</body>
</center>
</html>