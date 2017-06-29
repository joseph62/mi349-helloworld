<?php
require_once 'Email.php';

/**
 * Created by PhpStorm.
 * User: sean
 * Date: 5/28/17
 * Time: 7:55 PM
 */
class ContactMeController
{
    public function __construct($post){
        $email = new Email();

        $subjectToMe = "Message From " . $post['Name'];
        $subjectToUser = "Message sent to Sean Joseph";
        $MyEmail = "joseph62@egr.msu.edu";
        $FromMeEmail = "Sean Joseph Homepage<joseph62@egr.msu.edu>";
        $UserEmail = $post['Email'];
        $Message = $post['Message'];

        $headersToMe = "From: $UserEmail" . "\r\n" .
            "Reply-To: $UserEmail" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        $headersToUser = "From: $FromMeEmail" . "\r\n" .
            "Reply-To: $FromMeEmail" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        $email->mail($MyEmail,$subjectToMe,$Message,$headersToMe);
        $email->mail($UserEmail, $subjectToUser, $Message, $headersToUser);

    }

    public function getRedirect(){
        return $this->redirect;
    }

    private $redirect = "../";

}