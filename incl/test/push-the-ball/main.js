/**
 * Moving around a ball by clicking on it.
 */
$(document).ready(function(){
  'use strict';
  var element = document.getElementById('text'),
      flash = document.getElementById('flash'),
  myBall = {};

console.log('Starting');
element.className = 'black';
element.innerHTML = '<b>Click the ball to make it move around.</b>';

myBall.image = 'http://dbwebb.se/img/black_ball_64_64.png';
myBall.position = {x:10, y:10}

console.log(myBall.position.x); // prints out 10

myBall.HTMLelement = document.getElementById('ball');

myBall.draw = function () {
  this.HTMLelement.style.backgroundImage = 'url(' + this.image + ')';
  this.HTMLelement.style.top = this.position.y + 'px';
  this.HTMLelement.style.left = this.position.x + 'px';
  console.log('Drawing ball.');
};

myBall.move = function (x, y) {
  this.position.x += x;
  this.position.y += y;
  console.log('Moving to to ' + this.position.x + ', ' + this.position.y);
  this.draw();

};

myBall.draw();

// clickX/Y keeps track on where on the ball the click is made.
// moveX/Y tells where to move ball (by measuring distance between center and click and moving in opposit direction times 10).
myBall.HTMLelement.addEventListener('click', function (event) {
  var clickX = event.clientX - myBall.position.x,
      clickY = event.clientY - myBall.position.y,
      moveX = -(clickX - 32) * 10,
      moveY = -(clickY - 32) * 10;

  console.log('Clicked on ball (' + clickX + ', ' + clickY + ')');
  myBall.move(moveX, moveY);
}); 

  





  console.log('Starting');


  console.log('Ready');
});