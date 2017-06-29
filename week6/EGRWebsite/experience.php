<?php
require 'lib/Homepage/ExperienceView.php';
$view = new ExperienceView();
$view->setTitle("Experience");
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
