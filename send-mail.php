<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    // smtp settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth   = true;    
    
    // enter your email and password
    $mail->Username = "yourmail@example.com";
    $mail->Password = 'your password';


    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    // email settings
    $mail->isHTML(true);
    $mail->setFrom($email,$name);

    // enter your mail
    $mail->addAddress("yourmail@example.com");
    
    $mail->Subject = ("$email");

    
    $mail->Body    = $message;
    

    if($mail->send()){
        $status = "success";
        $response = "Email is sent";
        header("location:thanks.html");
    }
    else{
        $status = "failed";
        $response = "Something is wrong <br>". $mail->ErrorInfo;
        header("location:failed.html");
    }

    
    
}


?>