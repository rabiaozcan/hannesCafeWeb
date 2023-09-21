<?php
$sayfa = "Ürünler/İçecekler";
include('../vt.php');




$sorgu = $baglanti->prepare("SELECT * FROM urunler order by id");
$sorgu->execute();

?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="pingback" href="https://hanescaferestaurantt.com/xmlrpc.php">

	<title>İçecekler &#8211; Hannes Cafe & Restaurant</title>
<link rel="alternate" hreflang="tr" href="index.htm">
<link rel="alternate" hreflang="en" href="../../en/menu/drinks/index.htm">
<link rel='dns-prefetch' href='../../speed/libraries.html'>
<link rel='dns-prefetch' href='//fonts.googleapis.com'>
<link rel='dns-prefetch' href='../../index-1.htm'>
<link rel="alternate" type="application/rss+xml" title="Hannes Cafe & Restourant &raquo; beslemesi" href="../../feed/index.htm.rss">
<link rel="alternate" type="application/rss+xml" title="Hannes Cafe & Restourant &raquo; yorum beslemesi" href="../../comments/feed/index.htm.rss">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/thehousecafe.com\/wp-includes\/js\/wp-emoji-release.min.js"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='fp_res_jquery_ui_style-css' href='../../ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.min.css' type='text/css' media='all'>
<link rel='stylesheet' id='wp-block-library-css' href='../../wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all'>
<link rel='stylesheet' id='rs-plugin-settings-css' href='../../wp-content/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all'>
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='megamenu-css' href='../../wp-content/uploads/maxmegamenu/style_tr.css' type='text/css' media='all'>
<link rel='stylesheet' id='dashicons-css' href='../../wp-includes/css/dashicons.min.css' type='text/css' media='all'>
<link rel='stylesheet' id='fp_font_icons-css' href='../../wp-content/plugins/foodpress/assets/fonts/font-awesome.css' type='text/css' media='all'>
<link rel='stylesheet' id='fp_fonts-css' href='../../wp-content/plugins/foodpress/assets/fonts/fp_fonts.css' type='text/css' media='all'>
<link rel='stylesheet' id='fp_default-css' href='../../wp-content/plugins/foodpress/assets/css/foodpress_styles.css' type='text/css' media='all'>
<link rel='stylesheet' id='fp_google_fonts-css' href='../../css.css?family=Open+Sans%3A400italic%2C600%2C700%2C400%2C300' type='text/css' media='screen'>
<link rel='stylesheet' id='foodpress_dynamic_styles-css' href='../../wp-content/plugins/foodpress/assets/css/foodpress_dynamic_styles.css' type='text/css' media='all'>
<link rel='stylesheet' id='fp_res_timepicker_style-css' href='../../wp-content/plugins/foodpress/assets/css/jquery.timepicker.css' type='text/css' media='all'>
<link rel='stylesheet' id='fp_res_intl_phone_input-css' href='../../wp-content/plugins/foodpress/assets/css/intlTelInput.css' type='text/css' media='all'>
<link rel='stylesheet' id='vamtam-gfonts-css' href='../../css-1.css?family=Montserrat%3Anormal%2Cbold%7CLibre+Baskerville%3Anormal%2Cbold%7CRubik%3Anormal%2Cbold%7CVarela+Round%3Anormal%2Cbold&#038;subset=latin%2Clatin-ext' type='text/css' media='all'>
<link rel='stylesheet' id='front-all-css' href='../../wp-content/themes/vip-restaurant/cache/all.css' type='text/css' media='all'>
<style id='front-all-inline-css' type='text/css'>

			@font-face {
				font-family: 'icomoon';
				src: url( ../../wp-content/themes/vip-restaurant/vamtam/assets/fonts/icons/icons.ttf) format('truetype');
				font-weight: normal;
				font-style: normal;
			}

			@font-face {
				font-family: 'theme';
				src: url(../../wp-content/themes/vip-restaurant/vamtam/assets/fonts/theme-icons/theme-icons.ttf) format('truetype'),
					url(../../wp-content/themes/vip-restaurant/vamtam/assets/fonts/theme-icons/theme-icons.woff) format('woff'),
					url(../../wp-content/themes/vip-restaurant/vamtam/assets/fonts/theme-icons/theme-icons.svg) format('svg');
				font-weight: normal;
				font-style: normal;
			}
		
