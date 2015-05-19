/** REMEMBER TO TIP
 *  - A jQuery tooltip plugin made by Viktor Kjellberg 2015. Free as in speech.
 *
 * How:
 *  - looks for showTooltip class and adds a tooltip.
 *  - Tooltip info is taken from title and alt attributes. 
 *
 * Requires:
 * - jQuery
 */

/**
 *  VARIABLES
 *  - Change these to change appearance of tooltip.
 */
var ttWidth = 300, 				// width of tooltip
		ttColor = '#cc3333',	// text color
		ttBgColor = '#fff',		// background color
		ttBorderRadius = 10,	// border roundness
		ttPadding = 10,				// padding (inner distance between text and border)
		ttMargin = 15,				// margin (distans between tooltip and pointer)
		arrow = 'red'; 				// arrow color (can be white, black, blue, green, yellow or grey)


// After page has loaded
$(function(){



	/**
	 * Create the tooltip
	 */ 
	$('body').append('<div id="tooltip">Tjena</div>');
	$('body').append('<img id="tooltipArrow" src="img/arrow'+arrow+'.png" />');



  /*
   * Style the tooltip and arrow with CSS based on variables above
   */
  $('#tooltip').css({
  	'position': 'absolute',
  	'z-index': '2',
  	'width': ttWidth+'px',
  	'color' : ttColor,
  	'background-color': ttBgColor,
  	'border-radius': ttBorderRadius+'px',
  	'-moz-border-radius': ttBorderRadius+'10px',
  	'padding': ttPadding+'px',
  	'min-height': '50px',
  	'display' : 'none'
  })
   $('#tooltipArrow').css({
  	'position': 'absolute',
  	'z-index': '3',
  	'display' : 'none'
  })



  /**
   * Show/Hide tooltip
   */
  $('.showTooltip').hover(function(){
  	// Mouse over

  	// Get text from title and alt
  	var title = $(this).attr("title"),
  		  alt = $(this).attr("alt");
  	if (typeof alt == typeof undefined || alt == false){
  		// If no alt-attribute
  		var alt = '';
  	}
  	if (typeof title == typeof undefined || title == false){
  		// If no title-attribute
  		var title = '';
  	}

  	// Show tooltip
  	$('#tooltip')
  		.css({'display': 'block'})
  		.html('<h1 class="tooltip">'+title+'</h1><p class="tooltip">'+alt+'</p>');
  	$('#tooltipArrow')
  		.css({'display': 'block'});

  }, function(){
  	// Mouse out

  	// Hide tooltip
  	$('#tooltip').css({'display': 'none'});
  	$('#tooltipArrow').css({'display': 'none'})

  });



  /*
   * Position tooltip
   */
   $(document).mousemove(function(event){

   		// Get position of mouse pointer
   		var mx = event.pageX;
   		var my = event.pageY;

   		// Get position of windowWidth
   		windowWidth  = window.innerWidth  || $(window).width();

   		// Show tooltip to the right or left depending on space.
   		if((mx+ttWidth)<windowWidth){
	   		$("#tooltip").css({
	   			'left': mx+ttMargin+'px', 
	   			'top': my-30+'px',
	   		});
	   		$("#tooltipArrow")
	   			.css({
		   			'left': mx+ttMargin-10+'px', 
		   			'top': my-17+'px',
	   			})
	   			.attr('src', 'img/arrow'+arrow+'.png');
   		}else{
   			$("#tooltip").css({
	   			'left': mx-ttWidth-(ttPadding*2)-ttMargin+'px', 
	   			'top': my-30+'px',
	   		});
	   		$("#tooltipArrow")
		   		.css({
		   			'left': mx-ttPadding-ttMargin+10+'px', 
		   			'top': my-17+'px',
		   		})
		   		.attr('src', 'img/arrow'+arrow+'flipped.png');
   		}

   });


  console.log('Ready');
});