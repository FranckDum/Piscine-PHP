<!-- # Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "longue" si la longueur de la chaîne est supérieure à 10,
# sinon "courte".
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php

$phrase = "Le soleil brille dans le ciel";
$phrase2 = "Le sol";
$long = strlen($phrase);
$long2 = strlen($phrase2);

function longueur($long2){
    if($long2 > 10){
        return "Longue \n";
    }
    else{
        return "Courte \n";
    }
}
echo longueur($long2);

?>