<?php
$servername = "localhost";
$username = "root";
$password = "";
//////////////////////////connection/////////////////////////////
$conn = mysqli_connect($servername, $username, $password);

// Check connection
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

///////////////////create table//////////////////////////
$sql = "CREATE TABLE myt_able (
	id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(30),
	username VARCHAR(30),
	password VARCHAR(30),
	confpass VARCHAR(30)
	)";	
// if ($conn->query($sql) === TRUE) {
//     echo "Table  created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
////////////////////////////////checking inserion////////////////////// 
// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
$username=$_POST["user-name"];
$email=$_POST["email"];
$sql = "SELECT username FROM myt_able WHERE username='$username'";
$sql1 = "SELECT username FROM myt_able WHERE email='$email'";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
$count=mysqli_num_rows($result);
$count1=mysqli_num_rows($result1);
$row = mysqli_fetch_assoc($result);
$row = mysqli_fetch_assoc($result1);
//$row = $result->fetch_assoc()
//	printf("Result set has %d rows.\n",$count);
if($count==0 && $count1==0)
	{
 		$stmt = $conn->prepare("INSERT INTO myt_able (name,email,username,password,confpass) VALUES (?,?,?,?,?)");
		$stmt->bind_param("sssss",$name,$email,$username,$password,$conf);
		$name=$_POST["name"];
		$email=$_POST["email"];
		$username=$_POST["user-name"];
		$password=$_POST["password"];
		$conf=$_POST["confirmpas"];
		$name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     	if (!preg_match("/^[a-zA-Z ]*$/",$name))
      		{
       			echo "=>Only letters and white space allowed in name"; 
     		}
     			echo "</br>";
		$email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			 {
       			echo "=>Invalid email format";
      	 	 }
       			echo "</br>";
        $pas = test_input($_POST["password"]);
     // check if name only contains letters and whitespace
     	if (!preg_match("/^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}/",$pas))
      		{
       			echo "=>passwords to a length of 8 to 20 aplhanumeric characters and select special characters.
       			The password also can not start with a digit,
       			underscore or special character and must contain at least one digit."; 
       			echo "</br>";
       			$password=$_POST["password"];
				$conf=$_POST["confirmpas"];
       			 if ($password!=$conf)
					{
				
						echo "=>your password is not matching";
					}
	
				
     		}
     	else
     			{
     				if ($password!=$conf)
						{
							echo "=>your password is not matching";
						}
					else
     					{
     						$stmt->execute();
                session_start();
                $_SESSION["username"] = "$username";
     						//echo "=>YOU ARE SUCCESSFULLY REGISTERED ..:)";
     						header('Location: web');
						}
				}
     			echo "</br>";
	}
else
	{	
		$name = test_input($_POST["name"]);
     	// check if name only contains letters and whitespace
     	if (!preg_match("/^[a-zA-Z ]*$/",$name))
      		{
       			echo "=>Only letters and white space allowed in name"; 
     		}
     			echo "</br>";
		$email = test_input($_POST["email"]);
     	// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			 {
       			echo "=>Invalid email format";
      	 	 }
       			echo "</br>";
        $pas = test_input($_POST["password"]);
     	// check if name only contains letters and whitespace
     	if (!preg_match("/^(?=[^\d_].*?\d)\w(\w|[!@#$%]){7,20}/",$pas))
      		{
       			echo "=>passwords to a length of 8 to 20 aplhanumeric characters and select special characters.
       			The password also can not start with a digit,
       			underscore or special character and must contain at least one digit."; 
       			echo "</br>";
       			$password=$_POST["password"];
				$conf=$_POST["confirmpas"];
       			if ($password!=$conf)
					{
						echo "=>your password is not matching";
					} 
     		}
     			echo "</br>";
		if ($count>0) 
			{
				echo "=>ALREADY REGISTERED USE ANOTHER USER NAME";
			}
			echo "</br>";
		if ($count1>0) 

			{
				echo "=>USE ANOTHER EMAIL ADDRESS ";
			}

    }
   function test_input($data) 
   	{
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
	}
$conn->close();
?>