<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
</head>
<center>
<body>
    <h1>Dashboard / Profile Update</h1>
    <form action="includes/edit.inc.php" method="post">
        <input type="text" name="username" value="<?php // echo htmlspecialchars($user['username']); ?>" readonly> <br> <br>
        <input type="text" name="fullname" value="<?php //echo htmlspecialchars($user['fullname']); ?>" required> <br> <br>
        <input type="tel" name="phone" value="<?php //echo htmlspecialchars($user['phone']); ?>"> <br> <br>
        <input type="email" name="email" value="<?php //echo htmlspecialchars($user['email']); ?>"> <br> <br>
        <input type="text" name="address" value="<?php // echo htmlspecialchars($user['address']); ?>" placeholder="Address">
    </form>
    <br> <br>
    <button><a href="dashboard.php">Dashboard</a></button>
</body>
</center>
</html>