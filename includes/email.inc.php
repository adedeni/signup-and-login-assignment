<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = ($_POST['email']);

    try {
        require 'dbh.inc.php';
        require_once 'email_contr.inc.php';

        $errors = [];

        if (emailEmpty($email)) {
            $errors["empty_input"] = "Fill in the email!";
        }
        if(!is_email_registered($pdo, $email)){
            $errors["unregistered_email"] = " email not registered!";

        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "invalid email used!";
        }

        require_once 'config.inc.php';

        if ($errors) {
            $_SESSION["errors_forget"] = $errors;
            header("Location: ../email.php");
            die();
        }
        if(is_email_registered($pdo, $email)){
            storeOtp($pdo,$email,$otp); 
            $_SESSION["email"] = $email;
            header("Location: ../otp.php");
        }                      
        
        
        $pdo = null;
        $stmt = null;

        die();

 }  catch (PDOException $e){
    die("Query failed: ". $e->getmessage());
}
}else {
header("Location:../email.php");
die();
}