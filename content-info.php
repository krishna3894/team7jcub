<?php
$info_section_title = get_field('info_section_title');
$info_section_text	= get_field('info_section_text');
?>


<!-- INFO SECTION -->
  <section id="info" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h3><?php echo $info_section_title; ?></h3>
          <p><?php echo $info_section_text; ?></p>
          <!--<a href="about.html" class="btn btn-outline-danger btn-lg">Learn More</a>-->
        </div>
        <!--<div class="col-md-6">
          <img src="img/laptop.png" alt="" class="img-fluid">
        </div>-->
      </div>
    </div>
  </section>