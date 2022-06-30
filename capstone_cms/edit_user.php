<?php
$uid = htmlspecialchars($_GET['uid']);

include_once '../header.php';
require_once('../model/database.php');
try {
    $stmt = $db->query('SELECT * from Users WHERE UserID='.$uid);
    $userX = $stmt->fetch();
} catch(PDOException $exception){
    print($exception);
}
?>

    <div class="login_box">
        <h1>Update User:</h1>

        <form class="login_box" action="update_user.php" method="POST">
            <input type="hidden" name="uid" value="<?php echo $userX[0]?>">
            <label for="first_name">FIRST NAME:</label>
            <input type="text" name="first_name" required value="<?=$userX[1]?>"><br>
            <label for="last_name">LAST NAME:</label>
            <input type="text" name="last_name" required value="<?=$userX[2]?>"><br>
            <label for="username">USERNAME:</label>
            <input type="text" name="username" required value="<?=$userX[3]?>"><br>
            <label for="pswd">PASSWORD:</label>
            <input type="password" name="pswd" required value="<?=$userX[4]?>"><br>
            <input type="submit" value="UPDATE">
            <br>
        </form>
    </div>
<?php
include_once '../footer.php';
