<?php
    print "Insira o primeiro valor: ";
    $valor1= (float) fgets (STDIN);

    print "Insira o segundo valor:";
    $valor2= (float) fgets (STDIN);

    print "Insira o terceiro valor: ";
    $valor3= (float) fgets (STDIN);

        if ($valor1>$valor2 & $valor2>$valor3){
            print "$valor1 é o maior valor e $valor3 é o menor valor. \n";
        }
        elseif ($valor1>$valor3 & $valor3>$valor2){
            print "$valor1 é o maior valor e $valor2 é o menor valor.\n";
        } 
        elseif ($valor2>$valor1 & $valor1>$valor3) {
            print "$valor2 é o maior número e $valor3 é o menor valor.\n";
        }   
        elseif ($valor2>$valor3 & $valor3>$valor1){
            print "$valor2 é o maior valor e $valor1 é o menor valor.\n";
        }
        elseif ($valor3>$valor2 & $valor2>$valor1){
             print "$valor3 é o maior valor e $valor1 é o menor valor.\n";
        }     
        
        elseif ($valor3>$valor1 & $valor1>$valor2){
            print "$valor3 é o maior valor e $valor2 é o menor valor.\n";
        }    