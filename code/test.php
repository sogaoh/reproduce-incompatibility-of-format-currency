<?php

$fmt = new \NumberFormatter('JA_JP', \NumberFormatter::CURRENCY);
$formatString = $fmt->formatCurrency(0, 'JPY');

var_dump($formatString);
