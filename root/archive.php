<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package {%= title %}
 */

get_header(); ?>

<main class="content-area" role="main">
			<?php get_template_part( 'template-parts/main', 'header' ); ?>
			<?php get_template_part('template-parts/breadcrumbs'); ?>
		 <div id="primary" class="container news">
			 <div class="row">
				 <div class="primary-main col-md-8">
					 <?php if ( have_posts() ) : ?>

			 			<header class="page-header">
			 				<h1 class="page-title">
			 					<?php
			 						if ( is_category() ) :
			 							single_cat_title();

			 						elseif ( is_tag() ) :
			 							single_tag_title();

			 						elseif ( is_author() ) :
			 							printf( __( 'Author: %s', '{%= prefix %}' ), '<span class="vcard">' . get_the_author() . '</span>' );

			 						elseif ( is_day() ) :
			 							printf( __( 'Day: %s', '{%= prefix %}' ), '<span>' . get_the_date() . '</span>' );

			 						elseif ( is_month() ) :
			 							printf( __( 'Month: %s', '{%= prefix %}' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', '{%= prefix %}' ) ) . '</span>' );

			 						elseif ( is_year() ) :
			 							printf( __( 'Year: %s', '{%= prefix %}' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', '{%= prefix %}' ) ) . '</span>' );

			 						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
			 							_e( 'Asides', '{%= prefix %}' );

			 						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
			 							_e( 'Galleries', '{%= prefix %}');

			 						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
			 							_e( 'Images', '{%= prefix %}');

			 						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
			 							_e( 'Videos', '{%= prefix %}' );

			 						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
			 							_e( 'Quotes', '{%= prefix %}' );

			 						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
			 							_e( 'Links', '{%= prefix %}' );

			 						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
			 							_e( 'Statuses', '{%= prefix %}' );

			 						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
			 							_e( 'Audios', '{%= prefix %}' );

			 						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
			 							_e( 'Chats', '{%= prefix %}' );

			 						else :
			 							_e( 'Archives', '{%= prefix %}' );

			 						endif;
			 					?>
			 				</h1>
			 				<?php
			 					// Show an optional term description.
			 					$term_description = term_description();
			 					if ( ! empty( $term_description ) ) :
			 						printf( '<div class="taxonomy-description">%s</div>', $term_description );
			 					endif;
			 				?>
			 			</header><!-- .page-header -->

			 			<?php /* Start the Loop */ ?>
			 			<?php while ( have_posts() ) : the_post(); ?>

			 				<?php
			 					/* Include the Post-Format-specific template for the content.
			 					 * If you want to override this in a child theme, then include a file
			 					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 					 */
			 					get_template_part( 'template-parts/content', get_post_format() );
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
