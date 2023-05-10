<?php
// Mitarbeiter Array
$employee0 = ['Anna' , 'Angst' , 80];
$employee1 = ['Ipek' , 'Arslan' , 45];
$employee2 = ['Peter' , 'Panne' , 88];

// Aufgabe 1. gib alle Vornamen aus
echo 'Aufbabe 1' . '<br>';

$employees = [$employee0, $employee1, $employee2];

foreach ($employees as $employee){
    echo $employee[1] . '<br>';
}

// Aufgabe 2. gib alle Gewichts aus
echo '<br>';
echo '<br>';
echo 'Aufbabe 2' . '<br>';

foreach ($employees as $employee){
    echo $employee[2] . '<br>';
}

// Aufgabe 3. gib der Gesamtgewichts aus
echo '<br>';
echo '<br>';
echo 'Aufbabe 3' . '<br>';

$sum=0;
foreach ($employees as $employee){
    $sum += $employee[2];
}
echo $sum;



//Aufgabe 4. Gewicht der 2. Person
echo '<br>';
echo '<br>';
echo 'Aufbabe 4' . '<br>';

echo $employees [1][2];

//Aufgabe 5. Gesamtgewicht mit for-Schleife
echo '<br>';
echo '<br>';
echo 'Aufbabe 5' . '<br>';

$weight = 0;
for ($i = 0; $i < count($employees); $i++){
    $weight += $employees[$i][2];
}
echo $weight;