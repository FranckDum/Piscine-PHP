<!-- # Créez une fonction qui prend en paramètre une lettre 
# Et une chaîne de caractères. La fonction doit retourner le nombre d'occurrences 
# De la lettre dans la chaîne, sans distinction de casse. 
# Utilisez la fonction avec une lettre et une chaîne de texte de votre choix. 
# Affichez le résultat dans le terminal. -->

<?php
$lettre = "a";
$chaine = "J'arrive dans quatre minutes";
function nbOccurence($lettre, $chaine){
    echo "Il y a " . substr_count($chaine, $lettre) . " fois la lettre 'a' dans la phrase '$chaine' \n";
}
echo nbOccurence($lettre, $chaine);



?>


