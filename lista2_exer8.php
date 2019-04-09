<?php
print "Insira o preço do primeiro produto: \n";
$produto1= (float) fgets (STDIN);

print "Insira o preço do segundo produto: \n";
$produto2= (float) fgets (STDIN);

print "Insira o preço do terceiro produto: \n";
$produto3= (float) fgets (STDIN);

if ($produto1<$produto2 & $produto1<$produto3){
	print "Você deverá escolher o primeiro produto,  é mais barato. \n";
}
elseif ($produto2<$produto1 & $produto2<$produto3){
	print "Você deverá escolher o segundo produto,  é mais barato. \n";
}
elseif ($produto3<$produto1 & $produto3<$produto2){
	print "Você deverá escolher o terceiro produto,  é mais barato. \n";
}