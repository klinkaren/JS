var port    = 1337, 
    clients = [];

// Require the modules we need
var http = require('http');

// Create a http server with a callback handling all requests
var httpServer = http.createServer(function(request, response) {
  console.log((new Date()) + ' Received request for ' + request.url);
  response.writeHead(200, {'Content-type': 'text/plain'});
  response.end('Hello world\n');
});

// Setup the http-server to listen to a port
httpServer.listen(port, function() {
  console.log((new Date()) + ' HTTP server is listening on port ' + port);
});

// Require the modules we need
var WebSocketServer = require('websocket').server;

// Create an object for the websocket
// https://github.com/Worlize/WebSocket-Node/wiki/Documentation
var wsServer = new WebSocketServer({
  httpServer: httpServer,
  autoAcceptConnections: false
});

function acceptEcho(request) {
  var connection = null;

  connection = request.accept('echo-protocol', request.origin);
  console.log((new Date()) + ' Echo connection accepted from ' + request.origin);

  // Callback to handle each message from the client
  connection.on('message', function(message) {
    if (message.type === 'utf8') {
      console.log('Received Message: ' + message.utf8Data);
      connection.sendUTF(message.utf8Data);
    }
    else if (message.type === 'binary') {
      console.log('Received Binary Message of ' + message.binaryData.length + ' bytes');
      connection.sendBytes(message.binaryData);
    }
  });

  // Callback when client closes the connection
  connection.on('close', function(reasonCode, description) {
      console.log((new Date()) + ' Peer ' + connection.remoteAddress + ' disconnected.');
  });    
}

function getAvailableBroadcastId() {
  var i = 0, broadcastId = null;
  
  for(i = 0; i < clients.length; i += 1){
    // Check if the position in array is available
    if(clients[i] === null){
      broadcastId = i;
      break;
    }
  }

  // if none available found then use default i.e last available position
  if(broadcastId === null){
    broadcastId = clients.length;
  }
  
  return broadcastId;    
}

function acceptBroadcast(request){
  var connection = null, i = 0;

  connection = request.accept('broadcast-protocol', request.origin);
  
  // Add the connection to the list of broadcast clients
  connection.broadcastId = getAvailableBroadcastId(); 
  clients[connection.broadcastId] = connection;
  
  console.log((new Date()) + ' Broadcast connection accepted from ' + request.origin + 'assigned broadcast id: ' +  connection.broadcastId);
  
  // Callback to handle each message from the client
  connection.on('message', function(message) {
    // Only log once
    if (message.type === 'utf8') {
      console.log('Received Message: ' + message.utf8Data);
    }
    else if (message.type === 'binary') {
      console.log('Received Binary Message of ' + message.binaryData.length + ' bytes');
    }
    
    // Loop through the connected broadcast clients and send out the message
    for(i = 0; i < clients.length; i += 1){
      // Check if position is null as it could be a terminated client
      if(clients[i]){
        if (message.type === 'utf8') {
          clients[i].sendUTF(message.utf8Data);
        }
        else if (message.type === 'binary') {
          clients[i].sendBytes(message.binaryData);
        }
      }
    }
      
      console.log('Message broadcasted to ' + clients.length + ' clients');
  });

  // Callback when client closes the connection
  connection.on('close', function(reasonCode, description) {
      // Reset array of connections
      clients[connection.broadcastId] = null;
      console.log((new Date()) + ' Peer ' + connection.remoteAddress + ' disconnected broadcast id: ' + connection.broadcastId);
  });
}

// Create a callback to handle each connection request
wsServer.on('request', function(request) {
  var i = 0;

  // Check and act upon requested protocols
  for(i = 0;i < request.requestedProtocols.length; i+= 1){
    if(request.requestedProtocols[i] === 'broadcast-protocol'){
      acceptBroadcast(request);
    }
    else{
      acceptEcho(request);
    }
  }
}); 