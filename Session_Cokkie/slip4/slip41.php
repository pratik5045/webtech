<?php
session_start();

// Store Earnings in session
$_SESSION['basic'] = $_POST['basic'];
$_SESSION['da'] = $_POST['da'];
$_SESSION['hra'] = $_POST['hra'];
$total = $_SESSION['basic'] + $_SESSION['da'] + $_SESSION['hra'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
</head>
<body>
    <h2>Employee Information</h2>
    <p>Employee Number:</b> <?php echo $_SESSION['eno']; ?></p>
    <p><b>Employee Name:</b> <?php echo $_SESSION['ename']; ?></p>
    <p><b>Address:</b> <?php echo $_SESSION['address']; ?></p>
    <p><b>Basic Salary:</b> <?php echo $_SESSION['basic']; ?></p>
    <p><b>DA:</b> <?php echo $_SESSION['da']; ?></p>
    <p><b>HRA:</b> <?php echo $_SESSION['hra']; ?></p>
    <p><b>Total Salary:</b> <?php echo $total; ?></p>
</body>
</html>

<?php
// Clear session after displaying details
session_destroy();
?>
