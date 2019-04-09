<?php

print"insira uma letra do alfabeto :";
$letra= fgetc (STDIN);

if ($letra=="a" or $letra=="e" or $letra=="i"or $letra=="o" or $letra=="u"){

    print"essa letra é vogal ";
}

else {
    print"essa letra é consoante";
}
