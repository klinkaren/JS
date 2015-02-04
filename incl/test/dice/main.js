/**
 * Work with strings.
 */
$(document).ready(function(){
  'use strict';
  var num, 
    element = document.getElementById('text');

  function roll (element, num) {
    var i, rolls, res = '', sum = 0, val;
    for (i = 0; i < num; i++) {
      val = Kjellb.random(1,6);
      sum += val;
      res += val + ', ';
    }
    element.innerHTML += '<br><h2>' + num + ' rolls</h2>';
    element.innerHTML += 'Average: '+ (sum/num).toPrecision(2) + '. Serie: ' + res + '<br>';
  };



  console.log('Starting');
  element.className = 'black';
  element.innerHTML = '<h1>Dice</h1>';

  roll(element, 6);

  roll(element, 10);
  
  roll(element, 100);

  console.log('Ready');
});