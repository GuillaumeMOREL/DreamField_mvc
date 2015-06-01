    <?php
    // Tout début du code PHP. Situé en haut de la page web
    ini_set("display_errors",0);error_reporting(0);
    ?>

<div class="deposertopic">
<p id="formulaire-depot-titre">crer votre topic:</p>

  <form id="form" method="post" action="deposertopic.php">
    <p>
              
            <label for="titre">taper le nom de votre topic</label><br/><br />
           
            <select name="titre" id="titre"> a </select>

            <label for="username">votre nom</label><br /><br />
            <input type="text" name="username" id="username" size="30" maxlength="20"  value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" />

              <label for="date">Date de creation du topic<br/> <em>(AAAA/MM/JJ)</em> </label><br />
              <input type="date" name="dateexpiration" id="date" maxlength="10" minlength="10" placeholder="2015/12/15" value="<?php if (isset($_POST['dateexpiration'])) echo $_POST['dateexpiration']; ?>"/>
              <br />
              <br />
              <label for="description">description du topic</label><br /><br />
              <textarea name="description" id="description"></textarea>
              <br />
              <br />
        <div class="valider">
          <p>Appuyez sur valider pour confirmer la crétion du topic</p>
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
        $(titre).css({ // on rend le champ rouge
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
  $req = $bdd->prepare('INSERT INTO `DREAMFIELD`.`forum` (`titre`, `username`, `date`, `description`) VALUES (:titre, :username, :date, :description,)');
  $req->execute(array(
    
    'titre' => $_POST['titre'],
    'username' => $_POST['username'],
    'date' => $_POST['date'],
    'question' => $_POST['question'],
    ));
}
?>