<?php require 'controller/authcontroller.php'?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Login/Sign up page</title>
    <link rel="stylesheet" href="style.css">
    <!--Links for font family-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Proza+Libre:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <!--
        place code for nav bar here
    -->

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
                    <div class="passreset">
                        <p class="password-reset">
                            <a href="#">Forgot your password?</a>
                        </p>
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

    <!--
        place code for footer here
    -->
</body>
</html>