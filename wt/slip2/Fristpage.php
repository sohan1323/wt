<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set cookies for preferences
    setcookie("fontStyle", $_POST["fontStyle"], time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("fontSize", $_POST["fontSize"], time() + (86400 * 30), "/");
    setcookie("fontColor", $_POST["fontColor"], time() + (86400 * 30), "/");
    setcookie("bgColor", $_POST["bgColor"], time() + (86400 * 30), "/");
    // Redirect to next page
    header("Location: Secondpage.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Preferences</title>
</head>
<body>
    <h2>Change Preferences</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="fontStyle">Font Style:</label>
        <select name="fontStyle" id="fontStyle">
            <option value="Arial">Arial</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Verdana">Verdana</option>
        </select><br><br>
        <label for="fontSize">Font Size:</label>
        <input type="text" name="fontSize" id="fontSize"><br><br>
        <label for="fontColor">Font Color:</label>
        <input type="color" name="fontColor" id="fontColor"><br><br>
        <label for="bgColor">Background Color:</label>
        <input type="color" name="bgColor" id="bgColor"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
