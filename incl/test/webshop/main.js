/**
 * When the submit-button is clicked, resize the div
 */
$(document).ready(function(){
  'use strict';

  /**
   * Create the webshop
   */ 
  $#webshop.append('<div id="cart">
    <h2><img src="/img/cart.png" width="40px">Kundvagn</h2>
    <div id="content"></div>
    <p>
      Items in cart: <span id="numitems">0</span><br/>
      Total is: <span id="sum">€0</span><br/><br/>
      <input id="clear" type="button" value="Clear" />  <span id="status">Nothing has happened yet. Make a purchase.</span>
    </p>
  </div>');
  console.log('all done w/ js');
});