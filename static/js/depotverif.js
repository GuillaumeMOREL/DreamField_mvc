
  $(document).ready(function(){
    
    var 
        $date=$('#dateexpiration');
        $prix=$('#prix');
        $envoi = $('#formulaire-depot'),

    $date.keyup(function(){
      if($(this).val().length < 10){ // si la chaîne de caractères est inférieure à 10
        $(this).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
      }

      else{
            $(this).css({ // si tout est bon, on le rend vert
            borderColor : 'green',
            color : 'green'
        });
      }
    });

        $prix.keyup(function(){
      if($(this).val().length == 0){ // si la chaîne de nbs est = 0
        $(this).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
      }
      
      else{
            $(this).css({ // si tout est bon, on le rend vert
            borderColor : 'green',
            color : 'green'
        });
      }
    });  

  });

$("#PoidsQuant").change(function() {
    if ( $("#PoidsQuant").val() == "mg" || $("#PoidsQuant").val() == "g" || $("#PoidsQuant").val() == "kg"){ $("#resultat").text("le Kg"); }
    if ( $("#PoidsQuant").val() == "unite" ){ $("#resultat").text("l'unité"); }
});

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php
if(isset($_POST['validerDepot'])) {


if (
      (
      (($_POST['nom_produit']==AutreAliment) AND  empty($_POST['ProduitAutre']))
      OR
      (($_POST['nom_produit']!=AutreAliment) AND  !empty($_POST['ProduitAutre'])) 
      )
    )
      {
?>
        
        $(nom_produit).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red' 
        });
        $(ProduitAutre).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        
        $(AfficheRange).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        
<?php ;     }


if ($_POST['nbPoidsQuant']=="0")
      {
?>
        
        $(AfficheRange).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
       

<?php ;     }


if (($_POST['PoidsQuant']=="") OR ($_POST['PoidsQuant']==AucuneUnite))
      {
?>
        
        $(PoidsQuant).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        
        $(AfficheRange).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        
<?php ;     }



if (($_POST['dateexpiration']>"2999/12/31") OR ($_POST['dateexpiration']<"2015/01/01"))
      {
?>
        
        $(dateexpiration).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        
        $(AfficheRange).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        
<?php ;     }



if (empty($_POST['prix']) AND empty($_POST['troc']))
      {
?>
        
        $(prix).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        $(troc).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        
        
        $(AfficheRange).css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
        
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
