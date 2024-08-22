<?php
echo "fjksvba";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $crpwd = $_POST['crpwd'];
    $cpwd = $_POST['cpwd'];
    $fullName = $_POST['fullName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    
    
    try {
        require_once "dbh.inc.php";
    require_once 'edit_model.inc.php';
    require_once 'signup_contr.inc.php';

    $errors = [];
    if (is_input_empty($fullName,$username,$pwd,$phoneNumber,$email,$cpwd,$address )) {
        $errors["empty_input"] = "fill in all fields!";

    } 

    $result = getUserByUsername($pdo, $username);

    if (is_email_invalid($email)) {
        $errors["invalid_email"] = "invalid email used!";

    }
    if (does_pwd_match($pwd, $cpwd)){
        $errors["pwd_match"] = "password don't match";

    }

    if(not_upto_six_char($pwd)){
        $errors["pwd_six_char"] = "Password not up to six characters"; 
    }
    if (not_number_and_string($pwd)) {
        $errors["pwd_error"] = "Password must contain both number and alphabet";
     }
    if (!validatePhoneNumber($phoneNumber)){
        $errors[" invalid_phonenumber"] = "incorrect phone number formart";

    }
    if (password_verify($crpwd,$result['pwd'])){
        $errors["invalid_password"]="incorect password";
     }
     if (is_fullname_long($fullName)){
         $errors["fullname_long"] =  "characters too long kindly reduce!";
     }
 
     require_once 'config.inc.php';
 
 
     if ($errors){
         $_SESSION["errors_edit"] = $errors;
         header("Location: ../edit.php");
         die();
     }
 
     updateUserDetails($pdo, $username, $fullName, $pwd, $address, $email, $phoneNumber);
     header("Location: ../dashboard.php?edit=success"); 
      
     $pdo = null;
     $stmt = null;
 
     die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../edit.php");
    die();
}
