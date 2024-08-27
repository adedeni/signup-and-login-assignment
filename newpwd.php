<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set New Password</title>
</head>
<center>
<body>
    <br>
    <h1>Set new password here</h1>
    <p>Password must be minimum of six characters long and must contain at least one alphabet and one number.</p> <br>
    <form action="includes/newpwd.inc.php" method="POST">
    <input type="password" name="pwd" placeholder="Set a new password" required><br><br>
    <input type="password" name="cpwd" placeholder="Confirm new password" required><br><br>
    <button>Change Password</button>
    <h4>Login to your account?</h4>
    <button><a style="text-decoration: none;" href="login.php">Login</a></button>
</body>
</center>
</html>