<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get selected teacher's name from AJAX request
$selectedTeacher = $_GET['teacher'];

// Prepare SQL statement
$sql = "SELECT * FROM TEACHER WHERE tname = '$selectedTeacher'";
$result = $conn->query($sql);

// Check if result has rows
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Teacher Number: " . $row["tno"]. "<br>";
        echo "Teacher Name: " . $row["tname"]. "<br>";
        echo "Qualification: " . $row["qualification"]. "<br>";
        echo "Salary: " . $row["salary"]. "<br>";
    }
} else {
    echo "No teacher found with the name: " . $selectedTeacher;
}
$conn->close();
?>
