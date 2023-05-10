<?php
// array_merge

$a = [5,4,3];
$b = [2,1];
$c = array_merge($a,$b);
print_r($c);


// explode
$deutschesDatum = "28.03.2023";  //umwandeln im SQL-Format

echo implode('-', array_reverse(explode('.', $deutschesDatum))); //'2023-03-28'