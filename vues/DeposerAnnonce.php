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
           
            <select name="nom_produit" id="nom_produit" class="depot">

              <optgroup label="Autre">
                   <option value="AutreAliment"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "AutreAliment"){echo "selected";} ?>>Autre</option>
              </optgroup>


              <optgroup label="Féculents">
                  <option value="fève"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "fève"){echo "selected";} ?>>Fève</option>
                  <option value="haricot blanc"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "haricot blanc"){echo "selected";} ?>>Haricot blanc</option>
                  <option value="haricot rouge"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "haricot rouge"){echo "selected";} ?>>Haricot rouge</option>
                  <option value="patate douce"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "patate douce"){echo "selected";} ?>>Patate douce</option>
                  <option value="pomme de terre"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "pomme de terre"){echo "selected";} ?>>Pomme de terre</option>
              </optgroup>

              <optgroup label="Fruits">

                   <option value="abricot"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "abricot"){echo "selected";} ?>>Abricot</option>
                   <option value="amande"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "amande"){echo "selected";} ?>>Amande</option>
                   <option value="ananas"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "ananas"){echo "selected";} ?>>Ananas</option>
                   <option value="aronia"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "aronia"){echo "selected";} ?>>Aronia</option>
                   <option value="avocat"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "avocat"){echo "selected";} ?>>Avocat</option>
                   <option value="banane"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "banane"){echo "selected";} ?>>Banane</option>
                   <option value="cacao"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "cacao"){echo "selected";} ?>>Cacao</option>
                   <option value="canneberge"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "canneberge"){echo "selected";} ?>>Canneberge</option>
                   <option value="carambole"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "carambole"){echo "selected";} ?>>Carambole</option>
                   <option value="cassis"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "cassis"){echo "selected";} ?>>Cassis</option>
                   <option value="cerise"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "cerise"){echo "selected";} ?>>Cerise</option>
                   <option value="citron"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "citron"){echo "selected";} ?>>Citron</option>
                   <option value="clementine"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "clementine"){echo "selected";} ?>>Clémentine</option>
                   <option value="coing"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "coing"){echo "selected";} ?>>Coing</option>
                   <option value="corme"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "corme"){echo "selected";} ?>>Corme</option>
                   <option value="corossol"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "corossol"){echo "selected";} ?>>Corossol</option>
                   <option value="curuba"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "curuba"){echo "selected";} ?>>Curuba</option>
                   <option value="datte"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "datte"){echo "selected";} ?>>Datte</option>
                   <option value="figue"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "figue"){echo "selected";} ?>>Figue</option>
                   <option value="fraise"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "fraise"){echo "selected";} ?>>Fraise</option>
                   <option value="framboise"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "framboise"){echo "selected";} ?>>Framboise</option>
                   <option value="fruit de la passion"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "fruit de la passion"){echo "selected";} ?>>Fruit de la passion</option>
                   <option value="goyave"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "goyave"){echo "selected";} ?>>Goyave</option>
                   <option value="grenade"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "grenade"){echo "selected";} ?>>Grenade</option>
                   <option value="grenadelle"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "grenadelle"){echo "selected";} ?>>Grenadelle</option>
                   <option value="groseille"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "groseille"){echo "selected";} ?>>Groseille</option>
                   <option value="jujube"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "jujube"){echo "selected";} ?>>Jujube</option>
                   <option value="kaki"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "kaki"){echo "selected";} ?>>Kaki</option>
                   <option value="kiwai"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "kiwai"){echo "selected";} ?>>Kiwai</option>
                   <option value="kiwano"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "kiwano"){echo "selected";} ?>>Kiwano</option>
                   <option value="kiwi"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "kiwi"){echo "selected";} ?>>Kiwi</option>
                   <option value="litchi"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "litchi"){echo "selected";} ?>>Litchi</option>
                   <option value="mandarine"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "mandarine"){echo "selected";} ?>>Mandarine</option>
                   <option value="mangue"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "mangue"){echo "selected";} ?>>Mangue</option>
                   <option value="mûre"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "mûre"){echo "selected";} ?>>Mûre</option>
                   <option value="myrtille"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "myrtille"){echo "selected";} ?>>Myrtille</option>
                   <option value="nèfle"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "nèfle"){echo "selected";} ?>>Nèfle</option>
                   <option value="noisette"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "noisette"){echo "selected";} ?>>Noisette</option>
                   <option value="noix"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "noix"){echo "selected";} ?>>Noix</option>
                   <option value="noix de cajou"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "noix de cajou"){echo "selected";} ?>>Noix de cajou</option>
                   <option value="noix de coco"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "noix de coco"){echo "selected";} ?>>Noix de coco</option>
                   <option value="olive"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "olive"){echo "selected";} ?>>Olive</option>
                   <option value="orange"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "orange"){echo "selected";} ?>>Orange</option>
                   <option value="pamplemousse"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "pamplemousse"){echo "selected";} ?>>Pamplemousse</option>
                   <option value="papaye"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "papaye"){echo "selected";} ?>>Papaye</option>
                   <option value="pastèque"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "pastèque"){echo "selected";} ?>>Pastèque</option>
                   <option value="pêche"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "pêche"){echo "selected";} ?>>Pêche</option>
                   <option value="pistache"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "pistache"){echo "selected";} ?>>Pistache</option>
                   <option value="poire"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "poire"){echo "selected";} ?>>Poire</option>
                   <option value="pomme"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "pomme"){echo "selected";} ?>>Pomme</option>
                   <option value="pomme de cythère"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "pomme de cythère"){echo "selected";} ?>>Pomme de cythère</option>
                   <option value="prune"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "prune"){echo "selected";} ?>>Prune</option>
                   <option value="prunelle"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "prunelle"){echo "selected";} ?>>Prunelle</option>
                   <option value="Raisin"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "Raisin"){echo "selected";} ?>>Raisin</option>
                </optgroup>


                <optgroup label="Légumes">
                   <option value="ail"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "ail"){echo "selected";} ?>>Ail</option>
                   <option value="asperge"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "asperge"){echo "selected";} ?>>Asperge</option>
                   <option value="aubergine"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "aubergine"){echo "selected";} ?>>Aubergine</option>
                   <option value="betterave"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "betterave"){echo "selected";} ?>>Betterave</option>
                   <option value="brocoli"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "brocoli"){echo "selected";} ?>>Brocoli</option>
                   <option value="carotte"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "carotte"){echo "selected";} ?>>Carotte</option>
                   <option value="céléri-rave"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "céléri-rave"){echo "selected";} ?>>Céléri-rave</option>
                   <option value="champignons"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "champignons"){echo "selected";} ?>>Champignon</option>
                   <option value="chou blanc"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "chou blanc"){echo "selected";} ?>>Chou blanc</option>
                   <option value="choux chinois"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "choux chinois"){echo "selected";} ?>>Chou chinois</option>
                   <option value="choux de bruxelle"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "choux de bruxelle"){echo "selected";} ?>>Choux de Bruxelle</option>
                   <option value="choux de milan"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "choux de milan"){echo "selected";} ?>>Choux de Milan</option>
                   <option value="choux-fleur"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "choux-fleur"){echo "selected";} ?>>Choux fleur</option>
                   <option value="chou romanesco"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "chou romanesco"){echo "selected";} ?>>Choux romanesco</option>
                   <option value="choux vert"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "choux vert"){echo "selected";} ?>>Choux vert</option>
                   <option value="ciboulette"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "ciboulette"){echo "selected";} ?>>Ciboulette</option>
                   <option value="citrouille"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "citrouille"){echo "selected";} ?>>Citrouille</option>
                   <option value="concombre"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "concombre"){echo "selected";} ?>>Concombre</option>
                   <option value="cornichon"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "cornichon"){echo "selected";} ?>>Cornichon</option>
                   <option value="courgette"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "courgette"){echo "selected";} ?>>Courgette</option>
                   <option value="échalote"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "échalote"){echo "selected";} ?>>Échalote</option>
                   <option value="épinard"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "épinard"){echo "selected";} ?>>Épinard</option>
                   <option value="gingembre"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "gingembre"){echo "selected";} ?>>Gingembre</option>
                   <option value="haricot vert"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "haricot vert"){echo "selected";} ?>>Haricot vert</option>
                   <option value="laitue"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "laitue"){echo "selected";} ?>>Laitue</option>
                   <option value="mâche"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "mâche"){echo "selected";} ?>>Mâche</option>
                   <option value="maïs"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "maïs"){echo "selected";} ?>>Maïs</option>
                   <option value="melon"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "melon"){echo "selected";} ?>>Melon</option>
                   <option value="navet"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "navet"){echo "selected";} ?>>Navet</option>
                   <option value="oignon"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "oignon"){echo "selected";} ?>>Oignon</option>
                   <option value="petit pois"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "petit pois"){echo "selected";} ?>>Petits pois</option>
                   <option value="piment"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "piment"){echo "selected";} ?>>Piment</option>
                   <option value="poireau"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "poireau"){echo "selected";} ?>>Poireau</option>
                   <option value="poivron"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "poivron"){echo "selected";} ?>>Poivron</option>
                   <option value="potimarron"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "potimarron"){echo "selected";} ?>>Potimarron</option>
                   <option value="potiron"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "potiron"){echo "selected";} ?>>Potiron</option>
                   <option value="radis"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "radis"){echo "selected";} ?>>Radis</option>
                   <option value="roquette"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "roquette"){echo "selected";} ?>>Roquette</option>
                   <option value="tomate"<?php if (isset($_POST['nom_produit']) && $_POST['nom_produit']== "tomate"){echo "selected";} ?>>Tomate</option>
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
              <input type="date" name="dateexpiration" id="date" maxlength="10" minlength="10" placeholder="2015/12/15" class="depot" value="<?php if (isset($_POST['dateexpiration'])) echo $_POST['dateexpiration']; ?>"/>
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
        $(date).css({ // on rend le champ rouge
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

