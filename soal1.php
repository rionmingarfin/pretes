<?php 

function math($uang){
    $mie=2.500;
    $bagi =$uang/$mie;
    $bonus= $bagi/4;
    $hasil =floor($bagi+$bonus);

    echo "$hasil";
}
math(52.500);
 ?>