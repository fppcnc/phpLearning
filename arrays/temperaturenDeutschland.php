<?php

//Temperaturen Deutschland
//      	9 Uhr	12 Uhr	15 Uhr	18 Uhr
//Berlin	7.2	    8.9	    10	    9.9
//Hamburg	6.2	    6.3	    6.4	    6.5
//München	2.3	    3.7	    6.6	    8.1
//
//1.	Erstelle ein numerisches Array für die Temperaturen für Berlin

$Berlin = ['9am' => '7.2', '12pm' => '8.9', '3pm' => '10', '6pm' => '9.9'];
echo '<pre>';
print_r($Berlin);
echo '</pre>';
echo '<br>';

//2.	Berechne die Tagesdurchschnittstemperatur für Berlin

//$tempAvgBer = array_sum($Berlin) / count($Berlin);


$sumBerlin = 0;
foreach ($Berlin as $value){
    $sumBerlin += $value;
}

$tempAvgBer = $sumBerlin / count($Berlin);

echo 'Average Temperature in Berlin is : ' . $tempAvgBer . '<br>';

//3.	Mache das gleiche für Hamburg und München.

$Hamburg = ['9am' => '6.2', '12pm' => '6.3', '3pm' => '6.4', '6pm' => '6.5'];

echo '<pre>';
print_r($Hamburg);
echo '</pre>';
echo '<br>';

$tempAvgHam = array_sum($Hamburg) / count($Hamburg);

echo 'Average Temperature in Hamburg is : ' . round($tempAvgHam, $precision = 1) . '<br>';

$Muenchen = ['9am' => '2.3', '12pm' => '3.7', '3pm' => '6.6', '6pm' => '8.1'];

echo '<pre>';
print_r($Muenchen);
echo '</pre>';
echo '<br>';

$tempAvgMue = array_sum($Muenchen) / count($Muenchen);

echo 'Average Temperature in Muenchen is : ' . round($tempAvgMue, $precision = 1) . '<br>';

//4.	Erstelle ein 2-dimensionales numerisches Array welches die Temperaturen von allen 3 Städten enthält

$tempDeutschland = ['Berlin' => $Berlin, 'Hamburg' => $Hamburg, 'Muenchen' => $Muenchen];

echo '<pre>';
print_r($tempDeutschland);
echo '</pre>';
echo '<br>';

//5.	Bestimme die Durchschnittstemperatur aller 12 Werte

$totalTemp = [];

function calculateAvgTempDE($tempDeutschland){
//    $morgen = 0;
//    $mittag = 0;
//    $nachmittag = 0;
//    $abend = 0;
    $city= 0;
    $temp = 0;
    foreach ($tempDeutschland as $city) {
        foreach ($city as $temp){
            echo '<pre>';
            print_r($city);
            echo '</pre>';
        }
    }
}
//foreach ($tempDeutschland as $value) {
//    $totalTemp = array_merge($totalTemp, $value);
//    print_r($totalTemp);
//}
//$tempAvgDeutschland = array_sum($totalTemp) / count($totalTemp);
//$tempAvgDeutschland = array_sum($tempDeutschland);

//echo 'Average Temeprature in Deutschland is : ' . $tempAvgDeutschland . '<br>';