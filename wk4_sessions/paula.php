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

$pastorPaula = unserialize($_SESSION['Pt']);
?>

<div id="bio-page">
    <h1>Park View Ministries</h1>
    <img class="profile" src="<?php echo $pastorPaula->getPhotoUrl(); ?>" alt="employee profile">
    <h2><?php echo $pastorPaula->getName().", ".$pastorPaula->getJobTitle();?></h2>
    <blockquote><?php echo $pastorPaula->getBioInfo(); ?></blockquote>
    <p>Paula has a <?php echo $pastorPaula->getDegree()."."; ?></p>
    <p>Her passions include <?php echo $pastorPaula->getInterests()."."; ?></p>
    <p>Her favorite book is <?php echo $pastorPaula->getFavBook()."."; ?></p>
</div>

<?php include_once '../footer.php'; ?>
