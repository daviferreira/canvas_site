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
  
  $('pre').each(function(){
    $(this).snippet("php",{
              style:"vim",
              clipboard:"js/libs/ZeroClipboard.swf"
    });
  });
});























