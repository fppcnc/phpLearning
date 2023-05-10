<?php
// Mitarbeiter Array
//$employee0 = ['Anna' , 'Angst' , 80];
//$employee1 = ['Ipek' , 'Arslan' , 45];
//$employee2 = ['Peter' , 'Panne' , 88];

// der index sagt nicht viel, da nur eine Zahl
// schöner wäre

$employees = [];
$employees[0] = ['vorname' =>'Anna' ,'nachname' => 'Angst' ,'gewicht' => 80];
$employees[1] = ['vorname' =>'Ipek' ,'nachname' => 'Arslan' ,'gewicht' => 45];
$employees[2] = ['vorname' =>'Peter' ,'nachname' => 'Panne' ,'gewicht' => 88];

// ein assoziatives Array hat als Schlüssel einen string, der eine Bedeutung assoziiert
// Gesamtgewicht
$weight = 0;
foreach ($employees as $employee) {
    $weight += $employee['gewicht'];
}
echo $weight . '<br>';

// Ausgabe von einem assoziativen Array
/**
 * $employees von Datentyp Array
 */
foreach ($employees[0] as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
}