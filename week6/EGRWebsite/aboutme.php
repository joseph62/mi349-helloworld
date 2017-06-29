<?php
require "lib/Homepage/AboutMeView.php";
$view = new AboutMeView();
$view->setTitle("About Me");
?>

<!DOCTYPE html>
<head>
    <?php
    echo $view->head();
    ?>
</head>
<body>
<?php
    echo $view->header();
    echo $view->page();
    echo $view->footer();
?>
</body>