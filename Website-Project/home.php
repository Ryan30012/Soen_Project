<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="home_styles.css">
  <link rel="stylesheet" href="headerfooter.css">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  <title>Home | SPCA Montreal</title>
</head>

<body>
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
        <li class="menu-items">
          <a href="Adopt.php">Adopt</a>
        </li>
        <li class="menu-items">
          <a href="volunteer.php">Volunteer</a>
        </li>
        <li class="menu-items">
          <a href="donate.html">Donate</a>
        </li>
        <li class="menu-items">
          <a href="contact-us.html">Contact us</a>
        </li>
        <li class="menu-items">
          <a href="login_signup.php">Log in</a>
        </li>
      </ul>
    </nav>
  </div>
  <!--End of the navBar-->

<!--  Beginnening of Page-->

  <div id="page">

    <div class="content">
  
<!-- First dynamic gallery -->
      <div class="slideshow">
        <div class="gallery">
          <div class="gallery-img">
            <img src="Images/dog1.jpg" alt="">
          </div>

        </div>

        <div class="gallery">
          <div class="gallery-img">
            <img src="Images/dog2.jpg" alt="">

          </div>

        </div>

        <div class="gallery">

          <div class="gallery-img">
            <img src="Images/dog3.jpg" alt="">

          </div>

        </div>
        <a class="prev" onclick="navGallery(-1)">&#10094;</a>
        <a class="next" onclick="navGallery(1)">&#10095;</a>
      </div>
      <br>
      <div class="gallery-dots">
        <span class="radio" onclick="gallery(1)"></span>
        <span class="radio" onclick="gallery(2)"></span>
        <span class="radio" onclick="gallery(3)"></span>
      </div>
      <div class="btn-three">
        <button type="button" name="button" class="btn-home"><a href="donate.html" class="">Donate</a></button>
        <button type="button" name="button" class="btn-home"><a href="about.php">About</a></button>
        <button type="button" name="button" class="btn-home"><a href="Adopt.php">Adopt</a></button>
      </div>
	    <!-- Carousel for inspirational stories with modal poppout pages- help from W3 schools -->

       <div class="slideshow">
        <h2>Our Heroes</h2>

        <div class="slides" onclick="popup(0)">
          <div class="slides-img">
            <img src="Images/ozymandius.jpg" alt="">
          </div>
          <div class="slides-txt">
            <q>I knew Ozy needed to come home with me. I adopted him right there and took him home.</q>
            <h3>- Ozymandius</h3>
          </div>
        </div>

        <div class="slides" onclick="popup(1)">
          <div class="slides-img">
            <img src="Images/earl.jpg" alt="">

          </div>
          <div class="slides-txt">
            <q>He is super high energy and loves to chase, jump, sprint, hunt and climb. There isn’t a single top shelf in any closet he hasn’t explored or a single nook in the house he hasn’t squeezed into.</q>
            <h3>- Earl</h3>

          </div>
        </div>

        <div class="slides" onclick="popup(2)">

          <div class="slides-img">
            <img src="Images/pong.jpg" alt="">

          </div>
          <div class="slides-txt">
            <q>In closing, when you pass the SPCA, please think of me and the many creatures that thanks to them have a voice, a home and a purpose. If you meet a BC SPCA volunteer, an employee or a donor, please tell them how happy I am.</q>
            <h3>- Pongo</h3>

          </div>
        </div>
        <a class="prev" onclick="navSlides(-1)">&#10094;</a>
        <a class="next" onclick="navSlides(1)">&#10095;</a>
      </div>
      <br>
      <div class="gallery-dots">
        <span class="dots" onclick="slide(1)"></span>
        <span class="dots" onclick="slide(2)"></span>
        <span class="dots" onclick="slide(3)"></span>
      </div>

