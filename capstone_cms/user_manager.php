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

    <h2 class="welcome">User Manager</h2>

<?php
require '../model/database.php';
$stmt = $db->prepare('SELECT * from Users');
$stmt->execute();
?>
    <table>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th> </th>
            <th> </th>
        </tr>
<?php while($row = $stmt->fetch()){        ?>
        <tr>
            <td><?php echo $row[1]." ".$row[2]?></td>
            <td><?php echo $row[3]?></td>
            <td><a href="edit_user.php?uid=<?=$row[0]?>">EDIT</a></td>
            <td><a href="delete_user.php?uid=<?=$row[0]?>">DELETE</a></td>
        </tr>
<?php } ?>
    </table>
    <br>
    <h3><a href="add_user.php">ADD USER</a></h3>

<?php include_once '../footer.php';
