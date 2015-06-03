$(document).ready(function(e) {
         
	
	

  $('.newPost button[data-func]').click(function(){
    document.execCommand( $(this).data('func'), false );
  });

  $('.newPost select[data-func]').change(function(){
    var $value = $(this).find(':selected').val();
    document.execCommand( $(this).data('func'), false, $value);
  });

  if(typeof(Storage) !== "undefined") {

  $('.editor').keypress(function(){
    $(this).find('.saved').detach();
  });
    $('.editor').html(localStorage.getItem("data")) ;
    
    $('button[data-func="save"]').click(function(){
      $content = $('.editor').html();
	   localStorage.setItem("data", $content);
		$(".hidden").val($content);  
      $('.editor').append('<i class="fa fa-check saved"></i>').fadeIn();
    });

    
  } 
});