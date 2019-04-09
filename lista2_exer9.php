<?php
    print "Insira o primeiro valor: ";
    $valor1= (float) fgets (STDIN);

    print "Insira o segundo valor: ";
    $valor2= (float) fgets (STDIN);

    print "Insira o terceiro valor: ";
    $valor3= (float) fgets (STDIN);

    if($valor1>$valor2 & $valor2>$valor3){
        print"a ordem decrescente é $valor1 $valor2 $valor3";
    }

    elseif($valor1>$valor3 & $valor3>$valor2){
        print"a ordem decrescente é $valor1 $valor3 $valor2";
    }
    elseif($valor2>$valor1 & $valor1>$valor3){
        print"a ordem decrescente é $valor2 $valor1 $valor3";
    }
    elseif($valor2>$valor3 & $valor3>$valor1){
        print"a ordem decrescente é $valor2 $valor3 $valor1";
    }
    elseif($valor3>$valor2 & $valor2>$valor1){
        print"a ordem decrescente é $valor3 $valor2 $valor1";
    }
    elseif($valor3>$valor1 & $valor1>$valor2){
        print"a ordem decrescente é $valor3 $valor2 $valor1";
    }






