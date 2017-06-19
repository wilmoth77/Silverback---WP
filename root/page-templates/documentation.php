<?php
/**
* Template Name: Documentation
*
* The layout of the main content area for
* the documentation pages of the style guide(s)
* @package {%= title %}
*/
get_header(); ?>
<main class="content-area" role="main">
  <div id="primary" class="container-fluid">
    <div class="row">
      <?php get_template_part( 'template-parts/content', 'documentation' ); ?>
    </div>
  </div>
<?php endwhile; // End of the loop.
?>
</main>
<!-- #primary -->
<?php get_footer();?>
