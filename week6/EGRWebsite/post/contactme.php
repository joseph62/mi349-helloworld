<?php
/**
 * Created by PhpStorm.
 * User: sean
 * Date: 5/28/17
 * Time: 7:56 PM
 */

require "../lib/Homepage/ContactMeController.php";

$controller = new ContactMeController($_POST);
header("location: " . $controller->getRedirect());
