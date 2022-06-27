<?php
session_start();

//COMMIT DATABASE CHANGES TO PRODUCT QUANTITY
require_once '../model/database.php';

for ($i=1;$i<11;$i++){
    if (@$_SESSION['cart'][$i] > 0) {
        $quantityOrdered = intval($_SESSION['cart'][$i]);
        $stmt = $db->prepare("UPDATE Product SET ProductQuantity = (ProductQuantity - $quantityOrdered) WHERE ProductID=".$i);
        $stmt->execute();
    }

}

//ERASE PREVIOUS CART CONTENTS
for ($i=1;$i<11;$i++){
    @$_SESSION['cart'][$i] = 0;
}


include_once '../header.php';
include_once 'menu.php';?>
    <h2>Thank You!</h2>
    <p>Your purchase will support the missions of Park View Ministries.</p>
<?php
include_once '../footer.php';
