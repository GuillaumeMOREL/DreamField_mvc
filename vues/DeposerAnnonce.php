    <?php
    // Tout début du code PHP. Situé en haut de la page web
    ini_set("display_errors",0);error_reporting(0);
    ?>

    <?php
require("controleurs/database_connect.php");
?>

<div class="formulaire-depot">
<p id="formulaire-depot-titre">Afin de déposer une annonce, remplissez ce formulaire:</p>

  <div class=""><p class="parcourir" > Ajouter une photo de votre denrée (JPG, PNG ou GIF | max. 15 Ko) :</p>
    <form class="parcourir" method="post" action="photo.php" enctype="multipart/form-data" >
      <input type="file" name="photo" id="photo" />
  </form></div>

  <form id="form" method="post" action="http://localhost/dreamfield_mvc/?page=deposerAnnonce">
    <p>
              
            <label for="nom_produit">Selectionnez le nom de votre denrée</label><br/><br />
 

<?php

$fruit = $bdd->query('SELECT nom_produit FROM categorie WHERE categorie_produit="fruit"');
$legume = $bdd->query('SELECT nom_produit FROM categorie WHERE categorie_produit="legume"');

?>



    <select name="nom_produit" id="nom_produit" class="depot">
              <optgroup label="Autre">
                   <option value="AutreAliment"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "AutreAliment"){echo "selected";} ?>>Autre</option>
              </optgroup>

              <optgroup label="Fruits">
                <?php

while ($donneesfruit = $fruit->fetch())

{

?>
                   <option value="<?php echo $donneesfruit['nom_produit'] ?>"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== $donneesfruit['nom_produit'] ){echo "selected";} ?>> <?php echo $donneesfruit['nom_produit']; ?> </option>
                   <?php

          }
          $fruit->closeCursor(); // Termine le traitement de la requête
          ?>

              </optgroup>


              <optgroup label="Légumes">
                <?php

while ($donneeslegume = $legume->fetch())

{

?>
                   <option value="<?php echo $donneeslegume['nom_produit'] ?>"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== $donneeslegume['nom_produit'] ){echo "selected";} ?>> <?php echo $donneeslegume['nom_produit']; ?> </option>
                   <?php

          }
          $legume->closeCursor(); // Termine le traitement de la requête
          ?>

              </optgroup>
  </select>


           

            <br />
            <br />



            <label for="ProduitAutre">Si vous avez sélectionné "Autre", merci de nous indiquer ci dessous le nom de votre denrée</label><br /><br />
            <input type="text" name="ProduitAutre" id="ProduitAutre" size="30" maxlength="20"  value="<?php if (isset($_POST['ProduitAutre'])) echo $_POST['ProduitAutre']; ?>" class="depot"/>


              <br />
              <br />
              <label for="nbPoidsQuant">Inscrivez le poids ou la quantité de votre denrée</label><br /><br />
              <input type="range" name="nbPoidsQuant" min="0" max="100" value="0" oninput="document.getElementById('AfficheRange').textContent=value" />
              <span id="AfficheRange">0</span>


              

              <select name="PoidsQuant" id="PoidsQuant" class="depot">
              <option value="AucuneUnite"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']=="AucuneUnite"){echo "selected";}  ?>>Selectionner l'unité</option>
              <optgroup label="Poids">
                  <option value="mg" <?php if (isset($_POST['PoidsQuant']) && $_POST['PoidsQuant']== "mg"){echo "selected";} ?>>mg</option>
                  <option value="g" <?php if (isset($_POST['PoidsQuant']) && $_POST['PoidsQuant']== "g"){echo "selected";} ?>>g</option>
                  <option value="kg" <?php if (isset($_POST['PoidsQuant']) && $_POST['PoidsQuant']== "kg"){echo "selected";} ?>>kg</option>
              </optgroup>
                   <optgroup label="Quantité" >
                    <option value="unite" <?php if (isset($_POST['PoidsQuant']) && $_POST['PoidsQuant']== "unite"){echo "selected";} ?>>Unité(s)</option>
              </optgroup>
              </select>



              <br />
              <br />
              <label for="date">Date d'expiration du produit<br/> <em>(AAAA/MM/JJ)</em> </label><br />
              <input type="date" name="dateexpiration" id="dateexpiration" maxlength="10" minlength="10" placeholder="2015/12/15" class="depot" value="<?php if (isset($_POST['dateexpiration'])) echo $_POST['dateexpiration']; ?>"/>
              <br />
              <br />
              <label for="remarque">Ajouter une remarque/description sur votre produit</label><br /><br />
              <textarea name="remarque" id="remarque"></textarea>
              <br />
              <br />
              <label for="prix" class="choix"> Prix (€): </label>
              <input type="number" name="prix" id="prix" min="0" class="choix" value="<?php if (isset($_POST['prix'])) echo $_POST['prix']; ?>"/>
              <div id="resultat" class="choix"></div>
              <br />
              <br />
              <label for="troc">Si vous souhaitez échanger votre produit contre une autre denrée indiquez le produit désiré:</label>
              <br />
              <br />
              <input type="text" name="troc" id="troc" class="depot" placeholder="Ex : Ouvert à toutes propositions" size="30" value="<?php if (isset($_POST['troc'])) echo $_POST['troc']; ?>"/>
              

            
              <br />
              <br />
        <div class="valider">
          <p>Appuyez sur valider pour confirmer l'inscription</p>
          <input id="validation-depot" type="submit" name="valider" value="Valider l'inscription" />
          <input type="reset" id="rafraichir" value="Rafraîchir" />
        </div>

    </p>
  </form>

