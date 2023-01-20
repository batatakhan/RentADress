<?php
require_once('./createAdminDB.php');
require_once('./createDB.php');
session_start();
$database = new CreateAdminDB("rentadressdb", "product_leased_admin");
$db = new CreateDb("rentadressdb", "products");
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
  if (isset($_POST['paymentDone'])) {
    $cardno = $_POST['cardno'];
    // $details = $_POST['details'];
    $cvvno = $_POST['cvvno'];
    $namecard = $_POST['namecard'];
    // $sql = "INSERT INTO product_leased_admin (product_name,product_price,product_image,id,customer_email) VALUES (?,?,?,?,?)";
    // $products;

    if (isset($_SESSION['cart'])) {
      $productid = array_column($_SESSION['cart'], 'productid');

      $result = $db->getData();
      while ($row = mysqli_fetch_assoc($result)) {
        foreach ($productid as $id) {
          if ($row['id'] == $id) {
            echo $row['id'] . " " . $row['product_name'] . " " . $row['product_price'] . " " . $_SESSION['email_id'];
            $sql = "INSERT INTO product_leased_admin(id,product_name,product_price,product_image,customer_email) VALUES (?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("issss",$row['id'], $row['product_name'], $row['product_price'],$row['product_image'], $_SESSION['email_id']);
            if ($stmt->execute()) {
              
            } else {
            echo" error in executing the request ";
            }

          }
        }
      }
      echo "<script>alert('Purchase Successful')</script>";
      echo "<script>window.location.replace('index.php')</script>";
      $stmt->close();
      $conn->close();
    }
    else{
      echo "Cart Session not working";
    }


    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param("ssss", $cardno, $cvvno, $namecard, $_SESSION['email_id']);
    // if ($stmt->execute()) {
    //   $stmt->close();
    //   $conn->close();
    //   echo "<script>alert('Item Successfully Added')</script>";
    //   echo "<script>window.location.replace('upload-products.php')</script>";

    //   //header('Location: upload-products.php');
    // } else {
    //   print_r("WENT WRONG");
    //   header('Location: upload-products.php');
    // }
  } else {
    echo "Payment done has issue";
  }

}
?>