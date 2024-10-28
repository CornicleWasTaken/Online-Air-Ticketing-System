<?php
include 'connect.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);
if (isset($_POST['forgot'])) {
    $email = $_POST['email'];

    

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 6; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
        $sql = "UPDATE users SET reset_token='$randomString', reset_token_expiry=DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email='$email'";
        if ($conn->query($sql) == TRUE) {
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "samik.sarkar99@gmail.com";
            $mail->Password = "iysu vopm rkxo lmin";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom("noreply-OATS@gmail.com","OATS");
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Requested Password Reset from OATS';
            $mail->Body    = "Here is your new Password for OATS <b> $randomString </b>";
            $mail->AltBody = 'Here is your new Password for OATS $randomString';
            
            $mail->send();
            if ($mail->send() == TRUE) {
                header("Location: confirm.php");
            } else {
                echo "Failed to send email.";
            }
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "No user found with that email address.";
    }

    $conn->close();
}