</div>


<?php
if(isset($_POST['valider'])) {


if (
      (
      (($_POST['nom_produit']==AutreAliment) AND  empty($_POST['ProduitAutre']))
      OR
      (($_POST['nom_produit']!=AutreAliment) AND  !empty($_POST['ProduitAutre'])) 
      )
    )
      {
?>
        <script type='text/javascript'>
        $(nom_produit).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red' 
        });
        $(ProduitAutre).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        </script>
        <script type='text/javascript'>
        $(AfficheRange).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        </script>
<?php ;     }


if ($_POST['nbPoidsQuant']==0)
      {
?>
        <script type='text/javascript'>
        $(AfficheRange).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        </script>

<?php ;     }


if (($_POST['PoidsQuant']=="") OR ($_POST['PoidsQuant']==AucuneUnite))
      {
?>
        <script type='text/javascript'>
        $(PoidsQuant).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        </script>
        <script type='text/javascript'>
        $(AfficheRange).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        </script>
<?php ;     }



if (($_POST['dateexpiration']>"2999/12/31") OR ($_POST['dateexpiration']<"2015/01/01"))
      {
?>
        <script type='text/javascript'>
        $(dateexpiration).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        </script>
        <script type='text/javascript'>
        $(AfficheRange).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        </script>
<?php ;     }



if (empty($_POST['prix']) AND empty($_POST['troc']))
      {
?>
        <script type='text/javascript'>
        $(prix).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        $(troc).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        </script>
        <script type='text/javascript'>
        $(AfficheRange).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        </script>
<?php ;     }


if (
      (
      (($_POST['nom_produit']==AutreAliment) AND  !empty($_POST['ProduitAutre']))
      OR
      (($_POST['nom_produit']!=AutreAliment) AND  empty($_POST['ProduitAutre'])) 
      )
      AND ($_POST['nbPoidsQuant']!=0)
      AND ($_POST['PoidsQuant']!=AucuneUnite)
      AND (($_POST['dateexpiration']<"2999/12/31") AND ($_POST['dateexpiration']>"2015/01/01"))
      AND ((empty($_POST['prix']) AND !empty($_POST['troc'])) OR (!empty($_POST['prix']) AND empty($_POST['troc'])) OR (!empty($_POST['prix']) AND !empty($_POST['troc'])))
  )
{

  echo "<script type='text/javascript'>document.location.replace('http://localhost/dreamfield_mvc/?page=ProfilUtilisateur.php');</script>";
  $req = $bdd->prepare('INSERT INTO `DREAMFIELD`.`annonces` (`nom_produit`, `ProduitAutre`, `nbPoidsQuant`, `PoidsQuant`, `dateexpiration`, `remarque`, `prix`, `troc`) VALUES (:nom_produit, :ProduitAutre, :nbPoidsQuant, :PoidsQuant, :dateexpiration, :remarque, :prix, :troc)');
  $req->execute(array(
    
    'nom_produit' => $_POST['nom_produit'],
    'ProduitAutre' => $_POST['ProduitAutre'],
    'nbPoidsQuant' => $_POST['nbPoidsQuant'],
    'PoidsQuant' => $_POST['PoidsQuant'],
    'dateexpiration' => $_POST['dateexpiration'],
    'remarque' => $_POST['remarque'],
    'prix' => $_POST['prix'],
    'troc' => $_POST['troc'],
    ));
}

}
?>

