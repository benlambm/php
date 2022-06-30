<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}
if (isset($_POST['new_goals'])){
    $text = htmlspecialchars($_POST['new_goals']);
    echo "<h2 class='centered-heading'>Current Goals</h2>";
    echo $text;
} else {?>
<h2 class="centered-heading">Current Goals</h2>
<ol>
    <li>To bring the Good News</li>
    <li>Serve the poor</li>
    <li>Set the oppressed free</li>
    <li>Bring sight to the blind</li>
    <li>To proclaim the Second Coming of Our Lord</li>
</ol>

<?php
}
if(isset($_SESSION['user_type'])
    && ($_SESSION['user_type'] == "publisher"
    || $_SESSION['user_type'] == "admin")){
    ?>
    <div class="login_box">
        <h3>Publishers/Admins Can Edit This Page</h3>
        <form action="goals.php" method="POST">
            <label for="new_goals">UPDATE CONTENT HERE:</label>
            <textarea name="new_goals" rows="4" cols="60" required></textarea><br>
            <input type="submit">
        </form>
    </div>
    <?php

}
include_once '../footer.php';