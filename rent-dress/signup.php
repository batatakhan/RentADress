<?php

require_once('./header.php');

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/58b672b453.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style1.css">
        <title>Rent-A-Dress</title>
    </head>

    <body class="pink"> 
    <header>
        <?php
        header1();
        ?>
    </header>

        <div class="log-in-container-2">
            <div class="log_in_card-2">
                <div class="inner-box-login" id="log_in_card-2">
                    <div class="login-card-front-2">
                    <h2>REGISTER</h2>
                        <form action="connect.php" method="post">
                            <input type="text" class="log-in-input" placeholder="First name" name="fname" required>
                            <input type="text" class="log-in-input" placeholder="Middle name" name="mname">
                            <input type="text" class="log-in-input" placeholder="Last name" name="lname" required>
                            <input type="text" class="log-in-input" placeholder="Apt/House_No" name="housenum" required>
                            <input type="text" class="log-in-input" placeholder="Street" name="street" required>
                            <input type="text" class="log-in-input" placeholder="Zipcode" name="zipcode" required>
                            <input type="email" class="log-in-input" placeholder="firstname@gmail.com" name="email" required>
                            <input type="password" class="log-in-input" placeholder="Password" name="password" required>
                            <input type="text" class="log-in-input" placeholder="Number" name="number" required>
                            <input type="radio" name="usertype" value="b"><span>Buyer</span>
                            <input type="radio" name="usertype" value="l"><span>Lender</span>
                            <button type="submit" class="log-in-submit-btn">Submit</button>
                        </form>
                        <button type="button" class="log-in-btn" onclick="location.href='log-in.php'">I already have an
                            account</button>
                            
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
