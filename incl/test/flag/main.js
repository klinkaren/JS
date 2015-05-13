/**
 * Work with strings.
 */
$(document).ready(function(){
  'use strict';

  var canvas = document.getElementById('canvas'),
    ct = canvas.getContext('2d');

  // Swedish flag
  ct.fillStyle = '#006aa7';
  ct.fillRect(0,0,200,100);
  ct.fillStyle = '#fecc00';
  ct.fillRect(70,0,20,100);
  ct.fillStyle = '#fecc00';
  ct.fillRect(0,40,200,20);

  // Italian flag
  ct.fillStyle = '#ffffff';
  ct.fillRect(0,110,200,100);
  ct.fillStyle = '#009246';
  ct.fillRect(0,110,67,100);
  ct.fillStyle = '#ce2e37';
  ct.fillRect(133,110,67,100);

  console.log('Everything is ready.');  
});