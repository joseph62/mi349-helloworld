<?php
require 'lib/Homepage/ContactMeView.php';
$view = new ContactMeView();
$view->setTitle('Contact Me');
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
