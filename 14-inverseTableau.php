<!-- # Écrivez une fonction qui prend en paramètre un tableau de nombres. 
# La fonction doit renvoyer un nouveau tableau contenant les mêmes 
# nombres, mais dans l'ordre inverse. 
# Affichez le tableau original et le tableau inversé dans le terminal -->

<?php

$tab1 = [0,1,2,3,4,5,6,7,8,9];

function tab($tab1){
    foreach($tab1 as $values){
    echo "$values \n";
    }
    foreach(array_reverse($tab1) as $values){
        echo "$values \n";
    }
}
echo tab($tab1);

?>