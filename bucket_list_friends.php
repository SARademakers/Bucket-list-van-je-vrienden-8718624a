<?php

$array = array();
echo ("Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL);
$aantal = readline();
if (is_numeric($aantal)) {
} else {
    exit("$aantal" . " " . "is niet numeric");
}
for ($i = 1; $i <= $aantal; $i++) {
    echo ("Wat is jouw naam?"). PHP_EOL; {
        $naam = readline();
    echo ("Wat is jouw droom?" . PHP_EOL);
    	$input = readline();
        $array[$naam] = $input;
    }
}
print_r ($array);
?>