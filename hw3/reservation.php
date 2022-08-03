<?php


$message = "";
$name = "";
$phone = "";
$email = "";
$pname = "";
$rDate = "";

if(!empty($_POST['name']))       $name       = $_POST['name'];        else $message         = 'Wrong!';
if(!empty($_POST['phone']))      $phone      = $_POST['phone'];       else $message         = 'Wrong!';
if(!empty($_POST['email']))      $email      = $_POST['email'];       else $message         = 'Wrong!';
if(!empty($_POST['pname']))      $pname      = $_POST['pname'];       else $message         = 'Wrong!';
if(!empty($_POST['rDate']))      $rDate      = $_POST['rDate'];       else $message         = 'Wrong!';


if($message!="") {
  $message = "Wrong! Please fill in all fields";
  $result = 0;
}  else {
  $message = "Reservation Successfull.";
  $result = 1;
}

$json = array(
   "result" => $result,
   "message" => $message,
   "name" => $name,
   "phone" => $phone,
   "email" => $email,
   "pname" => $pname,
   "rDate" => $rDate
);

die(json_encode($json));

?>