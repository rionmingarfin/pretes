<?php

function desimal($bilangan){
    $biner='';
   while ($bilangan > 0) {
       if ($bilangan %2 == 0) {
           $bilangan /=2;
           $biner .=0;
       }else {
           $bilangan = ($bilangan/2)- 0.5;
           $biner .=1;
       }
    }
   echo $hasil =strrev($biner);

}
desimal(12);