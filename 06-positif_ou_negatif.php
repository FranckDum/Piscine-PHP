<!-- # Écrire une fonction qui prend un nombre en paramètre
# et return "positif" si le nombre est positif, ou bien "négatif" si le nombre
# est negatif ou "nul" si le nombre est null.
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php

$nb3 = 15;

function nb($nb3){
    if($nb3 < 0){
        return "$nb3 est négatif \n";
    }
    elseif($nb3 == 0){
        return "$nb3 est NULL \n";
    }
    else{
        return "$nb3 est supérieur à 0 \n";
    }
}
echo nb($nb3);


?>