<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package team 7 cms
 */

get_header(); ?>

<div style=" position: relative;  text-align: center;  color: white;">
  <img src="<?php echo wp_get_attachment_url( get_theme_mod('team7cms_banner_section1'))?>"  style="width:100%;">
  <div style="position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);" class="h1">Blog</div>
</div>

	<!-- BLOG CONTENT
	================================================== -->
	<div class="container">
		<div class="row" id="primary">
				
			<main id="content" class="col-sm-8" role="main">
			
			<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php cmsassignment2_paging_nav(); ?>

			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
			
			</main><!-- content -->
		
			<!-- SIDEBAR
			================================================== -->
			<aside class="col-sm-4">
			<?php get_sidebar(); ?>
			</aside>
		
		</div><!-- primary -->
	</div><!-- container -->

<?php get_footer(); ?> 
