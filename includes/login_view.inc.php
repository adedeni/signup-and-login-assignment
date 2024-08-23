<?php

declare(strict_types=1);


function output_username(){
    

    if (isset($_SESSION["user_id"])){
        echo '<h1> Welcome</h1> <br> ' .'<h1>'. $_SESSION["user_username"].'<br>'.$_SESSION["user_fullName"].'<br>'.$_SESSION["user_email"].'<br>'.$_SESSION["user_phone"].'<br>'.$_SESSION["user_gender"].'<br>'.$_SESSION["user_state"]. '<br>' .$_SESSION["user_address"];
    } else {
        echo '<p>Login Failed </p>';
    }
}

function check_login_errors()
{
    if (isset($_SESSION['errors_login'])) {
        $errors = $_SESSION['errors_login'];

        echo "<br>";
        foreach ($errors as $error) {
            echo '<p>'.$error.'</p>';
        }

        unset($_SESSION['errors_login']);
    } else if (isset($_GET["login"]) && $_GET["login"] ==="success") {
        echo '<br>';
        echo '<h1>login success</h1>';
    }
}