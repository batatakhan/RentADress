<?php
require_once('./userDB.php');
	$firstName = $_POST['fname'];
	$middleName = $_POST['mname'];
	$lastName = $_POST['lname'];
	$houseNum = $_POST['housenum'];
	$street = $_POST['street'];
	$zipCode = $_POST['zipcode'];
	$userType = $_POST['usertype'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	$userdatabase = new userDB("rentadressdb", "users");
	// Database connection
	$conn = new mysqli('localhost','root','','rentadressdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into USERS(firstName, middleName, lastName, houseNum, Street, Zipcode, userType, email, password, number) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssisssssi", $firstName, $middleName, $lastName, $houseNum, $street, $zipCode, $userType, $email, $password, $number);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
	}

	header('Location: log-in.php');
?>