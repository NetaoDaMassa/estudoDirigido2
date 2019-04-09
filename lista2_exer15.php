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


if ($num1>$num2 && $num1>$num3 && $num1>$num4 && $num1>$num5) 
    {print "O 1º número é o maior\n";}

elseif ($num2>$num1 && $num2>$num3 && $num2>$num4 && $num2>$num5) 
    {print "O 2º número é o maior\n";}

elseif ($num3>$num1 && $num3>$num2 && $num3>$num4 && $num3>$num5) 
    {print "O 3º número é o maior\n";}

elseif ($num4>$num1 && $num4>$num2 && $num4>$num3 && $num3>$num5) 
    {print "O 4º número é o maior\n";}

elseif ($num5>$num1 && $num5>$num2 && $num5>$num3 && $num5>$num4) 
    {print "O 5º número é o maior\n";}
