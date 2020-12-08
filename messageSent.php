<?php
session_start();

$message = "";

$message_sent1 = "Dear " . $_SESSION['firstname'] . " " .  $_SESSION["lastname"] . ","; 
$message_sent2 = '<p> &nbsp; &nbsp; &nbsp; &nbsp; we have received your application successfully. Your application will be evaluated and you will be noticed via e-mail. </p>';
$message_sent3 = "Best regards,";
$message_sent4 = "SPCAS Administrator";

/**
 * PHP Template for using PHPMailer to send emails.
 * Before sending emails using the Gmail's SMTP Server, you must make some of the security and permission level     
 * settings under your Google Account Security Settings. Please create a dummy account as you will have to put in 
 * username and password
 * Make sure that 2-Step-Verification is disabled. Follow the link https://myaccount.google.com/security
 * Turn ON the "Less Secure App" access at https://myaccount.google.com/u/0/lesssecureapps 
 */

//Import the PHPMailer class into the global namespace
//You don't have to modify these lines. 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server (We will be using GMAIL)
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication
$mail->Username = 'spca.group22@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'Website22@';
//Set who the message is to be sent from
$mail->setFrom('spca.group22@gmail.com');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to email and name
$mail->addAddress($_SESSION["userID"]);
//Name is optional
//$mail->addAddress('recepientid@domain.com');

//You may add CC and BCC
//$mail->addCC("recepient2id@domain.com");
//$mail->addBCC("recepient3id@domain.com");

$mail->isHTML(true);

//You can add attachments. Provide file path and name of the attachments
//$mail->addAttachment("file.txt", "File.txt");        
//Filename is optional
$mail->addAttachment("");  



//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body = $message_sent1 . "<br>" . $message_sent2 . "<br>" . $message_sent3 . "<br>" . $message_sent4;
//You may add plain text version using AltBody
//$mail->AltBody = "This is the plain text version of the email content";
//send the message, check for errors
if (!$mail->send()) {
    $message =  'Mailer Error: ' . $mail->ErrorInfo;
} else {
   $message = "Your application was successfully sent.";
}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="volunteerII.css">
</head>
<body>

    <form action="volunteer.php" method="POST">
        <div class="finalmessage">    
            <p><?php echo $message;?><p>
        

            <button class="button" style="margin-left:20px;" type="submit" name="return">Return to the volunteering page</button>
        </div>
    </form>
</body>

</html>
