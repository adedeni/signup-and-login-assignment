<?php
declare(strict_types=1);

function verifyOtpEmail(object $pdo, string $email ) {
 $query = "SELECT email FROM users WHERE email = :email";
 $stmt = $pdo->prepare($query);
 $stmt->bind_param(":email", $email);
 $stmt->execute();
 $result = $stmt ->fetch(PDO::FETCH_ASSOC);
 return $result;
}

function setOtp(object $pdo, string $otp, string $email ){
$query = "UPDATE users SET otp = :otp WHERE email = :email";
$stmt = $pdo->prepare($query);
$stmt->bind_param(":otp", $otp, $email);
$stmt->execute();
return $stmt->execute();
}

function verifyOtp(object $pdo, string $otp, string $email ){
    $query = "SELECT email FROM users WHERE email = :email AND otp = :otp";
    $stmt = $pdo->prepare($query);
    $stmt->bind_param(":otp", $email, $otp);
    $stmt->execute();
    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function emailEmpty(string $email) {
    if (empty($email)) {
        return true;
    }
    else {
        return false;
    }
}
function otpEmpty(string $otp) {
    if (empty($otp)) {
        return true;
    }
    else {
        return false;
    }
}
function confirmPwd(string $pwd, String $cpwd){
    if ($pwd===$cpwd){
        return true;
    }else {
        return false;
    }
}

function invalidEmail(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    else {
        return false;
    }
}