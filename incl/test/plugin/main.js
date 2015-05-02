/**
 * Work with strings.
 */

$(function(){
   // Fade in celebs
  //alert($('#celebs tbody tr').length + ' elements!');
  
  //var fontSize = $('#celebs tbody tr').css('font-size');
  //alert(fontSize);

  /*
  $('#celebs tbody tr:even').css(
    {'background-color':'#dddddd', 'color': '#666666'}
    );
  */

  $('#celebs tbody tr:even').addClass('zebra');

  /* 
  $('#hideButton').click(function() {
    $('#celebs').hide();
  });

  $('#showButton').click(function() {
    $('#celebs').show();
  });
  */

  /*
  $('#toggleButton').click(function() {
    if ($('#celebs').is(':visible')) {
      $('#celebs').hide();
    }else{
      $('#celebs').show();
    }
  });
  */



  // Skapa knapp
  $('<input type="button" id="toggleButton" value="Hide" />')
    .insertBefore('#celebs');

  // Funktioner för knapp
  $('#toggleButton').click(function() {
    $('#celebs').toggle();

    if ($('#celebs').is(':visible')) {
      $(this).val('Hide');
      $(this).fadeIn();
    }else{
      $(this).val('Show');
    }
  });

  
  $('p').animate({
    padding: '20px',
    fontSize: '30px'
  }, 2000);

  // Menu
  $('.menu li').hover(function() {
    $(this).animate({'border':'2px solid black'},200);
  }, function() {
    $(this).animate({color: '#000000'},200);
  });



  console.log('Ready');
});
