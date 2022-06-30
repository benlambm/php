<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}
if (isset($_POST['new_mission'])){
    $text = htmlspecialchars($_POST['new_mission']);
    echo "<h2 class='centered-heading'>Mission Statement</h2>";
    echo $text;
} else {
    $mission_statement = <<< ENDMISSION
<h2 class="centered-heading">Mission Statement</h2>
<strong>In an age of polarization and violence, we place our hope and trust in Jesus Christ, to whom our future belongs. As such, this is who we strive to be at Park View Ministries Church:<br>
a community of communities engaging in God’s mission,
a diversity of voices discerning the Spirit’s call,
a family of faith bearing with one another in Christ’s love
united in worship and mission, diverse in conviction, joined in covenant,
Park View Ministries Church is committed to the spiritual practice of hospitality.</strong><br>
<em>—Adopted by PVMC Pastors, Elders, and Congregational Council, September 2016</em>
ENDMISSION;
    print(nl2br($mission_statement));
}

if(isset($_SESSION['user_type'])
    && ($_SESSION['user_type'] == "publisher"
        || $_SESSION['user_type'] == "admin")){
    ?>
    <div class="login_box">
        <h3>Publishers/Admins Can Edit This Page</h3>
        <form action="mission.php" method="POST">
            <label for="new_mission">UPDATE CONTENT HERE:</label>
            <textarea name="new_mission" rows="4" cols="60" required></textarea><br>
            <input type="submit">
        </form>
    </div>

<?php
}
include_once '../footer.php';
