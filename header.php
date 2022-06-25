<!DOCTYPE HTML>
<html lang="en">

    <head>
        <title>CSIS410 Web Enterprise Technologies</title>
        <meta name="description" content="Enterprise Web Development in PHP Code Homeworks">
        <meta name="keywords" content="php web development enterprise technologies">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="http://php.ad4mtech.com/style.css" >

    </head>

    <body>
        <main id="all-content">
        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
                echo '<p><a href="/wk4_sessions/chart.php">RETURN</a></p>';
                echo '<p><a href="/logout.php">LOG OUT</a></p>';
            } ?>
