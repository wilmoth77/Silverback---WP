<?php
/**
* Conditional switch for displaying the contents menu
* of the selected nav item
*
* @package {%= title %}
*/
?>

<?php
$current_page = get_the_ID();

switch ( $current_page ) {
  case '9999' : // If is page id __
  ?>
  <div class="card side-nav">
    <div class="card-block">
      <?php
      if (has_nav_menu('contents_menu_id')) :
        wp_nav_menu( array(
          'menu'              => 'contents_menu_id',
          'theme_location'    => 'contents_menu_id',
          'container'         => 'nav',
          'container_id'      => 'sidebar-tertiary',
          'menu_class'        => 'nav nav-pills nav-stacked',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
        );
        ?>
      </div>
    </div>
    <?php
  endif;
  break;
  case '99999' : // If is page id __
  ?>
  <div class="card side-nav">
    <div class="card-block">
      <?php
      if (has_nav_menu('contents_menu_id')) :
        wp_nav_menu( array(
          'menu'              => 'contents_menu_id',
          'theme_location'    => 'contents_menu_id',
          'container'         => 'nav',
          'container_id'      => 'sidebar-tertiary',
          'menu_class'        => 'nav nav-pills nav-stacked',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
        );
        ?>
      </div>
    </div>
    <?php
  endif;
  break;
}
?>
