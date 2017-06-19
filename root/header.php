<?php
/**
* The Header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package {%= title %}
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/public/img/favicon.ico">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <header role="banner">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php
           if (has_nav_menu('primary')) :
             //wp_nav_menu( array( 'container'=> false, 'menu_class'=> 'nav navbar-nav') );
             wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'container'         => false,
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
             );
           endif;
           ?>
            <?php
             if (has_nav_menu('secondary')) :
               //wp_nav_menu( array( 'container'=> false, 'menu_class'=> 'nav navbar-nav') );
               wp_nav_menu( array(
                 'menu'              => 'secondary',
                 'theme_location'    => 'secondary',
                 'container'         => false,
                 'menu_class'        => 'nav navbar-nav navbar-right',
                 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                 'walker'            => new wp_bootstrap_navwalker())
               );
             endif;
             ?>
             <form class="navbar-form navbar-right">
               <input type="text" class="form-control" placeholder="Search...">
             </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </header>
