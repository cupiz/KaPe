<?php
defined('BASEPATH') OR exit("No direct script access allowed");
$config['mail'] = array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.gmail.com',    // My host name
    'smtp_port' => 587,
    'smtp_user' => 'purbalinggadevinspek@gmail.com',   // My username
    'smtp_pass' => 'kosong31',   // My password
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE,
    'smtp_timeout' => 30,
    'newline' => "\r\n",
    'crlf' => "\r\n",
    'mailtype' => "text"
);