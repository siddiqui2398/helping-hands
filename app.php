<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
ob_start();
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$name=$_POST['name'];
$emailAddress=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$service=$_POST['serviceName'];
$subject="Service Request";

$serviceRequestAdmin="You have received a new request to book a service\nRequested Service:".$service."\nAdditional Information:".$message."\nName:".$name."\nPhone:".$phone;
$serviceRequestAdmin = nl2br($serviceRequestAdmin);
$mail2 = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'helpinghands4you02@gmail.com';                     // SMTP username
    $mail->Password   = 'sabaosama12345';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('helpinghands4you02@gmail.com');
    $mail->addAddress('helpinghands4you02@gmail.com');     // Add a recipient
    $mail->addReplyTo($emailAddress);

    // Content
    // $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    =$serviceRequestAdmin;
    $mail->AltBody =$serviceRequestAdmin;

    $mail->send();
    header("Location:index.php");

    $mail2->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail2->isSMTP();                                            // Send using SMTP
    $mail2->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail2->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail2->Username   = 'helpinghands4you02@gmail.com';                     // SMTP username
    $mail2->Password   = 'sabaosama12345';                               // SMTP password
    $mail2->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail2->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail2->setFrom('helpinghands4you02@gmail.com');
    $mail2->addAddress($emailAddress);     // Add a recipient
    $mail2->addReplyTo('helpinghands4you02@gmail.com');

    $mail2->Subject = 'Service Request Confirmation';
    $serviceRequestUser="Hi ".$name.",\nThank you for choosing our platform for your needs.\nThis is a confirmation email about a service you ordered via our website. Here are the details of your request\nRequested Service:".$service."\nAdditional Information:".$message."\nPhone:".$phone;
    $serviceRequestUser = nl2br($serviceRequestUser);
    $mail2->Body    = $serviceRequestUser;
    $mail2->AltBody = 'User confirmation';
    $mail2->send();
    // header("Location:index.php");
    ob_end_flush();    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}    
?>