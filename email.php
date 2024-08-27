<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<center>
<body>
    <br>
    <h1>Forget Password</h1>
    <p>Enter your email address below and we'll send you an OTP to validate your new password.</p> <br>
    <form action="includes/email.inc.php" method="POST">
        <input type="email"  name="email" placeholder="Input your registered Email" required> <br> <br>
        <input type="submit" name= "submit">
    </form>
    <h4>Login to your account?</h4>
    <button><a style="text-decoration: none;" href="login.php">Login</a></button>
</body>
</center>
</html>