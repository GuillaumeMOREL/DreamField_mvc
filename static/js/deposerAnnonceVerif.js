$(document).ready(function(){
    
    var nom_produit = $('#nom_produit'),
        nbPoidsQuant = $('#nbPoidsQuant'),
        PoidsQuant = $('#PoidsQuant'),
        dateexpiration = $('#dateexpiration'),
        remarque = $('#remarque'),
        prix = $('#prix'),
        troc = $('#troc'),
        envoi = $('.validerDepot'),
        reset = $('.rafraichirDepot'),
        champ = $('.depot');

 nom_produit.keyup(function(){
      if($(this).select(). ){ // si la chaîne de caractères est inférieure à 5
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
       