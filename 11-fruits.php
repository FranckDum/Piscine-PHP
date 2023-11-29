<!-- # Écrivez une fonction qui prend en paramètre un tableau. 
# Cette fonction doit afficher chaque élement du tableau Suivi d'un saut de ligne. 

# Ensuite, créez un tableau par exemple "$fruits" contenant au moins 5 noms 
# de fruits différents. Utilisez votre fonction avec le tableau "$fruits" 
# pour afficher la liste des fruits." -->

<?php

$tableau = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];
function tab($tableau){
    foreach($tableau as $values){
        echo "$values \n";
    }
}
echo tab($tableau);

$fruits = ["Pomme", "Banane", "Raisin", "Nectarine", "Ananas", "Poire", "Figue"];
function tabFruit($fruits){
    foreach($fruits as $index => $values){
        echo "$index => $values \n";
    }
}
echo tabFruit($fruits);

?>