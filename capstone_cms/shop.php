<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}

?>


<h2 class="welcome">Welcome to our Online Storefront!</h2>
<?php
require '../model/database.php';
$stmt = $db->prepare('SELECT * from Product');
$stmt->execute();
while($row = $stmt->fetch()){ ?>
   <img src="<?php echo $row['ProductImage']?>" class="product">
    <h2><?php echo $row['ProductName']?></h2>
    <p><?php echo $row['ProductDescription']?></p>
    <p><?php echo $row['ProductQuantity']." in stock. Price per unit: $".$row['ProductPrice'] ?></p>
    <p class="add-to-cart"><a href="cart.php?pid=<?php echo $row['ProductID'] ?>">ADD TO CART</a></p>
    <hr>

    <?php
}
include_once '../footer.php';