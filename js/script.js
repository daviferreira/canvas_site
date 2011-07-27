/* Author: 
  Davi Ferreira <contato@daviferreira.com>
*/

$(function(){  
  $('#api-dialog').wijdialog({
    autoOpen: false,
    width:960,
    height:500
  });

  $('#api').button().click(function(e){
    $('#api-dialog').wijdialog('open')
    e.preventDefault();
  });
  
  $('#examples button').button();
});























