/**
 * Work with strings.
 */
$(document).ready(function(){
  'use strict';
var tux = document.getElementById('b1'),
  area = document.getElementById('flash'),
  step = 1,
  left = area.offsetLeft,
  top  = area.offsetTop,
  posLeft = 0, 
  posTop = 0,
  tileSize = 32,
  gridSize = 24,

  /**
   * This is the background for the game area.
   */
  gameArea = [
    13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,
    12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,
    14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,
    13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,
    12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,
    14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,
    13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,
    13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,21,
    12,13,14,12,13,14,12,13,14,12,13,14,19,18,18,18,26,14,12,13,14,12,13,21,
    14,12,13,14,12,13,14,12,13,14,12,19,21,21,21,21,21,26,14,12,13,14,12,21,
    13,14,12,13,14,12,13,14,12,13,14,20,21,21,21,21,21,25,13,14,12,13,14,21,
    12,13,14,12,13,14,12,13,14,12,13,22,21,21,21,21,21,21,26,13,14,12,13,21,
    14,12,13,14,12,13,14,12,13,14,12,13,20,21,21,21,21,21,21,26,13,14,12,21,
    12,13,14,12,13,14,12,13,14,12,13,14,20,21,21,21,21,21,21,25,14,12,13,21,
    14,12,13,14,12,13,14,12,13,14,12,13,22,21,21,21,21,21,21,24,13,14,12,21,
    13,14,12,13,14,12,13,14,12,13,14,12,13,22,21,21,21,21,24,14,12,13,14,21,
    12,13,14,12,13,14,12,13,14,12,13,14,12,13,22,23,23,24,12,13,14,12,13,21,
    14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,21,
    13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,21,
    12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,21,
    14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,21,
    13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,21,
    12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,21,
    14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,13,14,12,21,
  ],

  /*
  .t18{background-image:url(../img/boulder-dash/grass_n.png);}
.t19{background-image:url(../img/boulder-dash/grass_nw.png);}
.t20{background-image:url(../img/boulder-dash/grass_w.png);}
.t21{background-image:url(../img/boulder-dash/grass_full.png);}
.t22{background-image:url(../img/boulder-dash/grass_sw.png);}
.t23{background-image:url(../img/boulder-dash/grass_s.png);}
.t24{background-image:url(../img/boulder-dash/grass_se.png);}
.t25{background-image:url(../img/boulder-dash/grass_e.png);}
.t26{background-image:url(../img/boulder-dash/grass_ne.png);}
*/

  /**
   * These are blocks that cant be moved to, or something happens when you try to move on them.
   * The blocks are drawn "on top" of the gamearea. Block 10 is empty, should be 0 but looks nicer with two figures.
   */
  gameBlocks = [
    19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,13,10,10,10,13,10,12,10,10,12,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,13,10,10,10,13,10,12,10,10,12,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,13,10,10,10,13,10,12,10,12,12,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,13,13,10,13,13,10,12,12,12,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,13,10,13,10,10,12,12,12,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,13,10,13,10,10,12,10,12,12,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,13,13,13,10,10,12,10,10,12,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,13,10,10,10,12,10,10,12,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,11,11,11,11,11,11,11,11,11,11,11,11,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,19,
    19,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,18,19,
    19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,19,
  ];


  /**
   * Draw the initial gameplan
   */
  function drawGamePlan(gameArea, gameBlocks) {
    var i,e,b;
    for(i = 0; i < gameArea.length; i++) {
      e = document.createElement('div');
      e.innerHTML = '';
      e.className = 'tile t' + gameArea[i] + (gameBlocks[i] ? ' b' + gameBlocks[i] : '');
      e.id = 'n' + i;
      area.appendChild(e);
    } 
  };
  console.log('Drawing gameplan.');  
  drawGamePlan(gameArea, gameBlocks);
  
  /**
   * Move Rockford
   */
  var move = function(moveLeft, moveTop) {

    function moveIt() {
      tux.style.left = (area.offsetLeft + posLeft*tileSize + tileSize/2) + 'px';
      tux.style.top  = (area.offsetTop + posTop*tileSize + tileSize/2) + 'px'; 
    };

    if(!(gameBlocks[(posLeft+moveLeft)+(posTop+moveTop)*gridSize]-10)) {
      posLeft += moveLeft; 
      posTop  += moveTop;
      moveIt();
    } else {
      console.log('Block detected, cant move.');
    }
  };

  console.log('Moving Tux to initial spot.');  
  move(1, 1);


  document.onkeydown = function(event) {
    var key;
    key = event.keyCode || event.which;
    switch(key) {
      case 37:  // ascii value for arrow left 
        tux.className='baddie left'; 
        move(-step, 0); 
        break;
      case 39:  // ascii value for arrow right 
        tux.className='baddie right'; 
        move(step, 0); 
        break;
      case 38:  // arrow up
        tux.className='baddie up';
        move(0, -step); 
        break;
      case 40:  // arrow down
        tux.className='baddie down';
        move(0, step); 
        break;
      case 32:  // space = jump
        if(!(gameBlocks[(posLeft+0)+(posTop-step)*gridSize]-10)) {
          move(0, -step);
          // What jumps up, must come down, a bit later.
          setTimeout(function(){move(0, step);console.log('Timer!');}, 500);
        } else {
          console.log('Block detected, cant move.');
        }
        break;
      case 82:  // r = random
        move(step*Math.floor(Math.random()*(3)-1), step*Math.floor(Math.random()*(3)-1));
        break;
      default:
        tux.className='baddie down';
        break;
    }    
    console.log('Keypress: ' + event + ' key: ' + key + ' new pos: ' + tux.offsetLeft + ', ' + tux.offsetTop);
  };

  console.log('Everything is ready.'); 
});