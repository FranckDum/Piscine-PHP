<!-- # Écrivez une fonction qui prend en paramètre un texte et un nom de fichier. 
# La fonction doit ouvrir le fichier en mode écriture. 
# Ecrire le texte dans le fichier.
# Puis fermer le fichier. 
# Ensuite, créez un fichier nommé ecrire_dans_fichier.php et 
# utilisez la fonction ecrireDansFichier avec un texte de votre choix. 
# Vérifiez ensuite le fichier pour vous assurer que le texte a été correctement 
# écrit. -->

<?php

function ecrireFichier($text, $nomFichier){
    $fichier = fopen($nomFichier, 'w');
    if($fichier){
        fwrite($fichier, $text);
        fclose($fichier);
        echo "Le texte à bien été écrit";
    }
    else{
        echo "Erreur d'écriture du texte";
    }
}
$text = "J'écris ceci dans le fichier \n";
$nomFichier = "ecrire_dans_fichier.php";
echo ecrireFichier($text, $nomFichier);

?>