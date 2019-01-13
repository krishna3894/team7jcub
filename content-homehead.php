<?php $home_head_title		=	get_field('home_head_title');
$home_head_text			=	get_field('home_head_text');

?>
<!-- HOME HEADING SECTION -->
  <section id="home-heading" class="p-5">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container pt-5">
            <h1><?php echo $home_head_title; ?></h1>
            <p class="d-none d-md-block"><?php echo $home_head_text; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>