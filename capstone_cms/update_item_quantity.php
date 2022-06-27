<?php
session_start();
$pid = htmlspecialchars($_GET['pid']);
$quantity = intval(htmlspecialchars($_GET['quantity']));

//VALIDATE UPDATE QUANTITY NUMBER
//Quantity to order cannot be negative:
if($quantity<0){
    include_once '../header.php';
    include_once 'menu.php';
    if(isset($_SESSION['cart'])){
        echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
        echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
    }
    ?>
    <h2 style="color: red;">Item quantity cannot be negative! Please try again</h2>
    <?php
    include_once '../footer.php';
    die("");
}

//Quantity to order cannot be greater than ProductQuantity in stock:
require_once '../model/database.php';
$stmt = $db->prepare('SELECT ProductQuantity from Product WHERE ProductID='.$pid);
$stmt->execute();
$row = $stmt->fetch();
$numInStock = intval($row[0]);
if($quantity>$numInStock){
    include_once '../header.php';
    include_once 'menu.php';
    if(isset($_SESSION['cart'])){
        echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
        echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
    }
    ?>
    <h2 style="color: red;">Item quantity in cart must be less than Number in stock! Please try again</h2>
    <?php
    include_once '../footer.php';
    die("");
}
$_SESSION['cart'][$pid] = $quantity;
header('Location: cart.php?pid=0');
