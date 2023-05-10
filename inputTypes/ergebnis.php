<?php
//$vorname = $nachname = $geschlecht = 0;
//$sprachen = array();
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $vorname = $_POST['vorname'];
//    $nachname = $_POST['nachname'] ;
//    $geschlecht = $_POST['geschlecht'];
//    $sprachen = $_POST['sprachen'];
//}

//$choices = [$vorname,$nachname,$geschlecht,$sprachen];

$choices = $_POST;
echo '<pre>';
print_r($choices);
echo '</pre>';
?>
