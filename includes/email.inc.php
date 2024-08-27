<?php
require 'db_connection.php'; // Adjust the path as needed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize the email
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Check if the email exists in the database
   

    if ($result->num_rows > 0) {
        // Generate a 6-digit OTP
        $otp = rand(100000, 999999);}
    }