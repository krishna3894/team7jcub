<!-- Dynamic Slider -->
<section id="showcase">
    <div id="myCarousel" class="carousel slide " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div  class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="">
            <img src="<?php echo wp_get_attachment_url( get_theme_mod('team7cms_slider1_section1'))?>" alt="">
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="">
          <img src="<?php echo wp_get_attachment_url( get_theme_mod('team7cms_slider2_section1'))?>" alt="">
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="">
          <img src="<?php echo wp_get_attachment_url( get_theme_mod('team7cms_slider3_section1'))?>" alt="">
          </div>
        </div>
      </div>

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>
