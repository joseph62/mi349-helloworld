<?php
require_once 'View.php';
/**
 * Created by PhpStorm.
 * User: sean
 * Date: 5/26/17
 * Time: 9:03 PM
 */
class GameView extends View
{

    public function __construct() {
        $this->addNav("Home", "./");
        $this->addNav("About Me", "aboutme.php");
        $this->addNav("Experience", "experience.php");
        $this->addNav("Game", "game.php");

    }

    public function head(){
        $html = parent::head();
        $html .= <<<HTML
        
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="jslib/paddleball.js"></script>
<script>
$(document).ready(function() {
    new Paddle("home-game", "player", document);
});
</script>
HTML;

        return $html;

    }

    public function page(){
        $html = <<<HTML

<div class="home-game">

<div class="player"></div>
</div>

HTML;

        return $html;

    }

}