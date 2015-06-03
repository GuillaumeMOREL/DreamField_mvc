function verifEmpty(id){
  $(id).css('border-color', 'black');
  if ($(id).val() == '') {
      $(id).css('border-color', 'red');
      return false;
  }
  else {
    return true;
  }
}
 
function changeAutre() {
  if($("#nom_produit").val() !== 'AutreAliment') {
      $("#aCacher").fadeOut();
      console.log("diff");
  }
  else {
    $("#aCacher").fadeIn();
  }
 
}
 
function verifPoidsQuant() {
  $("#PoidsQuant").css('border-color', 'black');

    if ($("#PoidsQuant").val() == 'AucuneUnite') {
      $("#PoidsQuant").css('border-color', 'red');
      return false;
  }
  else {
    return true;
  }
}
 
function verifEmptyAutre() {
$("#ProduitAutre").css('border-color','black');
   
  if($("#nom_produit").val() !== 'AutreAliment') {
    return true;
  }
  else {
    if($("#ProduitAutre").val() == '') {
      $("#ProduitAutre").css('border-color','red');
      console.log('vide');
      return false;
    }
    else {
      console.log('non vide');
      return true;
    }
  }
}
 
function verifChamps() {
var boolprix = verifEmpty("#prix");
var boolQuant = verifPoidsQuant();
var boolDate = verifEmpty("#dateexpiration");
var boolAutre = verifEmptyAutre();
  if ((boolprix && boolQuant && boolDate && boolAutre) === true) {
    return true;
  }
  else {
    return false;
  }
} 