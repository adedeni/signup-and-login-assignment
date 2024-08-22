<?php

declare(strict_types=1);
function signup_inputs(){
    

        if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
            echo '<input type="text" name="username" placeholder= "username"value="'.$_SESSION["signup_data"]["username"].'">';
        } else {
            echo '<input type="text" name="username" placeholder= "username"><br>'.'<br>';
        }

        if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"])&& !isset($_SESSION["errors_signup"]["invalid_email"])) {
            echo '<input type="text" name="email" placeholder = "email">value="'.$_SESSION["signup_data"]["email"].'">';

        } else {
            echo '<input type="text" name="email" placeholder = "email"><br>'.'<br>';
        }

        if (isset($_SESSION["signup_data"]["phoneNumber"]) && !isset($_SESSION["errors_signup"]["phonenumber_used"])&& !isset($_SESSION["errors_signup"]["invalid_phonenumber"])) {
            echo '<input type="number" name="phone" placeholder="phone number">'. $_SESSION["signup_data"]["phoneNumber"].'">';
        } else {
            echo '<input type="number" name="phone" placeholder="phone number"><br>'.'<br>';
        }
}

function check_signup_errors()
{
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";
        foreach ($errors as $error) {
            echo '<p>'.$error.'</p>';
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p>signup success</p>';
    }
}   