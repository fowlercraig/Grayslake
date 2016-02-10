<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php bloginfo( 'sitename' ) ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="/assets/js/app.ie.min.js"></script>
<![endif]-->

<?php include_once locate_template('lib/config.fonts.php' ); ?>
<?php include_once locate_template('lib/config.menus.php' ); ?>

</head>

<body class="fs-grid">
<div id="wrapper">

<?php if(is_front_page()): ?>
<header id="header__mission" class="banner banner__padded bg__color-bgGray relative">
  <div class='fs-row'>
    <div class="fs-cell fs-all-full text-center">
<?php echo get_post_field('post_content', 6); ?>
    </div> 
  </div>
</header>
<?php endif; ?>

<?php $logo = get_field('grayslake_logo', 6); ?>

<header id="header">
  <div class="fs-row">
    <div class="fs-cell fs-lg-third fs-md-half fs-sm-2 fs-centered">
      <h1 id="header__logo" class="text-center">
        <a href="/"><img src="/assets/img/grayslake_logo.svg" alt="<?php bloginfo( 'sitename' ) ?>" class="img-responsive" /></a>
      </h1>
    </div>
    <menu id="header-navigation" class="fs-cell fs-all-full">
      <hr class="divider compact">
      <div class="text-center">
        <?php echo strip_tags(wp_nav_menu( $mainMenu ), '<a>' ); ?>
        <a href="#" target="_blank" class="btn btn--nav btn--nav_icon ss-social-circle ss-facebook"></a>
        <a href="#" target="_blank" class="btn btn--nav btn--nav_icon ss-social-circle ss-youtube"></a>
      </div>
    </menu>
  </div>
</header>

<div id="content-wrapper" class='fs-grid'>
