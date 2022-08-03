<?php
$getMoneyTodayDetail = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');


$money["date"] = strval($getMoneyTodayDetail["Date"]);

$money["result"][]= Array(
    "CurrencyName" => strval($getMoneyTodayDetail->Currency[0]->CurrencyName),
    "ForexBuying" => strval($getMoneyTodayDetail->Currency[0]->ForexBuying),
    "ForexSelling" => strval($getMoneyTodayDetail->Currency[0]->ForexSelling),
    "BanknoteBuying" => strval($getMoneyTodayDetail->Currency[0]->BanknoteBuying),
    "BanknoteSelling" => strval($getMoneyTodayDetail->Currency[0]->BanknoteSelling)
);

$money["result"][]= Array(
    "CurrencyName" => strval($getMoneyTodayDetail->Currency[3]->CurrencyName),
    "ForexBuying" => strval($getMoneyTodayDetail->Currency[3]->ForexBuying),
    "ForexSelling" => strval($getMoneyTodayDetail->Currency[3]->ForexSelling),
    "BanknoteBuying" => strval($getMoneyTodayDetail->Currency[3]->BanknoteBuying),
    "BanknoteSelling" => strval($getMoneyTodayDetail->Currency[3]->BanknoteSelling)
);

$money["result"][] = Array(
    "CurrencyName" => strval($getMoneyTodayDetail->Currency[7]->CurrencyName),
    "ForexBuying" => strval($getMoneyTodayDetail->Currency[7]->ForexBuying),
    "ForexSelling" => strval($getMoneyTodayDetail->Currency[7]->ForexSelling),
    "BanknoteBuying" => strval($getMoneyTodayDetail->Currency[7]->BanknoteBuying),
    "BanknoteSelling" => strval($getMoneyTodayDetail->Currency[7]->BanknoteSelling)
);


 echo json_encode($money);
?>