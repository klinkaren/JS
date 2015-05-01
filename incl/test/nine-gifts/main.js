/**
 * Work with strings.
 */
//$(document).ready(function(){
// using short code instead...

$(function(){
	'use strict';
  console.log('Ready to rumble!');

  $('.gift').click(function(){
  	$(this).parent().addClass('fullWidth');
  	$(this).parent().find('*').fadeIn('slow');
  	$(this).parent().children('.gift').hide('slow');
  	console.log("Opened a box.");
  })

  $('.minimize').click(function(){
  	$(this).parent().find('*').hide();
  	$(this).parent().removeClass().addClass('box').show();
  	$(this).parent().children('.gift').fadeIn('slow');
  	console.log("Minimezed a box.");
  });


  // Box 1
  $('#box1 h1, #box1 p').click(function() {
    $(this).toggleClass('dark');
    console.log("toggle dark!");
  });


  // Box 2
  $('#box2').click(function(){
  	if($(this).hasClass('fullWidth')) {
  		$(this).toggleClass('dark');
  		console.log("toggle dark box!");
  	}
  });

  $('#box2 .unwrapped img').click(function() {
    $(this).toggleClass('thumbnail');
    console.log("Resizing the image.");
  });


  // Box 3
  var addColor = function() {
  	$('<div></div>')
	  	.addClass('palette')
	  	.css('background-color', $('#box3_color').val())
	  	.insertAfter('#palette')
	  	.click(function(){
	  		$(this).remove();
	  		console.log("Removing a color.");
	  	});
  	console.log("Added a color.");
  };

  $('#box3 input[type=button]').click(addColor);
  // Vad används stycket nedan till?
	$('#box3 input[type=text]').keypress(function(event) {
		if ( event.which == 13 ) {
		  event.preventDefault();
		  addColor();
		}
	});


	// Box 4
  var current_dimension = function() {
    var height = $('#me-image-4').height(),
      width = $('#me-image-4').width();
    $('#box4_current').text(width + ' x ' + height);
    console.log("Updated current dimensions on the image.");
  };
  
  $('#box4_dimensions').click(current_dimension());
  
  $('#box4_height_incr').click(function() {
    $('#me-image-4').css('height', '+=5px');
    console.log("Increase the height of the image.");
    current_dimension();
  });
  
  $('#box4_height_decr').click(function() {
    $('#me-image-4').css('height', '-=10px');
    console.log("Decrease the height of the image.");
    current_dimension();
  });
  
  $('#box4_width_incr').click(function() {
    $('#me-image-4').css('width', '+=4px');
    console.log("Increase the width of the image.");
    current_dimension();
  });
  
  $('#box4_width_decr').click(function() {
    $('#me-image-4').css('width', '-=8px');
    console.log("Decrease the width of the image.");
    current_dimension();
  })


  // Box 5
  $('#fadeToggle').click(function(){
  	$('#me-image-5').fadeToggle(2000);
  });

  $('#slideToggle').click(function(){
  	$('#me-image-5').slideToggle(2000);
  });


  //
 
  console.log('Main.js done!');
});