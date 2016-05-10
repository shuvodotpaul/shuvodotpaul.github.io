$(document).foundation();
	if ($(window).width() > 960) {
  // True if medium or large
  // False if small
  $(document).scroll(function() {
	var posiTion = $(".one").offset().top - $(window).scrollTop();
     //console.log(posiTion);
     var i = 0;
     ++i;
     //console.log(i);
     if (posiTion <= 55) {
     	$(".title-bar").css({
     		"position": 'fixed',
     		"background": '#fff',
     		"top": '0px',
     		"border-bottom": "1px solid rgba(144, 144, 144, 0.35)",
               "transform": "translateY(0px)"
     	});
     	$(".title-bar .menu a").css({
     		color: '#484b49'
     	});
     	$(".title-bar-title").css({
     		color: '#484b49'
     	});
        $(".desktopNav > .title-bar-title > a > img").attr('src', 'images/CollegeFundme_logo_black.png');
        $(".desktopNav > .title-bar-title > a > img").css({
            width: '250px',
            'margin-top': '3px'
        });
     }
     else {
     	$(".title-bar").css({
     		"position": 'absolute',
     		"background": 'transparent',
     		"top": '40px',
     		"border-bottom": "1px solid transparent",
               "transform": "translateY(-20px)"
     	});
     	$(".title-bar .menu a").css({
     		color: '#ffffff'
     	});
          $(".submenu a").css({
               color: '#484b49'
          });
     	$(".title-bar-title").css({
     		color: '#ffffff'
     	});
        $(".desktopNav > .title-bar-title > a > img").attr('src', 'images/CollegeFundme_logo.png');
        $(".desktopNav > .title-bar-title > a > img").css({
            width: '330px',
            'margin-top': '0px'
        });
     } //end header behavior in desktop
	})

     $(window).bind("load resize scroll",function(e) {
    var y = $(window).scrollTop();

    $(".orbit-slide").filter(function() {
        return $(this).offset().top < (y + $(window).height()) &&
               $(this).offset().top + $(this).height() > y;
    }).css('background-position', '0px ' + parseInt(y / 4) + 'px');
     });
}