<!--Modal pages for inspirational stories tutorial from W3 Schools 	    -->
      <div id="popup" class="popup">


        <div class="popup-content">
          <span class="close">&times;</span>

          <h2>Ozymandius</h2>
          <img src="Images/ozymandius2.jpg" alt="" width="30%">

          <p>Ozymandius was only a couple months old when he was found as a feral stray.</p>
          <p>Once he was brought into the BC SPCA Vancouver Branch in October 2019, we discovered that he was terrified of people and needed a home with a lot of patience to bring him out of his shell.
          </p>
          <p>Luckily for Ozy, Marina came across his profile on the BC SPCA website two months later, and she wasted no time in visiting him at the shelter.
          </p>
          <p>Ozy has now been living with his family for several months, and Marina wrote to us with an update on how he is settling in:
          </p>
          <p>I saw Ozy’s photo on the BC SPCA website. He just called me to come and get him. His profile said he was four months old and had been a feral trapped with his mom and sister.
          </p>
          <p>I went to the BC SPCA Vancouver Branch to see him the same day. When I got there, the volunteers couldn’t find him in the viewing area. They said it was possible he had been adopted already.
          </p>
          <p>I checked with the staff and found out that Ozy was actually in an isolation area because he was so terrified of everyone. The staff also told me that no one could handle him or pick him up. They said his file indicated he had been in a
            foster home for a short while and he preferred female humans to males.
          </p>
          <p>I was allowed to go upstairs to the isolation room to meet Ozy. He was in a kennel with the front covered so he could feel safer. I reached in and he hid in the back, but then he sniffed my hand and let me pick him up. He instantly
            snuggled into me and started purring.
          </p>
          <p></p>


        </div>
        <div class="popup-content">
          <span class="close">&times;</span>

          <h2>Earl</h2>
          <img src="Images/earl2.jpg" alt="" width="30%">

          <p>Earl was one of four eight-week-old brown tabbies who were surrendered on August 16, 2019 to the BC SPCA Chilliwack Branch as an unwanted litter. Kittens are pretty irresistible to most of us, and we match them with good families quite
            quickly.</p>
          <p>Yet we still have a serious cat overpopulation problem in our province. Every year during kitten season, hundreds of unwanted and stray kittens are brought into our 44 provincial shelters and thousands more are living dangerous lives
            outdoors.
            Earl’s forever family have now had him in their busy home for a little under a year, and it sounds like he has added quite a bit of colour to their three-cat household. Hang on tight, because here comes the story of their first ten months
            together. </p>
          <p>I saw Ozy’s photo on the BC SPCA website. He just called me to come and get him. His profile said he was four months old and had been a feral trapped with his mom and sister.
          </p>
          <p>Well, it has been just about ten months since Earl came into our household. We are now a household that is three cats strong and it continues to be fairly crazy.
          </p>
          <p>Earl likes to keep a pretty specific schedule, starting with waking up at 5:00 am so that he can go on the patio and look at the birds at the bird feeder. Then he comes back and wakes up his hoomans at 6:30 am for breakfast.

          </p>
          <p>
          </p>
          <p></p>


        </div>
        <div class="popup-content">
          <span class="close">&times;</span>

          <h2>Pongo</h2>
          <img src="Images/pongo2.jpg" alt="" width="30%">

          <p>This shy, five-year-old Dalmation came into the BC SPCA Burnaby Branch on August 11, 2015 when he was surrendered to an animal protection officer as part of a cruelty complaint.</p>
          <p>There were signs that brave Pongo had always spent his life in an impoverished environment. He was skinny and very unsure of himself. But his sweet, trusting spirit was willing, as he was eager to bond with new people.
          </p>
          <p>Pongo was going to need gentle, positive training and encouragement. His right match would need to introduce him to everything: potty training, walking on a leash, living indoors.
          </p>
          <p>Pongo’s hopeful eyes must have spoken for him and he was neutered and placed in his new home by August 21, 2015.
          </p>
          <p>We are delighted to share the letter and photos that Pongo sent to us about his first five years as an adored member of his family.
          </p>
          <p>The memories of the first five years of my existence are shards of pain and inquietude. My life began in the summer of 2015 when the BC SPCA angels rescued 35 of us along with 16 horses and 6 cats.
          </p>
          <p>As the days went on, my parents showered me with affection and took me on various walks, being unable to grasp the extent of my post-traumatic stress disorder that persists to this day.
          </p>
          <p>Finally, they took me on a mountain trail and it was then that the heavens opened for me! My parents call it hiking, but it is forest bathing. Nothing uplifts my canine soul more than steep and challenging mountain trails.
          </p>
          <p>I make them remember that acts of kindness are never futile or insignificant. I practice empathy and compassion. When they are in low spirits, I do my best to uplift them; when they are insensitive, I am forgiving. One day at a time, my
            canine love improves their humanity and enlightens them on the abundant joys of a simple life.
          </p>
          <p>In closing, when you pass the BC SPCA, please think of me and the many creatures that thanks to them have a voice, a home and a purpose. If you meet a BC SPCA volunteer, an employee or a donor, please tell them how happy I am.
          </p>


        </div>
