$(window).scroll(function() {
if ($(this).scrollTop() > 140){
    $('header').addClass("sticky");
  }
  else{
    $('header').removeClass("sticky");
  }
});


$(window).load(function () {
    $(".item").removeClass("placeholder");
});
