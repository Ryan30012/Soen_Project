<?php
require_once "constants/db.php";
$query = "SELECT * FROM animals";
$stmt = $conn->prepare($query);
if ($stmt->execute()) {
    $results = $stmt->get_result();
}


?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Adopt | SPCA</title>
    <link rel="stylesheet" href="adopt.css">
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

    <div class="main_content">

        <div class="main_image">

            <img id="Image" src="Images/adopt.jpg" alt="image of pets for adoption">

            <div id="title_page">
                Adopt
            </div>

            <div id="adoption_hours">
                <select name="Adoption time" id="adoption_time" style="width: 200px; height: 50px;">
                    <option value="1">Mon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </option>
                    <option value="2">Tue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </option>
                    <option value="3">Wed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </option>
                    <option value="4">Thu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </option>
                    <option value="5">Fri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </option>
                    <option value="6">Sat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </option>
                    <option value="7">Sun&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </option>
                </select>
            </div>

        </div>

        <div class="information_pages">
            <button class="inf_page"><a href="#">Fees</a></button>
            <button class="inf_page"><a href="#">Foster</a></button>
            <button class="inf_page"><a href="#">Veterinarian</a></button>
        </div>

        <div class="filter-container">

            <div class="posts-collect">
                <div class="post-main-container">
                    <?php if(isset($results)): ?>
                    <!--foreach loop here-->
                    <?php foreach ($results as $result): ?>
                    <div class="all <?php echo $result['type'] . " " . $result['medical_issue']; ?>">
                        <div class="post-image">
                            <img class="img_post" src="Images/<?php echo $result['path_image'];?>" alt="Image of <?php echo $result['name']; ?>">
                            <span class="category-name"><?php echo $result['type']; ?></span>
                        </div>
                        <div class="post-content">
                            <h2><?php echo $result['name']; ?></h2>
                            <p><?php echo $result['description']; ?></p>
                        </div>
                        <button class="more" type="button">More on <?php echo $result['name']; ?></button>
                    </div>
                    <?php endforeach; ?>
                    <!--end foreach-->
                    <?php endif;?>

                    <?php if(!isset($results)): ?>
                        <p class="alert">This page is under maintenance. Please return later</p>
                    <?php endif; ?>
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


    <script src="adopt.js"></script>
</body>
</html>
