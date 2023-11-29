<!-- # Écrivez une fonction prenant deux paramètres, 'nb1' et 'nb2', 
# représentant des nombres. Cette fonction devrait additionner ces deux nombres 
# et retourner le résultat. 
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php

$nb1 = 2;
$nb2 = 4;
$resultAddition = $nb1 + $nb2;

function result($resultAddition){
    echo "Le résultat est $resultAddition \n";
}
echo result($resultAddition);
?>