<?php
require_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/58b672b453.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Rent-A-Dress</title>
</head>

<body id="contact-body">
    <header>
        <?php
        header1();
        ?>
    </header>
    <main>
        <div class="contact-container
        ">
            <h1>PAYMENT PAGE</h1>

            <div class="contact-box" id="payement-box">
                <div class="contact-left">
                <div class="align">
                    <form action="adminPay.php" method="post" enctype="multipart/form-data">
                        <h3>Upload File</h3>
                        <input type="text" name="cardno" placeholder="Card Number"> <br>
                        <input type="text" name="cvvno" placeholder="CVV"><br>
                        <input type="text" name="namecard" placeholder="Card Holder Name">

                        <div id="upload-btn">
                            <button id="upload-btn" type="submit" name="paymentDone">PAY NOW</button>
                        </div>
                    </form>
                </div>
</div>
            </div>

        </div>
    </main>
</body>

</html>