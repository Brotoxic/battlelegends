$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
     $("#menu-top li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("menu-top-active");
     })
});

/*------------STICKY NAV--------------*/

$(document).ready(function () {
    var stickyNavTop = $('.navbar1').offset().top;

    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            $('.navbar1').addClass('sticky');

        } else {
            $('.navbar1').removeClass('sticky');

        }
    };

    stickyNav();

    $(window).scroll(function () {
        stickyNav();
    });
});

/*------------STICKY NAV END--------------*/
 
/*------------ADBLOCK--------------*/

// Run after all the page elements have loaded
window.onload = function () {

    // This will take care of asynchronous Google ads
    setTimeout(function () {

        // We are targeting the first banner ad of AdSense
        var ad = document.querySelector("ins.adsbygoogle");

        // If the ad contains no innerHTML, ad blockers are at work
        if (ad && ad.innerHTML.replace(/\s/g, "").length == 0) {

            // Since ad blocks hide ads using CSS too
            ad.style.cssText = 'display:block !important; text-decoration: none;';

            // You can put any text, image or even IFRAME tags here
            ad.innerHTML = '<div class="alert alert-danger" style="margin-bottom: 0; padding: 13px; !important" role="alert">S\'il vous plait, désactivez <strong>AdBlock</strong> afin de nous supporter ! Merci</div>';

        }

    }, 2000); // The ad blocker check is performed 2 seconds after the page load 
};

/*------------ADBLOCK END--------------*/