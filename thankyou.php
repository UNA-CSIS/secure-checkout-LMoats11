<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>Thank You</title></head>
<body>
    <h2>Thank You!</h2>
    <p><?= $_SESSION['payment_status'] ?></p>
    <a href="index.php">Shop Again</a>
</body>
</html>
