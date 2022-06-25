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

$pastorPhil = unserialize($_SESSION['Sr']);
?>

<div id="bio-page">
    <h1>Park View Ministries</h1>
    <img class="profile" src="<?php echo $pastorPhil->getPhotoUrl(); ?>" alt="employee profile">
    <h2><?php echo $pastorPhil->getName().", ".$pastorPhil->getJobTitle();?></h2>
    <blockquote><?php echo $pastorPhil->getBioInfo(); ?></blockquote>
    <p>Phil has a <?php echo $pastorPhil->getDegree()."."; ?></p>
    <p>His passions include <?php echo $pastorPhil->getInterests()."."; ?></p>
    <p>His favorite book is <?php echo $pastorPhil->getFavBook()."."; ?></p>
</div>

<?php include_once '../footer.php'; ?>