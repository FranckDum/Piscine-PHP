<!-- # Écrivez une fonction prenant un paramètre 'user'. 
# Cette fonction devrait retourner la chaîne de caractères 'Hello [user] 👋🏾', 
# où '[user]' est remplacé par la valeur du paramètre. 
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php    

$user = "Franck";

function user($user){
    echo "Hello $user \n";
}

echo user($user);
?>