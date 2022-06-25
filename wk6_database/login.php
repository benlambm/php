<?php include_once '../header.php';?>

<div class="login_box">
    <h1>Please Login below:</h1>
    <form action="user_login.php" method="POST">
        <label for="username">USERNAME:</label>
        <input type="text" name="username"><br>
        <label for="password">PASSWORD:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="LOGIN">
    </form>
</div>

<?php
include_once '../footer.php';