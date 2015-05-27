<?php


//la requête
$req = $bdd->prepare('INSERT INTO utilisateurs(prenom, nom, adresse, numero_departement, mail, 
pass, date_inscription) VALUES(:prenom, :nom, :adresse, :numero_departement, :mail, :pass, CURDATE())');


//Si 1 des champs est vide...
if (!empty($_POST['prenom']) OR !empty($_POST['nom']) OR !empty($_POST['adresse']) OR !empty($_POST['numero_departement']) OR !empty($_POST['mail']) OR !empty($_POST['tel']) OR !empty($_POST['pass']) OR !empty($_POST['passverif']) OR !empty($_POST['conditions'])) 
    
{
        //...et que les mots de passe ne sont pas identiques alors :
        if (!($_POST['pass'] === $_POST['passverif'])) {
            //on redirige sur une page
            header('location: index.php?page=inscription&msg=empty');
        }
        else{
    //on execute la requête
            $req->execute(array(
           'prenom' => $prenom,
           'nom' => $nom,
           'adresse' => $adresse,
           'numero_departement' => $numero_departement,
           'mail' => $mail,
           'pass' => $pass));

//on redirige sur une page
        header('location: index.php?page=connexion&msg=bravo, inscription réussie !');

            }

    }
?>




