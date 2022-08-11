<?php
require_once 'autoloader.php';

$data = array(
    "from_name" => "Notify",
    "reply_to_name" => "Fashion Sponge",
    "reply_to_mail" => "fashionsponge78@gmail.com",
    "to_name" => "Jesus Erwin Suarez",
    "to_mail" => "mrjesuserwinsuarez@gmail.com",
    "subject" => "This is api testing from customer",
    "content" => "
Hi There, 

I am glad to test this email api. 

Best Regards,
Customer
", // Note: "content" => will auto format in the email body
);

$token = 'ea6CpSQAr0f4zRCqBiNkX0kEQMdOwl'; // replace this with your account token from https://notify.easimpt.com

$easimptNotify = new \EasimptNotify\EasimptNotify($token);
$easimptNotify->setData($data);
$response = $easimptNotify->sendMail();

echo "<pre>";
print_r($response);
echo "</pre>";