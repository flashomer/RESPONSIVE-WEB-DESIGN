<?php


$name = "";
$username = "";
$password = "";
$address = "";
$country = "";
$zipCode = "";
$email = "";
$sex = "";
$language = "";
$about = "";


if(!empty($_GET['name']))       $name     = $_GET['name'];      else $name      = 'Wrong!';
if(!empty($_GET['username']))   $username = $_GET['username'];  else $username  = 'Wrong!';
if(!empty($_GET['password']))   $password = $_GET['password'];  else $password  = 'Wrong!';
if(!empty($_GET['address']))    $address  = $_GET['address'];   else $address   = 'Wrong!';
if(!empty($_GET['country']))    $country  = $_GET['country'];   else $country   = 'Wrong!';
if(!empty($_GET['zipCode']))    $zipCode  = $_GET['zipCode'];   else $zipCode   = 'Wrong!';
if(!empty($_GET['email']))      $email    = $_GET['email'];     else $email     = 'Wrong!';
if(!empty($_GET['sex']))        $sex      = $_GET['sex'];       else $sex       = 'Wrong!';
if(!empty($_GET['language']))   $language = $_GET['language'];  else $language  = 'Wrong!';
if(!empty($_GET['about']))      $about    = $_GET['about'];     else $about     = 'Wrong!';

?>
<!DOCTYPE html>
<html>
<head>
  <title>My Page Form Preview</title>
  <meta charset="utf-8" />
</head>
<body>

<h1>Preview</h1>
<table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?=$name;?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?=$username;?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><?=$password;?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td><?=$address;?></td>
        </tr>
        <tr>
            <td>Country</td>
            <td>:</td>
            <td><?=$country;?></td>
        </tr>
        <tr>
            <td>ZIP Code</td>
            <td>:</td>
            <td><?=$zipCode;?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?=$email;?></td>
        </tr>
        <tr>
            <td>Sex</td>
            <td>:</td>
            <td><?=$sex;?></td>
        </tr>
        <tr>
            <td>Language</td>
            <td>:</td>
            <td><?=$language;?></td>
        </tr>
        <tr>
            <td>About</td>
            <td>:</td>
            <td><?=$about;?></td>
        </tr>

    </table>
</body>
</html>