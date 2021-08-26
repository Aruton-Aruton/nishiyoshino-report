'use strict';
{
    !(function () {
        const viewport = document.querySelector('meta[name="viewport"]');
        function switchViewport() {
          const value =
            window.outerWidth > 360
              ? 'width=device-width,initial-scale=1'
              : 'width=360';
          if (viewport.getAttribute('content') !== value) {
            viewport.setAttribute('content', value);
          }
        }
        addEventListener('resize', switchViewport, false);
        switchViewport();
      })();

      const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        loop: true,
        speed: 2500,
        autoplay: true,
        effect: 'fade',

        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },

        fadeEffect: { 
        crossFade: true,
    },
  
      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true,
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

      $(document).ready(function(){
        //topへ戻るボタン
        $(function(){
            var topBtn = $('#top-btn');
            topBtn.hide();
            $(window).scroll(function(){
                if($(this).scrollTop() > 80){
                    topBtn.fadeIn(300);
                } else {
                    topBtn.fadeOut(300);
                }
            });
        
            topBtn.click(function(){
                $('body,html').animate({
                    scrollTop: 0
                }, 1000);
                return false;
            });
        });

       //スムーススクロール
        $(function(){
            let speed = 1000;
            let headerHeight = jQuery("header").innerHeight();
            var urlHash = location.hash;
            if(urlHash){
              $('body, html').stop().scrollTop(0);
              setTimeout(function(){
                        var target = $(urlHash);
                        var position = target.offset().top - headerHeight;
                        $('body, html').stop().animate({scrollTop:position}, speed);
                    }, 100);
            }
            $('a[href^="#"]').click(function(){
                let href= $(this).attr("href");
                let target = $(href == "#" || href == "" ? 'html' : href);
                let position = target.offset().top - headerHeight;
                $("html, body").animate({scrollTop:position}, speed, "swing");
                return false;
            });
        });
    });
}