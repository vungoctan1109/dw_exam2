<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "th2012e_php";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE feedback (
student_name VARCHAR(50),
student_email VARCHAR(50),
student_telephone VARCHAR(20),
feedback_content VARCHAR(255),
created_date date DEFAULT CURRENT_DATE(),
status int DEFAULT -1
)";

if ($conn->query($sql) === TRUE) {
    echo "Table feedback created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
