<?php
session_start();
include_once '../header.php';
include_once 'menu.php';
if($_SESSION['user_type']!="admin"){
    ?>
    <h2 style="color: red;">Admin Access Only!</h2>
    <?php
    include_once '../footer.php';
    die("");
}

?>

    <h2 class="welcome">ADD USER</h2>
    <form class="login_box" action="add_user_db.php" method="post">
        <label for="first_name">FIRST NAME:</label>
        <input type="text" name="first_name" required><br>
        <label for="last_name">LAST NAME:</label>
        <input type="text" name="last_name" required><br>
        <label for="username">USERNAME:</label>
        <input type="text" name="username" required><br>
        <label for="pswd">PASSWORD:</label>
        <input type="password" name="pswd" required><br>
        <input type="submit">
    </form>

<?php include_once '../footer.php';

