<?php

function pohon($xtahun,$ymeter){
    $pohon = $ymeter;
    for ($i=1; $i <= $xtahun; $i++) { 
       $pohon = ($pohon*2)+1;
  }

  echo $pohon;
}

pohon(2,1);