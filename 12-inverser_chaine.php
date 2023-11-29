<!-- # Écrivez une fonction qui prend en paramètre une chaîne 
# de caractères et retourne cette chaîne inversée. 

# Utilisez la fonction avec une chaîne de texte de votre choix. 
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php

$chaine = "Il était une fois";
$chaineInverse = strrev($chaine); // permet d'inverser les caractères

function cara($chaineInverse){
    echo "$chaineInverse \n";
}
echo cara($chaineInverse);



?>