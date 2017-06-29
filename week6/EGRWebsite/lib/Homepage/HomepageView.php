<?php
require_once 'View.php';
/**
 * Created by PhpStorm.
 * User: sean
 * Date: 5/26/17
 * Time: 9:03 PM
 */
class HomepageView extends View
{

    public function __construct() {
        parent::__construct();
    }

    public function page(){

        $html = <<<HTML

<div class="card">
<div class="left">
<p class="profile-pic"><img src="images/sean.jpg" width="952" height="960" alt="Picture of Sean Joseph"></p>
</div>
<div class="right">
<p>
    Hello! My name is Sean Joseph. I'm glad you're here. Hopefully you'll
    learn a little more about me through this site. 
</p>
<p>
    The About Me page is where you can learn a little more about
    my personal life. Things like what I do in my free time and
    my favorite color. 
</p>
<p>
    Experience goes into my work history and
    personal projects that I've completed. 
</p>
<p>
    The game page is constantly
    under construction because I'm in the process of making some meaningless
    JavaScript game. I was thinking perhaps tetris, pong, or something like that.
</p>
</div>
</div>
HTML;

        return $html;

    }

}