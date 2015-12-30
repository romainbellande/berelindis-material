<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/lib/fullpage.js/jquery.fullPage.css'; ?>">
<scripts src="<?php echo get_stylesheet_directory_uri() . '/lib/fullpage.js/jquery.fullPage.min.js'; ?>"></script>

<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/paper-header-panel/paper-header-panel.html'; ?>" >
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/paper-card/paper-card.html'; ?>">
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/iron-flex-layout/iron-flex-layout.html'; ?>">
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/iron-flex-layout/classes/iron-flex-layout.html'; ?>">
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/paper-button/paper-button.html'; ?>">
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/paper-menu/paper-menu.html'; ?>">
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/paper-ripple/paper-ripple.html'; ?>">
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/paper-progress/paper-progress.html'; ?>">
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/iron-icon/iron-icon.html'; ?>">
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/iron-form/iron-form.html'; ?>">
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/paper-input/paper-input.html'; ?>">
<link rel="import" href="<?php echo get_stylesheet_directory_uri() . '/lib/paper-input/paper-textarea.html'; ?>">

</head>
<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <div id="wrap-header" class="">
      <header id="masthead" class="">

        <paper-toolbar>
          <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
          </div>
          <nav id="site-navigation" class="site-navigation">
            <button id="responsive-menu-toggle"><?php _e( 'Menu', 'voidx' ); ?></button>
            <div id="responsive-menu"><?php
              wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'menu-header', 'menu_class' => 'menu-inline' ) );?>
            </div>
          </nav>
        </paper-toolbar>
      </paper-header-panel>
      </header>
      <paper-header-panel class="flex">

    </div>
    <div id="wrap-main" class="wrap-main">
