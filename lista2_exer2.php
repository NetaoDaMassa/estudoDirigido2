<?php
    print "Insira um valor diferente de 0 : ";
    $valor= (float) fgets (STDIN);

    if ($valor>0) {
        print "$a é positivo. \n";
    }    
    else {
        print "$valor é negativo. \n";
    }