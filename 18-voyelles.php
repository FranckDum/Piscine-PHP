<!-- # Créez une fonction qui prend en paramètre une chaîne de caractères.
# Cette fonction devrait compter le nombre de voyelles présentes dans la chaîne 
# (en considérant seulement les voyelles 'a', 'e', 'i', 'o', 'u', 'A', 
# 'E', 'I', 'O', 'U'). 
# Utilisez la fonction compterVoyelles avec une chaîne de texte de votre choix. 
# Affichez le nombre de voyelles dans le terminal. -->
<?php

$text = "Il n'y a pas de honte à échouer, le pire c'est de ne pas essayer";
$nb_voyelles = compterVoyelle($text);

function compterVoyelle($voyelles){
    preg_match_all('/[aeiouyAEIOUY]/',$voyelles, $matches);
    return count($matches[0]);
}
echo "Le nombre de voyelles dans le '$text' est '$nb_voyelles' \n"


?>