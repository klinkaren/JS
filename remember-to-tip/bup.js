/**
 *  VARIABLES
 *  - Change these to change appearance of tooltip.
 */
var ttWidth = 300,        // width of tooltip
    ttColor = '#cc3333',  // text color
    ttBgColor = '#fff',   // background color
    ttBorderRadius = 10,  // border roundness
    ttPadding = 10,       // padding (inner distance between text and border)
    ttMargin = 15,        // margin (distans between tooltip and pointer)
    arrow = 'red';        // arrow color (can be white, black, blue, green, yellow or grey)


// After page has loaded
$(function(){

  (function($) {

    $.fn.showTip = function() {
      // Plugin code
      return this.each(function() {
        var $toolTipSpan = $('<div class="tooltip"><span class="tooltip_arrow"></span></div>');
        // Do something for each item

        $(this).mouseover(function(){
            var $alt = $(this).attr('alt');
            var $title = $(this).attr('title');
            var $toolTip = $toolTipSpan.clone(true);  
            $('.tooltip')
              .css({'display': 'block'})
              .html('<h1 class="tooltip">Title</h1><p class="tooltip">'+alt'</p>');
          })
          .mouseout(function() { // Släcker tooltip-rutan när muspekaren förs bort
            $(this).parent().next().fadeOut('fast');
            })
          .mousemove(function(event) { 
              $('.tooltip')
              .css('top', (event.pageY - 48) + 'px')
              .css('left', (event.pageX - 25) + 'px');    
            });
      });

    };

    $.fn.showTip.defaults = {

    }

  }) (jQuery);

  $('.showTooltip').showTip();

});