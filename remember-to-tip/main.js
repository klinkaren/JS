$(document).ready(function() {
    'use strict';   
    $('.showTooltip').toolTip('#fff', '#333', 400, 20);
  
});


(function($) {

  $.fn.toolTip = function(bgColor, textColor, width, borderRadius) {   
    return this.each(function() {
      var $toolTip = $('<div class="tooltip"></div>'),
      ttWidth = width || 300,        // width of tooltip
      ttColor = textColor || '#fff',  // text color
      ttBgColor = bgColor || '#333',   // background color
      ttBorderRadius = borderRadius || 10,  // border roundness
      ttPadding = 10,       // padding (inner distance between text and border)
      ttMargin = 15;        // margin (distans between tooltip and pointer)

            $(this).mouseover(function() {

              // Get text from title and alt
              var $title = $(this).attr("title"),
                  $alt = $(this).attr("alt");
              
              // If no alt-attribute
              if (typeof alt == typeof undefined || alt == false){
                var alt = '';
              }
              
              // If no title-attribute
              if (typeof title == typeof undefined || title == false){
                var title = '';
              }

              $(this).parent().after($toolTip);
              $toolTip.prepend('<h1 class="tooltip">'+$title+'</h1><p class="tooltip">'+$alt+'</p>');
              $(this).parent().next($toolTip)
                .css({
                  'position': 'absolute',
                  'z-index': '2',
                  'width': ttWidth+'px',
                  'color' : ttColor,
                  'background-color': ttBgColor,
                  'border-radius': ttBorderRadius+'px',
                  '-moz-border-radius': ttBorderRadius+'10px',
                  'padding': ttPadding+'px',
                  'min-height': '50px'
                });
            })


            .mouseout(function() {
              $(this).parent().next().fadeOut('fast');
              $toolTip = $('<div class="tooltip"></div>');
            })


            .mousemove(function(event) {

              // Get position of mouse pointer
              var mx = event.pageX;
              var my = event.pageY;

              // Get position of windowWidth
              windowWidth  = window.innerWidth  || $(window).width();

              // Show tooltip to the right or left depending on space.
              if((mx+ttWidth)<windowWidth){
                $(".tooltip").css({
                  'left': mx+ttMargin+'px', 
                  'top': my-30+'px',
                });
              }else{
                $(".tooltip").css({
                  'left': mx-ttWidth-(ttPadding*2)-ttMargin+'px', 
                  'top': my-30+'px',
                });
              }


            });

        });
    }   
})(jQuery);
