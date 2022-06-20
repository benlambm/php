<?php include_once '../header.php';
include_once './Employee.php';
session_start();
$pastorPhil = new Employee("Phil Kniss", "Senior Pastor", "Masters of Divinity", "coffee, singing, and nature",
    "The Bible (KJV)", "Phil grew up on a chicken farm, but eventually studied at Yale Divinity School. He has been preaching at Park View for 25 years.",
    "./phil.php", "../images/phil.jpg");
$pastorMoriah = new Employee("Moriah Hurst", "Junior Pastor", "Masters of Divinity", "farming, pancakes, and naps",
    "Where The Wild Things Are", "Moriah is a transplant from native Australia where she was raised by kangaroos. She leads the church youth groups.",
    "./moriah.php", "../images/moriah.jpg");
$pastorPaula = new Employee("Paula Stoltzfus", "Part-Time Care Pastor", "Masters of Divinity", "meditation, gestalts, and ghosts",
    "Who's Afraid of the Dark", "Paula is a saint with one foot on earth and the other already in heaven. She is a practitioner of gestalt pastoral care.",
    "./paula.php", "../images/paula.jpg");
$_SESSION['Sr'] = $pastorPhil;
$_SESSION['Jr'] = $pastorMoriah;
$_SESSION['Pt'] = $pastorPaula;

?>
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
