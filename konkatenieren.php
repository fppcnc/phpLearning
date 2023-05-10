<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$anfang = 'Hallo ';
$ende = 'Welt!';

$gesamtString = $anfang;
$gesamtString .= $ende; // bedeutet $gesamtString . $ende

echo $gesamtString . '<br>';

$htmlTable = "<table>\n";
$htmlTable .= "<tr>\n";
$htmlTable .= "<td>4711</td>\n";
$htmlTable .= "</tr>\n";
$htmlTable .= "</table>";

echo $htmlTable;

?>
</body>
</html>