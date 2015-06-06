<?php

if (isset($_GET['fruits'])

{

    echo 'Voici les differents vendeurs de' . $_GET['fruits'] . '!';
}

if (isset($_GET['legumes'])

{

    echo 'Voici les differents vendeurs de' . $_GET['legumes'] . '!';
}

else // Il manque des paramètres, on avertit le visiteur

{

    echo 'Vous n avez cochez ni fruit, ni légume. ';
}

?>

<?php/*
$_GET = array_map('htmlentities', $_GET); // on applique la fonction htmlentities() sur chaque donnée du tableau $_GET
$a = array(); // on itinialise notre tableau de destination
$i = 0; // notre variable qui sera incrémentée dans la boucle
foreach($_GET as $var) { // pour chaque valeur du tableau $_GET on crée une variable $var
$a[$i] = $var; // on met la valeur dans le tableau avec la valeur de $i
$i++; // on incrémente
}
print_r($a); // on affiche le tableau (vérification)
*/?>