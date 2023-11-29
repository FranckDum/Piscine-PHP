<!-- # Créez une fonction qui prend en paramètre un tableau de nombres. 
# La fonction doit parcourir le tableau pour trouver et renvoyer la valeur maximale.
# Utilisez la fonction avec un tableau de nombres de votre choix. 
# Affichez la valeur maximale dans le terminal. -->

<?php

$tab1 = [2, 4, 6, 8, 10, 20, 14, 16, 12, 18];

function tab($tab1){
    return max($tab1) . "\n";
}
echo tab($tab1);

?>