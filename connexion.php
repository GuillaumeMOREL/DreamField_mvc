<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />   
<link rel="Stylesheet" href="/css/Style_connexion.css" />
<title> DREAMFIELD</title>
</head>


<body>

  <header>
  <?php include("include/header.php"); ?>
  </header>

  <div class="milieu">

    <div class="formulaire-co">

      <form id="form" method="post" action="login.php">
        <p>

  <?php
  
    if (isset($_GET['mssg'])) 
       {
         echo $_GET['mssg'];
       }
    else 
       {

       }
  ?>
  <?php

    if(isset($_GET['message']))
      {
        echo $_GET['message'];
      }
    else
      {

      }
  ?>

<br />
<br />
<!--test-->
          <label for="mail" class="champ-co"> Email :</label>
          <input type="email" name="mailconnect" id="mail" class="champ" size="30" placeholder="Ex :azerty@gmail.com " />
          <br />
          <br />
          <label for="pass" class="champ-co" >Mot de passe :</label>
          <input type="password" name="passconnect" id="pass" class="champ" minlength="6" /input>
          <br />
          <br />

            <div id="validation-co">
              <input type="submit" name="formeconnexion" value="se Connecter" />
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