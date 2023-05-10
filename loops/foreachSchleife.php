<?php
$array = [];
$array[2] = 27;
$array[4] = 13;
$array[5] = 3;
$array[8] = 72;

//foreach ($array as $element) {
//    echo $element . '<br>';
//}

echo 'pt.2' . '<br>';

foreach ($array as $key => $element) {
    echo 'Index ' . $key . ' with value ' . $element . '<br>';
}

echo '<br>' . 'pt.3' . '<br>';

$employees = ['Mike','Freya','Filippo','Ferdi'];
//ich kündige Ferdi. Gib alle employees danach aus
foreach ($employees as $employee){
    echo $employee . '<br>';
}
echo '<br>';
unset ($employees[3]);
echo '<br>';
foreach ($employees as $emp){
    echo $emp . '<br>';
}
