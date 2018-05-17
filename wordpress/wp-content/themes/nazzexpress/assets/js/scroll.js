// $(window).scroll(function() {
//     var scroll = $(window).scrollTop();
//     if (scroll >= 500) {
//         $(".navbar-header").addClass("small-logo");
//     } else {
//         $(".navbar-header").removeClass("small-logo");
//     }
// });
//



   $(window).scroll(function() {
      if ($(this).scrollTop() > 1){
          $('.navbar-header').addClass("small-logo");
      }
      else{
          $('.navbar-header').removeClass("small-logo");
      }
  });
