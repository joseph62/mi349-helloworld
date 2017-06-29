<?php
require_once 'View.php';
/**
 * Created by PhpStorm.
 * User: sean
 * Date: 5/26/17
 * Time: 9:03 PM
 */
class AboutMeView extends View
{

    public function __construct() {
        parent::__construct();
    }

    public function page(){

        $html = <<<HTML
<div class="card">
<div class="left">
<p>
    I very much enjoy spending time with my friends.
    It doesn't much matter what I'm doing with them!
</p>
</div>
<div class="right">
<p class="profile-pic"><img src="images/headshot_standin.png" height="640" width="600" alt="stand-in"></p>
</div>
</div>

<div class="card">
<div class="left">
<div class="fav-color"></div>
</div>
<div class="right">
<p>My favorite color is probably green.
Attending MSU doesn't really have anything to do with it.
There's just something about a dark green that is comforting to me.
Maybe it's that it reminds me of the holidays and spending time with
my family. HA! Just kidding! I just like it for no reason.</p>
</div>
</div>

<div class="card">
<div class="left">
<p>
Computer building is something that I enjoy doing. 
I don't think I get to do it often enough to justify
calling it a hobby, but it is still very fun for me.
</p>
<p>
The picture on the right is my very first computer. 
I used it for about four years and I still have it 
with me. I'll probably still use it a server or something!
</p>
</div>
<div class="right">
<p class="profile-pic"><img src="images/headshot_standin.png" height="640" width="600" alt="stand-in"></p>
</div>
</div>
<!--
<div class="card">
<div class="left">

</div>
<div class="right">

</div>
</div>
-->
HTML;

        return $html;

    }

}