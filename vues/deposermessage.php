    <?php
    // Tout début du code PHP. Situé en haut de la page web
    ini_set("display_errors",0);error_reporting(0);
    ?>

<div class="deposermessage">
<p id="formulaire-depot-message">deposer un message:</p>

  <form id="form" method="post" action="deposermessage.php">
    <p>
              
            <label for="message">taper le message</label><br/><br />
           
            <select name="message" id="message"> a </select>

            <label for="username">votre nom</label><br /><br />
            <input type="text" name="username" id="username" size="30" maxlength="20"  value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" />

              <br />
        <div class="valider">
          <p>Appuyez sur valider pour confirmer le message</p>
          <input id="validation-topic" type="submit" name="valider" value="Valider topic" />
          <input type="reset" id="rafraichir" value="Rafraîchir" />
        </div>
    </p>
  </form>


</div>


<?php
if(isset($_POST['valider'])) {



?>
        <script type='text/javascript'>
        $(message).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        $(username).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        </script>
<?php ;     }


{

  echo "<script type='text/javascript'>document.location.replace('deposertopic.php');</script>";
  $req = $bdd->prepare('INSERT INTO `DREAMFIELD`.`commentaires` (`contenu`, `username`) VALUES (:contenu, :username)');
  $req->execute(array(
    
    'contenu' => $_POST['contenu'],
    'username' => $_POST['username'],
    ));
}
?>