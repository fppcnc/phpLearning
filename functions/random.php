<?php
// Aufgabe erstelle Funktion, die eine zufällige Zahl wischen 2 Zahlen und Schrittweite erzeugt
/**
 * @param int $begin
 * @param int $end
 * @param float $step
 * @return float
 */
function random(int $begin, int $end, float $step):float{
    return rand($begin, $end) * $step;
}

echo random(1, 100, 0.1);


// Erstelle eine Funktion, die ein 2-dim Array $x mal $y erstellt mit Zufallszahlen von 0.0 bis 10.0

// einfache Funktionen zum Erstellen von Arrays
// Ziel 1-dim Array mit Wert 'Zufallszahl'
$anzahlElemente = 10;
$cellContent = 'Zufallszahl';
function machArray(int $anzahlElemente, string $cellContent): array
{
    $array1Dim = [];
    for ($i = 0; $i < $anzahlElemente; $i++){
        $array1Dim[$i] = $cellContent;
    }
    return $array1Dim;
}

echo '<pre>';
print_r(machArray($anzahlElemente, $cellContent));
echo '</pre>';



function buildRandomArray(int $numRows, int $numCol, $begin, $end, $step): array{
    $arr = [];
    for ($i = 0; $i < $numRows; $i++){
        for ($j =0; $j < $numCol; $j++){
            $arr[$i][$j] = random($begin,$end,$step);
        }
    }
    return $arr;
}

echo '<pre>';
print_r(buildRandomArray(4,5,0,10,0.1));
echo '</pre>';

// Aufgabe: Nimm ein 2-dim Array, welches Zufallszahlen enthält
// und ersetze in allen Zellen den Punkt durch ein Komma


//    explode( '.',);
//    implode(',');
echo 'Aufgabe : ' . '<br>';



//function dot2Comma($array): array {
//    $repArr = str_replace('.', ',', $array);
//    return $repArr;
//}

$arrDot = buildRandomArray(4, 5, 0, 10, 0.1);
echo '<pre>';
print_r($arrDot);
echo '</pre>';
function arrayDot2Comma(array &$dotArray)
{
    for ($i = 0; $i < count($dotArray); $i++) {
        for ($j = 0; $j < count($dotArray[$i]); $j++) {
            $dotArray[$i][$j] = str_replace('.', ',', $dotArray[$i][$j]);
        }
    }
}

arrayDot2Comma($arrDot);
echo '<pre>';
print_r($arrDot);
echo '</pre>';


