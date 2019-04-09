<?php
    print "Insira o primeiro valor: ";
    $valor1= (float) fgets (STDIN);

    print "Insira o segundo valor: ";
    $valor2= (float) fgets (STDIN);

    if ($a>$b) {
        print "$valor1 é maior que $valor2. \n";
    }

    else {
        print "$valor2 é maior que $valor1. \n";
    }


