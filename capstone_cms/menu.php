
<nav>
    <ul>
        <li><a href="about.php">About Us</a></li>
        <li><a href="mission.php">Mission</a></li>
        <li><a href="goals.php">Goals</a></li>
        <li><a href="facts.php">Facts</a></li>
        <li><a href="chart.php">Our Team</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="faq.php">FAQs</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <?php
            if(isset($_SESSION['user_type']) && $_SESSION['user_type']=="admin"){
                echo "<li><a href='user_manager.php'>USER MANAGER</a></li>";
            }
        ?>
    </ul>
</nav>
