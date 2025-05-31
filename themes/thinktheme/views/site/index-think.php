<?php 
include_once("lang/lang.php");
?>
<!DOCTYPE html>

<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php  echo $lang['index_text3'];?>">
<meta name="keywords" content="<?php  echo $lang['index_text2'];?>">
<meta name="author" content="Think">

<!-- FAVS -->
<link rel="shortcut icon" href="/themes/thinktheme/views/site/Assets/favs/favicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="57x57" href="/themes/thinktheme/views/site/Assets/favs/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/themes/thinktheme/views/site/Assets/favs/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/themes/thinktheme/views/site/Assets/favs/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/themes/thinktheme/views/site/Assets/favs/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/themes/thinktheme/views/site/Assets/favs/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/themes/thinktheme/views/site/Assets/favs/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/themes/thinktheme/views/site/Assets/favs/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/themes/thinktheme/views/site/Assets/favs/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/themes/thinktheme/views/site/Assets/favs/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/themes/thinktheme/views/site/Assets/favs/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/themes/thinktheme/views/site/Assets/favs/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/themes/thinktheme/views/site/Assets/favs/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/themes/thinktheme/views/site/Assets/favs/android-chrome-192x192.png" sizes="192x192">
<meta name="msapplication-square70x70logo" content="smalltile.png" />
<meta name="msapplication-square150x150logo" content="/mediumtile.png" />
<meta name="msapplication-wide310x150logo" content="/widetile.png" />
<meta name="msapplication-square310x310logo" content="/largetile.png" />
<!-- /FAVS -->
<!-- FONTS -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!--<script src="//s3-ap-northeast-1.amazonaws.com/justfont-user-script/jf-9347.js"></script>-->
<script src="//s3-ap-northeast-1.amazonaws.com/justfont-user-script/jf-41454.js"></script>
<!-- /FONTS -->
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/Assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/Assets/css/main.css">
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/Assets/css/fullpage.css">
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/Assets/css/grid.css">
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/Assets/css/swiper.css">
<link rel="stylesheet" type="text/css" href="/themes/thinktheme/views/site/Assets/css/Fades.css">



<title><?php  echo $lang['index_text1'];?></title>
</head>
<body class="xingothic-tc-w4">


<header class="cd-header">
    <a href="/Home">
        <div class="head-logo">
            <img src="/themes/thinktheme/views/site/Assets/images/Think-Logo.svg"/> 
        </div>
   </a>
    <div class="head-message hidden-xs"><span><img src="/themes/thinktheme/views/site/Assets/images/YourBrandingPartner.svg"/></span></div>
    <div class="cd-main-nav" id="cd-main-nav">
        <div class="cd-nav-key">
        </div>
    </div> <!-- cd-main-nav -->
</header>
<nav>
    <ul class="menu menu-move menu--prospero" id="menu">
        <div class="language-selector lang-hidden ">
            <form action="?lang=en" method="GET" id="english">
            <a class="">
            <button type="submit" name="lang" value="en" class="language-selector-btn eng-btn ">EN</button>
            </a>
            </form>
            <span >/</span>
            <form action="?lang=zh" method="GET" id="chinese">
            <a class="" >
            <button type="submit" value="ch" name="lang" class="ch-btn language-selector-btn">CH</button>
            </a>
            </form>
        </div>
        <!-- inser more links here -->
        <div class="cd-main-nav-links">
            <li class="menu__item menu-fix1"><a href="/we_are" class="menu__link"><?php echo $lang['menu_text1'];?></a></li>
            <li class="menu__item menu-fix2"><a href="/we_do" class="menu__link"><?php echo $lang['menu_text2'];?></a></li>
            <li class="menu__item menu-fix3"><a href="/we_create" class="menu__link"><?php echo $lang['menu_text3'];?></a></li>
            <li class="menu__item menu-fix4"><a href="/we_think" class="menu__link"><?php echo $lang['menu_text4'];?></a></li>
            <li class="menu__item menu-fix5"><a href="/lets_talk" class="menu__link"><?php echo $lang['menu_text5'];?></a></li>
            <div class="language-selector lang-visible">
            <form action="?lang=en" method="GET" id="english">
                <a class="">
                <button type="submit" name="lang" value="en" class="eng-btn  language-selector-btn lang-select">EN</button>
                </a>
            </form>
            <span>/</span>
            <form action="?lang=zh" method="GET" id="chinese">
                <a class="" >
                <button type="submit" value="ch" name="lang" class="ch-btn language-selector-btn">CH</button>
                </a>
            </form>
        </div>
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
<section id="section1" class="cd-section" style="background-image:url(<?php  echo $lang['index_image1'];?>)!important;">
	<div class="cd-section-content">
    	 <div class="swiper-container2">
            <div class="swiper-wrapper">
                <div class="swiper-slide" >
                	<h1><?php  echo $lang['index_text5'];?></h1>
                </div>
                <div class="swiper-slide" >
                	<h1><?php  echo $lang['index_text6'];?></h1>
                </div>
                <div class="swiper-slide" >
                	<h1><?php  echo $lang['index_text7'];?></h1>
                </div>
                
            </div>
            <!-- Add Pagination -->
    	</div>
        <p class="hidden-xxs"><!--THINK OFFICE is a strategic branding consultancy with international perspective. We help our clients to create visionary, valuable, strategic, and sincere brands to deliver unique brand experience.--><?php  echo $lang['index_text8'];?></p>
        <a href="/we_are"><button class="btn2 btn-1e"><span>more we are</span></button></a>
    </div>
    <div class="cd-section-cover"></div>
    <div class="cd-section-slash"></div>
    <div class="cd-section-slash2"></div>
    <a href="#section2" class="cd-scroll-down cd-img-replace shake hidden-xs">scroll down</a>
