<?php
session_start();
if (!$_SESSION['logged_in']) {
    include 'login.php';
    exit("MUST LOGIN.");
}
include_once '../header.php';
if (!class_exists('Employee')){
    require '../model/functions.php';
}
require '../model/load_users.php';?>

    <div id="table-page">
        <h1>Park View Ministries</h1>
        <h2>Organizational Chart</h2>

        <table>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Web Page</th>
            </tr>
            <tr>
                <td><?php echo $pastorPhil->getName()?></td>
                <td><?php echo $pastorPhil->getJobTitle()?></td>
                <td><a href="<?php echo $pastorPhil->getHomepageUrl()?>">View Bio</a></td>
            </tr>
            <tr>
                <td><?php echo $pastorMoriah->getName()?></td>
                <td><?php echo $pastorMoriah->getJobTitle()?></td>
                <td><a href="<?php echo $pastorMoriah->getHomepageUrl()?>">View Bio</a></td>
            </tr>
            <tr>
                <td><?php echo $pastorPaula->getName()?></td>
                <td><?php echo $pastorPaula->getJobTitle()?></td>
                <td><a href="<?php echo $pastorPaula->getHomepageUrl()?>">View Bio</a></td>
            </tr>
        </table>
        <br>
        <h3><a href="comment.php">Leave A Comment</a></h3>
    </div>
    <div id="comments">
        <ul>


<?php
require_once('../model/database.php');
try {
    $pdo_tmp = $db->query('SELECT * from Comment');
    $commentsArray = $pdo_tmp->fetchAll();
    //print_r($commentsArray);
    foreach ($commentsArray as $comment){


        echo "<li><ul>
            <li><strong>$comment[2]</strong><em> by $comment[1]</em>:</li>
            <li>$comment[3]</li>
            <li>".date('F d, Y, g:i a T', strtotime($comment[4]))."</li>
            <li><a class='update' href=\"comment_manager.php?id=$comment[0]\">Edit Comment</a></li>
            <li><a class='delete' href=\"delete_comment.php?id=$comment[0]\">Delete</a></li>
        </ul></li><br>";


    }
} catch(PDOException $exception) {
    print_r($exception);
}
?>
        </ul>
    </div>

<?php
include_once '../footer.php';
