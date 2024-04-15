<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferences</title>
</head>
<body>
    <h2>Selected Preferences</h2>
    <?php
    // Display selected preferences from cookies
    if (isset($_COOKIE["fontStyle"])) {
        echo "<p>Font Style: " . $_COOKIE["fontStyle"] . "</p>";
    }
    if (isset($_COOKIE["fontSize"])) {
        echo "<p>Font Size: " . $_COOKIE["fontSize"] . "</p>";
    }
    if (isset($_COOKIE["fontColor"])) {
        echo "<p>Font Color: <span style='color:" . $_COOKIE["fontColor"] . "'>Sample Text</span></p>";
    }
    if (isset($_COOKIE["bgColor"])) {
        echo "<p>Background Color: <span style='background-color:" . $_COOKIE["bgColor"] . "'>Sample Text</span></p>";
    }
    ?>
    <br>
    <a href="Thirdpage.php">Apply Preferences</a>
</body>
</html>
