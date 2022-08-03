<?php


$getMoneyTodayDetail = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

$money['USD'] = $getMoneyTodayDetail->Currency[0]->BanknoteBuying;
$money['CAD'] = $getMoneyTodayDetail->Currency[3]->BanknoteBuying;
$money['EUR'] = $getMoneyTodayDetail->Currency[7]->BanknoteBuying;

if(!empty($_GET['fromValue']))       $fromValue     = $_GET['fromValue'];      else $fromValue      = 0;
if(!empty($_GET['fromCurrency']))    $fromCurrency  = $_GET['fromCurrency'];   else $fromCurrency   = 'USD';

if(!empty($_GET['toValue']))       $toValue     = $_GET['toValue'];      else $toValue      = 0;
if(!empty($_GET['toCurrency']))    $toCurrency  = $_GET['toCurrency'];   else $toCurrency   = 'USD';



if($fromValue != 0)
     $toValue   = ( ($money[$fromCurrency] * $fromValue ) / $money[$toCurrency]);
else
     $fromValue = ( ($money[$toCurrency] * $toValue ) / $money[$fromCurrency]);

//die($toCurrency." : ".$money[$toCurrency]."<br />".$fromCurrency." : ".$money[$fromCurrency]);

?>
<!DOCTYPE html>

<html>

<head>
  <title>Assignment 2: Currency Calculator</title>
</head>

<body>

<form action="activity6.php" method="get">

    <table>
        <tr>
            <td>From :</td>
            <td><input type="text" name="fromValue" value = "<?=number_format($fromValue,2); ?>"/></td>
            <td>Currency :</td>
            <td>
            <select name="fromCurrency">
                <option value="USD" <?= ($fromCurrency == 'USD') ? 'selected="selected"':'';?>>US Dollar</option>
                <option value="CAD" <?= ($fromCurrency == 'CAD') ? 'selected="selected"':'';?>>Canadian Dollar</option>
                <option value="EUR" <?= ($fromCurrency == 'EUR') ? 'selected="selected"':'';?>>Euro</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>To :</td>
            <td><input type="text" name="toValue" value = "<?=number_format($toValue,2); ?>" /></td>
            <td>Currency :</td>
            <td>
            <select name="toCurrency">
                <option value="USD" <?= ($toCurrency == 'USD') ? 'selected="selected"':'';?>>US Dollar</option>
                <option value="CAD" <?= ($toCurrency == 'CAD') ? 'selected="selected"':'';?>>Canadian Dollar</option>
                <option value="EUR" <?= ($toCurrency == 'EUR') ? 'selected="selected"':'';?>>Euro</option>
            </select>
            </td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td><input type="submit" value="convert" /></td>
        </tr>
    </table>
</form>
</body>
</html>
