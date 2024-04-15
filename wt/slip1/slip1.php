<?php
session_start();

// Check if the session variable is set
if (!isset($_SESSION['page_access_count'])) {
    // If not set, initialize it to 1
    $_SESSION['page_access_count'] = 1;
} else {
    // If set, increment the count
    $_SESSION['page_access_count']++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Access Counter</title>
</head>
<body>
    <h2>Page Access Counter</h2>
    <p>This page has been accessed <?php echo $_SESSION['page_access_count']; ?> times.</p>
</body>
</html>