</style>
<link rel='stylesheet' id='cubeportfolio-css' href='../../wp-content/themes/vip-restaurant/vamtam/assets/cubeportfolio/css/cubeportfolio.min.css' type='text/css' media='all'>
<link rel='stylesheet' id='sharedaddy-css' href='../../wp-content/plugins/jetpack/modules/sharedaddy/sharing.css' type='text/css' media='all'>
<link rel='stylesheet' id='social-logos-css' href='../../wp-content/plugins/jetpack/_inc/social-logos/social-logos.min.css' type='text/css' media='all'>
<script type='text/javascript' src='../../wp-content/themes/vip-restaurant/vamtam/assets/js/modernizr.min.js'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='../../wp-includes/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='../../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='../../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
<link rel='https://api.w.org/' href='../../wp-json/index.htm.json'>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc.php.xml?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.0.2">
<link rel="canonical" href="index.htm">
<link rel='shortlink' href='index.htm?p=13902'>
<link rel="alternate" type="application/json+oembed" href="../../wp-json/oembed/1.0/embed-4.json?url=https%3A%2F%2Fthehousecafe.com%2Fmenu%2Ficecekler%2F">
<link rel="alternate" type="text/xml+oembed" href="../../wp-json/oembed/1.0/embed-4.xml?url=https%3A%2F%2Fthehousecafe.com%2Fmenu%2Ficecekler%2F&#038;format=xml">
<meta name="generator" content="WPML ver:4.0.5 stt:1,54;">


<!-- foodPress Version -->
<meta name="generator" content="foodPress 1.5.3">

<meta name="generator" content="Powered by Slider Revolution 5.4.8 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">

<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="article">
<meta property="og:title" content="İçecekler">
<meta property="og:url" content="https://hannescaferestaurantt.com/menu/icecekler/">
<meta property="og:description" content="Daha fazla bilgi için gönderiyi ziyaret edin.">
<meta property="article:published_time" content="2018-12-25T20:02:52+00:00">
<meta property="article:modified_time" content="2021-08-24T12:20:27+00:00">
<meta property="og:site_name" content="The Hannes Cafe">
<meta property="og:image" content="https://s0.wp.com/i/blank.jpg">
<meta property="og:locale" content="tr_TR">
<meta name="twitter:text:title" content="İçecekler">
<meta name="twitter:image" content="https://hannescaferestaurantt.com/wp-content/uploads/2019/01/favicon.gif">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="Daha fazla bilgi için gönderiyi ziyaret edin.">

<!-- End Jetpack Open Graph Tags -->
<link rel="icon" href="../../wp-content/uploads/2019/01/favicon.gif" sizes="32x32">
<link rel="icon" href="../../wp-content/uploads/2019/01/favicon.gif" sizes="192x192">
<link rel="apple-touch-icon-precomposed" href="../../wp-content/uploads/2019/01/favicon.gif">
<meta name="msapplication-TileImage" content="https://hannescaferestaurantt.com/wp-content/uploads/2019/01/favicon.gif">
<script type="text/javascript">function setREVStartSize(e){									
						try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
							if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
						}catch(d){console.log("Failure at Presize of Slider:"+d)}						
					};</script>
		<style type="text/css" id="wp-custom-css">
			.fp_popup_img.fp_header.image{max-height:none !important}