</section><!-- cd-section -->

<section id="section2" class="cd-section2 animation-element bounce-up">
    <div class="thnk-wrapper subject">
    	<div class="thnk-container thnk-restrict">
        	<div class="thnk-talk">
        		<h1 class="alt"><?php  echo $lang['index_text9'];?></h1>
                <div class="thnk-wrapper">
                    <div class="thnk-talk-dots animation-element bounce-updot">
                        <div class="thnk-talk-dot subject"></div>
                        <div class="thnk-talk-dot subject2"></div>
                        <div class="thnk-talk-dot subject3"></div>
                    </div>
                </div>
                <p><?php  echo $lang['index_text10'];?></p>
            </div>
        </div>
    </div>
</section><!-- cd-section -->
<main class="cd-container">
<section id="section3" class="cd-section2">
 	<div class="thnk-wrapper">
    	<div class="thnk-container">
        	<div class="thnk-grid1-4 animation-element bounce-up1">
            	<div class="thnk-promise subject">
                	<div class="thnk-promise-h1 ">
                    	<h1>01</h1>
                    </div>
                    <div class="thnk-promise-h2">
                    	<h2 class="alt"><?php  echo $lang['index_text11'];?></h2>
                    </div>
                    <p><?php  echo $lang['index_text12'];?></p>
                    <div class="thnk-promise-icon">
                        <img src="/themes/thinktheme/views/site/Assets/images/ThinkSlashSearch.svg"/>
                    </div>
                </div>
            </div>
            <div class="thnk-grid1-4 animation-element bounce-up2">
            	<div class="thnk-promise subject">
                	<div class="thnk-promise-h1">
                    	<h1>02</h1>
                    </div>
                    <div class="thnk-promise-h2">
                    	<h2 class="alt"><?php  echo $lang['index_text13'];?></h2>
                    </div>
                    <p><?php  echo $lang['index_text14'];?></p>
                    <div class="thnk-promise-icon">
                        <img src="/themes/thinktheme/views/site/Assets/images/ThinkSlashHorse.svg"/>
                    </div>
                </div>
            </div>
            <div class="thnk-grid1-4 animation-element bounce-up3">
            	<div class="thnk-promise subject">
                	<div class="thnk-promise-h1">
                    	<h1>03</h1>
                    </div>
                    <div class="thnk-promise-h2">
                    	<h2 class="alt"><?php  echo $lang['index_text15'];?></h2>
                    </div>
                    <p><?php  echo $lang['index_text16'];?></p>
                    <div class="thnk-promise-icon">
                        <img src="/themes/thinktheme/views/site/Assets/images/ThinkSlashTri.svg"/>
                    </div>
                </div>
            </div>
            <div class="thnk-grid1-4 animation-element bounce-up4">
            	<div class="thnk-promise subject">
                	<div class="thnk-promise-h1">
                    	<h1>04</h1>
                    </div>
                    <div class="thnk-promise-h2">
                    	<h2 class="alt"><?php  echo $lang['index_text17'];?></h2>
                    </div>
                    <p><?php  echo $lang['index_text18'];?></p>
                    <div class="thnk-promise-icon">
                        <img src="/themes/thinktheme/views/site/Assets/images/ThinkSlashGive.svg"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="thnk-container">
        	<div class="thnk-wrapper">
                <div class="thnk-container text-center">
                    <div class="btn-container">
                        <a href="/lets_talk"><button class="btn2 btn-1f"><span>how to start</span></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- cd-section -->

<section id="section4" class="cd-section2 animation-element bounce-up">
   	 <div class="thnk-wrapper bg-color subject">
    	<div class="thnk-container thnk-restrict text-center">
        	<div class="thnk-quote">
            	<div class="thnk-quote-in">
        		<h2 class="alt"><?php  echo $lang['index_text19'];?></h2>
                </div>
            </div>
        </div>
     </div>
</section><!-- cd-section -->

