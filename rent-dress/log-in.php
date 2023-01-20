<?php
require_once('./header.php');

// $conn = mysqli_connect('localhost','root','','test');
// if ($conn->connect_error) {
//     echo "$conn->connect_error";
//     die("Connection Failed : " . $conn->connect_error);
// }
// if ($_POST) {
//     $uname = $_POST["email"];
//     $pass = $_POST["password"];
//     $uname = mysqli_real_escape_string($uname);
//     $pass = mysqli_real_escape_string($pass);
// }


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


       
        <div class="log-in-container">
            <div class="log_in_card">
                <div class="inner-box-login" id="log_in_card">
                    <div class="login-card-front">
                        <h2>LOGIN</h2>
                        <form action="login.php" method="POST">
                            <input type="email" class="log-in-input" placeholder="firstname@gmail.com" name="email" required />
                            <input type="password" class="log-in-input" placeholder="Password" name="password" required />
                            <input type="radio" name="usertype" value='b'><span>Buyer</span>
                            <input type="radio" name="usertype" value='l'><span>Lender</span>
                            <input type="radio" name="usertype" value='a'><span>Admin</span>
                            <button type="submit" class="log-in-submit-btn">Submit</button>
                        </form>
                        <button type="button" class="log-in-btn" onclick="location.href='signup.php'">I'm New
                            Here</button>
                    </div>
                </div>
            </div>
        </div>
    </body>


</html>
