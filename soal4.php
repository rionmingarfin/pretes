<?php
function datatinggi(){
$data =[6,22,34,15,2,13,26,57,42,32];
sort($data);
for ($i=0; $i <count($data) ; $i++) { 
    echo $data[$i]." ";
}
}
echo "data tertinggi :";datatinggi();
echo "</br>";
function datarendah(){
$data =[6,22,34,15,2,13,26,57,42,32];
rsort($data);
for ($i=0; $i <count($data) ; $i++) { 
    echo $data[$i]." ";
}
}
echo "data tertinggi :"; datarendah();
echo "</br>";

function kecil(){
$data =min([6,22,34,15,2,13,26,57,42,32]);
echo "data terkecil :".$data."</br>";
}
kecil();

function besar(){
$data =max([6,22,34,15,2,13,26,57,42,32]);
echo "data terbesar :".$data."</br>";
}
besar();
