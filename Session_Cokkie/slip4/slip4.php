<?php
session_start();
// Store Employee details in session
$_SESSION['eno'] = $_POST['eno'];
$_SESSION['ename'] = $_POST['ename'];
$_SESSION['address'] = $_POST['address'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Earnings</title>
</head>
<body>
    <h2>Enter Employee Earnings</h2>
    <form action="slip41.php" method="post">
        Basic: <input type="number" name="basic" required><br><br>
        DA: <input type="number" name="da" required><br><br>
        HRA: <input type="number" name="hra" required><br><br>
        <input type="submit" >
    </form>
</body>
</html>
