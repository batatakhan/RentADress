<?php
//session variable;
session_start();
// echo $_SESSION['email_id'];

require_once('./createDB.php');

require_once('./header.php');
require_once('./items.php');
$db = new CreateDb("RentADressDB", "Products");

if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["productid"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Cart</title>
</head>

<body>
    <header>
        <?php
        header1();
        ?>
    </header>

    <div class="container-fluid" id="cartMain">
        <!-- <div class="row px-5"> -->
        <div class="col-md-10">
            <div class="shopping-cart" id="cart-containerphp">
                <h6>My Cart</h6>
                <hr>
                <?php
                $userprofile = $_SESSION['email_id'];
                if($userprofile==true){}
                else{
                    echo "<script>alert('Log in to View Cart')</script>";
                    echo "<script>window.location.replace('log-in.php')</script>";
                }


                $total = 0;
                if (isset($_SESSION['cart'])) {
                    $productid = array_column($_SESSION['cart'], 'productid');

                    $result = $db->getData();
                    while ($row = mysqli_fetch_assoc($result)) {
                        foreach ($productid as $id) {
                            if ($row['id'] == $id) {
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
                                $total = $total + (int) $row['product_price'];
                            }
                        }
                    }
                    // echo $_SESSION['usertype'];
                    // echo "<h5 class=\"pt-2\">Your total is $total$</h5>";
                } else {
                    echo "<h5>Cart is Empty</h5>";
                }

                ?>

            </div>

        </div>


        <!-- </div> -->

        <?php
        if (isset($_SESSION['cart'])) {
            $productid = array_column($_SESSION['cart'], 'productid');
            if (sizeof($productid) > 0) {
                echo '<div class="container-fluid">';
                echo "<h5 class=\"pt-5\">Your total is $total$</h5>";

                echo "<button class=\"buttonpay\" onclick=\"location.href='payment.php';\">PAY NOW</button>";
                echo "</div>";
            }
        }
        ?>
        



    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>