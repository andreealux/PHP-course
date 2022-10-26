<?php

//Print current timestamp
echo time().'<br>';

//print current date

echo date('d-m-Y H:i:s').'<br>';

//print yesterday

echo date('d-m-Y H:i:s', time() - 60 * 60 * 24).'<br>';

echo date('j F Y, H:i:s') . '<br>';

// string to timestamp

echo strtotime('now').'<br>';
echo strtotime('+1 week').'<br>';
echo date('d-m-Y H:i:s', strtotime('+1 week')).'<br>';

// parse date

$dateString = '2022-10-25 12:45:35';
$parsedDate = date_parse($dateString);

echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

//parse date from format

$dateString2 ='February 4 2020 12:45:35';
$parsedDate2 = date_parse_from_format('F j Y H:i:s', $dateString2);

echo '<pre>';
var_dump($parsedDate2);
echo '</pre>';