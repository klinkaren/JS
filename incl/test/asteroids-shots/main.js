/**
 * Playing Asteroids while learning JavaScript object model.
 */

/** 
 * Shim layer, polyfill, for requestAnimationFrame with setTimeout fallback.
 * http://paulirish.com/2011/requestanimationframe-for-smart-animating/
 */ 
window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       || 
          window.webkitRequestAnimationFrame || 
          window.mozRequestAnimationFrame    || 
          window.oRequestAnimationFrame      || 
          window.msRequestAnimationFrame     || 
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();



/**
 * Shim layer, polyfill, for cancelAnimationFrame with setTimeout fallback.
 */
window.cancelRequestAnimFrame = (function(){
  return  window.cancelRequestAnimationFrame || 
          window.webkitCancelRequestAnimationFrame || 
          window.mozCancelRequestAnimationFrame    || 
          window.oCancelRequestAnimationFrame      || 
          window.msCancelRequestAnimationFrame     || 
          window.clearTimeout;
})();



/**
 * Trace the keys pressed
 * http://nokarma.org/2011/02/27/javascript-game-development-keyboard-input/index.html
 */
window.Key = {
  pressed: {},

  SPACE:  32, 
  LEFT:   37,
  UP:     38,
  RIGHT:  39,
  DOWN:   40,
  SPACE:  32,
  A:      65,
  S:      83,
  D:      68,
  W:      87,
  
  isDown: function(keyCode, keyCode1) {
    return this.pressed[keyCode] || this.pressed[keyCode1];
  },
  
  onKeydown: function(event) {
    this.pressed[event.keyCode] = true;
  },
  
  onKeyup: function(event) {
    delete this.pressed[event.keyCode];
  }
};
window.addEventListener('keyup',   function(event) { Key.onKeyup(event); },   false);
window.addEventListener('keydown', function(event) { Key.onKeydown(event); }, false);



/**
 * Prevent keyboard navigation 
 * (else game may move on smaller screens)
 */
window.addEventListener("keydown", function(event) {
    // Space and arrow keys
    if([32, 37, 38, 39, 40].indexOf(event.keyCode) > -1) {
        event.preventDefault();
    }
}, false); 



/**
 * All objects are Vectors
 */
function Vector(x, y) {
  this.x = x || 0;
  this.y = y || 0;
}

Vector.prototype = {
  muls:  function (scalar) { return new Vector( this.x * scalar, this.y * scalar); }, // Multiply with scalar
  imuls: function (scalar) { this.x *= scalar; this.y *= scalar; return this; },      // Multiply itself with scalar
  adds:  function (scalar) { return new Vector( this.x + scalar, this.y + scalar); }, // Multiply with scalar
  iadd:  function (vector) { this.x += vector.x; this.y += vector.y; return this; }   // Add itself with Vector
}



/**
 * The forces around us.
 */
function Forces() {
  this.all = {};
}

Forces.prototype = {

  createAcceleration: function(vector) {
    return function(velocity, td) {
      velocity.iadd(vector.muls(td));
    }
  },

  createDamping: function(damping) {
    return function(velocity, td) {
      velocity.imuls(damping);
    }
  },

  createWind: function(vector) {
    return function(velocity, td) {
      velocity.iadd(vector.adds(td));
    }
  },  

  addAcceleration:  function(name, vector)  { this.all[name] = this.createAcceleration(vector); },
  addDamping:       function(name, damping) { this.all[name] = this.createDamping(damping); },
  addWind:          function(name, vector)  { this.all[name] = this.createWind(vector); },

  update: function(object, td) {
    for(var force in this.all) {
      if (this.all.hasOwnProperty(force)) {
        this.all[force](object, td);
      }
    }
  }

}

window.Forces = new Forces();
window.Forces.addAcceleration('gravity', new Vector(0, 1.82));
window.Forces.addDamping('drag', 1.0);
window.Forces.addWind('wind', new Vector(0.0, 0.2));


/**
 * Bottom piece
 */
function Bottom(canvasWidth, canvasHeight, position){
  this.width    = canvasWidth     || 200;
  this.height   = 50;
  this.position = position  || new Vector(this.width/2,canvasHeight-this.height/2);
  console.log("Width: "+this.width+", Height: "+this.height);
}
   
