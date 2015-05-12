/**
 *  VARIABLES
 *  - Change these to personalize webshop.
 */
var shopName = 'Min webbshop',        // Name of webshop
    col1 = 'Omslag',
    col2 = 'Titel',
    col3 = 'Pris', 
    col4 = 'Köp';


$(document).ready(function(){
  'use strict';

  // Set page title
  document.title = shopName;

  /**
   * Create the webshop
   */ 
  $('#webshop').prepend('<div id="cart"></div>');
  $('#webshop').prepend('<h1>'+shopName+'</h1>');

  // Get all items
  $.get('items.php', function(data){
    $('#webshop').append(data);
  });
  
  $('#cart').append('<h2><img src="img/cart.png" width="40px">Kundvagn</h2>');
  $('#cart').append('<div id="content"></div>');
  $('#cart').append('<p>Items in cart: <span id="numitems">0</span><br/>Total is: <span id="sum">0</span><br/><br/><input id="clear" type="button" value="Clear" /><form name="pay" action="payment.php" method="get"><input type="submit" value="Pay"></form><span id="status">Nothing has happened yet. Make a purchase.</span></p>');
  

  // Function to update shopping cart
  var updateCart = function(data) {
    $('#content').html(data.content);
    $('#numitems').html(data.numitems);
    $('#sum').html(data.sum);
    $('#status').html('Shopping cart refreshed.');
    
    $.each(data.items, function(){
      console.log('item.');
    });

    setTimeout(function(){
      $('#status').fadeOut(function(){
        $('#status').html('').fadeIn();
      });
    }, 1000);

    console.log('Shopping cart updated.');
  };


  // Init the shopping cart
  var initCart = function() {
    $.ajax({
      type: 'post',
      url: 'shop.php',
      dataType: 'json',
      success: function(data){
        updateCart(data);
        console.log('Ajax request returned successfully. Shopping cart initiated.');    
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log('Ajax request failed: ' + textStatus + ', ' + errorThrown);    
      }
    });   
  };
  initCart();


  // Callback when making a purchase
  $('.purchase').click(function() {
    var id = $(this).attr('id');
    $.ajax({
      type: 'post',
      url: 'shop.php?action=add',
      data: {
        itemid: id
      },
      dataType: 'json',
      success: function(data){
        updateCart(data);
        console.log('Ajax request returned successfully.');    
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log('Ajax request failed: ' + textStatus + ', ' + errorThrown);    
      },
    });
    console.log('Clicked to buy id: ' + id)
  });


  // Callback to clear all values in shopping cart
  $("#clear").click(function() {
    $.ajax({
      type: 'post',
      url: 'shop.php?action=clear',
      dataType: 'json',
      success: function(data){
        updateCart(data);
        console.log('Ajax request returned successfully.');    
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log('Ajax request failed: ' + textStatus + ', ' + errorThrown);    
      },
    });
    console.log('Clearing shopping cart.')
  });


  // Setting Column names
  $('#col1').html(col1);
  $('#col2').html(col2);
  $('#col3').html(col3);
  $('#col4').html(col4);

  console.log('all done w/ js');
});