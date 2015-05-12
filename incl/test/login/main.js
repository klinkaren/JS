/**
 * When the submit-button is clicked, resize the div
 */
$(document).ready(function(){
  'use strict';

  /**
  * Eventhandler for #login
  */
  $('#login').on('click', function(event) {
   
    $('#output').removeClass().addClass('working').html('<img src="http://dbwebb.se/img/loader.gif"/> Performing login...');
   
    $.ajax({
      type: 'post',
      url: 'login.php?do=login',
      data: $('#form1').serialize(),
      dataType: 'json',
      success: success
    }); 
   
    console.log('Form submitted, lets wait for a response.');
  });

  console.log('all done w/ js');
});