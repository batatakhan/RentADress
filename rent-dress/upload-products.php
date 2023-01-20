<?php
session_start();
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/58b672b453.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/upload.css">
    <title>Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header id>
        <?php
        $userprofile = $_SESSION['email_id'];
        $userprofile2 = $_SESSION['usertype'];
        if($userprofile==true && $userprofile2 == 'l'){}
        else{
            echo "<script>alert('Log in as lender to Upload Products')</script>";
            echo "<script>window.location.replace('log-in.php')</script>";
        }
            header3();
            ?>
    </header>
    <div class="containerrr">
        <div class="rowww">
            <form action="filesLogic.php" method="post" enctype="multipart/form-data">
                <h3>Upload File</h3>
                <input type="text" name="myfile" placeholder="Product FilePath"> <br>
                <input type="text" name="proname" placeholder="Product Name"><br>
                <input type="text" name="price" placeholder="Product Price">
                
                <div id="upload-btn">
                    <button id="upload-btn" type="submit" name="save">Upload</button>
                </div>
            </form>
        </div>
    </div>
</body>
<!-- onclick="location.href='filesLogic.php'" -->

</html>