<!-- # Créez une fonction nommée 'r' qui prend un paramètre. 
# Cette fonction devrait être réutilisable afin d'abréger l'utilisation 
# de 'print_r()'. -->

<?php

function r($parametre){
    print_r($parametre);
}
$text = "Welcome Home ! \n";
$tab = [1,2,3,4,5,6,7,8];

r($text);
r($tab);
?>