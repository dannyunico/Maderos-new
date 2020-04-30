<section class="main-nosotros container" id="main-nosotros ">
  <div class="main-nosotros__content">
    <div class="main-nosotros__content--text">
      <div class="main-nosotros__small">
        <small class="nivel-small">
        <?php the_field('acerca') ?>
        </small>
      </div>
      <div class="main-nosotros__title">
        <h1 class="title-nivel2--line title-nivel2--line-initial">
          <strong> <?php the_field('titulo_bold'); ?></strong> <?php the_field('titulo_light'); ?>
        </h1>
      </div>
      <div class="main-nosotros__text">
        <?php the_field('descripcion'); ?>
      </div>
      <div class="main-nosotros__icon">
        <img class="img-nosotros" src="<?php the_field('imagen'); ?>">
      </div>
    </div>
    <div class="main-nosotros__content--images">
      <div class="main-nosotros__carousel">




        

        <?php $args = array( 'post_type' => 'lineadetiempo');?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>
          <div class="main-nosotros__item">
            <span class="main-nosotros__line"></span>
            <div class="main-nosotros__img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
            <div class="main-nosotros__body">
              <h2><?php the_title();?></h2>
              <p>
                <?php echo excerpt(30); ?>
              </p>


            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <!-- <div class="main-nosotros__item">
          <span class="main-nosotros__line"></span>
          <div class="main-nosotros__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/imagen-about7.png">
          </div>
          <div class="main-nosotros__body">
            <h2>Medellín 1999</h2>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha
              sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor.</p>

          </div>
        </div> -->

      </div>
    </div>

  </div>
</section>
