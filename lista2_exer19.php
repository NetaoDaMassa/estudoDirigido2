<?php
 
 print" 0 ";

 $ult=1;
 $ant=0;

 while ($ult<500){

    $ult= $ant + $ult;
    $ant= $ult - $ant;

    if ($ult<500){
        print "$ult";
    }
 }

 print"\n";