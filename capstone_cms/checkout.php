<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">BACK</a></p>';
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
    <h2 id='cart-heading'>Your Subtotals</h2>
    <div id="purchase-page">

<?php
require '../model/database.php';
$total = 0;
for ($i=1;$i<11;$i++){
    if (@$_SESSION['cart'][$i] > 0) {
        $stmt = $db->prepare('SELECT * from Product WHERE ProductID='.$i);
        $stmt->execute();
        while($line_item = $stmt->fetch()){
            $numItems = $_SESSION['cart'][$i];
            $subtotal = $numItems * $line_item['ProductPrice'];
            echo $numItems." x <strong>".$line_item['ProductName']."</strong> for a subtotal of: $".number_format($subtotal,2)."<br><br>";
            $total += $subtotal;
        }
    }
}
$tax = $total * .085;
$total += $tax;
?>
    <hr>
    <p>+ 8.5% Merchandise Tax: $<?php echo number_format($tax,2)?></p>
    <h4>Grand Total: $<?php echo number_format($total,2)?></h4>
    </div>
    <div class="purchase-div">
        <h3 class='purchase'><a href='purchase.php'>PURCHASE</a></h3>
    </div>
<?php
include_once '../footer.php';
