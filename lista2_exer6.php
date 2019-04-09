<?php
    print "Insira o primeiro valor: ";
    $valor1= (float) fgets (STDIN);

    print "Insira o segundo valor: ";
    $valor2= (float) fgets (STDIN);

    print "Insira o terceiro valor: ";
    $valor3= (float) fgets (STDIN);

        if ($valor1>$valor2 and $valor1>$valor3) {
            print "$valor1 é maior que $valor2 e $valor3. \n";
        }

        elseif ($valor2>$valor1 and $valor2>$valor3) {
            print "$valor2 é maior que $valor1 e $valor3. \n";
        }

        else {
            print "$valor3 é maior que $valor1 e $valor2 \n";
        }
        