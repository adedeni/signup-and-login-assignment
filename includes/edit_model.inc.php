<?php
 declare(strict_types=1);
function getUserByUsername(object $pdo, string $username) {
    // Database connection
    $query = "SELECT * FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":username",$username);

    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
}

function updateUserDetails(object $pdo, string $username, string $fullName, string $pwd, string $address, string $email, string $phoneNumber) {
    // Database connection

    $query = "UPDATE users SET fullName = :fullName, pwd = :pwd, address = :address, email = :email, phoneNumber = :phoneNumber WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $options = [
        "cost" => 12
    ];
    $hashpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
        $stmt->bindparam(":fullName",$fullName);
        $stmt->bindparam(":username", $username);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":phoneNumber", $phoneNumber);
        $stmt -> bindparam(":pwd", $hashpwd);
        $stmt -> bindparam(":address", $address);
    return $stmt->execute();
}
function get_match(string $pwd, String $cpwd){
    if ($pwd===$cpwd){
        return true;
    }else {
        return false;
    }

}
function long_name (string $fullName){

    $newname = strlen($fullName);
    if ($newname < 50){

        return true;
    }else {
        return false;
    }
}
function check_edit_errors()
{
    if (isset($_SESSION['errors_edit'])) {
        $errors = $_SESSION['errors_edit'];

        echo "<br>";
        foreach ($errors as $error) {
            echo '<p>'.$error.'</p>';
        }

        unset($_SESSION['errors_edit']);
    } else if (isset($_GET["edit"]) && $_GET["edit"] ==="success") {
        echo '<br>';
        echo '<h4>edit success</h4>';
    }
}