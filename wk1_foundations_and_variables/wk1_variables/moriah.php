<?php include_once '../header.php';
include_once './Employee.php';
session_start();
$pastorMoriah = $_SESSION['Jr'];
?>

<div id="bio-page">
    <h1>Park View Ministries</h1>
    <img class="profile" src="<?php echo $pastorMoriah->getPhotoUrl(); ?>" alt="employee profile">
    <h2><?php echo $pastorMoriah->getName().", ".$pastorMoriah->getJobTitle();?></h2>
    <blockquote><?php echo $pastorMoriah->getBioInfo(); ?></blockquote>
    <p>Moriah has a <?php echo $pastorMoriah->getDegree()."."; ?></p>
    <p>Her passions include <?php echo $pastorMoriah->getInterests()."."; ?></p>
    <p>Her favorite book is <?php echo $pastorMoriah->getFavBook()."."; ?></p>
</div>

<?php include_once '../footer.php'; ?>
