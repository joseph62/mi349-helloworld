<?php
require 'lib/Homepage/HomepageView.php';
$view = new HomepageView();
$view->setTitle("Sean Joseph's Homepage!");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    echo $view->head();
    ?>
</head>

<body>

<?php
$view->setTitle("Welcome to Sean Joseph's Homepage!");
echo $view->header();
echo $view->page();
echo $view->footer();
?>
</body>
</html>
