<?php
/**
 * The template for displaying search results pages.
 *
 * @package team 7 cms
 */  

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'cmsassignment2' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</section>

	<div class="container">
		<div id="primary" class="row">
			
			<main id="content" class="col-sm-8">

			<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
					?>
	
				<?php endwhile; ?>
	
				<?php cmsassignment2_paging_nav(); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
		
			</main><!-- #content -->
			
			<!-- SIDEBAR
			================================================== -->
			<aside class="col-sm-4">
			<?php get_sidebar(); ?>
			</aside>
			
		</div><!-- #primary -->
	</div><!-- .container -->

<?php get_footer(); ?>
