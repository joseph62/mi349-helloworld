<?php
require 'lib/Homepage/GameView.php';
$view = new GameView();
$view->setTitle("Game");
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
echo $view->header();
echo $view->page();
echo $view->footer();
?>
</body>
</html>
