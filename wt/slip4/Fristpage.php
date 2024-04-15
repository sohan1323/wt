<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session variables
    $_SESSION['eno'] = $_POST['eno'];
    $_SESSION['ename'] = $_POST['ename'];
    $_SESSION['address'] = $_POST['address'];
    // Redirect to second page
    header("Location: Secondpage.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Details</title>
</head>
<body>
    <h2>Employee Details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Employee No: <input type="text" name="eno" required><br><br>
        Employee Name: <input type="text" name="ename" required><br><br>
        Address: <textarea name="address" required></textarea><br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
