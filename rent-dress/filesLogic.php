<?php
session_start();
$conn = new mysqli(
    "localhost",
    "root",
    "",
    "rentadressdb"
);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
} else {
    if (isset($_POST['save'])) {
        $proname = $_POST['proname'];
        // $details = $_POST['details'];
        $price = $_POST['price'];
        $myfile = $_POST['myfile'];
        $sql = "INSERT INTO products (product_name,product_price,product_image,User_Email) VALUES (?,?,?,?)";


        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $proname, $price,$myfile,$_SESSION['email_id']);
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            echo "<script>alert('Item Successfully Added')</script>";
            echo "<script>window.location.replace('index.php')</script>";

            //header('Location: upload-products.php');
        } else {
            print_r("WENT WRONG");
            header('Location: upload-products.php');
        }
    }

}
?>