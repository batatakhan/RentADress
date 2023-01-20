<?php
session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','rentadressdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("select * from USERS where email = ?");
		$stmt->bind_param("s", $email);
		$execval = $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if ($data['password'] === $password ) {
				$emailidd = $_SESSION['email_id'] = $email;
				$_SESSION['usertype'] = $data['userType'];
				if ($data['userType'] === 'a') {
					echo "<script>alert('Welcome $emailidd')</script>";
					echo "<script>window.location.replace('admin.php')</script>";
				} else {
					echo "<script>alert('Welcome $emailidd')</script>";
					echo "<script>window.location.replace('index.php')</script>";
				}
            } else {
				echo "<script>alert('Wrong Credentials')</script>";
                echo "<script>window.location.replace('log-in.php')</script>";
            }
        } else {
			echo "<script>alert('Wrong Credentials')</script>";
			echo "<script>window.location.replace('log-in.php')</script>";
        }
		$stmt->close();
		$conn->close();
	}

?>