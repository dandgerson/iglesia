<!doctype html>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<header class="top-header">
  <div class="wrapper cf">
    <div class="header-third search-section menu-button">
      search
    </div>
    <div class="header-third logo-section">
      <a href="<?php echo home_url("/"); ?>" class="logo-link"><img src="<?php echo ale_get_option("sitelogo"); ?>" /></a>
    </div>
    <div class="header-third social-section">
<?php if(ale_get_option('fb')) { ?><a href="<?php echo ale_get_option('fb') ?>"><i class="fab fa-facebook" aria-hidden="true"></i></a><?php } ?>
      <?php if(ale_get_option('yt')) { ?><a href="<?php echo ale_get_option('yt') ?>"><i class="fab fa-youtube" aria-hidden="true"></i></a><?php } ?>
      <?php if(ale_get_option('twi')) { ?><a href="<?php echo ale_get_option('twi') ?>"><i class="fab fa-twitter-square" aria-hidden="true"></i></a><?php } ?>
      <?php if(ale_get_option('insta')) { ?><a href="<?php echo ale_get_option('insta') ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a><?php } ?>
    </div>
  </div>
</header>
<section class="home-slider"></section>