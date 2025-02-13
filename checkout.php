<?php
session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['total'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h2>Checkout</h2>
    <form action="validatecreditcard.php" method="post">
        <label>Card Number:</label>
        <input type="text" name="card_number" required><br>
        <button type="submit">Pay $<?php echo number_format($_SESSION['total'], 2); ?></button>
    </form>
</body>
</html>
