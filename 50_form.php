<?php
    $mon_avail = "";
    $tues_avail = "";
    $wed_avail = "";
    $thur_avail = "";
    $fri_avail = "";
    $sat_avail = "";
    $sun_avail = "";
    $how_help = "";
    $long_help = "";
    $where_help = "";

    if (isset($_POST["sub_btn2"])) {
        $mon_avail = $_POST['monday'];
        $tues_avail = $_POST['tuesday'];
        $wed_avail = $_POST['wednesday'];
        $thur_avail = $_POST['thursday'];;
        $fri_avail = $_POST['friday'];
        $sat_avail = $_POST['saturday'];
        $sun_avail = $_POST['sunday'];
        $how_help = $_POST['how_help'];
        $long_help = $_POST['long_help'];
        $where_help = $_POST['where_help'];

        $file = fopen("volunteer_data.txt", "a") or die("Unable to open file.");
        $input_data = PHP_EOL . "monday: " . $mon_avail . " tuesday: " . $tues_avail . " wednesday: " . $wed_avail . " thursday: " . $thur_avail . " friday: " . $fri_avail . " saturday: " . $sat_avail . " friday: " . $sun_avail . "\thow: " . $how_help . " duration: " . $long_help . " location: " . $where_help;
        fwrite($file, $input_data);
        fclose($file);
        header("Location:75_form.php");
        exit();
    }
    if (isset($_POST["back_btn2"])) {
        header("Location:25_form.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>Application Form: Step 2 | SPCA</title>
    <link rel="stylesheet" href="volunteerII.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>

    </style>
<!--progression bar-->
</head>
<body>
<div class="firstcontent"> 
    <div class="w3-container">
        <p class="formtitle">Step 2 of 4: Availability </p>
    
        <div class="w3-section w3-light-grey">
            <div class="w3-container w3-padding-small w3-red w3-center" style="width:50%">50%</div>
          </div>
    </div>
</div>
<!--progression bar-->

<div class="secondcontent" style="width: 90%;">
    <form id="form" action="50_form.php" method="post">
        <fieldset class="first_field">
            <legend class="legend1"> Availability </legend>
            <table style="width:100%">
                <tr>
                    <th><label>Monday</label></th>
                    <th><label>Tuesday</label></th>
                    <th><label>Wednesday</label></th>
                    <th><label>Thursday</label></th>
                    <th><label>Friday</label></th>
                    <th><label>Saturday</label></th>
                    <th><label>Sunday</label></th>
                </tr>
                <tr>

                    <td class="size">
                        <div class="tablestyle">                    
                            <select style="font-size:11pt;" name="monday" value = "">
                                <option value="unavailable">Unavailable</option>
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                            </select>
                        </div>
                    </td>
                    
                    <td class="size">
                        <div class="tablestyle">
                            <select style="font-size:11pt;" name="tuesday" value = "">
                                <option value="unavailable">Unavailable</option>
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                            </select>
                        </div>
                    </td>
                    
                    <td class="size">
                        <div class="tablestyle">
                            <select style="font-size:11pt;" name="wednesday" value = "">
                                <option value="unavailable">Unavailable</option>
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                            </select>
                        </div>
                    </td>
                    
                    <td class="size">
                        <div class="tablestyle">
                            <select style="font-size:11pt;" name="thursday" value = "">
                                <option value="unavailable">Unavailable</option>
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                            </select>
                        </div>
                    </td>
                    
                    <td class="size">
                        <div class="tablestyle">
                            <select style="font-size:11pt;" name="friday" value = "">
                                <option value="unavailable">Unavailable</option>
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                            </select>
                        </div>
                    </td>
                    
                    <td class="size"> 
                        <div class="tablestyle">
                            <select style="font-size:11pt;" name="saturday" value = "">
                                <option value="unavailable">Unavailable</option>
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                            </select>
                        </div>
                    </td>
                    
                    <td class="size">
                        <div class="tablestyle">
                            <select style="font-size:11pt;" name="sunday" value = "">
                                <option value="unavailable">Unavailable</option>
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
        </fieldset>

        <br>

        <label>How often would you like to help the SPCA?  
            <div>
                <select style="font-size:11pt;" name="how_help" value = "">
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                    <option value="occasionally">Occasionally (depending on the needs of the moment)</option>
                </select>
            </div>
        </label>

        <br>
        
        <label>How long do you wish to help the SPCA? 
            <div>
                <select style="font-size:11pt;" name="long_help" value = "">
                    <option value="<6months">1 to 6 months</option>
                    <option value="6months<x<year">6 months to 1 year</option>
                    <option value=">year">1 year or more</option>
                </select>
            </div>
        </label>
        
        <br>

        <div>
        <label>What are your preferences on helping the SPCA?  
            <div>
                <select style="font-size:11pt;" name="where_help" value = "">
                    <option value="workatpremise">Work at our premise</option>
                    <option value="workathome">Work at home</option>
                </select>
            </div>
        </label>
        </div>

        <br>

        <div>
        <button class="button" type="submit" name="back_btn2">BACK</button>
        <button class="button" type="submit" name="sub_btn2">NEXT</button>
        </div>
    </form>
</div>
    
    <script>
        src = "volunteer_part.js"
    </script>
</body>
</html>