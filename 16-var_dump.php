<!-- # Créez une fonction nommée 'v' qui prend un paramètre. 
# Cette fonction devrait être réutilisable afin d'abréger l'utilisation 
# de 'var_dump()'. -->

<?php

function v($parametre){
    var_dump($parametre);
}
$texte = "Hello there !!! \n";
$tab1 = [1,2,3,4,5,6,7,8];
v($texte);
v($tab1);


?>