<section id="section5" class="cd-section2 animation-element bounce-up">
    <div class="thnk-wrapper subject">
    	<div class="slider">
                     <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">                   
                    <?php echo $lang['index_projects']; ?>
                </div>

                
                <!-- Add Pagination -->

                
                <!-- Add Arrows -->
                <div class="swiper-nav hidden-xs">
                    <div class="swiper-button-next"><img src="/themes/thinktheme/views/site/Assets/images/next.svg"/></div>
                    <div class="swiper-button-prev"><img src="/themes/thinktheme/views/site/Assets/images/prev.svg"/></div>
                </div>
            </div>
        </div>

        <div class="thnk-container visible-xs">
            <div class="thnk-wrapper thnk-wrapper-index">
                <div class="thnk-container text-center">
                    <div class="btn-container">
                        <a href="/we_create"><button class="btn2 btn-1f"><span>more we create</span></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- cd-section -->

<section id="section6" class="cd-section2 animation-element bounce-up ">
    <div class="thnk-wrapper subject">
        <div class="thnk-container">
            <div class="thnk-blog">                
                <?php echo $lang['indexblogs_projects']; ?>
                <div class="thnk-container">
                    <div class="thnk-wrapper">
                        <div class="thnk-container text-center">
                            <div class="btn-container">
                                <a href="/we_think"><button class="btn2 btn-1f"><span>more we think</span></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- cd-section -->
 <section id="section7" class="cd-section2">
   	 <div class="thnk-wrapper bg-color">
    	<div class=" text-center">
        	<div class="thnk-quote-small">
            	<div class="thnk-quote-small-in">
        		<h2 class="alt"><?php  echo $lang['index_text20'];?></h2>
                </div>
            </div>
        </div>
     </div>
</section><!-- cd-section -->  
<section id="section8" class="animation-element">
    <div class="thnk-wrapper ">
        <div class="thnk-page-bottom">
            <a href="/lets_talk">
            	<div class="thnk-page-button">
                	<p class="letstalk hidden-xs subject"></p>
                    <p class="visible-xs subject letstalk-mobile">let's talk</p>
                </div>
            </a>
            <?php echo $lang['index_image2']; ?>
        </div>
    </div>
</section>
<section id="section9" class="">
    <div class="thnk-wrapper ">
    	<div class="text-center thnk-page-back">
    		<a href="#0" class="cd-top">Top</a>
            <p>back to top</p>
        </div>
    </div>
</section>
<section id="section10" class="">
    <div class="thnk-wrapper bg-color ">
    	<div class="thnk-copy">
    		<div class="thnk-tel">
            	<p><span class="thick">T</span><span><?php echo $lang['footer_text1']; ?></span></p>
            </div>
            <div class="thnk-email">
            	<p><span class="thick">E</span><span><?php echo $lang['footer_text2']; ?> </span></p>
            </div>
            <div class="thnk-right">
            	<p><span> &copy; <?php echo date('Y'); ?> <?php echo $lang['footer_text3']; ?> </span></p>
            </div>
            <div class="thnk-social">
            	<?php echo $lang['social']; ?>
            </div>
        </div>
    </div>
</section>
 </main>
<!-- JS -->
<script src="/themes/thinktheme/views/site/Assets/js/jquery2.2.1.js"></script>
<script src="/themes/thinktheme/views/site/Assets/js/bootstrap.min.js"></script>
<script src="/themes/thinktheme/views/site/Assets/js/modernizr.js"></script>
<script src="/themes/thinktheme/views/site/Assets/js/main.js"></script>
<script src="/themes/thinktheme/views/site/Assets/js/swiper.js"></script>
<script src="/themes/thinktheme/views/site/Assets/js/typed.js"></script>
<script>


$('#section8').hover(
  function() {

    $(function(){
        $(".letstalk").typed({
            strings: ["Let's Talk"],
            typeSpeed: 50,
            backSpeed: 50,
            loop: false
        });
    });

  }, function() {

  }
);
    
</script>


<script type="text/javascript">
setTimeout(function(){ $(".typed-cursor").addClass("hidden-xs"); }, 3000);
    
</script>

<script>
    var swiper = new Swiper('.swiper-container2', {
        pagination: '.swiper-pagination2',
        nextButton: '.swiper-button-next2',
        prevButton: '.swiper-button-prev2',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 1800,
        autoplayDisableOnInteraction: false,
		effect: 'fade',
    });
    </script>
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
	//open-close submenu on mobile
	$('.cd-main-nav').on('click', function(event){
		if($(event.target).is('.cd-main-nav')) $(this).children('ul').toggleClass('is-visible');
	});
});

</script>
<script>
jQuery(document).ready(function($){
	//open-close submenu on mobile
	$('#cd-main-nav').on('click', function(event){
		if($(event.target).is('.cd-main-nav')) $(this).children('ul').toggleClass('is-visible');
	});
});
</script>
 <!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	paginationClickable: true,
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	spaceBetween: 0,
    autoplay: 5000,
	hashnav: true
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
