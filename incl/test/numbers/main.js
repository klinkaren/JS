/**
 * Work with strings.
 */
$(document).ready(function(){
  'use strict';
  var text = document.getElementById('text'),
    i, 
    e1,
    e2,
    rows = '',
    rows2 = '',
    numbers = [2, 42, 11, 4.2, 0, -11, 9];
  console.log('Created array with ' + numbers.length + ' elements.')

  console.log('Starting');
  text.className = 'black';
  text.innerHTML = '<b>Numbers</b>';
  e1 = document.createElement('table');
  e2 = document.createElement('div');

  
  // Set header for table
  console.log('Setting header');
  rows = '<tr><th>Number</th><th>Exp</th><th>3 dec</th><th>Round</th><th>Sqrt</th><th>Sin</th></tr>'

  // Set values for table
  console.log('Looping to get values');
  for (i = 0; i < numbers.length; i++){
    rows += '<tr>';
      rows += '<td>' + numbers[i] + '</td>';
      rows += '<td>' + numbers[i].toExponential() + '</td>';
      rows += '<td>' + numbers[i].toFixed(3) + '</td>';
      rows += '<td>' + Math.round(numbers[i]) + '</td>';
      rows += '<td>' + Math.sqrt(numbers[i]).toPrecision(3) + '</td>';
      rows += '<td>' + Math.sin(numbers[i]).toPrecision(3) + '</td>';
    rows += '</tr>';
  }

  rows2 += 'Eulers: '+ Math.E+ '<br>';
  rows2 += 'Pi: '+ Math.PI+ '<br>';
  rows2 += 'Biggest value: '+ Number.MAX_VALUE+ '<br>';
  rows2 += 'Positive infinity: '+ Number.POSITIVE_INFINITY+ '<br>';

  e1.innerHTML = rows;
  e2.innerHTML = rows2;
  text.parentElement.appendChild(e1);
  text.parentElement.appendChild(e2);
  
  console.log('Ready');
});