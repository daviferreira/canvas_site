/* Author: 
  Davi Ferreira <contato@daviferreira.com>
*/

$(function(){  
  
  $('button').button();
  
  $('span.download button').click(function(){
    window.location.href = $(this).val();
  });
  
  $('#api-dialog').wijdialog({
    autoOpen: false,
    width:960,
    height:500,
    title:"Canvas API Documentation",
    closeOnEscape:true,
    modal:true,
    captionButtons: {
                    pin: { visible: false },
                    refresh: { visible: false },
                    toggle: { visible: false },
                    minimize: { visible: false }
    }
  });

  $('#api').click(function(e){
    $('#api-dialog').wijdialog('open').wijdialog('maximize');
    e.preventDefault();
  });
  
  $("#api-content").wijaccordion();
  
  $('#examples button').click(function(e){
    e.preventDefault();
  });
  
  $('pre').snippet("php",{
    style:"vim",
    clipboard:"js/libs/ZeroClipboard.swf"
  });
  
  $("#faq").wijaccordion();
});
