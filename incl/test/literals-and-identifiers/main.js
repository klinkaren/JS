/**
 * Work with strings.
 */
$(document).ready(function(){
  'use strict';
  var text = document.getElementById('text'), i,
    literals = [42, 11.1, "I'm a string!", "me to", "me three", 
    function (){}, true, false, Boolean(true), 
    "true", null, [1,2,3,4], /javascript/];
  console.log('Created array with ' + literals.length + ' elements.')

  console.log('Starting');
  text.className = 'black';
  text.innerHTML = '<b>Literals and identifiers</b>';

  console.log('Looping');
  for (i = 0; i < literals.length; i++){
    text.innerHTML += '<p>' + literals[i] + ': ' + typeof literals[i] + '<p>';
  }
  
  console.log('Ready');
});