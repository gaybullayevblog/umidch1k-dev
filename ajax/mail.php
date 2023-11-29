<?php
parse_str($_POST['form_data'], $form);
$full_name = $form['full_name'];
$email = $form['email'];
$phone = $form['phone'];
$sjubject = $form['sjubject'];
$message = $form['message'];

define('TO_EMAIL', 'themewar@gmail.com');
define('SUBJECT', $sjubject);
define('FROM_EMAIL', $email);

$MESSAGE = 'Hi Admin, <br/><br/>';
$MESSAGE .= 'You got an user query from Bittanto. User details and Message are noted bellow: <br/><br/>';
$MESSAGE .= 'Name : '.$full_name.'<br/>';
$MESSAGE .= 'Email : '.$email.'<br/>';
if(!empty($phone)):
    $MESSAGE .= 'Phone : '.$phone.'<br/>';
endif;

$MESSAGE .= 'Message : <br/>'.$message.'<br/><br/>';
$MESSAGE .= 'Regards';

$HEADERS = "MIME-Version: 1.0" . "\r\n";
$HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$HEADERS .= 'From: <'.FROM_EMAIL.'>' . "\r\n";

mail(TO_EMAIL, SUBJECT, $MESSAGE, $HEADERS);
echo 1;
exit();