<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Selection</title>
</head>
<body>
    <h2>Select Items</h2>
    <form action="ordersummary.php" method="post">
        <label>The Elder Scrolls V: Skyrim - $20</label>
        <input type="number" name="game1" value="0" min="0"><br>

        <label>Kingdom Come: 2 - $40</label>
        <input type="number" name="game2" value="0" min="0"><br>

        <label>Minecraft - $30</label>
        <input type="number" name="game3" value="0" min="0"><br>

        <button type="submit">Proceed to Order Summary</button>
    </form>
</body>
</html>
