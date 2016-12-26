$(window).scroll(function() {
if ($(this).scrollTop() > 440){
    $('header').addClass("sticky");
  }
  else{
    $('header').removeClass("sticky");
  }
});


$(window).scroll(function() {
if ($(this).scrollTop() > 300){
    $('.reading').addClass("opacity");
  }
  else{
    $('.reading').removeClass("opacity");
  }
});
