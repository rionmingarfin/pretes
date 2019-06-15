<?php
function segitiga($n)
{
    $i = 2;
    $dump = array();
    do { 
        $a=0; 
        for ($j=1; $j<=$i ; $j++) {
            if ($i % $j == 0) {
                $a++;
            }
        }
        if ($a == 2) {
            array_push($dump, $i);
        }
        $i++;
    } while(count($dump)<$n);

    for($i = 0; $i < count($dump); $i++)
    {
        for($j = 0; $j <= $i; $j++)
        {
            echo $dump[$j];
        }
        echo "<br>";
    }
}

segitiga(5);