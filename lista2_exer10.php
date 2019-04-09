<?php
print "Digite o valor de a: ";
$valorA= (float) fgets(STDIN);

if ($valorA==0){
    print "A equação não é de seundo grau. \n";
}

else {
    print "Digite o valor de b: \n";
    $valorB= (float) fgets(STDIN);

    print "Digite c: ";
    $valorC= (float) fgets(STDIN);


    $delta= ($valorB**2)-(4*$valorA*$valorC);
    $x1= (-$valorB-sqrt($delta))/(2*$valorA);
    $x2= (-$valorB+sqrt($delta))/(2*$valorA);
    $xSemDelta=(-$valorB)/(2*$valorA);

        if ($delta==0){
            print "A equação possui apenas uma raíz real, o resultado é: $xSemDelta. \n";
        }

        elseif ($delta<0){
            print "A equação não possui raízes reais, pois o delta é negativo. \n";
        }

        elseif ($delta>0){
            print "A equação possuis duas raízes: \n";
            print "primeira raíz=$x1. \n.";
            print "segunda raíz=$x2. \n";
        }
    }