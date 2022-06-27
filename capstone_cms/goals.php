<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}?>

<h2>Current Goals</h2>
<ol>
    <li>To bring the Good News</li>
    <li>Serve the poor</li>
    <li>Set the oppressed free</li>
    <li>Bring sight to the blind</li>
    <li>To proclaim the Second Coming of Our Lord</li>
</ol>
<?php
include_once '../footer.php';