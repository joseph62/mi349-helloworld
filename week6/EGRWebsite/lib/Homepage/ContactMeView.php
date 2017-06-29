<?php
require_once 'View.php';

/**
 * Created by PhpStorm.
 * User: sean
 * Date: 5/28/17
 * Time: 7:55 PM
 */
class ContactMeView extends View {

    public function __construct() {
        parent::__construct();
    }
    public function head(){
        $html = parent::head();
        $html .= <<<HTML
<script src="jslib/validateContact.js"></script>
<script>
window.onload = function(){
    new contactValidator(document, "Submit", "Name", "Message", "Email", "Error");
};
</script>
HTML;

        return $html;
    }

    public function page(){
        $html = <<<HTML
<div class="card">
<form action="post/contactme.php" method="post">
<fieldset>
<legend>Contact:</legend>

<p>
<label class="Name">Name:</label>
<input type="text" id="Name" name="Name"  placeholder="Name">
</p>

<p>
<label class="Email">Email:</label>
<input type="email" id="Email" name="Email" placeholder="Email">
</p>

<p>
<label class="Message">Message:</label>
<textarea id="Message" name="Message" name="Message" placeholder="Message"></textarea>
</p>

<p>
<input type="submit" id="Submit" value="Send">
</p>
<div id="Error"></div>
</fieldset>
</form>
</div>
HTML;

        return $html;
    }
}