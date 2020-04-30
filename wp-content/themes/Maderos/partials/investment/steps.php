<section class="invert-steps">
  <?php $args = array( 'post_type' => 'inversionsteps');
  $counterSteps = 1;
  ?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="invert-steps__item">
      <div class="container">
        <div class="invert-steps__width">
          <p class="invert-steps__title--small">
            constructora
          </p>
          <h2 class="invert-steps__title">
             <?php echo 'paso '.$counterSteps?>
          </h2>
        </div>
        <div class="invert-steps__grid">
          <div class="invert-steps__text">
            <h2><?php the_title();?></h2>
            <p class="main-general__description">
              <?php the_content();?>
            </p>
          </div>
          <div class="invert-steps__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  <?php $counterSteps++; endwhile; ?>
  <div class="main-proyectos__grid--buttom">
    <a class="btn--filled--proyectos" href="#">
      VER TODOS
    </a>
  </div>
  <!-- <div class="invert-steps__item">
    <div class="container">

      <div class="invert-steps__width">
        <p class="invert-steps__title--small">
          constructora
        </p>
        <h2 class="invert-steps__title">
          paso 2
        </h2>
      </div>
      <div class="invert-steps__grid">
        <div class="invert-steps__text">
          <h2>Lorem ipsum</h2>
          <p class="main-general__description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s.
          </p>
        </div>
        <div class="invert-steps__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Invert/image@2x.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="invert-steps__item">
    <div class="container">


      <div class="invert-steps__width">

        <p class="invert-steps__title--small">
          constructora
        </p>
        <h2 class="invert-steps__title">
          paso 3
        </h2>
      </div>
      <div class="invert-steps__grid">
        <div class="invert-steps__text">
          <h2>Lorem ipsum</h2>
          <p class="main-general__description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s.
          </p>
        </div>
        <div class="invert-steps__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Invert/image@2x.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="invert-steps__item">
    <div class="container">


      <div class="invert-steps__width">

        <p class="invert-steps__title--small">
          constructora
        </p>
        <h2 class="invert-steps__title">
          paso 4
        </h2>
      </div>
      <div class="invert-steps__grid">
        <div class="invert-steps__text">
          <h2>Lorem ipsum</h2>
          <p class="main-general__description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s.
          </p>
        </div>
        <div class="invert-steps__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Invert/image@2x.png" alt="">
        </div>
      </div>
    </div>
    <div class="main-proyectos__grid--buttom">
      <a class="btn--filled--proyectos" href="#">
        VER TODOS
      </a>
    </div>
  </div> -->
</section>