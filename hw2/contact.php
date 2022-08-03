<?php


$name = "";
$username = "";
$password = "";
$address = "";
$country = "";
$zipCode = "";
$email = "";
$about = "";


if(!empty($_GET['name']))       $name     = $_GET['name'];      else $name      = 'Wrong!';
if(!empty($_GET['username']))   $username = $_GET['username'];  else $username  = 'Wrong!';
if(!empty($_GET['password']))   $password = $_GET['password'];  else $password  = 'Wrong!';
if(!empty($_GET['address']))    $address  = $_GET['address'];   else $address   = 'Wrong!';
if(!empty($_GET['country']))    $country  = $_GET['country'];   else $country   = 'Wrong!';
if(!empty($_GET['zipCode']))    $zipCode  = $_GET['zipCode'];   else $zipCode   = 'Wrong!';
if(!empty($_GET['email']))      $email    = $_GET['email'];     else $email     = 'Wrong!';
if(!empty($_GET['about']))      $about    = $_GET['about'];     else $about     = 'Wrong!';

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<head>
    <title>Homework2 - Contact</title>
    <meta name="description" content="AYBU Ahde Vefa" />
    <link rel="stylesheet" href="style.css"/>
    <script src="jquery-3.6.0.min.js"></script>

</head>
<body>

<div id="logo">
    <img src="img/Logo.svg" alt="logo" />
</div>

<div id="menu">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="product.html">Product</a></li>
        <li><a href="information.html">Information</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</div>

<div id="contact">

    <div id="slider">
        <a href="javascript:nextBtn();" id="nextBtn" >&nbsp;</a>
        <a href="javascript:backBtn();" id="backBtn" >&nbsp;</a>

        <div id="sld_foto">
            <div class="fotolar" id="sld">
                <img src="img/slider/1.jpg" alt="slider1" />
                <img src="img/slider/2.jpg" alt="slider2"  />
                <img src="img/slider/1.jpg" alt="slider3"  />
                <img src="img/slider/2.jpg" alt="slider4"  />
            </div>
        </div>
    </div>

 <div class="ct-1">

        <div class="info md-1">
            <label>Contact Form</label>
            <img src="img/contact.jpg" alt="contact" class="img-right" style="max-width:35%" />
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
            <td>About</td>
            <td>:</td>
            <td><?=$about;?></td>
        </tr>

    </table>
        </div>

 </div>

</div>

<div id="footer">

        <div class="part md-3">
            <label>Sitemap</label>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="product.html">Product</a></li>
                <li><a href="information.html">Information</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

        </div>

        <div class="part md-3">

            <div class="md-1">
                <label>Subscribe</label>
                <form action="/" method="get">
                    <table>
                        <tr>
                            <td><input type="text" value="Email Adress" /></td>
                            <td><input type="submit" value="Subscribe" /> </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="md-1">
                <label>Search</label>
                <form action="/" method="get">
                    <table>
                        <tr>
                            <td><input type="text" value="search..." /></td>
                            <td><input type="submit" value="Search" /> </td>
                        </tr>
                    </table>
                </form>
            </div>

        </div>

        <div class="part md-3">
            <label>Follow Me</label>

            <div class="social">
              <a href="#instagram"><img src="img/social/instagram.png" alt="instagram" /></a>
              <a href="#facebook"><img src="img/social/facebook.png" alt="facebook" /></a>
              <a href="#linkedin"><img src="img/social/linkedin.png" alt="linkedin" /></a>
              <a href="#pinterest"><img src="img/social/pinterest.png" alt="pinterest" /></a>
              <a href="#twitter"><img src="img/social/twitter.png" alt="twitter" /></a>
              <a href="#youtube"><img src="img/social/youtube.png" alt="youtube" /></a>
              <a href="#whatsapp"><img src="img/social/whatsapp.png" alt="whatsapp" /></a>
            </div>

        </div>

</div>

<div id="copyRight">
     <div class="md-1">
        <label>Copyright © 2022 <br />Ömer YILDIRIM & Seydullah KAYA</label>
     </div>

     <div class="md-1">
        <div class="validate">
                <a href="https://jigsaw.w3.org/css-validator/validator?uri=https://aybu.org/ceng311/hw2/" target="_blank">
                    <img style="border:0;width:88px;height:31px"
                        src="https://jigsaw.w3.org/css-validator/images/vcss"
                        alt="Valid CSS!" />
                </a>

                <a href="https://validator.w3.org/nu/?doc=https://aybu.org/ceng311/hw2/" target="_blank">
                    <img style="border:0;width:88px;height:31px"
                        src="http://www.w3.org/Icons/valid-html401.png"
                        alt="Valid HTML!" />
                </a>
        </div>
      </div>

</div>

<script>
var sld = $('#sld img').length;

var documenWidth = $( document ).width() + 24;

var x = 0;
var d = 0;

function nextBtn() {
    if (sld > (d + 1)) {
        d++;
        x = x - documenWidth;
        $('#sld_foto').animate({
            marginLeft: x + "px"
        }, 400);
    } else {
        d = 0;
        x = 0;
        $('#sld_foto').animate({
            marginLeft: "0px"
        }, 400);
    }
}

function backBtn() {
    if (d > 0) {
        d--;
        x = x + documenWidth;
        $('#sld_foto').animate({
            marginLeft: x + "px"
        }, 400);
    } else {
        d = sld - 1;
        x = ((sld - 1) * (-documenWidth ));
        $('#sld_foto').animate({
            marginLeft: x + "px"
        }, 400);
    }
}

</script>

</body>

</html>