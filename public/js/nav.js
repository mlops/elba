$(function() {
//menu fix
    $(window).on('scroll',function() {
      var scrolltop = $(this).scrollTop();
      // Fade from top
      // if(scrolltop >= 100) {
      //   $('#fixedbar').fadeIn(250);
      // }

      // else if(scrolltop <= 150) {
      //   $('#fixedbar').fadeOut(250);
      // }
      // slide from top
      if (scrolltop >= 100) { 
            $('#fixedbar').fadeIn();
        } else {
           $('#fixedbar').fadeOut();
        }

    });

      // menu mobile
      $('.menu-mobile-toggle').click(function() {
          $('ul.main-nav-menu').slideToggle();
      })
      $(window).resize(function(){
        if ( $(window).width() > 400) {
          $('ul.main-nav-menu').removeAttr('style');
          }
      });
});
