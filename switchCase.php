<?php
 $note = 1;

 switch ($note){
     case 1:
         $out = 'sehr gut';
         break;
     case 2:
         $out = 'gut';
         break;
     case 3:
         $out = 'befriedigend';
         break;
     case 4:
         $out = 'ausreichend';
         break;
     case 5:
         $out = 'mangelhaft';
         break;
     default:
         $out = 'ungenügend';
 }


 $benotungen = [
     1 => 'sehr gut',
     2 => 'gut',
     3 => 'befriedigend',
     4 => 'ausreichend',
     5 => 'mangelhaft',
     6 => 'ungenügend',
 ];

 echo $benotungen[$note];
 echo '<pre>';
 print_r($benotungen);
 echo '<pre>';