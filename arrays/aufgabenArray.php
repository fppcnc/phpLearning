<?php
echo 'Aufgabe 1';
echo '<br>';
//Erstelle ein Array und fülle es mit einer Schleife mit den Zahl 2,3,4,5
$number = array();

for ($value = 2; $value < 6; $value++) {
    $number[] = $value;
}
// Nimm dieses Array und gib, mithilfe einer Schleife, deren Werte einzeln untereinander aus.
for ($key = 0; $key < count($number); $key++) {
    echo $number[$key];
    echo '<br>';
}
echo '<br>';
echo '<br>';
echo 'Aufgabe 2';
echo '<br>';
// Erstelle ein Array mit allen geraden Zahlen von 0 bis 100 einschließlich, die Zahlen sollen aufsteigend sein
$evenNumber = array();

for ($evenValue = 0; $evenValue <= 100; $evenValue += 2) {
    $evenNumber[] = $evenValue;
}

for ($evenKey = 0; $evenKey < count($evenNumber); $evenKey++) {
    echo $evenNumber[$evenKey];
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo 'Aufgabe 3';
echo '<br>';
//Erstelle ein Array mit den Zahlen aufsteigend 3,5,7,9,..,131
$oddNumber = array();

for ($oddValue = 3; $oddValue <= 131; $oddValue += 2) {
    $oddNumber[] = $oddValue;
}

for ($oddKey = 0; $oddKey < count($oddNumber); $oddKey++) {
    echo $oddNumber[$oddKey];
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo 'Aufgabe 4';
echo '<br>';
//Erstelle ein Array mit den Zahlen 15,20,...,105
$fiveNumber = array();

for ($fiveValue = 15; $fiveValue <= 105; $fiveValue += +5) {
    $fiveNumber[] = $fiveValue;
}

for ($fiveKey = 0; $fiveKey < count($fiveNumber); $fiveKey++) {
    echo $fiveNumber[$fiveKey];
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo 'Aufgabe 5';
echo '<br>';
//Erstelle ein Array mit den Zahlen 0,0.1,0.2,...,1.0
$floatNumber = array();

for ($floatValue = 0; $floatValue <= 1; $floatValue += 0.1) {
    $floatNumber[] = $floatValue;
}

for ($floatKey = 0; $floatKey < count($floatNumber); $floatKey++) {
    echo $floatNumber[$floatKey];
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo 'Aufgabe 6';
echo '<br>';
// Aufgabe erstelle ein Array 22, 20, 18, ... -8

$negativeNumber = array();

for ($negativeValue = 22; $negativeValue >= -8; $negativeValue -= 2) {
    $negativeNumber[] = $negativeValue;
}

for ($negativeKey = 0; $negativeKey < count($negativeNumber); $negativeKey++) {
    echo $negativeNumber[$negativeKey];
    echo '<br>';
}

//echo '<pre>';
//print_r($evenNumber);
//echo '</pre>';