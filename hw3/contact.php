<?php


$name = "";
$subject = "";
$phone = "";
$address = "";
$country = "";
$zipCode = "";
$email = "";
$message = "";


if(!empty($_POST['name']))       $name     = $_POST['name'];        else $rmessage      = 'Wrong!';
if(!empty($_POST['subject']))   $subject = $_POST['subject'];       else $rmessage  = 'Wrong!';
if(!empty($_POST['phone']))   $phone = $_POST['phone'];             else $rmessage  = 'Wrong!';
if(!empty($_POST['address']))    $address  = $_POST['address'];     else $rmessage   = 'Wrong!';
if(!empty($_POST['country']))    $country  = $_POST['country'];     else $rmessage   = 'Wrong!';
if(!empty($_POST['zipCode']))    $zipCode  = $_POST['zipCode'];     else $rmessage   = 'Wrong!';
if(!empty($_POST['email']))      $email    = $_POST['email'];       else $rmessage     = 'Wrong!';
if(!empty($_POST['message']))      $message    = $_POST['message'];       else $rmessage     = 'Wrong!';

if($rmessage!="") {
  $rmessage = "Wrong! Please fill in all fields";
  $result = 0;
}  else {
  $rmessage = "Contact From Successfull.";
  $result = 1;
}

$json = array(
   "result" => $result,
   "rmessage" => $rmessage,
   "name" => $name,
   "subject" => $subject,
   "phone" => $phone,
   "address" => $address,
   "country" => $country,
   "zipCode" => $zipCode,
   "email" => $email,
   "message" => $message
);

die(json_encode($json));

?>