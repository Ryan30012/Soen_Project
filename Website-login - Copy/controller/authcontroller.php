<?php

require_once 'constants/db.php';

session_start();

$errorsS = array();
$errorsL = array();
$userL = '';
$userS = '';
$password = '';
$passconf = '';
$email = '';
$account = '';

//if the user click on the sign up button
if (isset($_POST['signup-btn'])) {
    
    $userS = $_POST['userS'];
    $email = $_POST['email'];
    $password = $_POST['Pass2'];
    $passconf = $_POST['passwordConf'];

    //setting the user account type (either: volunteer or client)
    if (isset($_POST['volunteer'])) {
        $account = 'volunteer';
    }
    else {
        $account = 'client';
    }

    if (empty($userS)) {
        $errorsS['userS'] = "Username required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorsS['email'] = "Email address is invalid";
    }

    if (empty($email)) {
        $errorsS['email'] = "Email required";
    }

    if (empty($password)) {
        $errorsS['password'] = "Password required";
    }
    else {
        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if (strlen($password)<8) {
            $errorsS['password'] = "Password needs to be least 8 characters";
        }
        elseif (!$lowercase) {
            $errorsS['password'] = "Password needs at least one lowercase";
        }
        elseif (!$uppercase) {
            $errorsS['password'] = "Password needs at least one uppercase";
        }
        elseif (!$number) {
            $errorsS['password'] = "Password needs at least one number";
        }
        elseif (!$specialChars) {
            $errorsS['password'] = "Password needs at least one special character";
        }

        //validate both passwords are the same
        elseif ($passconf !== $password) {
            $errorsS['password'] = "The two password do not match";
        }
    }

    // setting this variable to be on a global scope
    $userCount;

    // checking if there is already an account assigned to the email entered
    if ($email !== '') {
        $emailQuery = 'SELECT * FROM accounts WHERE email=? LIMIT 1';
        $stmt = $conn->prepare($emailQuery);
        $stmt->bind_param('s', $email);
        $result = $stmt->get_result();
        $userCount = $result->num_rows;
        
        //if more there exists already an account with the email throw exception
        if ($userCount>0) {
            $errorsS['email'] = 'Email already addigned to an account';
        }
    }

    

    //if no errors register the user info into the database
    if(count($errorsS)==0){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $sql = 'INSERT INTO accounts (username, password, token, email, account) VALUES (?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssss', $userS, $password, $token, $email, $account);

        //checking if the info are correctly saved inn the database
        if ($stmt->execute()) {
            //login user
            $user_id = $conn->insert_id;
                // Value to use in other pages like for donation, etc.
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $userS;
            $_SESSION['email'] = $email;
            $_SESSION['account'] = $account;

            // These two comments are here to send the user to the account page with all the features
            header('location:index.php');
            exit();
        }else {
            $errorsS['db'] = 'Database error: Failed to register';
        }
    }

}

//if user click on login button
if (isset($_POST['login-btn'])) {
    $userL = $_POST['userL'];
    $password = $_POST['Pass1'];

    if (empty($userL)) {
        $errorsL['username'] = "Username required";
    }

    if (empty($password)) {
        $errorsL['password'] = "Password required";
    }

    if (count($errorsL) == 0) {
       $sql = "SELECT * FROM accounts WHERE email=? OR username=? limit 1";
       $stmt = $conn->prepare($sql);
       $stmt->bind_param('ss',$userL,$userL);
       $stmt->execute();
       $result = $stmt->get_result();
       $user = $result->fetch_assoc();

       

       if (password_verify($password, $user['password'])) {
            //login access
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['account'] = $user['account'];
            header('location: index.php');
            exit();
       } else {
            $errorsL['login-fail'] = "wrong username/email or password";
       } 
    }

}

