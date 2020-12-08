
<?php
session_start();
    $fname = "";
    $lname = "";
    $uname = "";
    $phone = "";
    $address = "";
    $ville = "";
    $prov = "";
    $post = "";
    $status = "";
    $field = "";
    $en_speak = "";
    $en_write = "";
    $fr_write = "";
    $fr_speak = "";
    $lift = "";
    $act = "";
    $allergies = "";

    $l_errormsg = "";
    $f_errormsg = "";
    $u_errormsg = "";
    $phone_errormsg = "";
    $add_errormsg = "";
    $ville_errormsg = "";
    $prov_errormsg = "";
    $post_errormsg= "";
    $stat_errormsg = "";
    $field_errormsg = "";
    $en_speak_errormsg = "";
    $en_write_errormsg = "";
    $fr_write_errormsg = "";
    $fr_speak_errormsg = "";
    $lift_errormsg = "";
    $act_errormsg = "";
    $allergies_errormsg = "";

if (isset($_POST["sub_btn"])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $uname = $_POST['us_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $ville = $_POST['ville'];
    $prov = $_POST['Province'];
    $post = $_POST['postal'];
    $status = $_POST['status'];
    $field = $_POST['field'];
    $en_speak = $_POST['en_speak'];
    $en_write = $_POST['en_write'];
    $fr_write = $_POST['fr_write'];
    $fr_speak = $_POST['fr_speak'];
    $lift = $_POST['lift'];
    $act = $_POST['act'];
    $allergies = $_POST['allergies'];

    $f_lower_case = preg_match("@[a-z]@", $fname);
    $f_higher_case = preg_match("@[A-Z]@", $fname);
    $l_lower_case = preg_match("@[a-z]@", $lname);
    $l_higher_case = preg_match("@[A-Z]@", $lname);
    $user_format = preg_match("/^[a-zA-Z0-9]{0,}([.]?[a-zA-Z0-9]{1,})[@](gmail.com|hotmail.com|outlook.com)$/", $uname);
    $phone_format = preg_match("/^\d{3}-\d{3}-\d{4}$/", $phone);
    $post_format = preg_match("/^[A-Z]\d[A-Z] \d[A-Z]\d$/", $post);
 
    
    //verifying first name is valid
    if (empty($fname)) {
        $f_errormsg = "First name is empty";
    } 
    // check if name only contains letters and whitespace
    else if (!$f_lower_case && !$f_higher_case) {
        $f_errormsg = "Only letters and white space allowed";
    }
    
    //verifying last name is valid
    if (empty($lname)) {
        $l_errormsg = "Last name is empty";
    } 
    // check if name only contains letters and whitespace
    else if (!$l_lower_case && !$l_higher_case) {
        $l_errormsg = "Only letters and white space allowed";
    }

      // check if e-mail address is valid
    if (empty($uname)) {
        $u_errormsg = "Email is required";
    } 

    else if (!$user_format){
        $u_errormsg = "Email requires an @gmail.com or @hotmail.com or @outook.com format.";
    }

    if (empty($phone)) {
        $phone_errormsg = "Phone is required";
    } 

    else if (!$phone_format){
        $phone_errormsg = "Phone requires a xxx-xxx-xxxx format.";
    }

    if (empty($address)) {
        $add_errormsg = "Address is required";
    } 
    if (empty($ville)) {
        $ville_errormsg = "City is required";
    } 

    if ($prov == "") {
        $prov_errormsg = "Province is required";
    } 

    if (empty($post)) {
        $post_errormsg = "Postal code is required";
    } 

    else if (!$post_format){
        $post_errormsg = "Postal code requires an A1A 1A1 format.";
    }
    
    if ($status == "") {
        $stat_errormsg = "Status is required";
    } 

    if ($field == ""){
        $field_errormsg = "Study/professional field is required.";
    }

    if ($en_speak == ""){
        $en_speak_errormsg = "This field is required.";
    }
    
    if ($en_write == ""){
        $en_write_errormsg = "This field is required.";
    }

    if ($fr_speak == ""){
        $fr_speak_errormsg = "This field is required.";
    }

    if ($fr_write == ""){
        $fr_write_errormsg = "This field is required.";
    }

    if ($lift == ""){
        $lift_errormsg = "This field is required.";
    }

    if ($act == ""){
        $act_errormsg = "This field is required.";
    }

    if ($allergies == ""){
        $allergies_errormsg = "This field is required.";
    }
    
    if ($l_errormsg == "" && $f_errormsg == "" && $u_errormsg == "" && $phone_errormsg == "" && $add_errormsg == "" && $ville_errormsg == "" && $prov_errormsg == "" && $post_errormsg == "" && $stat_errormsg == "" && $field_errormsg == "" && $en_speak_errormsg == "" && $en_write_errormsg == "" && $fr_write_errormsg == "" && $fr_speak_errormsg == "" && $lift_errormsg == "" && $act_errormsg == "" && $allergies_errormsg == ""){
        $file = fopen("volunteer_data.txt", "a") or die("Unable to open file.");
        $input_data = "fname: " . $fname . "lname: " . $lname . "user: " . $uname . "phone: " . $phone . "\taddress: " . $address . " " . $ville . " " . $prov . " " . $post . "\tEmployement: " . $status . " " . $field . "\tEnglish & French (spoken and written respectively): " . $en_speak . " " . $en_write . " " . $fr_write . " " . $fr_speak . "allergic?: " . $allergies . "activity: " . $act . "lift: " . $lift;
        fwrite($file, $input_data);
        fclose($file);
        $_SESSION["userID"] = $uname;
        $_SESSION["firstname"] = $fname;
        $_SESSION["lastname"] = $lname;
        header("Location:50_form.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Application Form: Step 1 | SPCA</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="volunteerII.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
    .error{
        color: red;
        font-size: 10pt;
        font-family: 'Montserrat', sans-serif;
        margin-left: 10px;
    }
    </style>

    <!--progression bar-->
</head>
<body>
<div class="firstcontent">
    <div class="w3-container">
        <p class="formtitle">Step 1 of 4: Profile </p>

        <div class="w3-section w3-light-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:25%">25%</div>
        </div>
    </div>
</div>
 <!--progression bar-->

<div class="secondcontent" style="width: 90%;">
<div>
<form id="form" action="25_form.php" method="POST"> <!-- to do action -->
    <div id="name">
    <label>Name<sup>*</sup> </label><br>
        <input id="first" style="font-size:11pt;" type="text" name="first_name" placeholder="First Name" value = "<?php echo $fname;?>">
        <div class = "error">
            <?php echo $f_errormsg;?>
        </div>
        <input id="last" style="font-size:11pt;" type="text" name="last_name" placeholder="Last Name" value = "<?php echo $lname;?>">
        <div class = "error">
            <?php echo $l_errormsg;?>
        </div>
    </div>
    
    <br>

    <div >
    <label>Email<sup>*</sup></label> <br>
        <input id="email" style="font-size:11pt;" type="text" name="us_name" value = "<?php echo $uname;?>"> 
    </div>
    <div class = "error">
        <?php echo $u_errormsg;?>
    </div>

    <br>

    <div>
    <label>Phone number<sup>*</sup></label> <br>
        <input id="phone" style="font-size:11pt;" type="text" name="phone" value = "<?php echo $phone;?>" placeholder ="xxx-xxx-xxxx"> 
    </div>
    <div class = "error">
        <?php echo $phone_errormsg;?>
    </div>
        
    <br>

    <div>
    <label>Address<sup>*</sup></label> <br>
        <div><input id="street" style="font-size:11pt;" type="text" name="address" value = "<?php echo $address;?>" placeholder ="street name, apt"></div> 
        <div class = "error">
            <?php echo $add_errormsg;?>
        </div>
        
        
        <div id="city"><input id="metropolis" class="personal" type="text" name="ville" value = "<?php echo $ville;?>" placeholder ="city"/></div> 
        <div class = "error">
            <?php echo $ville_errormsg;?>
        </div>
        
        <select style="font-size:11pt;" id="prov" name="Province" value = "<?php echo $prov;?>">
            <option value=""></option>
            <option value="QC">QC</option>
            <option value="ON">ON</option>
            <option value="BC">BC</option>
            <option value="AB">AB</option>
            <option value="SK">SK</option>
            <option value="MN">MN</option>
            <option value="NL">NL</option>
            <option value="PE">PE</option>
            <option value="NS">NS</option>
            <option value="NB">NB</option>
            <option value="NU">NU</option>
            <option value="NT">NT</option>
            <option value="YK">YK</option>
        </select>

        <div class = "error">
            <?php echo $prov_errormsg;?>
        </div>
        
        <input id="postal" style="font-size:11pt;" type="text" name = "postal" value = "<?php echo $post;?>" placeholder="postal code"></div> 
        <div class = "error">
            <?php echo $post_errormsg;?>
        </div>
        
    <br>
    
    <div>
    <label>Are you?<sup>*</sup></label> <br>
        <select style="font-size:11pt;" name="status" value = "<?php echo $status;?>">
            <option value=""></option>
            <option value="employed">Employed</option>
            <option value="student">Studying</option>
            <option value="unemployed">Unemployed</option>
            <option value="retired">Retired</option>
        </select>
    </div>
    <div class = "error">
        <?php echo $stat_errormsg; ?>
    </div>
    <br>
    
    <div>
    <label>What field do you work/study in?<sup>*</sup></label> <br>
        <select style="font-size:11pt;" name="field">
            <option value=""></option>
            <option value="admin">Administration</option>
            <option value="pr">Business</option>
            <option value="cs">Computer Science</option>
            <option value="pr">Customer Service</option>
            <option value="educ">Education</option>
            <option value="science">Life sciences/Health</option>
            <option value="mana">Marketing</option>
            <option value="mana">Management</option>
            <option value="social">Social services</option>
            <option value="other">Other</option> 
        </select>

       
    </div>
    <div class = "error">
        <?php echo $field_errormsg; ?>
    </div>

    <br>

    <div>
    <label>Proficiency at speaking English<sup>*</sup></label>
        <select style="font-size:11pt;" name="en_speak">
            <option value=""></option>
            <option value="advanced">Advanced</option>
            <option value="inter">Intermediate</option>
            <option value="beginner">Beginner</option>
            <option value="none">Non-existent</option>
        </select>
    </div>
    <div class = "error">
        <?php echo $en_speak_errormsg; ?>
    </div>

    <br>

    <div>
    <label>Proficiency at writting in English<sup>*</sup></label>
    <select style="font-size:11pt;" name=en_write>
        <option value=""></option>
        <option value="advanced">Advanced</option> 
        <option value="inter">Intermediate</option>
        <option value="beginner">Beginner</option>
        <option value="none">Non-existent</option>
    </select>
    </div>
    <div class = "error">
        <?php echo $en_write_errormsg;?>
    </div>

    <br>

    <div>
    <label>Proficiency at speaking French<sup>*</sup></label>
    <select style="font-size:11pt;" name="fr_speak">
        <option value=""></option>
        <option value="advanced">Advanced</option>
        <option value="inter">Intermediate</option>
        <option value="beginner">Beginner</option>
        <option value="none">Non-existent</option>
    </select>
    </div>
    <div class = "error">
         <?php echo $fr_speak_errormsg;?>
    </div>

    <br>

    <div>
    <label>Proficiency at writting in French<sup>*</sup></label>
    <select style="font-size:11pt;" name="fr_write">
        <option value=""></option>
        <option value="advanced">Advanced</option>
        <option value="inter">Intermediate</option>
        <option value="beginner">Beginner</option>
        <option value="none">Non-existent</option>
    </select>
    </div>
    <div class = "error">
        <?php echo $fr_write_errormsg;?>
    </div>

    <br>

    <div>
    <label>Are you allergic to any animals?<sup>*</sup></label>  
    <select style="font-size:11pt;" name="allergies">
        <option value=""></option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
    </div>

    <div class = "error">
         <?php echo $allergies_errormsg;?>
    </div>

    
    <br>

    <div>
    <label>What volunteering activities are you interested in? </label>  
    <select style="font-size:11pt;" name="act">
        <option value=""></option>
        <option value="admin">Administration</option>
        <option value="animcare">Animal care</option>
        <option value="comm">Communications</option>
        <option value="comp">Computing</option>
        <option value="custom">Customer service</option>
        <option value="walk">Dog walking</option>
        <option value="transport">Transport</option>
        <option value="manual work">Manual work</option>
    </select>
    </div>

    <div class = "error">
         <?php echo $act_errormsg;?>
    </div>


    <br>

    <div>
    <label>Are you capable of lifting loads weighing more than 30 lbs (15kg)?</label> 
    <select style="font-size:11pt;" name="lift">
        <option value=""></option>
        <option value="yes">Yes</option>
        <option value="no">No</option> 
    </select>
    </div>

    <div class = "error">
         <?php echo $lift_errormsg;?>
    </div>

    <br>

    <button id="button" type="submit" class="button" name="sub_btn">NEXT</button>
   
</form>
</div>
<script src = "volunteer.js">
</script>
</body>
</html>