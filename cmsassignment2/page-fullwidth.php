<?php
/* Template Name: Full-width Template */	
get_header();
?>

<div style=" position: relative;  text-align: center;  color: white;">
  <img src="<?php echo wp_get_attachment_url( get_theme_mod('team7cms_banner_section1'))?>"  style="width:100%;">
  <div style="position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);" class="h1">Contact Me</div>
</div>



<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			
			<section class="main-content">
				
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_content(); ?>
					
				<?php endwhile; // end of the loop ?>
				
			</section><!-- main-content -->
			
		</div><!-- content -->
	</div><!-- row -->
</div><!-- container -->

<?php get_footer(); ?>