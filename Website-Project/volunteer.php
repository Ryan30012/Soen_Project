<?php
    /*if (isset($_POST["vol_btn"])) {
        header("Location:25_form.php");
        exit();
    }*/
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Volunteer | SPCA</title>
    <link rel="stylesheet" href="volunteer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="headerfooter.css">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
      </style>
</head>
<body>
 <!--Navigation Bar-->
 <div class="container">
    <div class="brand">
      <img id="logo" src="Images/main_logo.png">
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
          <a href="volunteer.html">Volunteer</a>
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

<div class="main_content">
    <img src="Images/adoption-hero.jpg">
    <div id="titling">
        <h2>Volunteer</h2>
    </div>
    
    <div class="infos">
        <div id="infoVolunteer">
        <div id="titleVolunteer">
        <h3>Helping animals more than anything else!</h4>
        </div>

        <p class="text"> Volunteers make a significant contribution to the Montreal SPCA’s operations. 
            Their support and dedication are essential to the accomplishment of its mission. 
            These valued allies allow us to offer a range of services that go far beyond the traditional 
            role attributed to animal shelters. The SPCA is looking for people who are willing to dedicate time to helping animals.
        </p>
        </div>
    
        <div class="req">
            <div class="imgreq">
            <img src="Images/volunteer_2.jpg" class="image2">
            </div>
            <div id="admissionReq">
                <div class="req_titling">
                    <h3>Requirements:</h3>
                </div>
                <div class="ul">
                    <ul>
                        <li>Be 18 years old or older</li>
                        <li>Be able to volunteer a minimum of three consecutive hours per week</li>
                        <li>Be able to work on a fixed schedule (at the same time each week)</li>
                        <li>Be able to commit at least 6 months of volunteering</li>
                        <li>Be fluent in French and English (spoken)</li>
                        <li>Be able to pay a $20 administration fee (uniform included)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="application">
        <div class="row">
    
          <h3>Volunteer Application</h3>
      
            <div class="column" >
            <h4>Are you under 18 years old?</h4>
            <button id="button"> <a class="button" href="http://engageanimal.org/en/">Engage</a></button> <!--button?-->

            
            <div id="note">
              <p><sup><b>*</b></sup>Contact our partner ENGAGE at info@engageanimal.org</p>
            </div>
        </div>

        <div class="column">
            <h4>Are you 18 years old or over?</h4>
            <form action="25_form.php"method="POST">
                <button id="button" type="submit" class="button" name="vol_btn">Apply</button> 
            </form>
            
            <div id="note">
              <p><sup><b>*</b></sup>After receiving your application, we will contact you as soon as we can and share any openings by email.</p>
            </div>
        </div>
    </div>
</div>
</div>
   
      
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
    <script>
        src = "volunteer.js"
    </script>
</body>
</html>

