<?php


print_r($_GET);
echo $_GET["student_name"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testphp";
// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$stmt = $conn->prepare("INSERT INTO students (student_name, age, student_number)
 VALUES (?,?,?)");
$data = array ( $_GET["student_name"], $_GET["student_number"], $_GET["student_id"]);

$stmt->execute($data);

