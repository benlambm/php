<?php include_once '../header.php';?>

    <h1>GET Form</h1>
    <h4>User Product Survey</h4>

    <?php require_once 'list_products.php'; ?>

    <br>
    <h4>USER SURVEY: Please rank the three products above and click Submit when finished.</h4>
    <br>
    <form action="get_results.php" method="GET">
        <?php require_once 'form_fields.php'; ?>
        <input type="submit">
    </form>

<?php include_once '../footer.php';