<?php
require_once('./createDBcomplaint.php');

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "rentadressdb"
);
$database = new createDBcomplaint("rentadressdb", "complaint");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
} else {
    if (isset($_POST['send_complain'])) {
        $name_person = $_POST['name_com'];
        $phone = $_POST['phone_com'];
        $email = $_POST['email_com'];
        $sub = $_POST['subject_com'];
        $sellname = $_POST['seller_name_com'];
        $product_name = $_POST['proname_com'];
        $message = $_POST['message_com'];
        $sql = "INSERT INTO complaint (user_namee,user_phone,user_email,user_subject,seller_name,product_name,complaint_details) VALUES (?,?,?,?,?,?,?)";


        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisssss", $name_person, $phone, $email, $sub, $sellname, $product_name, $message);
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            echo "<script>alert('Message Sent')</script>";
            echo "<script>window.location.replace('index.php')</script>";

            //header('Location: upload-products.php');
        } else {
            echo "<script>alert('Unkown error in contact_post.php')</script>";
            echo "<script>window.location.replace('index.php')</script>";
        }
    } else {
        echo "Error in button";
    }

}
?>
