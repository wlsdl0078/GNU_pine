
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


$(function(){
    $(".golf_CO").click(function(){
        $(".golf_CO").removeClass('on');
        $(this).addClass('on');
    });
});


//$(function() {
  //c.removeClass("is-active").stop().animate({
    //opacity: .4
  //}, 250);
  //a(this).closest(".golf_CO").addClass("is-active").stop().animate({
    //opacity: 1
  //}, 250);
  //h(a(this).parent().index())
//});






// $(".golf_CO").click(function(){ $(".golf_j").removeClass('on');$(this).addClass('on');});
