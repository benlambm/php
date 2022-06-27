<?php
session_start();

$pid = @$_GET['pid'] ?? 0;
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'][1] = 0;
    $_SESSION['cart'][2] = 0;
    $_SESSION['cart'][3] = 0;
    $_SESSION['cart'][4] = 0;
    $_SESSION['cart'][5] = 0;
    $_SESSION['cart'][6] = 0;
    $_SESSION['cart'][7] = 0;
    $_SESSION['cart'][8] = 0;
    $_SESSION['cart'][9] = 0;
    $_SESSION['cart'][10] = 0;
    $_SESSION['cart'][$pid] = 1;
} else {
    if($pid!=0){
        @$_SESSION['cart'][$pid]++;
    }
}
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}
$cart_empty = true;
for ($i=1;$i<11;$i++){
    if($_SESSION['cart'][$i]>0){
        $cart_empty = false;
    }
}
if ($cart_empty){
    echo "<h2 id='cart-heading'>Your Cart Is Empty</h2>";
    include_once '../footer.php';
    die();
}

?>
<h2 id='cart-heading'>Your Shopping Cart</h2>
<div class="checkout-div">
<h3 class='checkout'><a href='checkout.php'>CHECKOUT</a></h3>
</div>

<?php
require_once '../model/database.php';

for ($i=1;$i<11;$i++){
    if (@$_SESSION['cart'][$i] > 0) {
        $stmt = $db->prepare('SELECT * from Product WHERE ProductID='.$i);
        $stmt->execute();
        while($row = $stmt->fetch()){ ?>
            <img src="<?php echo $row['ProductImage']?>" class="product">
            <h2><?php echo $row['ProductName']?></h2>
            <p><?php echo $row['ProductDescription']?></p>
            <p><?php echo $row['ProductQuantity']." in stock. Price per unit: $".$row['ProductPrice'] ?></p>
            <p class="delete-item"><a href="delete_cart_item.php?pid=<?php echo $i; ?>">DELETE ITEM</a></p>
            <form id="update-quantity" action="update_item_quantity.php" method="GET">
                <input type="hidden" name="pid" value="<?php echo $i;?>">
                <label for="quantity">UPDATE QUANTITY:</label>
                <input type="number" name="quantity" value="<?php echo $_SESSION['cart'][$i]; ?>" required>
                <input type="submit">
            </form>

            <hr>

            <?php
        }
    }
}
?>
<div class="checkout-div">
<h3 class='checkout'><a href='checkout.php'>CHECKOUT</a></h3>
</div>
<?php
include_once '../footer.php';
