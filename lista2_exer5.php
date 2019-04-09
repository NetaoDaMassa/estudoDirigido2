<?php

print"insira o primeiro valor ?:";
$nota1= (float)fgets(STDIN);


print"insira o segundo valor ?:";
$nota2=(float)fgets(STDIN);

$media= ($nota1+$nota2)/2;

if($media>=7 and $media<10){

    print"o aluno foi aprovado";
}
elseif($media<7){

print"o aluno foi reprovado";

}
elseif($media==10){

print"o aluno foi aprovado com distinçao ";

}