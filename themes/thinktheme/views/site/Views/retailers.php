<?php 
include_once("../lang/lang.php");
?>
<!DOCTYPE html>

<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $lang['retailers_text3']; ?>">
<meta name="keywords" content="<?php echo $lang['retailers_text2']; ?>">
<meta name="author" content="Option 5">

<!-- FAVS -->
<link rel="shortcut icon" href="/themes/thinktheme/views/site/assets/favs/favicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="57x57" href="/themes/thinktheme/views/site/assets/favs/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/themes/thinktheme/views/site/assets/favs/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/themes/thinktheme/views/site/assets/favs/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/themes/thinktheme/views/site/assets/favs/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/themes/thinktheme/views/site/assets/favs/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/themes/thinktheme/views/site/assets/favs/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/themes/thinktheme/views/site/assets/favs/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/themes/thinktheme/views/site/assets/favs/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/themes/thinktheme/views/site/assets/favs/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/themes/thinktheme/views/site/assets/favs/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/themes/thinktheme/views/site/assets/favs/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/themes/thinktheme/views/site/assets/favs/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/themes/thinktheme/views/site/assets/favs/android-chrome-192x192.png" sizes="192x192">
<meta name="msapplication-square70x70logo" content="smalltile.png" />
<meta name="msapplication-square150x150logo" content="/mediumtile.png" />
<meta name="msapplication-wide310x150logo" content="/widetile.png" />
<meta name="msapplication-square310x310logo" content="/largetile.png" />
<!-- /FAVS -->
<!-- FONTS -->
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:500,600,400' rel='stylesheet' type='text/css'>
<!-- /FONTS -->
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/assets/css/main.css">
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/assets/css/fullpage.css">
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/assets/css/grid.css">
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/assets/css/swiper.css">
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/assets/css/Fades.css">

<title><?php echo $lang['retailers_text1']; ?></title>
</head>
<body>
<!-- Modal -->
<header class="cd-header">
	<a href="/Home">
    <div class="head-logo">
        <img src="/themes/thinktheme/views/site/assets/images/Option5Logo.svg"/>
    </div>
	</a>
    <div class="cd-main-nav" id="cd-main-nav">
        <div class="cd-nav-key">
        </div>
    </div> <!-- cd-main-nav -->
</header>
<nav>
    <ul class="menu menu-move menu--prospero" id="menu">
        <div class="language-selector">
            <form action="" method="GET" id="english">
            <a class="">
            <button type="submit" name="lang" value="en" class="language-selector-btn eng-btn">EN</button>
            </a>
            </form>
            
            <form action="" method="GET" id="chinese">
            <a class="" >
            <button type="submit" value="fr" name="lang" class="language-selector-btn fr-btn">FR</button>
            </a>
            </form>
        </div>
        <!-- inser more links here -->
        <div class="cd-main-nav-links">
            <li class="menu__item "><a href="/HowTo" class="menu__link"><?php echo $lang['menu_text1'];?></a></li>
            <li class="menu__item "><a href="/Products" class="menu__link"><?php echo $lang['menu_text2'];?></a></li>
            <li class="menu__item"><a href="/Contact" class="menu__link"><?php echo $lang['menu_text3'];?></a></li>
            <li class="menu__item"><a href="/About" class="menu__link"><?php echo $lang['menu_text4'];?></a></li>
            <li class="menu__item-active"><a href="/Retailers" class="menu__link"><?php echo $lang['menu_text5'];?></a></li>
        </div>
    </ul>
</nav>
<nav id="cd-vertical-nav hidden">
    <ul>
        <li>
            <a href="#section1" data-number="1">
                <span class="cd-dot"></span>
                <span class="cd-label"></span>
            </a>
        </li>
    </ul>
</nav>

<a class="cd-nav-trigger cd-img-replace">Open navigation<span></span></a>
<section id="section1" class="cd-section" style="background-image:url(<?php echo $lang['retailers_image1']; ?>)!important;">
	<div class="cd-section-content">
        <h1><?php echo $lang['retailers_text4']; ?></h1>
        <p class="hidden-xxs">
        </p>
    </div>
    <div class="cd-section-cover"></div>
    <div class="cd-section-slash"></div>
    <div class="cd-section-slash2"></div>
    <a href="#section2" class="cd-scroll-down cd-img-replace shake">scroll down</a>
