<?php
//session variable;
// session_start();
session_start();

require_once('./createDB.php');
require_once('./items.php');
require_once('./header.php');

$database = new CreateDB("RentADressDB","Products");

//print_r("Start of the Function");
if(isset($_POST['add'])){
    print_r("I have entered the function");
    print_r($_POST['productid']);
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/58b672b453.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Rent-A-Dress</title>
    </head>

    <body>
    <header>
        <?php
        if(isset($_SESSION['id'])){
            echo "You are logged in";
            header2();
        } else {
            echo "You are not logged in!";
            header1();
        }
        
        ?>
    </header>
        
        <section id="product1" class="section-p1">
            <h1>Products Listed</h1>
			<?php
				$search = $_POST['search'];

				// Database connection
				$conn = new mysqli('localhost','root','','rentadressdb');
				if($conn->connect_error){
					echo "$conn->connect_error";
					die("Connection Failed : ". $conn->connect_error);
				}
				$stmt = $conn->prepare("select * from Products where product_name LIKE '%$search%'");
				$execval = $stmt->execute();
				$stmt_result = $stmt->get_result();

			if ($stmt_result->num_rows > 0) {
	            echo "<h4>Search Results for $search...</h4>";
            	while($data = $stmt_result->fetch_assoc()) {
					?> <p> <?php items($data['product_name'], $data['product_price'], $data['product_image'], $data['id']); ?> </p> <?php
				}
        	} else {
            	echo "<h5>No results found</h5>";
        	}
			$stmt->close();
			$conn->close();
			?>
        </section>
    </body>

</html>