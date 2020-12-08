<?php
    $exp = "";
    $e_errormsg="";

    if (isset($_POST["sub_btn3"])) {
        $exp = $_POST['experiences'];

        if (empty($exp)) {
            $e_errormsg = "This field is empty. Please enter a response.";
        } 
        if ($e_errormsg == ""){
            $file = fopen("volunteer_data.txt", "a") or die("Unable to open file.");
            $input_data = PHP_EOL. $exp;
            fwrite($file, $input_data);
            fclose($file);
            header("Location:100_form.php");
            exit();
        }
    }
    if (isset($_POST["back_btn3"])) {
        header("Location:50_form.php");
        exit();
    }
        
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Application Form: Step 3 | SPCA</title>
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
        <p class="formtitle">Step 3 of 4: Experience with animals </p>
    
        <div class="w3-section w3-light-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:75%">75%</div>
          </div>
    </div>
</div>
    <!--progression bar-->

<div class="secondcontent" style="width: 90%;">
    <form id="form" action="75_form.php" method="POST">
        <label>Do you have any experince with animal care and handling?</label> <br>
        <textarea id="textarea" type="text" class="size" name="experiences" rows="50" cols="80" 
        placeholder="Do you have any experience in caring for cats, dogs, birds, rodents, reptiles and other animals? Do you have/had any pets? If so, for how long? What are your experiences with animals? What do you wish to accomplish with us? etc."
        style="margin:0; width: 100%; height: 100%;" value = "<?php echo $exp;?>">
        </textarea> 

        <div class="error" >
            <?php echo $e_errormsg; ?>
        </div>

        <button class="button" type="submit" name="back_btn3">BACK</button>
        <button class="button" type="submit" name="sub_btn3" style="margin-left:5px;">NEXT</button>
    </form>
</div>

<script src="volunteerIII.js">

</script>
</body>
</html>