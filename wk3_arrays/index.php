<?php include_once '../header.php';
require_once '../model/Employee.php';
require_once '../model/load_users.php';

$current_role = $_GET['employee_role'] ?? 'NA';
$current_user = $current_role==='NA'? null : $_SESSION[$current_role] ?? null;

?>

    <h1>Update Form</h1>
    <h3>Please select the User first and click Submit</h3>

    <form action="./index.php" method="GET">
        <select name="employee_role">
            <option value="">Pick an Employee</option>
            <option value="Sr">Phil Kniss, Senior Pastor</option>
            <option value="Jr">Moriah Hurst, Junior Pastor</option>
            <option value="Pt">Paula Stoltzfus, Part-Time Pastor</option>
        </select>
        <input type="submit">
    </form>
    <br>

    <h3>User: <?php echo isset($current_user) ? $current_user->getName() : "select from drop-down menu above";?></h3>
    <?php if(!isset($current_user)){die();}?>

    <form action="update_controller.php" method="POST">
        <label for="bio">Edit Bio:</label>
        <input type="text" name="bio" value="<?php echo $current_user->getBioInfo() ?? ""; ?>" required>
        <br>
        <label for="degree">Edit Degree:</label>
        <input type="text" name="degree" value="<?php echo $current_user->getDegree() ?? ""; ?>" required>
        <br>
        <label for="interests">Update Interests:</label>
        <input type="text" name="interests" value="<?php echo $current_user->getInterests() ?? ""; ?>" required>
        <br>
        <label for="fav_book=">Change Favorite Book:</label>
        <input type="text" name="fav_book" value="<?php echo $current_user->getFavBook() ?? ""; ?>" required>
        <br>
        <input type="hidden" name="employee_role" value="<?php echo $current_role; ?> ">
        <input type="submit">
    </form>

<?php include_once '../footer.php';