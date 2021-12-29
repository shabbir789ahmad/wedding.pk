$(document).ready(function(){
     
     $(".imgb img").click(function(){
     
    

     var images=$(this).attr('src');
      $('.imga img').attr('src',images);
     });
      
  $(window).scroll(function(){
  if ($(window).scrollTop() <= 400) {
    $('#navbar').removeClass('sticky-top');
     $('#navbar').css('display','none');
   }
   else {
    $('#navbar').addClass('sticky-top');
     $('#navbar').css('display','block');
   }
});
  
});  

