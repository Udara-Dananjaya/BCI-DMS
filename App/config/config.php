<?php
$config['system_dump'] =false;
$config['variable_dump'] =false;

// debug configuration
$config['debug'] =true;// enable debug mode (true/false)

define('BASE', 'https://devt2.incodexcel.com/'); // base url for the site
// define('BASE', 'http://localhost:5000/'); // base url for the site

// site configuration
$config['app_name'] ="BCI Data Management" ;// site name
$config['app_desc'] ="BCI Data Management" ;// site name

// email configuration
$config['smtp_host'] ="sandbox.smtp.mailtrap.io" ; // smtp server hostname
$config['smtp_port'] =2525 ; // smtp server port
$config['smtp_username'] ="32e75b4161d1c5" ; // smtp username
$config['smtp_password'] ="291b6dbca28002" ; // smtp password
$config['smtp_email'] ="admin@example.com" ; // administrator email address
$config['smtp_name'] ="Sender" ; // administrator email address

// routes configuration
$config['defcon']='Auth'; // default controller
$config['defmet']= 'index'; // default controller

$config['temp_eng']= true; // template engine
$config['mail_lib']= true; // template engine