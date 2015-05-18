
$(document).ready(function()
{
   // On cache la zone de texte
   $('#toggle').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué

   $('a#toggler').on('click',function()
  {
      
       var offset = $('#toggler').offset();
       console.log(offset.top);
       var x = offset.left;
       var y = offset.top;
      $('#toggle').css('top', y+15);
      $('#toggle').css('left', x-15);
      $('#toggle').toggle(400);
   });



 });

