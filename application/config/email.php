<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/*
  Change protocol to sendmail or mail as required.
  Uncomment mailPath line if using sendmail
*/

$config['protocol'] = 'mail';
//$config['mailPath'] = '/usr/sbin/sendmail';

/*
  Uncomment the following and edit for smtp
*/
/*
$config['protocol'] = "smtp";
$config['smtp_host'] = "box.tsukitenshin.net";
$config['smtp_crypto'] = "tls";
$config['smtp_port'] = "587";
$config['smtp_user'] = "hello@ansuz.info";
$config['smtp_pass'] = "searixsux";
$config['smtp_timeout'] = 30;
*/

$config['email_from'] = "hello@ansuz.info";
$config['wordWrap'] = true;
$config['charset'] = "utf-8";
$config['mailtype'] = "html";
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";

// Comment out the following lines to disable the test email route

$config['testemail_enable'] = true;
$config['testemail_to'] = "liathional@gmail.com";
$config['testemail_subject'] = "test subject";
$config['testemail_message'] = "test message";

//
