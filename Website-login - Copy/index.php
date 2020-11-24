<?php
require_once 'controller/authcontroller.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>You're Logged in</title>
</head>
<body>
    <?php if(isset($_SESSION['id'])): ?>
        <?php echo $_SESSION['username'];?><br>
        <?php echo $_SESSION['account']; ?>
    <?php endif; ?>
</body>
</html>