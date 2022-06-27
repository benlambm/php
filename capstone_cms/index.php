<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}
?>
<h1>Welcome to our new CMS!</h1>
    <h3>Make yourself at home. We're glad you're here</h3>
    <h3>We have new products in our <a href="shop.php">online store</a>!</h3>
<?php
include_once '../footer.php';