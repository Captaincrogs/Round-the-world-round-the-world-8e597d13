<?php

$input = ($argv[1]);
$money = array(50, 20, 10, 5, 2, 1); $centen = array(50, 20 ,10 ,5);
$geld = intval($input);
$cent = $input - $geld;
$cent = intval(round($cent * 100));
$cent = round($cent / 5) * 5;
euro($money, $geld);

function euro($money, $geld) {
foreach ($money as $value) {
    $restbedrag = floor($geld / $value);
    if ($restbedrag >= 1) {
        $geld = $geld - ($value * $restbedrag);
        echo $restbedrag . " x " . $value . " euro" . PHP_EOL;
    }
}
}
centen($centen, $cent);

function centen($centen, $cent) {
foreach ($centen as $value) {
    $restcent = floor($cent / $value);
    if ($restcent >= 1) {
        $cent = $cent - ($value * $restcent);
        echo $restcent . " x " . $value . " cent" . PHP_EOL;
    }
}
}
?>