</section><!-- cd-section -->
<section id="section2" class="cd-section2 animation-element bounce-up">
    <div class="thnk-wrapper subject bg-color1">
    	<div class="thnk-container thnk-restrict">
        	<div class="thnk-talk">
            	
        		<h1 class="alt"><?php echo $lang['retailers_text5']; ?></h1>
                <div class="thnk-wrapper">
                    <div class="thnk-talk-dots animation-element bounce-updot">
                        <div class="thnk-talk-dots animation-element bounce-updot">
                        <div class="thnk-talk-dot thnk-talk-dot-rotate subject"></div>
                        <div class="thnk-talk-dot thnk-talk-dot-rotate subject2"></div>
                        <div class="thnk-talk-dot thnk-talk-dot-rotate subject3"></div>
                        <div class="thnk-talk-dot thnk-talk-dot-rotate subject3"></div>
                        <div class="thnk-talk-dot thnk-talk-dot-rotate subject3"></div>
                    </div>
                    </div>
                </div>
                <img src="<?php echo $lang['retailers_image2']; ?>"/>
                <p><?php echo $lang['retailers_text6']; ?></p>
                
            </div>
        </div>
    </div>
    <div class="thnk-wrapper bg-color1 subject">
        <div class="we-logo">
            <img src="<?php echo $lang['retailers_image3']; ?>"/>
        </div>
    </div>
</section><!-- cd-section -->
<section id="section3" class="cd-section2 animation-element bounce-up">
    <div class="thnk-wrapper bg-color1 subject ">
    	<div class="thnk-container thnk-restrict">
        	<div class="thnk-talk">                
                <div class="contact-wrapper">                
                    <h1><?php echo $lang['retailers_text7']; ?></h1>
                <form action="/Retailer_Success" method="POST">    
                    <div class="input-top">
                        <div class="input-left">
                            <input type="text" placeholder="First Name" name="first_name">
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Last Name" name="last_name">
                        </div>
                        <div class="input-left">
                        <input type="text" placeholder="Phone Number" name="phone_number">
                        </div>
                        <div class="input-right">
                        <input type="text" placeholder="Subject" name="subject">
                        </div>
                    </div>
                    <div class="input-bottom">
                        <input type="email" placeholder="email" name="email">
                        <textarea placeholder="Message contents ..." name="message"></textarea>
                        <button type="submit" class="btn btn-default" name="contact">SEND</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
<section id="section11" class="">
    <div class="thnk-wrapper bg-color1 ">
        <div class="thnk-copy">
            <div class="thnk-tel">
                <p><span>T:</span><span><?php echo $lang['footer_text1']; ?></span></p>
            </div>
            <div class="thnk-email">
                <p><span>E:</span><span><?php echo $lang['footer_text2']; ?></span></p>
            </div>
            <div class="thnk-right">
                <p><span>&copy; <?php echo date('Y'); ?> <?php echo $lang['footer_text3']; ?></span></p>
            </div>
            <div class="thnk-social">
                <p>Connect with us</p>
                <?php echo $lang['social']; ?>
            </div>
        </div>
    </div>
</section>
<!-- JS -->
<script src="/themes/thinktheme/views/site/assets/js/jquery2.2.1.js"></script>
<script src="/themes/thinktheme/views/site/assets/js/bootstrap.min.js"></script>
<script src="/themes/thinktheme/views/site/assets/js/modernizr.js"></script>
<script src="/themes/thinktheme/views/site/assets/js/main.js"></script>
<script src="/themes/thinktheme/views/site/assets/js/swiper.js"></script>
<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});
</script>
<script>
jQuery(document).ready(function($){
	//this is used for the video effect only
	if( $('.cd-bg-video-wrapper').length > 0 ) {
		var videoWrapper = $('.cd-bg-video-wrapper'),
			mq = window.getComputedStyle(document.querySelector('.cd-bg-video-wrapper'), '::after').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
		if( mq == 'desktop' ) {
			// we are not on a mobile device 
			var	videoUrl = videoWrapper.data('video'),
				video = $('<video loop><source src="'+videoUrl+'.mp4" type="video/mp4" /><source src="'+videoUrl+'.webm" type="video/webm" /></video>');
			video.appendTo(videoWrapper);
			video.get(0).play();
		}
	}
});
</script>

<script>
jQuery(document).ready(function($){
	//open-close submenu on mobile
	$('.cd-main-nav').on('click', function(event){
		if($(event.target).is('.cd-main-nav')) $(this).children('ul').toggleClass('is-visible');
	});
});

</script>

<script>
jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});
</script>
<script>
// COntrols the Fade in affect for sections.
$(document).ready(function() {
var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    }
  });
}
$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
});
</script>

</body>
</html>
