<?php

require_once 'includes/edit_model.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $state = $_POST['state'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    if (updateUserDetails($username, $fullname, $state, $gender, $phone, $email, $address)) {
        header('Location: /user/updateSuccess');
    } else {
        echo "There was an error updating your details.";
    }
} else {
    $username = 'currentUsername';
    $user = getUserDetails($username);
    require 'includes/edit_view.inc.php';
}

