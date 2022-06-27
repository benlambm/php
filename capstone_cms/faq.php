<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}
$facts = <<< ENDFAQ
<h2>Frequently Asked Questions</h2>
<strong><em>What time does the church service start on Sundays?</em></strong>
Our services begin at 9:30am each Sunday.<br>
<strong><em>Where is the Church Directory?</em></strong>
It is online or can be printed for you.<br>
<strong><em>Who are the pastors?</em></strong>
We have three pastores: Phil Kniss, Moriah Hurst, and Paula Stoltzfus.<br>
<strong><em>How can I get more connected</em></strong>
Request to meet with a pastor. Attend one of our Sunday classes or Bible studies. Join us for potlucks.<br>
ENDFAQ;

print(nl2br($facts));

include_once '../footer.php';