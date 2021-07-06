<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

$month = date('m');

// echo $month;

// echo cal_days_in_month(CAL_GREGORIAN, 7, 2020);

date_default_timezone_set('Europe/Paris');
// echo date('t', mktime(time()));
// echo 'Aujourd\'hui :       '.date('Y-m-d')."\n";

$daysInMonth = date('t');
$month = date('n');
$year = date('Y');

for ($i = 1; $i <= $daysInMonth; ++$i) {
    // code...
    echo date('j', mktime(0, 0, 0, $month, $i, $year));
}

function reverseNumber($number)
{
    return (int) strrev((string) $number);
}

echo gettype(reverseNumber(235));

function longest($str)
{
    $arr = explode(' ', $str);

    return array_reduce($arr, function ($max, $current) {
        return strlen($current) > strlen($max) ? $current : $max;
    });
}

echo longest('I am the strongest man in the world');
