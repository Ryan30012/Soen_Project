<?php require 'controller/authcontroller.php'?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Login/Sign up page</title>
    <link rel="stylesheet" href="login_signup.css">
    <!--Links for font family-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap" rel="stylesheet">
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

    <div class="content-background">

        <div class="content">

            <form action="login_signup.php" method="post">
                <div class="login">
                    <div class="title">
                        <h3>Login</h3>
                    </div>
                    <?php if (count($errorsL)>0): ?>
                        <div class="alert">
                            <?php foreach ($errorsL as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label>Username or Email</label>
                        <input type="text" class="input" name="userL" value="<?php echo $userL;?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="input" name="Pass1">
                    </div>
                    <div class="load-btn">
                        <button name="login-btn" type="submit" class="Log">Login</button>
                    </div>
                </div>
                <div class="signup">
                    <div class="title">
                        <h3>Sign up</h3>
                    </div>
                    <?php if (count($errorsS)>0): ?>
                        <div class="alert">
                            <?php foreach ($errorsS as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="input" name="userS" value="<?php echo $userS;?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="input" name="email" value="<?php echo $email;?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="input" name="Pass2">
                    </div>
                    <div class="form-group">
                        <label>Confirm</label>
                        <input type="password" class="input" name="passwordConf">
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" class="input_checkbox" name="volunteer" value="volunteer">
                        <label>
                            If you want to be a volunteer, please check this checkbox
                        </label>
                    </div>
                    <div class="load-btn">
                        <button type="submit" name="signup-btn" class="Sign">Sign up</button>
                    </div>
                </div>
            </form>
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
</body>
</html>
