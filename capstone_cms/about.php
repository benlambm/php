<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}

$about_txt = <<< ENDABOUT
<em>Park View Ministries</em> is more than a place and a program... <br><br>
<strong>We are a community of people who seek to follow Jesus in everyday life, wherever we are.</strong><br><br>
<em>Park View </em> is a community of communities who relate to each other 
in various ways every day, who worship God together, study the scriptures, pray together, 
and support each other as we engage in God's mission in the world around us.
ENDABOUT;

echo $about_txt;

if (isset($_POST['email'])){
    echo "<h3>Thank you for Signing Up!</h3>";
} else {
?>
<h3>Sign Up For our Email Newsletter!</h3>
<form action="about.php" method="POST">
    <label for="email">EMAIL:</label>
    <input type="email" name="email" placeholder="me@liberty.edu">
    <input type="submit">
</form>

<?php
}
include_once '../footer.php';
