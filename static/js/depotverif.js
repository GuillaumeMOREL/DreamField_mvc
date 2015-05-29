
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

