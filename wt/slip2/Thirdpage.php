<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied Preferences</title>
    <?php
    // Apply preferences from cookies
    if (isset($_COOKIE["fontStyle"])) {
        echo "<style>body { font-family: " . $_COOKIE["fontStyle"] . "; }</style>";
    }
    if (isset($_COOKIE["fontSize"])) {
        echo "<style>body { font-size: " . $_COOKIE["fontSize"] . "px; }</style>";
    }
    if (isset($_COOKIE["fontColor"])) {
        echo "<style>body { color: " . $_COOKIE["fontColor"] . "; }</style>";
    }
    if (isset($_COOKIE["bgColor"])) {
        echo "<style>body { background-color: " . $_COOKIE["bgColor"] . "; }</style>";
    }
    ?>
</head>
<body>
    <h2>Applied Preferences</h2>
    <p>This page demonstrates the actual implementation of the selected preferences.</p>
</body>
</html>
