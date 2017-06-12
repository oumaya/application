// JavaScript Document
(function($) {
  $.fn.toggleNav = function(opt){
    //default setting
    var settings = $.extend({
      //Only one effect can be set, if two effects are true, the plugin will throw error
      fadeEffect : null, // Toggle fadeIn fadeOut effect
      slideEffect : null, // Toggle slide to top effect
      speed : 600 // Toggle animation speed
    }, opt);

    var slideTrue = settings.slideEffect == true,
          fadeTrue = settings.fadeEffect == true;    

    return this.each(function(){
      //check all the settings are good to go !
      if(slideTrue&&fadeTrue){
        console.error('error, Can\'t set two effects at the same time');
        return false
      }else if(!slideTrue&&!fadeTrue){
        console.error('error, no effect is running');
        return false
      }
      if(settings.speed > 5000 || isNaN(settings.speed)){
        console.error('error, the speed setting is not correct');
        return false
      }
      
      //handle the navbar
      $(this).addClass("toggleNavbar");
      var _this = this,
        togglethis = $('.toggleNavbar'),
          previousScroll = 0,//record last scroll
          headerHeight = togglethis.outerHeight();//record 'this' height

      togglethis.css({//default styling for navbar
        position : 'fixed',
        top : '0',left : '0',
        width : '100%',
        display : 'block',
        'z-index' : 99998
      });

      if(slideTrue){//if slide effect, then 'this' needs transition.                
        togglethis.css({
          WebkitTransition  : 'ease-out '+settings.speed/1000+'s',
          MozTransition     : 'ease-out '+settings.speed/1000+'s',
          MsTransition      : 'ease-out '+settings.speed/1000+'s',
          OTransition       : 'ease-out '+settings.speed/1000+'s',
          transition        : 'ease-out '+settings.speed/1000+'s'
        });
      }

      function hideNav(){//handle toggle hide navbar
        if(fadeTrue){togglethis.fadeOut(settings.speed)}
        else if(slideTrue){          
          togglethis.css({
            'transform' : 'translateY(-'+headerHeight+'px)'
          });
        }       
      }
      function showNav(){//handle toggle show navbar
        if(fadeTrue){togglethis.fadeIn(settings.speed)}
        else if(slideTrue){          
          togglethis.css({
            'transform' : 'translateY(0px)'
          });
        }
      }

      //toggle navbar
      $(window).scroll(function(){
        var currentScroll = $(this).scrollTop();        
          if (currentScroll > previousScroll) {//check if page scrolled to bottom
              hideNav();
          } else { //check if page scrolled to top
              showNav();
          }
        previousScroll = currentScroll;
      });
    });
  }
}(jQuery));