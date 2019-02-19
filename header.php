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
      <img src="<?php echo ale_get_option("sitelogo"); ?>" />
    </div>
    <div class="header-third social-section">
      social
    </div>
  </div>
</header>
<section class="home-slider"></section>