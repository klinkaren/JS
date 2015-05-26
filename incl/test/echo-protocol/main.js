/**
 * Functions
 */
function chatMessage(msg){
  $('#chat').append(getNow() + ': ' + msg + '\r\n');
}

// Return current time as hh:mm:ss
function getNow(){
  time = new Date();

  var hh = time.getHours();
  if (hh < 10){hh = "0" + hh;};
  var mm = time.getMinutes();
  if (mm < 10){mm = "0" + mm;};
  var ss = time.getSeconds() ;
  if (ss < 10){ss = "0" + ss;};

  return hh + ":" + mm + ":" + ss;
}



/**
 * When page is loaded
 */
$(document).ready(function(){
  'use strict';

  var url        = document.getElementById('url'),
      connect    = document.getElementById('connect'),
      disconnect = document.getElementById('disconnect'),
      chat       = document.getElementById('chat'),
      websocket  = null; 
      name;

  // Event handler to create the websocket connection when someone clicks the button #connect
  connect.addEventListener('click', function(event) {
    name = document.getElementById("name").value;
    if(name){ 
      console.log('Connecting to: ' + url.value);
      chatMessage('Connecting ' + name + ' to: ' + url.value);
      websocket = new WebSocket(url.value, 'echo-protocol');

      // Eventhandler when the websocket is opened.
      websocket.onopen = function() {
        console.log('The websocket is now open.');
        chatMessage('The websocket is now open.');
        //websocket.send('Thanks for letting me connect to you.');
      }
     
      websocket.onmessage = function(event) {
        console.log('Receiving message: ' + event.data);
        chatMessage('Receiving: ' + event.data);
      }
     
      // Eventhandler when the websocket is closed.
      websocket.onclose = function() {
        console.log('The websocket is now closed.');
        chatMessage('The websocket is now closed');
      }
      $(this).css({'display': 'none'});
      $('#disconnect').css({'display': 'block'});
    }else{
      alert('Please supply a name.');
    }
  } , false);


  // Event handler to create the websocket connection when someone clicks the button #connect
  disconnect.addEventListener('click', function(event) {
    $(this).css({'display': 'none'});
    $('#connect').css({'display': 'block'});
  });


  // Add eventhandler to send message
  send.addEventListener('click', function(event) {
    var message = document.getElementById("message").value;
   
    if(!websocket || websocket.readyState === 3) {
      console.log('The websocket is not connected to a server.');
    } else {
      console.log("Sending message: " + message);
      chatMessage("Sending: " + message);
      websocket.send(message);   
    }
  });


  // Disconnect button
  $('#disconnect').click(function () {
      if(websocket){
        websocket.close();
      }
  }); 


  console.log('Everything is ready.');  
});