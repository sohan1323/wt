<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session variables
    $_SESSION['basic'] = $_POST['basic'];
    $_SESSION['da'] = $_POST['da'];
    $_SESSION['hra'] = $_POST['hra'];
    // Redirect to third page
    header("Location: thirdpage.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Earning Details</title>
</head>
<body>
    <h2>Earning Details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Basic: <input type="text" name="basic" required><br><br>
        DA: <input type="text" name="da" required><br><br>
        HRA: <input type="text" name="hra" required><br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
