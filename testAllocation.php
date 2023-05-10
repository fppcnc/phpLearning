<?php
$b = 'abc';
$c = $b;


$b = 'def';

echo '$b=' . $b;
echo '<br>';
echo '$c=' . $c;

$d = &$b;

echo '<br>';
$b = 'ASDHFBFFSSYNB';
echo $d;

echo '<br>';
$d = 'AAAAAAA';
echo $b;