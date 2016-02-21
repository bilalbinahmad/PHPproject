<?php
$servername = "localhost";
$username = "root";
$password = "";
//////////////////////////connection/////////////////////////////
$conn = mysqli_connect($servername, $username, $password);


// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

/////////////////////create database//////////////////////////////
$sql = "CREATE DATABASE my_db";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
$dbname="my_db";
$conn = mysqli_connect($servername, $username, $password,$dbname);
$sql = "CREATE TABLE myt_able1 (
  id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  
  announcement VARCHAR(3000)
  )"; 
// if ($conn->query($sql) === TRUE) {
//     echo "Table  created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
 
  $stmt = $conn->prepare("INSERT INTO myt_able1(announcement)VALUES(?)");
  $stmt->bind_param("s", $a);
  $a=$_POST["announcement"];
  $stmt->execute();
  header('Location: announcement.php');
  

  ?>