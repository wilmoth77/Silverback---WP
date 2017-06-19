<?php
/**
* Conditional switch for displaying the left navigation
*
* @package {%= title %}
*/
?>

<?php
$current_page = get_the_ID();

switch ( $current_page ) {
  case '9999' : // If is page id __
  if (has_nav_menu('documentation_navigation')) :
    wp_nav_menu( array(
      'menu'              => 'documentation_navigation',
      'theme_location'    => 'documentation_navigation',
      'container'         => 'nav',
      'container_id'      => 'sidebar-secondary',
      'menu_class'        => 'nav nav-sidebar',
      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
      'walker'            => new wp_bootstrap_navwalker())
    );
endif;
break;
}
?>
