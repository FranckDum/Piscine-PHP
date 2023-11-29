<!-- # Écrire une fonction qui prend deux nombres en paramètre
# et retourne le plus grand des deux.
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php

$nb1 = 12;
$nb2 = 8;

function sup($nb1, $nb2){
    if($nb1 > $nb2){
        echo "$nb1 est le plus grand des deux (nb1) \n";
    }
    else{
        echo "$nb2 est le plus grand des deux (nb2) \n";
    }
}
echo sup($nb1, $nb2);


?>