<!-- News bar -->
      </div>
      <div class="news">
        <h2>News</h2>

        <div class=" col-container ">
          <div class="col  ">
            <h3>COVID 19</h3>
            <p><a href="file:///Users/Talha/Documents/SOEN%20287/Project/Website-SPCA/Contact-us-source-files/contact-us.html">Important Message</a></p>

          </div>

          <div class="col ">
            <h3>Adoption</h3>
            <p><a href="https://www.spca.com/en/covid-19/">The new procedure</a></p>
          </div>


          <div class=" col">
            <h3>EBOX Donates $50,000 </h3>
            <p> <a href="https://www.spca.com/en/ebox-donates-50000-to-the-montreal-spca/">Local Internet provider donates $50,000 to the Montreal SPCA</a> </p>
          </div>


        </div>
      </div>



    </div>

  </div>
<!-- Updates bar for subscriptions and mailing list -->
	<div class="updates">
    <div class="updates-header">
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
          <input type="email" name="email" value="" class="reg-input" placeholder="Email address">

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
  <script src="home.js"></script>

</body>

</html>

<?php
// mailing list file and email functionality linkedto subscription registration form
session_start();
 
 
  $fname=  $_POST['fname'] ;
  $lname=  $_POST['lname'] ;
  $email=  $_POST['email'] ;
  $name = "mailinglist.txt";
  $file = fopen($name,"a");
 
  $finaluser= "\n".$fname." ".$lname." ".$email;
 
 fwrite($file, $finaluser);
 fclose($file);
   $mailtext= "Dear ".$fname." ".$lname.",<br /> <br /> You have been successfully subscribed and will receive all future updates related to the SPCA.<br /><br /> Best Regards,<br /> Montreal SPCA";
 
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

 require '/Soen_Project/home_Page/vendor/autoload.php';

 //Create a new PHPMailer instance
 $mail = new PHPMailer ;
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
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

 // here is the info for the email we re using for the website
 // email: spca.group22@gmail.com
 // password: Website22@
 //Whether to use SMTP authentication
 $mail->SMTPAuth = true;

 //Username to use for SMTP authentication
 $mail->Username = 'dummyemailryan@gmail.com';
 //Password to use for SMTP authentication
 $mail->Password = 'diabolo1';
 //Set who the message is to be sent from
 $mail->setFrom('dummyemailryan@gmail.com','SPCA MONTREAL');
 //Set an alternative reply-to address
 //$mail->addReplyTo('replyto@example.com', 'First Last');
 //Set who the message is to be sent to email and name
 $mail->addAddress($email, $fname.' '.$lname);
 //Name is optional
 //$mail->addAddress('recepientid@domain.com');

 //You may add CC and BCC
 //$mail->addCC("recepient2id@domain.com");
 //$mail->addBCC("recepient3id@domain.com");

 $mail->isHTML(true);

 //You can add attachments. Provide file path and name of the attachments
 // $mail->addAttachment("file.txt", "File.txt");
 //Filename is optional
 //$mail->addAttachment("images/profile.png");



 //Set the subject line
 $mail->Subject = 'SPCA Newsletter Subscription Confirmation';
 //Read an HTML message body from an external file, convert referenced images to embedded,
 //convert HTML into a basic plain-text alternative body
 $mail->Body = $mailtext;
 //You may add plain text version using AltBody
 //$mail->AltBody = "This is the plain text version of the email content";
 //send the message, check for errors
 // if (!$mail->send()) {
 //     echo 'Mailer Error: ' . $mail->ErrorInfo;
 // } else {
 //     echo 'Message was sent Successfully!';
 // }

//  header('Location: home.php');
//  exit();


 ?>



