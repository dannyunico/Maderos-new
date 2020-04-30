<div class="main-banner" id="home">
  <div class="main-banner__content">
    <?php $args = array( 'post_type' => 'banner'); ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();if( get_field('seleccionar_pagina') == 'Contacto'): ?>
      <div class="main-banner__item">
        <div class="mask">
          <div class="main-banner__boxtext container">
            <div class="main-banner__palabra main-banner__palabra--contacto main-banner__palabra--contact">
              <p>Confia</p>
							<p>bilidad</p>
            </div>
            <div class="main-banner__text main-banner__text--contact">

              <div class="main-banner__title main-banner__title--full">
                <p>
                  <?php the_content(); ?>
                </p>

              </div>


            </div>
          </div>
        </div>
        <div class="main-banner__img main-banner__img--project">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
      </div>
    <?php endif; endwhile; ?>
  </div>

  <a class="main-banner__angle-down" href="#main-contactform">
    <p>bajar</p>
    <img src="<?php echo get_template_directory_uri();?>/assets/img/back_3.png" alt="">
  </a>
</div>