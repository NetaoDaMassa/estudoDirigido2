<?php
    
    print "Insira (M) para masculino e (F) para feminino: \n";
    $sexo= fgetc (STDIN);
    
    if ($sexo=="f") {
        print "sexo escolhido foi o FEMININO. \n";
    }
    elseif ($sexo=="m") {
        print "sexo escolhido foi o MASCULINO. \n";
    }
    else {
        print"sexo escolhido é inválido. \n";
    }