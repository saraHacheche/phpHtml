<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name"> name</label> <input type="text" name="program_name" id="program_name"> <br>
        <label for="description">description</label> <textarea name="description" id="description" cols="30" rows="20"></textarea> <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>
<?php

if (isset($_POST["program_name"])) {



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testphp";
// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$stmt = $conn->prepare("INSERT INTO programs (	name,description)
 VALUES (?,?)");
$data = array ( $_POST["program_name"], $_POST["description"]);

$stmt->execute($data);



}