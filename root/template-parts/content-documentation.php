<?php
/**
* The template used for displaying page content in page.php
*
* @package {%= title %}
*/
?>
<div class="primary-secondary col-sm-3 col-md-2 sidebar">
<?php get_template_part( 'template-parts/sidebar', 'secondary' ); ?>
  </div>
  <div class="primary-main col-sm-9 col-md-10">
    <?php
    while ( have_posts() ) : the_post();
    get_template_part( 'template-parts/primary-main', 'header' );
    ?>
    <div class="row">
      <div class="col-md-9">
        <?php the_content(); ?>
      </div>
      <div class="primary-tertiary col-md-3">
        <?php get_template_part( 'template-parts/sidebar', 'tertiary' ); ?>
      </div>
    </div>
  </div>
