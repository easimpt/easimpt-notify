<?php
require_once 'autoloader.php';

$data = array(

    "to_name" => "Jesus Erwin Suarez",
//    "from_name" => "amazin111",
//    "from_mail" => "amazing111@mail.easimpt.com",
//    "reply_to_name" => "Fashion Sponge",
//    "reply_to_mail" => "fashionsponge78@gmail.com",
    "to_mail" => "mrjesuserwinsuarez@gmail.com",
    "subject" => "Title from curl222",
    "content" => "Email from EASIMPT 2323",
// "template" => [
//     "id" => 1,
//     "fields" => [
//         "{{title}}" => "EASIMPT MAIL (NOTIFYME) - Testing",
//         "{{main_title}}" => "What is Lorem Ipsum? 111111",
//         "{{sub_title}}" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been th nown",
//         "{{content}}" => "Lorem Ipsum is simply dummy text of the printing and ty ",
//         "{{link_for_more}}" => "https://google.com",
//         "{{text_for_more}}" => "visit google",
//         "{{copy_right_1}}" => "@ copy right 2020",
//         "{{copy_right_2}}" => "original copied from EASIMPT",
//         "{{facebook_link}}" => "https://facebook.com"
//     ]
// ]
);

$easimptNotify = new \EasimptNotify\EasimptNotify('ea6CpSQAr0f4zRCqBiNkX0kEQMdOwl');
$easimptNotify->setData($data);
$response = $easimptNotify->sendMail();

echo "<pre>";
print_r($response);
echo "</pre>";