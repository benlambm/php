<?php
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
//Product 1 variables
$colors1 = $_GET['colors1'];
$theme1 = $_GET['theme1'];
$style1 = $_GET['style1'];
$quality1 = $_GET['quality1'];
$price1 = $_GET['price1'];
$comments1 = $_GET['comments1'];
//Product 2 variables
$colors2 = $_GET['colors2'];
$theme2 = $_GET['theme2'];
$style2 = $_GET['style2'];
$quality2 = $_GET['quality2'];
$price2 = $_GET['price2'];
$comments2 = $_GET['comments2'];
//Product 3 variables
$colors3 = $_GET['colors3'];
$theme3 = $_GET['theme3'];
$style3 = $_GET['style3'];
$quality3 = $_GET['quality3'];
$price3 = $_GET['price3'];
$comments3 = $_GET['comments3'];

include_once '../header.php'; ?>

<h1>GET Form Report</h1>
<h2>User Product Survey Results for <?php echo $first_name." ".$last_name;?></h2>
<br>
<h3>Product 1 Rankings</h3>
<ul>
    <li>Colors were <?php echo $colors1;?></li>
    <li>Theme/message is <?php echo $theme1;?></li>
    <li>Style/shape is <?php echo $style1;?></li>
    <li>Material quality is <?php echo $quality1;?></li>
    <li>Price is <?php echo $price1;?></li>
    <li>Other comments on Product1 from <?php echo $first_name.": ".$comments1;?></li>
</ul>
<hr>
<h3>Product 2 Rankings</h3>
<ul>
    <li>Colors were <?php echo $colors2;?></li>
    <li>Theme/message is <?php echo $theme2;?></li>
    <li>Style/shape is <?php echo $style2;?></li>
    <li>Material quality is <?php echo $quality2;?></li>
    <li>Price is <?php echo $price2;?></li>
    <li>Other comments on Product1 from <?php echo $first_name.": ".$comments2;?></li>
</ul>
<hr>
<h3>Product 3 Rankings</h3>
<ul>
    <li>Colors were <?php echo $colors3;?></li>
    <li>Theme/message is <?php echo $theme3;?></li>
    <li>Style/shape is <?php echo $style3;?></li>
    <li>Material quality is <?php echo $quality3;?></li>
    <li>Price is <?php echo $price3;?></li>
    <li>Other comments on Product1 from <?php echo $first_name.": ".$comments3;?></li>
</ul>
<hr>

<?php include_once '../footer.php';