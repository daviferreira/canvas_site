/* Author: 
  Davi Ferreira <contato@daviferreira.com>
*/

$(function(){  
  $('#api-dialog').wijdialog({
    autoOpen: false,
    width:960,
    height:500
  });

  $('#api').click(function(e){
    $('#api-dialog').wijdialog('open');
    e.preventDefault();
  });
  
  $('button').button();
  
  $('#examples button').click(function(e){
    e.preventDefault();
  });
  
  $('pre').snippet("php",{
    style:"vim",
    clipboard:"js/libs/ZeroClipboard.swf"
  });
  
  $("#faq").wijaccordion();
});























