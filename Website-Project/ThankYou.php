<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thank You</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ThankYou.css">
  </head>
  <body>
    <?php
      $amount = $fname = $lname = $email = $phone = $address = $city = $province = $postal =$cardName = $cardNum = "";

      if(isset($_POST["fname"]))
        $fname = $_POST["fname"];
      if(isset($_POST["lname"]))
        $lname = $_POST["lname"];
      if(isset($_POST["email"]))
        $email = $_POST["email"];
      if(isset($_POST["phone"]))
        $phone = $_POST["phone"];
      if(isset($_POST["address"]))
        $address = $_POST["address"];
      if(isset($_POST["city"]))
        $city = $_POST["city"];
      if(isset($_POST["province"]))
        $province = $_POST["province"];
      if(isset($_POST["postal"]))
        $postal = $_POST["postal"];
      if(isset($_POST["name"]))
        $cardName = $_POST["name"];
      if(isset($_POST["number"]))
        $cardNum = $_POST["number"];

      if(isset($_POST["hide"]))
        $amount = $_POST["hide"];
     ?>

     <?php
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
         $mail->Username = 'dummyemailryan@gmail.com';
         //Password to use for SMTP authentication
         $mail->Password = 'diabolo1';
         //Set who the message is to be sent from
         $mail->setFrom('dummyemailryan@gmail.com', 'SPCA Administrator');
         //Set an alternative reply-to address
         //$mail->addReplyTo('replyto@example.com', 'First Last');
         //Set who the message is to be sent to email and name
         $mail->addAddress($email);
         //Name is optional
         //$mail->addAddress('recepientid@domain.com');

         //You may add CC and BCC
         //$mail->addCC("recepient2id@domain.com");
         //$mail->addBCC("recepient3id@domain.com");

         $mail->isHTML(true);

         //You can add attachments. Provide file path and name of the attachments
         //$mail->addAttachment("file.txt", "File.txt");
         //Filename is optional
         $mail->addAttachment("Images/logo.png");



         //Set the subject line
         $mail->Subject = 'PHPMailer SMTP test';
         //Read an HTML message body from an external file, convert referenced images to embedded,
         //convert HTML into a basic plain-text alternative body
         $mail->Body = "Dear " . $fname . " " . $lname . ",<br><br>  Thank you for your generosity.<br><br>Donation amount:    " . $amount . "<br><br>Best regards<br>SPCA Administrator";
         //$mail->AltBody =
         //You may add plain text version using AltBody";
         //send the message, check for errors
         if (!$mail->send()) {
             echo 'Mailer Error: ' . $mail->ErrorInfo;
           }

         ?>

      <!--Navigation Bar-->
      <div class="container">
        <div class="brand">
            <img id="logo" src="Images/logo.png" alt="logo_image.png">
        </div>


        <nav class="navbar">
        <ul class="menu">
          <li class="menu-items">
            <a href="home.php">Home</a>
          </li>
          <li class="menu-items">
            <a href="about.php">About</a>
          </li>
          <li class="menu-items has-sub-menu">
            <a href="#">Service</a>
            <ul class="sub-menu">
              <li class="menu-item">
                <a href="#">Cats</a>
              </li>
              <li class="menu-item">
                <a href="#">Dogs</a>
              </li>
              <li class="menu-item">
                <a href="#">Others</a>
              </li>
            </ul>
          </li>
          <li class="menu-items">
            <a href="volunteer.html">Volunteer</a>
          </li>
          <li class="menu-items">
            <a href="donate.html">Donate</a>
          </li>
          <li class="menu-items">
            <a href="contact-us.html">Contact us</a>
          <li class="menu-items">
            <a href="login_signup.php">Log in</a>
          </li>
          </li>
        </ul>
      </nav>
    </div>
    <!--End of the navBar-->
  <div class="thank">
    <h2>Thank you for your donation</h2> <br> <br>
    <p>An confimation email has been sent to you</p> <br> <br>
    <a href="donate.html">Complete another donation</a>
  </div>
  <!--Updates-->
  <div class="updates">
  <div class="">
    <h3><span> STAY ON TOP OF THE LATEST NEWS</span></h3>
    <p><span>Learn about the Montreal SPCA’s activities and follow our adventures as we help animals in distress.</span></p>
  </div>
  <form class="" action="" method="post">
    <div class="updates-input">
      <div class="info">
        <input type="text" name="fname" value="" class="reg-input" placeholder="First Name">

      </div>
      <div class="info">
        <input type="text" name="lname" value="" class="reg-input" placeholder="Last Name">

      </div>
      <div class="info">
        <input type="text" name="email" value="" class="reg-input" placeholder="Email address">

      </div>
      <div class="info btn">
        <input type="submit" name="submit" class="reg-btn"value="Register">
        <!-- <submit type="button" name="button" class="reg-btn">Register</submit> -->
      </div>
    </div>
  </form>


</div>
<div class="footer">
  <div id="for_company " class="col-2">
    <img src="Images/logo2.png" alt="Logo of SPCA" id="logo_footer">
  </div>
  <div class="col-2 address ">
    <h4>CONTACT US</h4>
    <p>5215 Jean-Talon Street West <br>Montreal, Quebec <br>H4P 1X4 <br> 514-735-2711</p>
  </div>
  <div class="icon col-2">
    <a href="https://facebook.com/spcamontreal"><i class="fab fa-facebook fa-4x icons"></i><br>
      <a href="https://instagram.com/spcamontreal"><i class="fab fa-instagram fa-4x icons"></i> <br>
        <a href="https://twitter.com/spcamontreal"><i class="fab fa-twitter fa-4x icons"></i> <br>
  </div>

</div>
  </body>
</html>