Bottom.prototype = {

  draw: function(ct) {
    var x = this.width/2, 
        y = this.height/2;

    ct.save();
    ct.translate(this.position.x, this.position.y);
    ct.beginPath();
    ct.fillStyle = 'hsla(0, 100%, 34%, 0.59)';
    ct.fillRect(-x, -y, x*2, y*2);
    ct.restore();
  },

  /**
   * Check if ship collided with object passed to function.
   */
  collided: function(caller) {
    var tx = this.position.x,
        ty = this.position.y,
        tw = this.width,
        th = this.height,
        cx = caller.position.x,
        cy = caller.position.y,
        cw = caller.width,
        ch = caller.height;

    if (ty+th/2 < cy-ch/2 || cy+ch/2 < ty-th/2 || tx + tw/2 < cx-cw/2 || cx+cw/2 < tx-tw/2) {
      return false;
    }else{
      return true;
    }
  }

  /* update: function(td, width, height) { }*/
}


/**
 * A Player as an object.
 */
function Player(width, height, position, velocity, speed, direction, accelerateForce, breakForce, dampForce) {
  this.alive      = true;
  this.score      = 0;
  this.height     = height    || 32;
  this.width      = width     || 32;
  this.position   = position  || new Vector();
  this.velocity   = velocity  || new Vector();
  this.speed      = speed     || new Vector();
  this.direction  = direction || 4.71;
  this.accelerateForce  = accelerateForce || Forces.createAcceleration(new Vector(80, 80));
  this.breakForce       = breakForce      || Forces.createDamping(0.97);
  this.dampForce        = dampForce       || Forces.createDamping(0.999);
  this.missiles         = [];
  this.missileReady     = true;
  this.reloadTime = 30;
  this.timer = 0; 
}

Player.prototype = {

  draw: function(ct) {
    var x = this.width/2, y = this.height/2;

    ct.save();
    ct.translate(this.position.x, this.position.y);
    ct.rotate(this.direction+Math.PI/2)
    ct.beginPath();
    ct.moveTo(0, -y);
    ct.lineTo(x, y);
    ct.lineTo(0, 0.8*y);
    ct.lineTo(-x, y);
    ct.lineTo(0, -y);

    if (Key.isDown(Key.UP, Key.W)) {
      ct.moveTo(0, y);
      ct.lineTo(-2, y+10);
      ct.lineTo(0, y+8);
      ct.lineTo(2, y+10);
      ct.lineTo(0, y);
    } 
    
    if (Key.isDown(Key.DOWN, Key.S)) {
      ct.moveTo(y+4, 0);
      ct.arc(0, 0, y+4, 0, Math.PI, true);
    }


    ct.stroke();
    ct.restore();

    // Draw missiles
    for (var i=0; i<this.missiles.length; ++i) {
      this.missiles[i].draw(ct);
    }
  },


  moveForward: function() {
    this.dampForce(this.speed, td);
    this.position.x += this.speed.x * Math.cos(this.direction) * td;
    this.position.y += this.speed.y * Math.sin(this.direction) * td;
    this.position.iadd(this.velocity.muls(td));
  },

  rotateLeft:  function() { this.direction -= Math.PI/30; },
  rotateRight: function() { this.direction += Math.PI/30; },

  throttle: function(td)  { this.accelerateForce(this.speed, td); },
  breaks:   function(td)  { this.breakForce(this.speed, td); this.breakForce(this.velocity, td); },

  shoot: function() {
    if(this.missileReady == true) {
        x = this.position.x;
        y = this.position.y;
        this.missiles.push(new Missile(3, 3, new Vector(x, y), new Vector(), new Vector(1000, 1000), this.direction));
        this.missileReady = false;
        console.log("Fire");
    }
  }, 

  reloadMissile: function () {
    if(this.timer < this.reloadTime) {
        this.timer++;
    }
    else {
        this.missileReady = true;
        this.timer = 0;
    }
  }, 

  checkCollision: function() {
    // Check if collission with bottom
    if(bottom.collided(this)){
      this.alive = false;
    };
  },

  update: function(td, width, height, ct) {
    if (Key.isDown(Key.UP, Key.W))     this.throttle(td);
    if (Key.isDown(Key.LEFT, Key.A))   this.rotateLeft();
    if (Key.isDown(Key.DOWN, Key.S))   this.breaks(td);
    if (Key.isDown(Key.RIGHT, Key.D))  this.rotateRight();
    if (Key.isDown(Key.SPACE))         this.shoot(); 
    if(!this.missileReady)             this.reloadMissile();
    Forces.update(this.velocity, td);
    this.moveForward(td);   
    this.stayInArea(width, height);
    this.checkCollision();


    // Update missiles
    for (var i=0; i<this.missiles.length; ++i) {
      this.missiles[i].update(td, width, height);
      
      // Remove missiles if not alive, else draw it.
      if (!this.missiles[i].alive) {
          this.missiles.splice(i,1); 
          i--;
      } 
    }

  },

  stayInArea: function(width, height) {
    if(this.position.y < 0)                  this.position.y = 0;
    if(this.position.y > height-this.height) this.position.y = height-this.height;
    if(this.position.x > width-this.width)   this.position.x = width-this.width;
    if(this.position.x < 0)                  this.position.x = 0;
  },

}


