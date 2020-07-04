<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MyPHPMailer {
    public function PHPMailer() {
        require_once('PHPMailer/src/PHPMailer.php');
        require_once('PHPMailer/src/Exception.php');
        require_once('PHPMailer/src/OAuth.php.php');
        require_once('PHPMailer/src/SMTP.php');
        require_once('PHPMailer/src/POP3.php');
    }
}