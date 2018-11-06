$(function() {


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
