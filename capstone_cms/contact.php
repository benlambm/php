<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if(isset($_SESSION['cart'])){
    echo '<p><a class="continue" href="http://php.ad4mtech.com/capstone_cms/shop.php">KEEP SHOPPING</a></p>';
    echo '<p><a href="http://php.ad4mtech.com/capstone_cms/cart.php">CART</a></p>';
}

$contact_details = <<< ENDCONTACT
<h2 class="centered-heading">Contact Us</h2>
We'd love to hear from you! Drop by or give us a ring to just say "Hi." Anytime.<br>
Our address: 1600 College Avenue, Harrisonburg, VA 22802<br>
Our phone number: (540) 434-1604<br>
Our email address: office@pvmchurch.org
ENDCONTACT;

print(nl2br($contact_details));

if (isset($_POST['message'])){
    $text = $_POST['message'];
    echo "<br><hr><br><h3>Message Sent! Thank you</h3>";
    echo "<p>Your Message: $text</p>";
} else {
    ?>
<div class="login_box">
    <h3>Send Us A Message</h3>
    <form action="contact.php" method="POST">
        <label for="message">NAME:</label>
        <input type="text" name="name" placeholder="Your Name"><br>
        <label for="message">EMAIL:</label>
        <input type="email" name="email" placeholder="me@liberty.edu"><br><br>
        <label for="message">MESSAGE:</label>
        <textarea name="message" rows="4" cols="60" required></textarea><br>
        <input type="submit">
    </form>
</div>
    <?php
}

include_once '../footer.php';
