<section class="main-proyectos__grid">

  <div class="main-proyectos__grid--content main-proyectos__grid--carousel">

    <?php $args = array( 'post_type' => 'Proyectos'); ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <a href="<?php the_permalink();?>" class="main-proyectos__grid--img">
        <div class="proyectos-mask">
          <div class="main-proyecto__icono">
            <img class="proyecto-icono" src="<?php echo get_template_directory_uri();?>/assets/img/icon@2x.png">
          </div>
          <div class="main-proyecto__category">
            <p class="">
              <?php the_field('proyectos') ?>
            </p>
          </div>
          <div class="main-proyecto__rotate">
            <p>
              <?php the_title(); ?>
            </p>
          </div>
        </div>
        <img class="img-proyectos__grid" src="<?php echo get_the_post_thumbnail_url(); ?>">
      </a>  
      <?php endwhile; ?>
    <!-- <div class="main-proyectos__grid--img">
      <div class="proyectos-mask">
        <div class="main-proyecto__icono">
          <img class="proyecto-icono" src="<?php echo get_template_directory_uri();?>/assets/img/icon@2x.png">
        </div>
        <div class="main-proyecto__category">
          <p class="">
            Preventa
          </p>
        </div>
        <div class="main-proyecto__rotate">
          <p>
            Proyecto Valverde
          </p>
        </div>
      </div>
      <img class="img-proyectos__grid" src="<?php echo get_template_directory_uri();?>/assets/img/image_9.png">
    </div>-->
  </div>
  <div class="main-proyectos__grid--buttom">
    <a class="btn--filled--proyectos" href="<?php echo bloginfo('url').'/proyecto';?>">
      VER TODOS
    </a>
  </div>
</section>