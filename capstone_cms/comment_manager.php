<?php
session_start();
include_once '../header.php';
require_once('../model/database.php');
try {
    $pdo_tmp = $db->query('SELECT * from Comment WHERE CommentID=' . $_GET['id']);
    $comment = $pdo_tmp->fetch();
} catch(PDOException $exception){
    print($exception);
}
?>

    <div class="login_box">
        <h1>Update Comment:</h1>

        <form action="update_comment.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $comment[0]?>">
<!--            <input type="hidden" name="ts" value="--><?php //echo $comment[4]?><!--">-->
            <label for="name">NAME:</label>
            <input type="text" name="name" value="<?php echo $comment[1]?>" required><br>
            <label for="title">TITLE:</label>
            <input type="text" name="title" value="<?php echo $comment[2]?>" required><br>
            <p>Your Comments:</p>
            <textarea name="comments" rows="4" cols="60" required><?php echo $comment[3]?></textarea>
            <br>
            <input type="submit" value="UPDATE COMMENT">
            <br>
        </form>
    </div>
<?php
include_once '../footer.php';
