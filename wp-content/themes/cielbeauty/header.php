<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<meta name="keywords" content="" />
<?php if(is_home()){ $description = get_bloginfo('name');
}else{ $description = get_bloginfo('name').' | '.trim(wp_title('',false)); } ?>
<meta name="description" content="<?php echo $description.' | '.get_bloginfo('description'); ?>" />

<meta name="description" content="お客様のため4ビューティー「基礎美容」「オシャレ美容」「健康美容」「心美容」を優れた美容商品と美容技術でお客様にご提供させて頂きます。">
<meta name="keywords" content="CIEL,東京,立川市,エステ,サロン,脱毛,リラクゼーション,マッサージ,フェイシャル,痩身,美顔,美容,オシャレ,健康,">

<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>


<?php /*=======================================
Favicon
===============================================*/ ?>
<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<link rel="Shortcut Icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />


<?php /*=======================================
CSS
===============================================*/ ?>
<?php //サイトに合わせて、1・2どちらかのCSS読み込みを使用 ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css.css?<?php echo filemtime(TEMPLATEPATH.'/css.css'); ?>" media="screen and (min-width: 641px), print" />


<?php // 2 PC・スマホ（レスポンシブ）サイトの場合 ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css?<?php echo filemtime(TEMPLATEPATH.'/style.css'); ?>" media="screen and (min-width: 641px), print" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style-sp.css?<?php echo filemtime(TEMPLATEPATH.'/style-sp.css'); ?>" media="only screen and (max-width: 640px), only and (max-device-width: 735px) and (orientation : landscape)" />

<!--[if lt IE 9]>
<link rel="stylesheet" href=".<?php bloginfo('stylesheet_url'); ?>?<?php echo filemtime(TEMPLATEPATH.'/style.css'); ?>" type="text/css" media="all" />
<script type="text/javascript" src=".<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script>
<script type="text/javascript" src=".<?php bloginfo('template_directory'); ?>/js/respond.js"></script>
<![endif]-->


<?php /*=======================================
JavaScript
===============================================*/ ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?hl=ja"></script>

<?php /* function.js */ ?>
<script src="<?php bloginfo('template_directory'); ?>/js/function.js?<?php echo filemtime(TEMPLATEPATH.'/js/function.js'); ?>"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js?<?php echo filemtime(TEMPLATEPATH.'/js/script.js'); ?>"></script>

<?php wp_head(); ?>
<style type="text/css" media="screen">
	html (margin-top: 0px !important;)
</style>

</head>
<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v8.0&appId=609148690011984&autoLogAppEvents=1" nonce="CksYqNhc"></script>



<div id="container">

	<div class="l-header">

    <!-- <a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a> -->
    <header id="header">
		<div class="container">
			<ul class="wrapper-top">
				<li><a href="<?php echo home_url(); ?>/voice/" class="st st-1">お客様の声</a></li>
				<li><a href="<?php echo home_url(); ?>/#top_news" class="st st-2">ニュース</a></li>
				<li><a href="#map" class="st st-3">アクセス</a></li>
				<li><a href="#" class="st st-4">採用情報</a></li>
				<li><a href="<?php echo home_url(); ?>/reservation/" class="st st-5">予約</a></li>
			</ul>
			<div class="c-wrapper">
					<div class="h-logo">
						<h1 class="site-title">東京都立川市プライベートエステサロン</h1>
						<a href="<?php echo home_url(); ?>/"><img src="<?php bloginfo('template_directory'); ?>/img/common/header-logo.png" alt="CIEL"></a>

						<div id="navToggle">
							<div><span></span> <span></span> <span></span></div>
							<p>MENU</p>
						</div>
					</div>
					<div class="h-menu">
						<nav>
							<ul>
								<li <?php if(is_home()){echo 'class="is-active"';}?>><a href="<?php echo home_url(); ?>/">TOP<br><span>トップ</span></a><span></span></li>
								<li <?php if(is_page('bustcare')){echo 'class="is-active"';}?>><a href="<?php echo home_url(); ?>/bustcare/">BUST CARE<br><span>バストアップ</span></a><span></span></li>
								<li <?php if(is_page('epilation')){echo 'class="is-active"';}?>><a href="<?php echo home_url(); ?>/epilation/">EPILATION<br><span>脱毛</span></a><span></span></li>
								<li <?php if(is_page('facial')){echo 'class="is-active"';}?>><a href="<?php echo home_url(); ?>/facial/">FACIAL<br><span>フェイシャル</span></a><span></span></li>
							</ul>
						</nav>
					</div>
					<div class="h-contact">
						<ul>
							<li><img src="<?php bloginfo('template_directory'); ?>/img/common/tele-icon.png" alt="telephone"><a href="tel:0425189826">042-518-9826</a></li>
							<li><img src="<?php bloginfo('template_directory'); ?>/img/common/mail-icon.png" alt="mail"><a href="mailto:info＠cielbeauty.jp">info＠cielbeauty.jp</a></li>
						</ul>
					</div>
			</div>
		</div>
	</header>


	</div><!-- /.l-header -->


	
		<div class="l-contents">
