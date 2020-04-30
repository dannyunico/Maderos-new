<section class="main-video">
  <div class="main-nivel__title">
    <h1 class="title-nivel2--line-initial title-nivel2--line">
      <strong> SOLUCIONES</strong> A LA MEDIDA
    </h1>
  </div>
  <div class="main-video__content container  " style="">

    <?php $args = array( 'post_type' => 'soluciones');
    $title = get_the_title();
    ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <?php if(get_field('imagen')): ?>
      <div class="main-video__items">
        <div class="main-video__img">
          <div class="mask-video2">
            <div class="main-details__video--icono main-details__video--icono--home">
              <img class="video-icono" src="<?php echo get_template_directory_uri();?>/assets/img/play.png">
  
            </div>
          </div>
          
            <img class="img-video" src="<?php the_field('imagen') ?>">
          
        </div>
      </div>
      <?php else: ?>
        <div class="main-video__items"  data-toggle="modal" data-target="#videoSolutions-<?php the_id();?>" >
        <div class="main-video__img">
          <div class="mask-video2">
            <div class="main-details__video--icono main-details__video--icono--home">
              <img class="video-icono" src="<?php echo get_template_directory_uri();?>/assets/img/play.png">
  
            </div>
          </div>
        
          
            <video class="img-video" src="<?php the_field('video') ?>">
            <source src="<?php the_field('video') ?>" type="video/mp4">
          </video>   
          
        </div>
      </div>

      <?php endif; ?>
    <?php endwhile; ?>
  </div>
  <div class="main-video-relative">
    <div class="main-video__bg ">
      <div class="main-video__bg--color"></div>
      <div class="main-video__bg--text"></div>
      <p class="video-bg__text">
        CONOCIMIENTO <br> EXPERTO
      </p>
    </div>
  </div>
</section>

<!-- data-toggle="modal" data-target="#videoSolutions-< ?php the_id();?>" -->


<!-- 
<section class="main-video">
  <div class="main-nivel__title">
    <h1 class="title-nivel2--line-initial title-nivel2--line">
      <strong> SOLUCIONES</strong> A LA MEDIDA
    </h1>
  </div>
  <div class="main-video__content container  " style="">
    <div class="main-video__items">
      <div class="main-video__img">
        <div class="mask-video2">
          <div class="main-details__video--icono">
            <img class="video-icono" src="< ?php echo get_template_directory_uri();?>/assets/img/play.png">

          </div>
        </div>
        <img class="img-video" src="< ?php echo get_template_directory_uri();?>/assets/img/image_14.png">
      </div>
    </div>
    <div class="main-video__items">
      <div class="main-video__img">
        <div class="mask-video2">
          <div class="main-details__video--icono">
            <img class="video-icono" src="< ?php echo get_template_directory_uri();?>/assets/img/play.png">

          </div>
        </div>
        <img class="img-video" src="< ?php echo get_template_directory_uri();?>/assets/img/image_14.png">
      </div>
    </div>
  
  </div>
  <div class="main-video__bg ">
    <div class="main-video__bg--color"></div>
    <div class="main-video__bg--text"></div>
    <p class="video-bg__text">
      CONOCIMIENTO <br> EXPERTO
    </p>
  </div>
</section> -->