<?php
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

// Variablen in Empfang nehmen
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operator = $_POST['operator'];

//if ($operator == '+') {
//
//      $result = $number1 + $number2;
//
//} elseif ($operator == '-') {
//
//      $result = $number1 - $number2;
//
//} elseif ($operator == '/') {
//
//      $result = $number1 / $number2;
//
//} elseif ($operator == '*') {
//
//      $result = $number1 * $number2;
//
//} elseif ($operator == '%') {
//
//      $result = $number1 % $number2;
//
//}


switch ($operator) {
    case "+":
        $result = $number1 + $number2;
        break;
    case "-":
        $result= $number1 - $number2;
        break;
    case "/":
        if ($number2 == 0) {
            $result = "Error! $number1 divided by $number2 is not possible";
        } else {
            $result = $number1 / $number2;
        }
        break;
    case "*":
        $result = $number1 * $number2;
        break;
    case "%":
        $result = $number1 % $number2;
        break;
}
?>
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
echo $result
?>
</body>
</html>
<!--// Summe ausgeben-->
<!--echo 'Summe = ' .  $sum;-->
<!--echo '<br>';-->
<!---->
<!--// Unterschied vom ' und " bei Strings-->
<!--echo 'Die Sume vom $number1 und $number2 ergibt ' . $sum . '.';-->
<!--echo '<br>';-->
<!--echo "Die Sume vom $number1 und $number2 ergibt " . $sum . ".";-->
<!--echo '<br>';-->
<!--// Strings mit ' und " im Text-->
<!--echo "This is Peter's house";-->
<!--echo '<br>';-->
<!--echo 'This is Peter\'s house';-->
