<!-- # Créez une fonction qui affiche un message, par exemple 'Hello'. 
# Utilisez une boucle pour afficher le résultat de cette fonction 10 fois.
# Ajoutez trois underscores avant et après le cinquième message. -->

<?php

for($i = 0; $i < 12; $i++){ // Si on veut 10 fois le message Hello en plus des "_" (12lignes)
    if($i == 5){
        echo "_ _ _ \n";
    }
    elseif($i == 7){
        echo "_ _ _ \n";
    }
    else{
        echo "Hello ($i) \n";
    }
}

for($i = 0; $i < 10; $i++){ // Si on veut 8 fois le message Hello en plus des "_" (10lignes)
    if($i == 5){
        echo "_ _ _ \n";
    }
    elseif($i == 7){
        echo "_ _ _ \n";
    }
    else{
        echo "Hello ($i) \n";
    }
}

?>