.fp_popup .fp_menucard_content .fp_pop_headerS{height: 100%}
.fp_inline_btn, .ftone_btn, .fp_btn_cur, .fp_popTrig.disablePopup{cursor: default !important;}
.foodpress_menu .disablePopup .fp_box:hover h3{color:#000 !important;}
.disablePopup .fp_inner_box{cursor: default !important;}

.foodmenutabs{text-align:center;padding-top:40px}
.foodmenutabs br{display:none}
.foodmenutab{width:230px;height:347px;display:inline-block;text-align:center;border-radius:10px;margin: 0 30px;box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);}
.foodmenutab img{display:block;border-top-right-radius:10px;border-top-left-radius:10px}
.foodmenutab span{display:block;height:68px;background-color:#fff;line-height:68px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;font-size:20px;letter-spacing:1px}
.foodmenutab.active span{background-color:#ee2e39;color:#fff}
.foodmenutab.active span:after{content:" ";display:block;height:28px;background:url('../../wp-content/uploads/2018/12/red-arrow.png') top center no-repeat;margin-top:-8px}

@media only screen and (max-width: 768px){
	.foodmenutab{margin:10px 0;width: 100%;box-shadow: none}
}

.nf-field-label label{font-size: 16px;text-transform: none}
.nf-form-content{padding-top: 40px}
ul.sitemapList, ul.sitemapList ul{list-style-type:disc}
ul.sitemapList ul{padding: 0;margin: 0.5em 0 0.5em 3em;}
body.page-id-15728 div.meta-header,body.page-id-15704 div.meta-header, body.page-id-13360 div.meta-header, body.page-id-13750 div.meta-header, body.page-id-13864 div.meta-header, body.page-id-277 div.meta-header{background-position: bottom center}

body.page-id-15728 div.post-article div.sTitle{display: none}
.category-subeler .sTitle{display: none}
.category-subeler .post-actions-wrapper{display: none}
/*.category-subeler .post-article .post-content-outer p{height: 96px;overflow:hidden;margin-bottom: 16px !important}*/
body.single-post .page-header div.desc{display: none}
@media (min-width: 1024px) {
body.single-post.layout-full .meta-header-inside{min-height:74vh;}
}
body.home .services .thumbnail img{margin:0 auto 20px auto}
body.home .services .services-inside .services-title{line-height: 1.5}
#gallery-1 .gallery-item img{cursor: pointer;}
@media (max-width: 768px) {
#gallery-1 .gallery-item:nth-child(1){display: none}
#mega-menu-menu-header{position: absolute !important;width: 100% !important;background-color: #fff !important}
#mega-menu-menu-header ul{box-shadow: none !important}
}

#sub-header .text-shadow{display:none}

div.menuBoxes .linkarea img{width: 100%;border-radius:6px}
div.menuBoxes .linkarea:hover, .linkarea:focus{box-shadow: none}
div.menuBoxes .linkarea:hover p{color:#e93c37 !important;}		</style>
	<style type="text/css">/** Mega Menu CSS: fs **/</style>
	<script src="../../gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="../../gtag/js.js?id=UA-131725548-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131725548-1');
</script>
<link rel="stylesheet" href="../../gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
<style type="text/css"> 
.css-toggle{
  color:white;
  background-color:white;
}
.css-toggle:hover span{display:block;}
 
.css-toggle span{
  display:none;
  color:#a7a7a7;
}

</style>
</head>
<body class="page-template-default page page-id-13902 page-child parent-pageid-11656 mega-menu-menu-header full header-layout-logo-menu pagination-load-more page-vertical-padding-none sticky-header-type-over vamtam-not-scrolled has-page-header no-header-slider no-header-sidebars responsive-layout sticky-header layout-full">

	<div class="fixed-header-box sticky-header-state-reset" style="height:0;">
		<header class="main-header layout-logo-menu header-content-wrapper">
			<div class="limit-wrapper header-maybe-limit-wrapper header-padding">
				<div class="header-contents">
					<div class="first-row">
						<div class="logo-wrapper">
							<div class="logo-tagline">
								<a href="../../index.htm" title="Hannes Cafe" class="logo " style="min-width:125px">
									<img src="../../wp-content/uploads/2019/01/hannescafe_load.png" alt="The Hannes Cafe" class="normal-logo" width="125" height="22" style="max-height: 22px;">
									<img src="../../wp-content/uploads/2019/01/hannescafe_loadMain.png" alt="The Hannes Cafe" class="alternative-logo" width="125" height="22" style="max-height: 22px;">
								</a>
							</div>
							<div class="mobile-logo-additions">
								<button class="header-search icon vamtam-overlay-search-trigger">&#57648;</button>
								<div id="vamtam-megamenu-main-menu-toggle"></div>
							</div>
						</div>
					</div>
					<div class="second-row has-search">
						<div id="menus">
							<nav id="main-menu">
								<a href="#main" title="Skip to content" class="visuallyhidden">Skip to content</a>
								<div id="mega-menu-wrap-menu-header" class="mega-menu-wrap">
									<div class="mega-menu-toggle" tabindex="0">
										<div class="mega-toggle-blocks-left"></div>
										<div class="mega-toggle-blocks-center"></div>
										<div class="mega-toggle-blocks-right">
											<div class='mega-toggle-block mega-menu-toggle-block mega-toggle-block-1' id='mega-toggle-block-1'>
												<span class='mega-toggle-label'>
													<span class='mega-toggle-label-closed'>MENU</span>
													<span class='mega-toggle-label-open'>MENU</span>
												</span>
											</div>
										</div>
									</div>
									<ul id="mega-menu-menu-header" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="slide" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="200" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="accordion" data-breakpoint="900" data-unbind="true">
										<li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-home mega-align-bottom-left mega-menu-flyout mega-menu-item-13187' id='mega-menu-item-13187'>
											<a class="mega-menu-link" href="../../index.htm" tabindex="0">Anasayfa</a>
										</li>
										<li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-13079' id='mega-menu-item-13079'>
											<a class="mega-menu-link" href="../../hakkimizda/index.htm" tabindex="0">Hakkımızda</a>
										</li>
										<li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-current-page-ancestor mega-current-menu-ancestor mega-current-menu-parent mega-current-page-parent mega-current_page_parent mega-current_page_ancestor mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-13188' id='mega-menu-item-13188'>
											<a class="mega-menu-link" href="../index.php" aria-haspopup="true" tabindex="0">
												Menü
												<span class="mega-indicator"></span>
											</a>
											<ul class="mega-sub-menu">
												<li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-current-page-ancestor mega-current-page-parent mega-menu-item-13904' id='mega-menu-item-13904'>
													<a class="mega-menu-link" href="../index.php">Yemek</a>
												</li>
												<li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-13906' id='mega-menu-item-13906'>
													<a class="mega-menu-link" href="../tatlilar/index.php">Tatlı</a>
												</li>
												<li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-current-menu-item mega-page_item mega-page-item-13902 mega-current_page_item mega-menu-item-13905' id='mega-menu-item-13905'>
													<a class="mega-menu-link" href="index.php">İçecek</a>
												</li>
												<li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-13906' id='mega-menu-item-13906'>
													<a class="mega-menu-link" href="../nargileler/index.php">Nargile</a>
												</li>
											</ul>
										</li>
									
										<li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-13088' id='mega-menu-item-13088'>
											<a class="mega-menu-link" href="../../iletisim/index.htm" tabindex="0">İletişim</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
					
				</div>
			</div>
		</header>
	</div>
	<div id="page" class="main-container">
		<div class="boxed-layout">
			<div class="pane-wrapper clearfix">
				<div id="main-content">
					<div id="sub-header" class="layout-full has-background has-text-shadow">
						<div class="meta-header" style="background-image:url('../../wp-content/uploads/menu/menubg.jpeg' );background-repeat:no-repeat;background-size:cover;background-attachment:scroll;">
							<div class="text-shadow"> </div>
							<div class="limit-wrapper">
								<div class="meta-header-inside">
									<header class="page-header layout-centered  " data-progressive-animation="page-title">
										<h1 style="color:#ffffff" itemprop="headline">İçecekler</h1>
										<div class="page-header-line"></div>
									
									</header>
								</div>
							</div>
						</div>
					</div>
					<div id="main" role="main" class="vamtam-main layout-full  ">
						<div class="row page-wrapper">
							<article id="post-13902" class="full post-13902 page type-page status-publish hentry">
								<div class="page-content">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-top first has-background extended no-extended-padding" style="background-color:#f9f7f4;padding-top:40px;padding-bottom:20px;" id="vamtam-column-6aa127a6e055299331d0dfcce42e2aa8">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>
														#vamtam-column-6aa127a6e055299331d0dfcce42e2aa8, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 p, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 em, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h1, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h2, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h3, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h4, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h5, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h6, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h1 a:not(:hover), #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h2 a:not(:hover), #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h3 a:not(:hover), #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h4 a:not(:hover), #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h5 a:not(:hover), #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 h6 a:not(:hover), #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 .column-title, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 .sep-text h2.regular-title-wrapper, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 .text-divider-double, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 .sep-text .sep-text-line, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 .sep, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 .sep-2, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 .sep-3, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 .portfolio-filters .inner-wrapper .cbp-filter-item, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 .portfolio-filters .inner-wrapper .cbp-filter-item:hover, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 td, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 th, #vamtam-column-6aa127a6e055299331d0dfcce42e2aa8 caption {
															color: #2b2b2b;
														}

															#vamtam-column-6aa127a6e055299331d0dfcce42e2aa8:before {
																background-color: #f9f7f4;
															}
													</style>
													<div class="row ">
														<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-2cdc49979f6184488204e09e2e6995a0">
														<div class="foodmenutab ">
																	<a href="../index.php"><img  src="../../wp-content/uploads/menu/menuyemek2.jpeg" alt="Yemek">
																		<span>Yemek</span>
																	</a>
																</div>
																<div class="foodmenutab ">
																	<a href="../tatlilar/index.php"><img  src="../../wp-content/uploads/menu/menutatli.jpeg" alt="Tatlı">
																		<span>Tatlı</span>
																	</a>
																</div>
																<div class="foodmenutab active">
																	<a href="index.php"><img   src="../../wp-content/uploads/menu/menuicecek.jpeg" alt="İçecek">
																		<span>İçecek</span>
																	</a>
																</div>
																<div class="foodmenutab ">
																	<a href="../nargileler/index.php"><img   src="../../wp-content/uploads/menu/menunargile.jpeg" alt="NArgile">
																		<span>Nargileler</span>
																	</a>
																</div>
														</div>
													</div>
													<div class="vamtam-blank-space  vamtam-hide-lowres" style="height:70px"></div>
													<div class="vamtam-blank-space  vamtam-hide-lowres" style="height:40px"></div>
												</div>
											</div>
										</div>
									</div>
									<!--1.SICAK İÇECEKLER-->
										<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">SICAK İÇECEKLER</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='SICAK İÇECEKLER' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='SICAK İÇECEKLER' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--SICAK İÇECEKLER-->

									<!--BİTKİÇAYLARI-->
									<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">BİTKİ ÇAYLARI</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='BİTKİ ÇAYLARI' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='BİTKİ ÇAYLARI' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
<!--ESPRESSO BAZ SIC İÇ-->
											
														<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">ESPRESSO BAZLI SICAK İÇECEKLER</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='ESPRESSO BAZLI SICAK İÇECEKLER' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='ESPRESSO BAZLI SICAK İÇECEKLER' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--FİLTRE KAHVE-->
											<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">FİLTRE KAHVELER</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='FİLTRE KAHVELER' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='FİLTRE KAHVELER' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
									<!--TÜRK KAHVELERİ-->
								<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">TÜRK KAHVELERİ</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='TÜRK KAHVELERİ' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='TÜRK KAHVELERİ' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
<!--6.SOĞUK KAHVELER-->
										<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">SOĞUK KAHVELER</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='SOĞUK KAHVELER' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='SOĞUK KAHVELER' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- SOĞUK KAHVELER-->
								<!--MOJİTO7-->
										<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">MOJİTO</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='MOJİTO' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='MOJİTO' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
<!--8.SMOOTHIE-->
										<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">SMOOTHIE</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
													<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='SMOOTHIE' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																		<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='SMOOTHIE' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--SMOOTHIE-->
									<!--mİLKSHAKE-->
										<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">MILKSHAKE</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='MILKSHAKE' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='MILKSHAKE' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
<!--KOKTEYLL-->
										<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">KOKTEYLER</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='KOKTEYLER' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='KOKTEYLER' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
				
							<!--FROZEN-->
										<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">FROZEN</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='FROZEN' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='FROZEN' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--10.SOĞUK İÇECEKLER-->
										<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">SOĞUK İÇECEKLER</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='SOĞUK İÇECEKLER' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																			<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='SOĞUK İÇECEKLER' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													
													<div class='clear'></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--SOĞUK İÇECEKLER-->
								

								<!--ENERJİ BARI-->
											<div class="row ">
									<div class="vamtam-grid grid-1-1  vamtam-first-level parallax-bg grid-1-1  first vamtam-cover-bg has-background extended no-extended-padding" style="background: url( 'http://clients.super-agency.com/thehousecafe/wp-content/uploads/2018/12/menu-kahvalti.jpg' )  center top;
										background-size: cover;
										background-attachment: scroll;
										background-color:#3b3b3b;
										padding-top:140px;
										padding-bottom:140px;" id="vamtam-column-04269081d58a4abdb7c050f9267ca022" data-parallax-method="to-centre" data-parallax-inertia="0.1">
											<div class="limit-wrapper">
												<div class="extended-column-inner">
													<style>#vamtam-column-04269081d58a4abdb7c050f9267ca022,#vamtam-column-04269081d58a4abdb7c050f9267ca022 p,#vamtam-column-04269081d58a4abdb7c050f9267ca022 em,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6,#vamtam-column-04269081d58a4abdb7c050f9267ca022 h1 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h2 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h3 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h4 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h5 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 h6 a:not(:hover),#vamtam-column-04269081d58a4abdb7c050f9267ca022 .column-title,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text h2.regular-title-wrapper,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .text-divider-double,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-text .sep-text-line,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-2,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .sep-3,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-04269081d58a4abdb7c050f9267ca022 .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-04269081d58a4abdb7c050f9267ca022 td,#vamtam-column-04269081d58a4abdb7c050f9267ca022 th,#vamtam-column-04269081d58a4abdb7c050f9267ca022 caption{color:#EE2E39;}</style>
														<div class="row ">
															<div class="vamtam-grid grid-1-1  grid-1-1  first unextended animation-fade-in animated-active no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7721d947794bcf09e8a0648c191004c9">
																<h2 style="text-align: center;">ENERJİ BARI</h2>
															</div>
														</div>
												</div>
											</div>
									</div>
								</div>
									<div class="limit-wrapper">
									<div class="row ">
										<div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1 vamtam-add-ornaments-all first unextended no-extended-padding" style="padding-top:70px;padding-bottom:70px;" id="vamtam-column-55403b79278aca733b81a9c8cfebb3aa">
											<div class="row ">
												<div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-fc277a763f5e5a2967fd151bc3a4a237">
													<div class='foodpress_menu' id='fp_1' data-tabbed='no'><div class='menu_arguments' style='display:none' data-id="1" data-meal_type="all" data-tac="no" data-ux="lightbox" data-wordcount="20" data-lang="L1"></div>
													<h2 class='primary_type meal_type fp_menu_sub_section tint_menu menu_term_64  ' data-name='Salata' data-slug='salata' data-src=''>
														<span class='fp_menu_expand'></span>
													</h2>
														<table>
													<?php
														$sorgu1 = $baglanti->prepare("SELECT * FROM kategoriler INNER JOIN urunler on urunler.kategoriadi=kategoriler.kategoriadi  ");
														$sorgu1->execute();
														
														
														
														$foto1=$baglanti->prepare("SELECT * from urunler where foto<>'forhanes.jpg' AND kategoriadi='ENERJİ BARI' order by id ASC");
														$foto1->execute();
														while ($fotolu = $foto1->fetch()) {
															
															
													?>
													<tr>
															<div class="vamtam-grid grid-1-4  grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-aa2da5b096172363e353c5b7bbefe2e4">
																<div class="services clearfix has-image no-icon no-button align-center " style="text-align:center;">
																	<div class="services-inside">
																		<div class="thumbnail">
																		<div class="css-toggle">
																		          
																				<img style="width:260px;height: 232px" src="../../img/<?=  $fotolu['foto'] ?>" class="attachment-full size-full" alt="">
																			
																			<span><h6><?= $fotolu['aciklama']?></h6></span>

																				</div>
																		</div>
																			<h5 class="services-title">
																			<?=  $fotolu['adi']?>
																		</h5>
																		<h5 class="services-title">
																			₺<?=$fotolu['fiyat']?>
																		</h5>
																	
																		
																		
																		<div class="services-content"></div>
																	</div>
																</div>
															</div>
													</tr>
															<?php
													    }
													    $foto=$baglanti->prepare("SELECT * from urunler where foto='forhanes.jpg' AND kategoriadi='ENERJİ BARI' order by id ASC");
															$foto->execute();
													    while ($fotosuz = $foto->fetch()) { ?>
													    	<tr>
													    		<div class='fp_box menuItem c_100 normal_item fp_popTrig style_1' data-ux='lightbox' data-menuitem_id='13882' style="">
																		<div class='fp_inner_box'>
																			<h3 class='' ><?= $fotosuz['adi'] ?> ....................................... ₺<?= $fotosuz['fiyat'] ?></h3>
																			<div class='menu_description'><?= $fotosuz['aciklama'] ?>
																				
																			</div>
																	</div>
						                                	</div> 
																</tr>
																<?php
													    }
													  
													    ?>
													</table>
													<div class='clear'></div>
													
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

											

								
							
								

								
								
								
								
								
								
									<div class="vamtam-blank-space  vamtam-hide-lowres" style="height:70px"></div>
								</div>
								<div class="limit-wrapper"></div>
							</article>
						</div>
					</div><!-- #main -->
				</div><!-- #main-content -->
			<div class="footer-wrapper">
                    <footer class="main-footer vamtam-hide-bg-lowres" style="background-color:#343435;background-image:none;">
                        <div class="footer-sidebars-wrapper limit-wrapper">
                            <div id="footer-sidebars" class="limit-wrapper">
                                <div class="row">
                                    <aside class="cell-1-1 fit" data-id="1">
                                        <section id="text-22" class="widget widget_text">
                                            <div class="textwidget"></div>
                                        </section>
                                    </aside>
                                </div>
                                <div class="row">
                                    <aside class="cell-1-3 fit" data-id="3">
                                        <section id="text-15" class="widget widget_text">
                                            <h4 class="widget-title">Hakkımızda</h4>
                                            <div class="textwidget">
                                                <p>1956 yılında Sakarya'nın Hendek ilçesinde büyük bir aile şirketi olarak kurulan HANELER YAPI adı altında mobilya sektörüyle başlayan ve 1980 yılında hayvan üretimi, besi, süt ve kurban organizasyonuyla hayvancılık sektöründe devam ederken 2010 yılında HANELER ENGİN KASABI olarak açtıkları işletmede kendi yetiştirdiği hayvanların etini ve sütünü  Hendek halkıyla paylaşarak işletmeye devam etmektedir. Yine 2010 yılında uzman kadrosuyla farklı ticaret dallarında adım adım ilerleyen firma HANELER İNŞAAT olarak villa, daire, dükkanlar, fabrikalar ve sanayi dükkanları yapmaktadır. 2018 yılında açılan HANELER MOTORS olarak oto alım-satım galeri işletmesiyle tüm Türkiye’de araç alım ve satımı yapmaktayız.2019 yılında HANNE’S cafe restaurant olarak açtığımız mekanda kendi ürünlerinizle hizmete devam etmekteyiz.</p>
                                                <p>
                                                    <a href="../hakkimizda/index.htm" target="_self" style='font-size: 12px;' class="vamtam-button accent1  button-border hover-accent1 ">
                                                        <span class="btext" data-text="Tamamını Oku" style="color:#ffffff">Tamamını Oku</span>
                                                    </a>
                                                </p>
                                            </div>
                                        </section>
                                    </aside>
                                    <aside class="cell-1-3 fit" data-id="4">
                                        <section id="text-20" class="widget widget_text">
                                            <h4 class="widget-title">Sosyal Medya</h4>
                                            <div class="textwidget">
                                                <p>
                                                    <a href="https://www.facebook.com/hannescaferestaurant/" target="_blank" rel="noopener">
                                                        <span class='icon shortcode   use-hover' style='color:#e93c37;font-size:18px !important;'>&#58155;</span>
                                                    </a>
                                                    <a href="https://twitter.com/hannescafe" target="_blank" rel="noopener">
                                                        <span class='icon shortcode   use-hover' style='color:#e93c37;font-size:18px !important;'>&#58159;</span>
                                                    </a>
                                                    <a href="https://www.instagram.com/hannescafe/" target="_blank" rel="noopener">
                                                        <span class='icon shortcode   use-hover' style='color:#e93c37;font-size:18px !important;'>&#58158;</span>
                                                    </a>
                                                    <!--<a href="../thehousecafeTHC/index.htm" target="_blank" rel="noopener">
                                            <span class='icon shortcode   use-hover' style='color:#e93c37;font-size:18px !important;'>&#58216;</span>
                                        </a>-->
                                                <p> </p>
                                                <p class="widget-title"> İletişim No:</p>0850 304 06 54
                                                <p class="widget-title"> Whatsapp No:</p>0533 614 30 54
                                                <p class="widget-title"> Adres: </p> Kemaliye Mahallesi 1187.Sok Numara:3 Hendek/SAKARYA 
                                                </p>
                                            </div>
                                        </section>
                                    </aside>
                                    <aside class="cell-1-3 fit" data-id=3>
                                        <section id="text-15" class="widget widget_text">
                                            <h4 class="widget-title">Konum</h4>
                                            <p>
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.3752197430663!2d30.739417815727858!3d40.79774774030152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d8fc0a56b62bd%3A0xbfb7b90a17e179e3!2sHannes%20Cafe%20%26%20Restaurant!5e0!3m2!1str!2str!4v1637225085912!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </p>
                                        </section>
                                    </aside>

                                </div>
                            </div>
                        </div>
                        <a href="https://acomputerdoctor.wordpress.com/" id="rabiaozcanlogo" target="_blank" title="">
                            <img style="display: inline" src="../../wp-content/uploads/2019/01/rabiaozcanLogo.png" alt="rabiaozcanLogo" title="rabiaozcanlogo">
                        </a>
                    </footer>
					<div class="vamtam-subfooter copyrights vamtam-hide-bg-lowres" style="background-color:#ffffff;background-image:none;">
						<div class="limit-wrapper">
							<div class="row">
								<div class="vamtam-grid grid-1-3">© 2021 Rabia ÖZCAN KAHYA | Tüm hakları saklıdır.</div>
								
								<div class="vamtam-grid grid-1-3 textright"></div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- / .pane-wrapper -->
		</div><!-- / .boxed-layout -->
	</div><!-- / #page -->





	<div id="scroll-to-top" class="icon">&#59662;</div>
	<script>VAMTAM_HIDDEN_WIDGETS = [];</script>
	<script type='text/javascript' src='../../wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/jquery.matchheight.min.js'></script>
	<script type='text/javascript' src='../../wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/jquery.easypiechart.js'></script>
	<script type='text/javascript' src='../../wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/responsive-elements.js'></script>
	<script type='text/javascript' src='../../wp-content/themes/vip-restaurant/vamtam/assets/cubeportfolio/js/jquery.cubeportfolio.min.js'></script>
	<script type='text/javascript' src='../../wp-includes/js/jquery/ui/core.min.js'></script>
	<script type='text/javascript' src='../../wp-includes/js/jquery/ui/effect.min.js'></script>
	<script type='text/javascript' src='../../wp-includes/js/jquery/ui/widget.min.js'></script>
	<script type='text/javascript' src='../../wp-includes/js/underscore.min.js'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var VAMTAM_FRONT = { "ajaxurl": "https:\/\/thehousecafe.com\/wp-admin\/admin-ajax.php", "jspath": "https:\/\/thehousecafe.com\/wp-content\/themes\/vip-restaurant\/vamtam\/assets\/js\/", "mobile_header_breakpoint": "900px" };
		/* ]]> */
	</script>
	<script type='text/javascript' src='../../wp-content/themes/vip-restaurant/vamtam/assets/js/all.min.js'></script>
	<script type='text/javascript' src='../../wp-includes/js/jquery/ui/datepicker.min.js'></script>
	<script type='text/javascript'>
		jQuery(document).ready(function (jQuery) { jQuery.datepicker.setDefaults({ "closeText": "Kapat", "currentText": "Bug\u00fcn", "monthNames": ["Ocak", "\u015eubat", "Mart", "Nisan", "May\u0131s", "Haziran", "Temmuz", "A\u011fustos", "Eyl\u00fcl", "Ekim", "Kas\u0131m", "Aral\u0131k"], "monthNamesShort": ["Oca", "\u015eub", "Mar", "Nis", "May", "Haz", "Tem", "A\u011fu", "Eyl", "Eki", "Kas", "Ara"], "nextText": "Sonraki", "prevText": "\u00d6nceki", "dayNames": ["Pazar", "Pazartesi", "Sal\u0131", "\u00c7ar\u015famba", "Per\u015fembe", "Cuma", "Cumartesi"], "dayNamesShort": ["Paz", "Pts", "Sal", "\u00c7ar", "Per", "Cum", "Cts"], "dayNamesMin": ["P", "P", "S", "\u00c7", "P", "C", "C"], "dateFormat": "dd\/mm\/yy", "firstDay": 1, "isRTL": false }); });
	</script>
	<script type='text/javascript' src='../../wp-content/plugins/foodpress/assets/js/jquery.timepicker.js'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var fp_ajax_script = { "ajaxurl": "https:\/\/thehousecafe.com\/wp-admin\/admin-ajax.php" };
		/* ]]> */
	</script>
	<script type='text/javascript' src='../../wp-content/plugins/foodpress/assets/js/foodpress_frontend.js'></script>
	<script type='text/javascript' src='../../wp-content/plugins/foodpress/assets/js/intlTelInput.min.js'></script>
	<script type='text/javascript' src='../../wp-content/plugins/foodpress/assets/js/intlTelInputUtils.js'></script>
	<script type='text/javascript' src='../../wp-includes/js/hoverIntent.min.js'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var megamenu = { "timeout": "300", "interval": "100" };
		/* ]]> */
	</script>
	<script type='text/javascript' src='../../wp-content/plugins/megamenu/js/maxmegamenu.js'></script>
	<script type='text/javascript' src='../../wp-includes/js/wp-embed.min.js'></script>
	<script type='text/javascript' src='../../wp-content/themes/vip-restaurant/vamtam/assets/js/build/sticky-header.min.js'></script>
	<!-- W3TC-include-js-head -->

	<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery("body.home figure.gallery-item img").click(function () {
				location.href = "www.yoursite.com";
				return false;
			});


		});
	</script>
</body>
</html>

<!-- Page generated by Rabia ÖZCAN on 2021-11-08 14:53:32 -->