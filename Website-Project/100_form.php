<?php
    $authorize = "";
    $foster = "";
    $updates = "";

    $a_errormsg= "";
    $f_errormsg= "";
    $u_errormsg= "";

    if (isset($_POST["sub_btn4"])) {
        $authorize = $_POST['authorize'];
        $foster = $_POST['foster'];
        $updates = $_POST['updates'];

        if ($authorize == "") {
            $a_errormsg = "This field is empty. Please enter a response.";
        } 

        if ($foster == "") {
            $f_errormsg = "This field is empty. Please enter a response.";
        } 

        if ($updates == "") {
            $u_errormsg = "This field is empty. Please enter a response.";
        } 

        if ($a_errormsg == "" && $f_errormsg == "" && $u_errormsg == ""){
            $file = fopen("volunteer_data.txt", "a") or die("Unable to open file.");
            $input_data = PHP_EOL. $foster . " " . $updates . " " . $authorize;
            fwrite($file, $input_data);
            fclose($file);
            header("Location:messageSent.php");
            exit();
        }
    }
    if (isset($_POST["back_btn4"])) {
        header("Location:75_form.php");
        exit();
    }
?>

<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <title>Application Form: Step 4 | SPCA</title>
    <link rel="stylesheet" href="volunteerII.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
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
        <p class="formtitle">Step 4 of 4: Other ways to help</p>
    
        <div class="w3-section w3-light-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:100%">100%</div>
          </div>
    </div>
</div>
    <!--progression bar-->

<div class="secondcontent" style="width: 90%;">

<form id="form" action="100_form.php" method="POST">
        <div>
        <label>Would you like to become a foster caregiver and temporarily foster an animal? </label> <br>
            <select style="font-size:11pt;" name="foster" id="f0ster">
                <option style="font-size:11pt;" value=""></option>
                <option style="font-size:11pt;" value="yes">Yes</option>
                <option style="font-size:11pt;" value="no">No</option>
                <option style="font-size:11pt;" value="maybe">Maybe</option>
            </select>
        </div>

        <div class="error">
            <?php echo $f_errormsg; ?>
        </div>

        <br>
        
        <div>
        <label>Would you like to receive updates from the Montreal SPCA (online petitions to sign, upcoming events and fundraising campaigns, etc.)?</label><br>
            <select style="font-size:11pt;" name="updates" id="upd4te">   
                <option style="font-size:11pt;" value=""></option>
                <option style="font-size:11pt;" value="Yes">Yes</option>
                <option style="font-size:11pt;" value="no">No</option>
            </select>
        </div>
        <div class="error">
            <?php echo $u_errormsg; ?>
        </div>



        <br>

        <div>
        <label>Do you authorize us to send your information to other shelters that need volunteers?</label><br>
        <select style="font-size:11pt;" name="authorize" id="4uthorize">   
            <option style="font-size:11pt;" value=""></option>
            <option style="font-size:11pt;" value="yes">Yes</option>
            <option style="font-size:11pt;" value="no">No</option>
        </select>
        </div>
        <div class="error">
            <?php echo $a_errormsg;?>
        </div>
        
        <br>

        <button class="button" type="submit" name="back_btn4">BACK</button>
        <button class="button" style="margin:5px;" type="submit" name="sub_btn4">SUBMIT</button>
    </form>

</div>


</body>
</html>