<?php require_once 'controller/authcontroller.php';

    if (isset($_POST['image-preview'])) {
        $Image = $_POST['animalPath'];
        $animalName = $_POST['animalName'];
        $animalId = $_POST['animalId'];
        $animalType = $_POST['animalType'];
        $animalPath = $_POST['animalPath'];
        $animalDescription = $_POST['animalDescription'];
        if (isset($_POST['animalMI'])) {
            $animalMI = "checked";
        }
        else {
            $animalMI = "";
        }
    }

    if (isset($_POST['Reset'])) {
        $animalId = "";
        $animalName = "";
        $animalPath = "";
        $animalType = "";
        $animalDescription = "";
    }

    if (isset($_POST['logout'])) {
        unset($_SESSION['account']);
        session_destroy();
        header("Location:login_signup.php");
        exit();
    }

    if (!isset($_SESSION['account'])) {
        header("Location:login_signup.php");
        exit();
    }

?>



<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>try</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="content-background">
        <div class="content">  
            
            <?php if($_SESSION['account'] == "volunteer"): ?>
                <form action="index.php" method="post">
                <button type="submit" name="logout" id="log-out-btn">Log Out</button>
                </form>
            <?php endif; ?>

            <!-- If the account is the admin account -->
            <?php if ($_SESSION['account'] == "Admin"): ?>
            <form action="index.php" method="post">
                <button type="submit" name="logout" id="log-out-btn">Log Out</button>
                <div class="search">
                    <table>
                        <tr>
                            <th id="t1"><label for="animalId" class="label" id="id-lbl">Search for Id</label></th>
                        </tr>
                        <tr>
                            <td id="t2"><input type="text" name="animalId" value="<?php echo $animalId; ?>" class="input-box" id="input1"></td>
                            <td id="t3"><button type="submit" name="search-btn" id="search-button">Search</button></td>
                        </tr>
                    </table>
                </div>
                <div class="alert">
                    <?php if(isset($ERRORS['animal-id'])): ?>
                        <img src="Images/Error.webp" alt="error img" class="error">
                        <p><?php echo $ERRORS['animal-id']; ?>H</p>
                    <?php endif; ?>
                </div>
                <div class="animal_name">
                    <table>
                        <tr>
                            <th><label for="animalName" class="label" id="name-lbl">Animal name</label></th>
                        </tr>
                        <tr>
                            <td><input type="text" name="animalName" value="<?php echo $animalName; ?>" class="input-box"></td>
                        </tr>
                    </table>
                </div>
                <div class="alert">
                    <?php if(isset($ERRORS['animal-name'])): ?>
                        <img src="Images/Error.webp" alt="error img" class="error">
                        <p><?php echo $ERRORS['animal-name']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="animal_type">
                    <table>
                        <tr>
                            <th><label for="animaltype" class="label" id="type-lbl">Animal type (choose between cat, dog and other):</label></th>
                        </tr>
                        <tr>
                            <td><input type="text" name="animalType" value="<?php echo $animalType; ?>" class="input-box"></td>
                        </tr>
                    </table>                    
                </div>
                <div class="alert">
                    <?php if(isset($ERRORS['animal-type'])): ?>
                        <img src="Images/Error.webp" alt="error img" class="error">
                        <p><?php echo $ERRORS['animal-type']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="animal_MI">
                    <table>
                        <tr>
                            <th>
                                <label for="animalMI" class="label"  id="MI-lbl">If the animal have a medical issue please check this</label>
                                <input type="checkbox" name="animalMI" id="MI" <?php echo $animalMI; ?>>
                            </th>
                        </tr>
                    </table>
                    
                </div>
                <div class="animal_image">
                    <table id="table-path">
                        <tr>
                            <th><label for="animalPath" class="label" id="path-lbl">Image's path for the animal:</label></th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="animalPath" value="<?php echo $animalPath; ?>" class="input-box" id="Path">
                                <button type="submit" name="image-preview" class="button">Preview</button>
                            </td>
                        </tr>
                    </table>
                    <?php if(isset($_POST['image-preview'])): ?>
                        <div class="postimg">
                            <?php $Image = $_POST['animalPath']; ?>
                            <?php if(!empty($Image)): ?>
                                <img src="Images/<?php echo $Image; ?>" alt="Image" id="animal-image">
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="alert">
                    <?php if(isset($ERRORS['animal-path'])): ?>
                        <img src="Images/Error.webp" alt="error img" class="error">
                        <p><?php echo $ERRORS['animal-path']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="animal_description">
                    <table>
                        <tr>
                            <th><label for="animalDescription" class="label" id="descrip-lbl">Animal's description:</label></th>
                        </tr>
                        <tr>
                            <td><textarea name="animalDescription" id="animal-Description" cols="30" rows="10"><?php echo $animalDescription; ?></textarea></td>
                        </tr>
                    </table>
                </div>
                <div class="alert">
                    <?php if(isset($ERRORS['animal-description'])): ?>
                        <img src="Images/Error.webp" alt="error img" class="error">
                        <p><?php echo $ERRORS['animal-description']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="buttons">
                    <button type="submit" name="Update" class="end-btn" id="update-btn">Update</button>
                    <button type="submit" name="Add" class="end-btn" id="add-btn">Add</button>
                    <button type="submit" name="Delete" class="end-btn" id="delete-btn">Delete</button>
                    <button type="submit" name="Reset" class="end-btn" id="reset-btn">Reset</button>
                </div>
                <div class="fin-mess">
                    <?php if(isset($ERRORS['final-message'])): ?>
                        <p id="final-mess"><?php echo $ERRORS['final-message']; ?></p>
                    <?php endif; ?>
                </div>
            </form>
            <?php endif;?>
        </div>
    </div>
</body>
</html>