<?php
// 1. erstelle ein Array mit folgender Zahlenfolge
// 0 1 1 2 3 5 8 13 21----
// es soll keine Zahl vorkommen die > 1000 ist

// 2. erstelle ein Array mit allen positiven Zahlen, die <= 900 sind,
// dieser Zahlen sollen nicht durch 2,3,5,7,11,13,17,23,29,31 teilbar sein

echo 'Aufgabe 1' . '<br>';
$array1 = [0, 1];
$count = count($array1);

while ($array1[$count - 1] + $array1[$count - 2] < 1000) {

    $array1[$count] = $array1[$count - 1] + $array1[$count - 2];
    $count = count($array1);
}

echo '<pre>';
print_r($array1);
echo '</pre>';

// fibonacci : fibo[$i] = fibo[$i-2] + fibo[$i-1]


echo '<br>';
echo '<br>';
echo 'Aufbabe 2' . '<br>';

$array2 = array();
for ($x = 0; $x <= 900; $x++) {
    if ($x % 2 != 0 && $x % 3 != 0 && $x % 5 != 0 && $x % 7 != 0 && $x % 11 != 0 && $x % 13 != 0 && $x % 17 != 0 && $x % 19 != 0 && $x % 23 != 0 && $x % 29 != 0 && $x % 31 != 0) {
        $array2[] = $x; }
}



//$arrayPrimes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31];
//$array3 = array();
//$x = 0;
//
//foreach ($arrayPrimes as $primes) {
//    while ($x <= 900) {
//        if ($x % $primes != 0) {
//            $array3[] = $x;
//        }
//        $x++;
//    }
//}

//            STILL TO FINISH!

echo '<pre>';
print_r($array2);
//print_r($array3);
//print_r($primes);
echo '</pre>';
