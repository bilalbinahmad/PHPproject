<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="my_db";
$conn = mysqli_connect($servername, $username, $password,$dbname);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
//$_SERVER["REQUEST_METHOD"] == "POST";
$_POST["signin"];
$username=$_POST["username"];
$password=$_POST['pass'];
$sql = "SELECT username FROM myt_able WHERE username='$username' and password='$password'";
$result = $conn->query($sql);
$count=mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
if ($row!=0) 
	{

	session_start();
	$_SESSION["username"] = "$username";
	//echo "WELCOME TO THE SITE ";
	header('Location: web');
	}
else
	echo "WRONG USER NAME OR PASSWORD TRY AGAIN ";echo"</br>";
    echo "if you dont have an account sign up first";






?>