<?php
/* Template Name: Full-width Template */	
get_header();
?>

<!-- FEATURE IMAGE
================================================== -->

<header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Contact</h1>
          <!--<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, temporibus?</p>-->
        </div>
      </div>
    </div>
  </header>

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