<!--  // // session_start();
//
//
//
// if( isset($_POST['submit']) )
// {
//   $fname=  $_POST['fname'] ;
//   $lname=  $_POST['lname'] ;
//   $email=  $_POST['email'] ;
//   $name = "mailinglist.txt";
//   $file = fopen($name,"a");
//
//   $finaluser= "\n".$fname." ".$lname." ".$email;
//
//  fwrite($file, $finaluser);
//  fclose($file);
//    $mailtext= "Dear ".$fname." ".$lname.",<br /> <br /> You have been successfully subscribed and will receive all future updates related to the SPCA.<br /><br /> Best Regards,<br /> Montreal SPCA";
//
// // require '/Soen_Project/home_Page/mailerTemplate1.php';
//   /**
//   * PHP Template for using PHPMailer to send emails.
//   * Before sending emails using the Gmail's SMTP Server, you must make some of the security and permission level
//   * settings under your Google Account Security Settings. Please create a dummy account as you will have to put in
//   * username and password
//   * Make sure that 2-Step-Verification is disabled. Follow the link https://myaccount.google.com/security
//   * Turn ON the "Less Secure App" access at https://myaccount.google.com/u/0/lesssecureapps
//   */
//
//  //Import the PHPMailer class into the global namespace
//  //You don't have to modify these lines.
//  use PHPMailer\PHPMailer\PHPMailer;
//  use PHPMailer\PHPMailer\SMTP;
//
//  //SMTP needs accurate times, and the PHP time zone MUST be set
//  //This should be done in your php.ini, but this is how to do it if you don't have access to that
//  date_default_timezone_set('Etc/UTC');
//
//  require '/Soen_Project/home_Page/vendor/autoload.php';
//
//  //Create a new PHPMailer instance
//  $mail = new PHPMailer();
//  //Tell PHPMailer to use SMTP
//  $mail->isSMTP();
//  //Enable SMTP debugging
//  // SMTP::DEBUG_OFF = off (for production use)
//  // SMTP::DEBUG_CLIENT = client messages
//  // SMTP::DEBUG_SERVER = client and server messages
//  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//  //Set the hostname of the mail server (We will be using GMAIL)
//
//  $mail->Host = 'smtp.gmail.com';
//  //Set the SMTP port number - likely to be 25, 465 or 587
//  $mail->Port = 587;
//  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//
//  // here is the info for the email we re using for the website
//  // email: spca.group22@gmail.com
//  // password: Website22@
//  //Whether to use SMTP authentication
//  $mail->SMTPAuth = true;
//
//  //Username to use for SMTP authentication
//  $mail->Username = 'spca.group22@gmail.com';
//  //Password to use for SMTP authentication
//  $mail->Password = 'Website22@';
//  //Set who the message is to be sent from
//  $mail->setFrom('spca.group22@gmail.com','SPCA MONTREAL');
//  //Set an alternative reply-to address
//  //$mail->addReplyTo('replyto@example.com', 'First Last');
//  //Set who the message is to be sent to email and name
//  $mail->addAddress($email, $fname.' '.$lname);
//  //Name is optional
//  //$mail->addAddress('recepientid@domain.com');
//
//  //You may add CC and BCC
//  //$mail->addCC("recepient2id@domain.com");
//  //$mail->addBCC("recepient3id@domain.com");
//
//  $mail->isHTML(true);
//
//  //You can add attachments. Provide file path and name of the attachments
//  // $mail->addAttachment("file.txt", "File.txt");
//  //Filename is optional
//  //$mail->addAttachment("images/profile.png");
//
//
//
//  //Set the subject line
//  $mail->Subject = 'SPCA Newsletter Subscription Confirmation';
//  //Read an HTML message body from an external file, convert referenced images to embedded,
//  //convert HTML into a basic plain-text alternative body
//  $mail->Body = $mailtext;
//  //You may add plain text version using AltBody
//  //$mail->AltBody = "This is the plain text version of the email content";
//  //send the message, check for errors
//  if (!$mail->send()) {
//      echo 'Mailer Error: ' . $mail->ErrorInfo;
//  } else {
//      echo 'Message was sent Successfully!';
//  }
// } -->


<!-- •	Home/News
Home will include an overview of the SPCA and the latest press releases.

	•	About/Contact us/Donate
About us: this page will include the SPCA’s mission statement, management, statistics, “why is it important to adopt pets?” (guilt trip), etc. In addition, there will be “Contact Us” and donation forms.

	•	Volunteer
Volunteer will include an overview of the different volunteering needs and positions within the SPCA, as well as a form to sign up

	•	Services
Services will enable visitors to select amongst the different services offered by the SPCA(i.e foster, adoption, veterinarian). Adoption/foster includes information regarding the adoption/foster process for each animal. In addition, visitors will be able to access a virtual catalog of all the animals available for adoption. The latter will include pictures/videos, Breed, age, colour, name, size, needs, etc

Compared to the current SPCA website(Jun 15, 2004), the new design will provide visitors with more information in a simple format. In addition, many of the processes (contact methods, volunteer recruitment, relaying adoption information, visiting the animals) that occurred directly or required an employee’s involvement will now be automated, reducing the SPCA’s administrative expenses.    -->