/**
 * Missile as an object.
 */
function Missile(width, height, position, velocity, speed, direction, accelerateForce, breakForce, dampForce) {
    this.height = height || 3;
    this.width = width || 3;
    this.position = position || new Vector();
    this.velocity = velocity || new Vector();
    this.speed = speed || new Vector();
    this.direction = direction || 0;
    this.accelerateForce = accelerateForce || Forces.createAcceleration(new Vector(80, 80));
    this.breakForce = breakForce || Forces.createDamping(0.97);
    this.dampForce = dampForce || Forces.createDamping(0.999);
    this.alive = true;
}

Missile.prototype = {

    draw: function(ct) {
        ct.save();
        ct.translate(this.position.x, this.position.y);
        ct.rotate(this.direction + Math.PI / 2)
        ct.beginPath();
        ct.fillStyle = "#FFF";
        ct.arc(0, -10, this.width, 0, 2 * Math.PI);
        ct.fill();

        console.log("drawing shot at "+ this.position.x + ", " + this.position.y); 
        ct.restore();
    }, 
 

    moveForward: function() {
        this.dampForce(this.speed, td);
        this.position.x += this.speed.x * Math.cos(this.direction) * td;
        this.position.y += this.speed.y * Math.sin(this.direction) * td;
        this.position.iadd(this.velocity.muls(td));
    },

    checkAlive: function(width, height) {
        if ((this.position.y < -this.height) || 
           (this.position.y > height) ||
           (this.position.x > width) ||
           (this.position.x < -this.width)) {
              this.alive = false
              console.log("Shot out of bounce. Deleted.")
           } 
    }, 

    update: function(td, width, height) {
        Forces.update(this.velocity, td);
        this.moveForward(td);
        this.checkAlive(width, height);
    }

} 


/**
 * Asteroids, the Game
 */
window.Asteroids = (function(){
  var canvas, ct, ship, lastGameTick;

  var init = function(canvas) {
    canvas = document.getElementById(canvas);
    ct = canvas.getContext('2d');
    width = canvas.width,
    height = canvas.height,
    ct.lineWidth = 1;
    ct.strokeStyle = 'hsla(0,0%,100%,1)',
    ship = new Player(10, 20, new Vector(width/2, height/2));
    bottom = new Bottom(width, height);

        /* But i want new asteroids to be generated constantly... In gameLoop?#######################################################################
        for (var i=0; i<numEnemies; ++i)
        {
            var startPosX = randomNumberRange(0, canvas.width/3); 
            var startPosY = randomNumberRange(0, canvas.height/3); 
            var speed = randomNumberRange(1, 2);
            var direction = new Vector(randomNumberRange(-1, 1), randomNumberRange(-1, 1)); 
                        
            enemy = new Enemy();
            enemy.init(32, 32, new Vector(startPosX,startPosY), 1, direction);
            enemies.push(enemy);
        }
        */

    console.log('Init the game');
  };

  var update = function(td) {
    ship.update(td, width, height, ct);
    //bottom.update(td, width, height);

  };

  var render = function() {
    ct.clearRect(0,0,width,height);
    if (ship.alive){
      ship.draw(ct);
      bottom.draw(ct);
    } else {

      // Show game over
      ct.font = "60px Comic Sans MS";
      ct.fillStyle = "red";
      ct.textAlign = "center";
      ct.fillText("Game over!", width/2, height/2);

      // Show 'Restart game' button
      $("#btnGame").css({'display' : 'block'});
    }
    ct.font = "20px Comic Sans MS";
    ct.fillStyle = "white";
    ct.textAlign = "right";
    ct.fillText("Score: "+ ship.score, width-5, 20);
  };

  var gameLoop = function() {
    var now = Date.now();
    td = (now - (lastGameTick || now)) / 1000; // Timediff since last frame / gametick
    lastGameTick = now;
    requestAnimFrame(gameLoop);
    update(td);
    render();
  };

  return {
    'init': init,
    'gameLoop': gameLoop
  }
})();



// On ready
$(function(){
  'use strict';

  Asteroids.init('canvas1');
  Asteroids.gameLoop();
  document.getElementById('btnGame').onclick = function(){
    window.location.reload(true);
  };


  console.log('Ready to play.');  
});


