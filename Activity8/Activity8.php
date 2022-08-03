<?php


$pname = "";
$birthday = "";
$email = "";
$website = "";

if(!empty($_GET['pname']))      $pname      = $_GET['pname'];       else $pname         = 'Wrong!';
if(!empty($_GET['birthday']))   $birthday   = $_GET['birthday'];    else $birthday      = 'Wrong!';
if(!empty($_GET['email']))      $email      = $_GET['email'];       else $email         = 'Wrong!';
if(!empty($_GET['website']))    $website    = $_GET['website'];     else $website       = 'Wrong!';

?>
<!DOCTYPE html>
<html>
<head>
  <title>Activity8</title>
  <meta charset="utf-8" />
</head>
<body>

<h1>Preview</h1>
<table>
        <tr>
            <td>what programing language do you know?</td>
            <td>:</td>
            <td><?=$pname;?></td>
        </tr>
        <tr>
            <td>what is your birthday?</td>
            <td>:</td>
            <td><?=$birthday;?></td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td>:</td>
            <td><?=$email;?></td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td><?=$website;?></td>
        </tr>
    </table>
</body>
</html>