<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />   
<link rel="Stylesheet" href="/css/Style_redirection.css" />
<title> DREAMFIELD</title>
</head>


<body>

<header>
<?php include("include/header.php"); ?>
</header>

<div id="milieu">
<div class="formulaire-ins">
<p id="formulaire-ins-titre">Pour vous inscrire, remplissez ce formulaire:</p>

  <div class=""><p class="parcourir" > Ajouter une photo de profil (JPG, PNG ou GIF | max. 15 Ko) :</p>
    <form class="parcourir" method="post" action="photo.php" enctype="multipart/form-data" >
    
      <input type="file" name="photo" id="photo" /></br>

<?php
if (isset($_GET['msg'])) 
{
  echo $_GET['msg'];
}
else 
   {

   }
?>

  </form></div>

  <form id="form" method="post" action="register_inscription.php">
   
    <p>
              <label for="prenom">Prénom :</label>
              <input type="text" name="prenom" id="prenom" class="champ" placeholder="Ex : Guillaume" size="30" maxlength="10" />
              <br />
              <br />
              <label for="nom">Nom :</label>
              <input type="text" name="nom" id="nom" class="champ" placeholder="Ex : MOREL" size="30" maxlength="10" />
              <br />
              <br />
              <label for="adresse">Adresse :</label>
              <input type="text" name="adresse" id="adresse" class="champ" size="30" placeholder="Ex :2 bis rue du long des bois"/>
              <br />
              <br />
              <label for="codepost"> Code postal :</label>
              <input type="number" name="codepost" id="codepost" class="champ" placeholder="Ex : 78690" min="10000" max="96000"/>
              <br />
              <br />
              <label for="ville">  Ville :</label>
              <input type="text" name="ville" id="ville" class="champ" placeholder="Ex :Saint-Louis "  size="30" />
              <br />
              <br />
              <label for="mail"> Email :</label>
              <input type="email" name="mail" id="mail" class="champ" size="30" placeholder="Ex :azerty@gmail.com " />
              <br />
              <br />
              <label class="grand" for="tel"> Numero de telephone :</label>
              <input type="tel" name="tel" id="tel" maxlength="10" minlength="10"/>
              <br />
              <br />
              <label class="grand" for="pass">Mot de passe :</label>
              <input type="password" name="pass" id="pass" class="champ" minlength="6" />
              <br />
              <br />
              <label class="grand" for="passverif">Confirmez votre mot de passe :</label>
              <input type="password" name="passverif" id="passverif" class="champ" minlength="6"/>
              <br />
              <br />
              <label class="grand" for="conditions">J'accepte les <a href="" id="cond-uti">conditions d'utilisations</a></label>
              <input type="checkbox" name="conditions" id="conditions" class="champ"/>
              <br />
              <br />

        <div class="valider">
          <p>Appuyez sur valider pour confirmer l'inscription</p>
          <input id="validation-ins" type="submit" name="valider" value="Valider l'inscription" />
          <input type="reset" id="rafraichir" value="Rafraîchir" />
        </div>
    </p>
  </form>
</div>
 
</div>

<footer>
<?php include("include/footer.php"); ?>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="javascript/insverif.js"></script>
</body>


</html>