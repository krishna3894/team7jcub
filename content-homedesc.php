<?php

$home_desc_title_1 	=	get_field('home_desc_title_1');
$home_desc_1 				=	get_field('home_desc_1');
$home_desc_title_2	=	get_field('home_desc_title_2');
$home_desc_2				=	get_field('home_desc_2');
$home_desc_title_3	=	get_field('home_desc_title_3');
$home_desc_3				=	get_field('home_desc_3');

?>

<!--HOME DESC SECTION  -->
<section id="home-icons" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 text-center">
          <!--<i class="fas fa-cog fa-3x mb-2"></i>-->
          <h3><?php echo $home_desc_title_1; ?></h3>
          <p><?php echo $home_desc_1; ?></p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <!--<i class="fas fa-cloud fa-3x mb-2"></i>-->
          <h3><?php echo $home_desc_title_2; ?></h3>
          <p><?php echo $home_desc_2; ?></p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <!--<i class="fas fa-cart-plus fa-3x mb-2"></i>-->
          <h3><?php echo $home_desc_title_3; ?></h3>
          <p><?php echo $home_desc_3; ?></p>
        </div>
      </div>
    </div>
  </section>