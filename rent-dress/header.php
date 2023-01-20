<?php
function header1()
{
    $element = '<div class="logo-contain"><img id="mylogo" src="logo.png" alt="LOGO">
    </div>
    <div class="logo">
        <h4>Rent a Dress</h4>

    </div>
    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="upload-products.php">Upload Product</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li> <a href="log-in.php">Account</a></li>

        </ul>
        <form class="search-form" action="search.php" method="post">
            <input type="text" placeholder="Search" name="search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="shopping-cart">
            <a href="cart.php"><i id="cartt" class="fa-solid fa-cart-shopping"></i></a>

        </div>
    </nav>

';
    echo $element;

}

function header2()
{
    $element = '<div class="logo-contain"><img id="mylogo" src="b4eaadda-aa94-4988-b2f3-34f785b22d3c.JPG" alt="LOGO">
    </div>
    <div class="logo">
        <h4>Rent a Dress</h4>

    </div>
    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li> <a href="log-in.php">Account</a></li>

        </ul>
        <form class="search-form" action="search.php" method="post">
            <input type="text" placeholder="Search" name="search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="shopping-cart">
            <a href="cart.php"><i id="cartt" class="fa-solid fa-cart-shopping"></i></a>

        </div>
    </nav>

';
    echo $element;

}

function header3()
{

    $element = '<div class="logo-contain"><img id="mylogo" src="logo.png" alt="LOGO">

    </div>

    <div class="logo">

        <h4>Rent a Dress</h4>



    </div>

    <nav class="nav">

        <ul>

            <li><a href="index.php">Home</a></li>

            <li><a href="shop.php">Products Listed</a></li>

            <li><a href="contact.php">Contact Us</a></li>

            <li> <a href="log-in.php">Account</a></li>



        </ul>

        

    </nav>



';
    echo $element;
}


?>
