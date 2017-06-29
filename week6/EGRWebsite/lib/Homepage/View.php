<?php

/**
 * Created by PhpStorm.
 * User: sean
 * Date: 5/26/17
 * Time: 8:57 PM
 */
class View
{

    public function __construct() {
        $this->addNav("Home", "./");
        $this->addNav("About Me", "aboutme.php");
        $this->addNav("Experience", "experience.php");
        $this->addNav("Game", "game.php");
    }

    public function head(){

        $html = <<<HTML
    <meta charset="utf-8">
    <title>$this->title</title>
    <link href="style/SeanStyle.css" rel="stylesheet" type="text/css">
HTML;

        return $html;

    }

    public function header(){

        $html = <<<HTML
<header>
<h1>$this->title</h1>
    <nav><p class="nav-bar">|
HTML;
        foreach($this->links as $link){
            $name = $link['name'];
            $to = $link['link'];
            $html .= " <a href='$to'>$name</a> |";
        }
        $html .= <<<HTML
    </p></nav>
</header>
HTML;

        return $html;

    }

    public function page(){

        $html = <<<HTML
<div class="card">
<p>CONTENT COMING SOON!</p>
</div>
HTML;

        return $html;

    }

    public function addNav($name, $link){
        $this->links[] = array("name" => $name, "link" => $link);
    }

    public function footer(){

        $html = <<<HTML
<footer>
<p>Copyright 2017 Sean Joseph Enterprise | <a href="contactme.php">Contact Me</a> 
| The copyright thing was a joke</p>
</footer>
HTML;

        return $html;

    }

    public function setTitle($title){
        $this->title = $title;
    }

    private $links = array();
    private $title = "Not Set!";

}
