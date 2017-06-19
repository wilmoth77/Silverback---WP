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
  if (has_nav_menu('content_menu_name')) :
    wp_nav_menu( array(
      'menu'              => 'content_menu_name',
      'theme_location'    => 'content_menu_name',
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
  if (has_nav_menu('content_menu_name')) :
    wp_nav_menu( array(
      'menu'              => 'content_menu_name',
      'theme_location'    => 'content_menu_name',
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
