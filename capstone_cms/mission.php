<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}
$mission_statement = <<< ENDMISSION
<h2>A Leadership Vision for Our Times</h2>
<strong>In an age of polarization and violence, we place our hope and trust in Jesus Christ, to whom our future belongs. As such, this is who we strive to be at Park View Ministries Church:<br>
a community of communities engaging in God’s mission,
a diversity of voices discerning the Spirit’s call,
a family of faith bearing with one another in Christ’s love
united in worship and mission, diverse in conviction, joined in covenant,
Park View Ministries Church is committed to the spiritual practice of hospitality.</strong><br>
<em>—Adopted by PVMC Pastors, Elders, and Congregational Council, September 2016</em>
ENDMISSION;

print(nl2br($mission_statement));

include_once '../footer.php';
