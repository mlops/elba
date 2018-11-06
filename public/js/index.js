  $(function() {
  var $ = jQuery.noConflict();


  $('#myCarousel').carousel(
        { interval: 5000,
          cycle: true,
          pause: "hover"
  });


  $(window).on('scroll',function() {
    var scrolltop = $(this).scrollTop();

    if(scrolltop >= 100) {
      $('#fixedbar').fadeIn(250); /*slideUp*/
    }

    else if(scrolltop <= 150) {
      $('#fixedbar').fadeOut(250);
    }


  });

    // menu mobile
    $('.menu-mobile-toggle').click(function() {
        $('ul.main-nav-menu').fadeIn();
    })
    $(window).resize(function(){
      if ( $(window).width() > 400) {
        $('ul.main-nav-menu').removeAttr('style');
        }
    });


    /*scroll agendaas*/
      // $("a[href^='#']").click(function(e){
      //     $("body, html").stop().animate({scrollTop:$(this.hash).offset().top - 80}, 1000);
      //     e.preventDefault();
      // });
   var faderIndex = 0,
       faders = $('.fadey');
  
  function nextFade() {
      $(faders[faderIndex]).fadeOut(2000, function() {
          faderIndex++;
          if (faderIndex >= faders.length)
              faderIndex = 0;
          $(faders[faderIndex]).fadeIn(2000, nextFade);
      });
  }
  nextFade();

// opção 2 fade text
  // var fade = $(".fadey");
  // var quoteIndex = -1;

  // function showNextQuote() {
  //     ++quoteIndex;
  //     fade.eq(quoteIndex % fade.length)
  //         .fadeIn(2000)
  //         .delay(2000)
  //         .fadeOut(2000, showNextFade);
  // }

  // showNextFade();
  // 
  // 




  

    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
      //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
      offset_opacity = 1200,
      //duration of the top scrolling animation (in ms)
      scroll_top_duration = 700,
      //grab the "back to top" link
      jQueryback_to_top = jQuery('#back-to-top');


    //smooth scroll to top
    jQueryback_to_top.on('click', function(event){
      event.preventDefault();
      jQuery('body,html').animate({
        scrollTop: 0 ,
        }, scroll_top_duration
      );
    });

    });
    // trigger the href link
        jQuery(function() {
          jQuery("a[href^='#']").click(function(e){
            jQuery("body, html").stop().animate({scrollTop:jQuery(this.hash).offset().top - 80}, 1000);
            e.preventDefault();
      });


});