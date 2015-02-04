/**
 * Collection of functions that might come in handy. 
 * Build by Viktor Kjellberg
 */
window.Kjellb = (function(window, document, undefined ) {
  var Kjellb = {};

/**
 * Takes in minimum and maximum and returns a random number 
 * between min and max (including min and max).
 */
Kjellb.random = function (min, max) {
	return Math.floor(Math.random()*(max+1-min)+min);
}

  // Expose public methods
  return Kjellb;
  
})(window, window.document); 