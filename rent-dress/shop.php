<?php
//session variable;
// session_start();
session_start();


require_once('./createDB.php');
require_once('./items.php');
require_once('./header.php');

$database = new CreateDB("RentADressDB", "Products");

//print_r("Start of the Function");
if (isset($_POST['add'])) {
    /// print_r($_POST['productid']);
    if (isset($_SESSION['cart'])) {

        $item_array_id = array_column($_SESSION['cart'], "productid");

        if (in_array($_POST['productid'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'shop.php'</script>";
        } else {

            $count = count($_SESSION['cart']);
            $item_array = array(
                'productid' => $_POST['productid']
            );

            $_SESSION['cart'][$count] = $item_array;
            echo "<script>alert('Item successfully added to the cart..!')</script>";
        }

    } else {

        $item_array = array(
            'productid' => $_POST['productid']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        //print_r($_SESSION['cart']);
    }
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
        if (isset($_SESSION['email_id'])) {
            echo "You are logged in check";
            header1();
        } else {
            echo "You are not logged in! check";
            header1();
        }

        ?>
    </header>

    <section id="product1" class="section-p1">
        <h1>Products Listed</h1>
        <ul id="list-shop">
        <?php
            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)) {
                items($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                //print_r($row['id']);
            }
            // items("Lehenga","$37","lehenga.png");
            // items("Wedding Dress","$45","wedding.png");
            ?>

        </ul>
    </section>
</body>

</html>