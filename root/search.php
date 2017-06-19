<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package {%= title %}
 */

 get_header(); ?>
 
 <main class="content-area" role="main">
 			<?php
 		 get_template_part( 'template-parts/main', 'header' );
 		 ?>
 		 <div id="primary" class="container news">
 			 <div class="row">
 				 <div class="primary-main col-md-8">
 					 <?php if ( have_posts() ) : ?>

 			 			<header class="page-header">
 			 				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', '{%= prefix %}' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
 			 			</header><!-- .page-header -->

 			 			<?php /* Start the Loop */ ?>
 			 			<?php while ( have_posts() ) : the_post(); ?>

 			 				<?php
 			 				/**
 			 				 * Run the loop for the search to output the results.
 			 				 * If you want to overload this in a child theme then include a file
 			 				 * called content-search.php and that will be used instead.
 			 				 */
 			 				get_template_part( 'template-parts/content', 'search' );
 			 				?>

 			 			<?php endwhile; ?>

 			 			<?php {%= prefix %}_paging_nav(); ?>

 			 		<?php else : ?>

 			 			<?php get_template_part( 'template-parts/content', 'none' ); ?>

 			 		<?php endif; ?>
 				 </div>
 				 <div class="primary-secondary col-md-3 col-md-offset-1">
 					 <?php get_sidebar(); ?>
 				 </div>
 		 </div>
 	 </div>
 	</main>

 <?php get_footer(); ?>
