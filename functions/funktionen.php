<?php

function add(int $zahl1, int $zahl2): int{
    return $zahl1 + $zahl2;
}

function tuwas(){
    echo add('2','5');
    return add('2','5');
}

echo tuwas();
