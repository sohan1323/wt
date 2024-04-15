<?php
session_start();

// Check if session variables are set
if(isset($_SESSION['eno'], $_SESSION['ename'], $_SESSION['address'], $_SESSION['basic'], $_SESSION['da'], $_SESSION['hra'])) {
    // Calculate total earnings
    $total = $_SESSION['basic'] + $_SESSION['da'] + $_SESSION['hra'];
} else {
    // Redirect to the first page if any of the session variables are not set
    header("Location: employee_details.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Information</title>
</head>
<body>
    <h2>Employee Information</h2>
    <p><strong>Employee No:</strong> <?php echo $_SESSION['eno']; ?></p>
    <p><strong>Employee Name:</strong> <?php echo $_SESSION['ename']; ?></p>
    <p><strong>Address:</strong> <?php echo $_SESSION['address']; ?></p>
    <p><strong>Basic:</strong> <?php echo $_SESSION['basic']; ?></p>
    <p><strong>DA:</strong> <?php echo $_SESSION['da']; ?></p>
    <p><strong>HRA:</strong> <?php echo $_SESSION['hra']; ?></p>
    <p><strong>Total Earnings:</strong> <?php echo $total; ?></p>
</body>
</html>
