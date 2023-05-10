<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AufgabenFunktionen</title>
</head>
<body>
<?php
// 1. Schreibe eine Funktion, die zu einem Durchmesser den Umfang eines Kreises berechnet
/**
 *
 */
echo '<br>';
echo '<br>';
$durchmesser = 0.0;
function umfangBerechnen(float $durchmesser): float
{
    return 2 * pi() * ($durchmesser / 2);
}

echo umfangBerechnen($durchmesser) . '<br>';

// 2. Schreibe eine Funktion, die zu dem Durchmesse die Fläche eines Kreises berechnet

$diameter = 4.0;
$pi = 3.14;
$title = "Circle";


function circleArea($diameter, $pi)
{
    $area = $diameter * $pi;
    return $area;
}

echo circleArea($diameter, $pi);
// 3. Schreibe eine Funktion, die Fahrenheit in Celsius umrechnet


$fahrenheit = 100;
function converter(float $fahrenheit): float
{

    $celsius = (($fahrenheit - 32) * 5) / 9;
    $celsius = round($celsius, 3);
    return $celsius;
}

echo converter($fahrenheit) . '<br>';

// 4. Schreibe eine Funktion, die die Hypotenuse zu 2 Katheten im rechtwinkligen Dreieck berechnet

$side1 = 5;
$side2 = 7;
function Pitagora(float $side1, float $side2): float
{
    return sqrt(pow($side1, 2) + pow($side2, 2));
}

echo 'Pitagora' . Pitagora($side1, $side2) . '<br>';


// 5. Schreibe eine Funktion, die zu einem 2-dimensionalen Array den Code einer HTML-Tabelle
//    mit den entsprechenden Werten zurückgibt. Das Array hat die Größe 2 x 3 Felder;

$arr = [["a", "b", "c"], ["d", "e", "f"]];
function arr2html(array $arr): string
{

    $htmlCode = "<table>";

    for ($i = 0; $i < count($arr); $i++) {
        $htmlCode .= "<tr>";

        for ($j = 0; $j < count($arr[$i]); $j++) {
            $htmlCode .= "<td>$i / {$arr[$i][$j]}</td>";
        }
        $htmlCode .= "</tr>";

    }
    $htmlCode .= "</table>";
    return $htmlCode;
}

echo arr2html($arr) . '<br>';
// 6. verallgemeinere die Funktion aus 5. für beliebige Arrays mit sinnvoller Größe



?>

</body>
</html>

