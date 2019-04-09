<?php
print "Digite o 1º número: ";
$num1= (float) fgets(STDIN);

print "Digite o 2º número: ";
$num2= (float) fgets(STDIN);

print "Digite o 3º número: ";
$num3= (float) fgets(STDIN);

print "Digite o 4º número: ";
$num4= (float) fgets(STDIN);

print "Digite o 5º número: ";
$num5= (float) fgets(STDIN);

$soma= ($num1+$num2+$num3+$num4+$num5);
$media= ($soma/5);
print "A soma é de: $soma\nA média é de: $media";
