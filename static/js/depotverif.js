
  $(document).ready(function(){
    
    var 
        $date=$('#date');
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
/*

    $envoi.click(function(e){
      e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

      // puis on lance la fonction de vérification sur tous les champs :
      verifier($prenom);
      verifier($nom);
      verifier($adresse);
      verifier($ville);
      verifier($mdp);
      verifier($confirmation);
      verifier($mail);
    });


        function verifier(champ){
      if(champ.val() == ""){ // si le champ est vide
        $erreur.css('display', 'block'); // on affiche le message d'erreur
        champ.css({ // on rend le champ rouge
          borderColor : 'red',
          color : 'red'
        });
      }
    }
  });
*/