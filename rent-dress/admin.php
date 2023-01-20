<?php
require_once('./header.php');
  session_start();

  $userprofile = $_SESSION['email_id'];
  $userprofile2 = $_SESSION['usertype'];
echo $userprofile2;

  if (($userprofile == true)&& $userprofile2 == 'a') {}
  else {
    print_r($_SESSION['userType']);
    echo "<script>alert('Log in to view this page')</script>";
    echo "<script>window.location.replace('log-in.php')</script>";
  }

	// Database connection
	$conn = new mysqli('localhost','root','','rentadressdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("select * from Complaint");
		$stmt->execute();
    $stmt_result = $stmt->get_result();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="container bg-danger bg-opacity-25">
<header>
        <?php
        header1();
        ?>
    </header>
<!-- <button type="button" class="btn btn-primary right my-2" onclick="location.href='index.php'">Go to Home</button> -->
<nav>   
  <div class="nav nav-tabs left my-3" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Unopened Complaints</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Opened Complaints</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Cancel Payments</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
  <?php if ($stmt_result->num_rows > 0) {
            	while($data = $stmt_result->fetch_assoc()) {
					?> 
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $data['user_subject']; ?> </h5>
                  
                  <p class="card-text"> <?php echo $data['complaint_details']; ?> </p>
                  <span> <?php echo "Complaint made for product: ".$data['product_name']; ?> </span> <br>
                  <span> <?php echo "Made by user: ".$data['user_namee']; ?> </span> <br>
                  <span> <?php echo "Email: ".$data['user_email']; ?> </span>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button">Mark as read</button>
                  </div>
                </div>
              </div>
            </div>
          </div> <?php
				}
        	} else {
            	echo "No results found";
        	}
			?>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/image-222.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Dress too short</h5>
        <p class="card-text">I ordered this dress a few days ago for a wedding, it came up a little shorter than I anticipated. I'm currently in the process of cancelling my payment and returning the dress</p>
        <p class="card-text"><small class="text-muted">Last updated 10 mins ago by Tanmay Mishra</small></p>
      </div>
    </div>
  </div>
</div>
  </div>

  <?php
	// Database connection
	$conn = new mysqli('localhost','root','','rentadressdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("select * from product_leased_admin");
		$stmt->execute();
    $stmt_result = $stmt->get_result();
	}
?>

  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
  <div class="accordion" id="accordionExample">
  <?php if ($stmt_result->num_rows > 0) {
            	while($data = $stmt_result->fetch_assoc()) {
					?> 
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <?php echo "Payment by ".$data['customer_email']; ?>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <strong> <?php echo "Payment in Progress for ".$data['product_name']." with a cost of ".$data['product_price']; ?> </strong>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-danger me-md-2" type="button">Cancel Payment</button>
                </div>
              </div>
            </div>
          </div> <?php
				}
        	} else {
            	echo "No results found";
        	}
			$stmt->close();
			$conn->close();
			?>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>