<?php
require_once 'autoloader.php';

$data = array(
     "from_name" => "", // optional
     "reply_to_name" => "", // optional
     "reply_to_mail" => "", // optional
    "to_name" => "Jesus Erwin Suarez",
    "to_mail" => "mrjesuserwinsuarez@gmail.com",
    "subject" => "This is api testing from customer",
    "content" => "
Hi There, 

I am glad to test this email api.   
  
  
   Thank you so much!


Best Regards,
Customer
", // Note: "content" => will auto format in the email body
);

$token = 'QjALW4SpNfGhIj6BzYGpH6gfXQk7la'; // replace this with your account token from https://notify.easimpt.com

$easimptNotify = new \EasimptNotify\EasimptNotify($token);
$easimptNotify->setData($data);
$response = $easimptNotify->sendMail();

echo "<pre>";
print_r($response);
echo "</pre>";