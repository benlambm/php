<?php

$pastorPhil = new Employee("Phil Kniss", "Senior Pastor", "Masters of Divinity", "coffee, singing, and nature",
    "The Bible (KJV)", "Phil grew up on a chicken farm, but eventually studied at Yale Divinity School. He has been preaching at Park View for 25 years.",
    "./phil.php", "../images/phil.jpg");
$pastorMoriah = new Employee("Moriah Hurst", "Junior Pastor", "Masters of Divinity", "farming, pancakes, and naps",
    "Where The Wild Things Are", "Moriah is a transplant from native Australia where she was raised by kangaroos. She leads the church youth groups.",
    "./moriah.php", "../images/moriah.jpg");
$pastorPaula = new Employee("Paula Stoltzfus", "Part-Time Care Pastor", "Masters of Divinity", "meditation, gestalts, and ghosts",
    "Who's Afraid of the Dark", "Paula is a saint with one foot on earth and the other already in heaven. She is a practitioner of gestalt pastoral care.",
    "./paula.php", "../images/paula.jpg");

$_SESSION['Sr'] = serialize($pastorPhil);
$_SESSION['Jr'] = serialize($pastorMoriah);
$_SESSION['Pt'] = serialize($pastorPaula);
?>