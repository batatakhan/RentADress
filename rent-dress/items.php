<?php

function items($productname,$productprice,$productimg,$productid)
{
    //print_r($productid + 343);
    $element = "
    <li>
    <div class=\"pro-container\">
    <form action = \"shop.php\"method=\"post\">
    <div class=\"pro\">
         <a href=product-detail.php><img src=$productimg></a>
         
        <div class=\"des\">
            <a href=product-detail.php class=\"des1\"><span>$productname</span></a>
            <a href=product-detail.php class=\"des1\">
            </a>
            <div class=\"star\">
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
            </div>
            <h4>$productprice</h4> 
        </div>
        <button name=\"add\" id=\"btnn\" type=\"submit\" value=\"Submit\"><i id=\"cartt\" class=\"fa-solid fa-cart-shopping\"></i>
            Add To Cart</button>
        <input type='hidden' name='productid' value='$productid'>
    </div>
    </form>
</div>
</li>
";
    echo $element;

}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: Tanmay Mishra </small>
                                <h5 class=\"pt-2\">$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

?>
