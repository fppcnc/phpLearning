<?php
$employeeSalesVolumes = [
//  [0][0][0]  [0][0][1]  [0][0]['Umsatz']  [0][1][0]  [0][1][1]  [0][1]['Umsatz']
    [['Freya', 'Norse', 'Umsatz' => 36123], ['Niels', 'Johanson', 'Umsatz' => 23667]],

//  [1][0][0]  [1][0][1]  [1][0]['Umsatz']  [1][1][0]   [1][1][1]  [1][1]['Umsatz']
    [['Chantal', 'Chani', 'Umsatz' => 54321], ['Petrow', 'Pankow', 'Umsatz' => 45454]],

//  [2][0][0]    [2][0][1]  [2][0]['Umsatz']    [2][1][0] [2][1][1] [2][1]['Umsatz']
    [['Pietra', 'Pasolini', 'Umsatz' => 111222], ['Toni', 'Mahoni', 'Umsatz' => 78222]],

//  [3][0][0]    [3][0][1]  [3][0]['Umsatz']  [3][1][0]    [3][1][1]   [3][1]['Umsatz']
    [['Harrison', 'Smith', 'Umsatz' => 33333], ['Cathrin', 'Laghrey', 'Umsatz' => 23232]]
];

// Aufgabe: Gib vorname, nachname und Umsatz pro Mitarbeiter aus
//  Gib den Gesamtumsatz aus
$gesamtUmsatz = 0;
for ($i=0;$i<count($employeeSalesVolumes);$i++){
    for($j=0;$j<count($employeeSalesVolumes[$i]);$j++){
        $gesamtUmsatz += $employeeSalesVolumes[$i][$j]['Umsatz'];
        echo $employeeSalesVolumes[$i][$j][0] . ' ' . $employeeSalesVolumes[$i][$j][1] . ' ' . $employeeSalesVolumes[$i][$j]['Umsatz'] . '<br>';
    }
}
echo '<br>' . 'Gesamtumsatz von allen Betriebe ist : ' . $gesamtUmsatz;


//echo '<pre>';
//print_r($employeeSalesVolumes);
//echo '</pre>';

