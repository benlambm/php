<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}
?>

<h2>Facts About Park View Ministries</h2>
<ol>
    <li>We have membership of over 400 active adult and youth members.</li>
    <li>Our congregation was founded in 1953.</li>
    <li>Initially it was the official campus church of Eastern Ministries College.</li>
    <li>In 1995, a new sanctuary, new classrooms, and a major renovation were completed. </li>
    <li>Yes, we are still paying for it.</li>
</ol>

<?php
include_once '../footer.php';
