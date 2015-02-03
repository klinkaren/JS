/**
 * Work with strings.
 */
$(document).ready(function(){
  'use strict';
  var element = document.getElementById('text'),
    str = '', out, res, out2;

  out = function (element, str) {
    element.innerHTML += '<br>' + str +  ' (' + str.length + ')';
  };

  out2 = function(element, str) {
    element.innerHTML += '<br>'+ str + '(typeof=' + typeof(str) + ')';
  };

  console.log('Starting');
  element.className = 'black';
  element.innerHTML = '<h1>Strings</h1>';

  str = 'Copyright \u00A9 by XXX';
  out(element, str);

  str += ' Mumintrollet ';
  out(element, str);

  str += 1942;
  out(element, str);

  str += '.';
  out(element, str);

  // Split str with XXX as splitter. 
  // Then concat the values of the array to str and send to function for rendering.
  res = str.split("XXX ");
  str = res[0]+res[1];
  out(element, str);

  str = "19" + "42";
  out2(element, str);

  str = 19 + "42";
  out2(element, str);

  str = 19 + 42;
  out2(element, str);

  str = "19" + 42;
  out2(element, str);

  console.log('Ready');
});