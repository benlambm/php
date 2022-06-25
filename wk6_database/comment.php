<?php include_once '../header.php';?>

    <div class="login_box">
        <h1>Please Write Your Comment Here:</h1>
        <form action="post_comment.php" method="POST">
            <label for="name">NAME:</label>
            <input type="text" name="name" value="Your Name" required><br>
            <label for="title">TITLE:</label>
            <input type="text" name="title" value="Title of Comment" required><br>
            <p>Your Comments on Our Organization:</p>
            <textarea name="comments" rows="4" cols="60" required></textarea>
            <br>
            <input type="submit" value="POST COMMENT">
            <br>
        </form>
    </div>
<?php
include_once '../footer.php';