<!-- # Créez une fonction qui prend en paramètre un nom de fichier. 
# Doit ouvrir le fichier en mode lecture si le fichier existe.
# Lire son contenu. 
# Puis fermer le fichier. 
# Ensuite, créez un fichier nommé lire_fichier.php et 
# utilisez la fonction lireFichier avec le nom d'un fichier de votre choix. 
# Affichez ensuite le contenu lu dans le terminal. -->

<?php

function lireFichier($nomFichier){
    if(file_exists($nomFichier)){
        $fichier = fopen($nomFichier, 'r');
    }
    else{
            echo "Le fichier n'existe pas \n";
    }

    
        if($fichier){
            $contenu = fread($fichier, filesize($nomFichier));
            echo "$contenu \n";

            fclose($fichier);
        }
        else{
            "Impossible d'ouvrir le fichier \n";
        }
    
}
$nomFichier = "ecrire_dans_fichier.php";
echo lireFichier($nomFichier);


?>
