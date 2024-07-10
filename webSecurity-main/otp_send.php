<?php
session_start();
include("db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_GET['acc'])){
    $usern=$_GET['acc'];
    $query ="SELECT email FROM registration WHERE AccountNum='$usern'";
    $result=mysqli_query($conn,$query);
    if($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];

        $otp = generateRandomPassword();
        $message = "Hello user here is your OTP: $otp";
        $otpQuery="Update registration set otpVal='$otp' where AccountNum='$usern'";
        $result2=mysqli_query($conn,$otpQuery);

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='ovsgproject@gmail.com';
        $mail->Password='vozifmqbfpbzunfu';
        $mail->SMTPSecure='ssl';
        $mail->Port=465;
        $mail->setFrom('ovsgproject@gmail.com');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = isset($_POST["subject"]) ? $_POST["subject"] :'OTP Verification';
        $mail->Body = !empty($_POST["message"]) ? $_POST["message"] : $message;

        if($mail->send()) {
            echo "
            <script>
            alert('OTP sent successfully! Please check your email.');
            document.location.href='confirmation.php';
            </script>
            ";
        } else {
            echo "Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "Email address not found or error in database query.";
    }
}

function generateRandomPassword($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}
?>
