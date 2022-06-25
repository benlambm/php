<?php
session_start();
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
</div>
<?php
include_once '../footer.php';
