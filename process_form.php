<?php
$data = json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$feedback = $data['feedback'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "th2012e_php";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error){
    die("Connection failed: " . $conn ->connect_error);
}
$sql = "INSERT INTO feedback (student_name,student_email,student_telephone,feedback_content) VALUES ('". $name."','". $email."','". $phone."','". $feedback."')";

header('Content-Type: application/json; charset=utf-8');
if ($conn ->query($sql) == TRUE){
    $data = new stdClass();
    $data ->message = 'Action success';
    http_response_code(201);
    echo json_encode($data);
}else{
    $data = new stdClass();
    $data ->message = 'Action failed';
    http_response_code(500);
    echo json_encode($data);
}
$conn ->close();
