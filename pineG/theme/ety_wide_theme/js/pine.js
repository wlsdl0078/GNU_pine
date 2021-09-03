
$(function(){
  var $nav = $('nav');
  $(window).scroll(function(){
    if($(this).scrollTop() > 0){
      $nav.addClass('sticky');
    }else{
      $nav.removeClass('sticky');
    }
  });
});
