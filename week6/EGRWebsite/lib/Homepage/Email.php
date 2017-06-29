<?php
/**
 * Created by PhpStorm.
 * User: sean
 * Date: 4/6/17
 * Time: 3:55 PM
 */

class Email
{
    public function mail($to, $subject, $message, $headers){
        mail($to, $subject, $message, $headers);
    }

}