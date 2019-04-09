<?php

$par=0;
$impar=0;

for ($cont==1; $cont<11; $cont++){

    print"insira o " .$cont."º numero :\n";
    $numero= (float) fgets(STDIN);

if($numero%2==0){
    $par=$par+1;
}

elseif ($numero%2==1){
$impar=$impar+1;

}
}
print"dos numeros $par são pares \n ";
print"dos numeros $impar são impares \n";