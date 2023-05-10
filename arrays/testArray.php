<?php
// we want to sum 6 numbers that are saved in 6 different Variables
$number0 = 24;
$number1 = 2;
$number2 = 33;
$number3 = 417;
$number4 = 92;
$number5 = 51;

// we can reach the result through sum of each number
$sum = $number0 + $number1 + $number2 + $number3 + $number4 + $number5;
// but that's not convenient


// using an array makes it easier

// we can create an array in 2 different ways. As it follows as short version
$number = [24, 2, 33, 417, 92, 51];
// or as follows here for the long version
$number = array(24, 2, 33, 417, 92, 51);
// that means
$number[0] = 24;
$number[1] = 2;
$number[2] = 33;
$number[3] = 417;
$number[4] = 92;
$number[5] = 51;

// for-loop
for ($i = 0; $i < 6; $i++) {
    echo $number[$i];
    echo '<br>';
}
//echo $sum;