<!-- # Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "vide" si la chaîne est vide sinon "non vide",
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php

$text = "Nous sommes le 28 novembre";
function txt($text){
    if(empty($text)){
        echo "Vide \n";
    }
    else{
        echo "Non Vide \n";
    }
}
echo txt($text);


?>