<section class="main-about" style="">
  <div class="main-about__bg "></div>
  <div class="main-about__bg--icono">
    <img class="img-icono__bg" src="<?php echo get_template_directory_uri();?>/assets/img/icono-bg.png">
  </div>
  <div class="main-about__bg--icono2">
    <img class="img-icono__bg2" src="<?php echo get_template_directory_uri();?>/assets/img/ img.png">
  </div>
  <div class="main-about__title container">
    <h1 class="title-nivel">
      LO QUE <span class="palabra-nivel">HACEMOS </span>
    </h1>

  </div>
  <div class="main-about__content container">
    <div class="main-about-carousel">
      <?php $args = array( 'post_type' => 'quehacemos');
      $counterNumber = 1;
      ?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="main-about__card">
          <div class="main-about-card__body">
            <span class="main-about__counter"><?php if($counterNumber < 10 ): echo '0'.$counterNumber; else:echo $counterNumber; endif;  ?> </span>
            <div class="main-about-card__title">
              <a href="<?php echo bloginfo('url').'/proyecto';?>">
                <p class="about-card__title">
                  <?php the_title() ?>
                </p>
              
              </a>
              
              <div class="main-about__buttom">
                <a class="btn--filled--about" href="<?php echo bloginfo('url').'/proyecto';?>">
                  LEER MÁS
                </a>
              </div>
            </div>

          </div>
          <div class="main-about__img">
            <div class="main-about__img--mask">
              <div class="main-about__icono">
                <img class="icono-mask" src="<?php the_field('icono')?>">
              </div>
              <div class="main-about__icono--title">
                <img class="icono-mask" src="<?php the_field('icono')?>">
                <a href="<?php echo bloginfo('url').'/proyecto';?>" class="about-title__icono">
                  <?php the_title(); ?>
                </a>
                <div class="main-about__icono--text">
                  <p class="about-text__icono">
                    <?php the_content(); ?>
                  </p>
                </div>

              </div>
            </div>
            <img class="img-about" src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
        </div>
        <?php $counterNumber++; endwhile; ?>

      <!-- <div class="main-about__card">
        <div class="main-about-card__body">
          <span class="main-about__counter"> 02 </span>
          <div class="main-about-card__title">
            <p class="about-card__title">
              APARTAMENTOS
            </p>
            <div class="main-about__buttom">
              <a class="btn--filled--about" href="#">
                LEER MÁS
              </a>
            </div>
          </div>

        </div>
        <div class="main-about__img">
          <div class="main-about__img--mask">
            <div class="main-about__icono">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon_3.png">
            </div>
            <div class="main-about__icono--title">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon_3.png">
              <a href="#" class="about-title__icono">
                APARTAMENTOS
              </a>
              <div class="main-about__icono--text">
                <p class="about-text__icono">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
              </div>

            </div>
          </div>
          <img class="img-about" src="<?php echo get_template_directory_uri();?>/assets/img/image_18.png">
        </div>
      </div>
      <div class="main-about__card">
        <div class="main-about-card__body">
          <span class="main-about__counter"> 03 </span>
          <div class="main-about-card__title">
            <p class="about-card__title">
              LOTES
            </p>
            <div class="main-about__buttom">
              <a class="btn--filled--about" href="#">
                LEER MÁS
              </a>
            </div>
          </div>

        </div>
        <div class="main-about__img">
          <div class="main-about__img--mask">
            <div class="main-about__icono">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon_4.png">
            </div>
            <div class="main-about__icono--title">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon_4.png">
              <a href="#" class="about-title__icono">
                LOTES
              </a>
              <div class="main-about__icono--text">
                <p class="about-text__icono">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
              </div>

            </div>
          </div>
          <img class="img-about" src="<?php echo get_template_directory_uri();?>/assets/img/image_19.png">
        </div>
      </div>
      <div class="main-about__card">
        <div class="main-about-card__body">
          <span class="main-about__counter"> 04 </span>
          <div class="main-about-card__title">
            <p class="about-card__title">
              COMERCIAL
            </p>
            <div class="main-about__buttom">
              <a class="btn--filled--about" href="#">
                LEER MÁS
              </a>
            </div>
          </div>

        </div>
        <div class="main-about__img">
          <div class="main-about__img--mask">
            <div class="main-about__icono">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon.png">
            </div>
            <div class="main-about__icono--title">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon.png">
              <a href="#holaa" class="about-title__icono">
                COMERCIAL
              </a>
              <div class="main-about__icono--text">
                <p class="about-text__icono">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
              </div>

            </div>
          </div>
          <img class="img-about" src="<?php echo get_template_directory_uri();?>/assets/img/image_20.png">
        </div>
      </div>
      <div class="main-about__card">
        <div class="main-about-card__body">
          <span class="main-about__counter"> 05 </span>
          <div class="main-about-card__title">
            <p class="about-card__title">
              COMERCIAL
            </p>
            <div class="main-about__buttom">
              <a class="btn--filled--about" href="#">
                LEER MÁS
              </a>
            </div>
          </div>

        </div>
        <div class="main-about__img">
          <div class="main-about__img--mask">
            <div class="main-about__icono">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon.png">
            </div>
            <div class="main-about__icono--title">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon.png">
              <a href="#" class="about-title__icono">
                COMERCIAL
              </a>
              <div class="main-about__icono--text">
                <p class="about-text__icono">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
              </div>

            </div>
          </div>
          <img class="img-about" src="<?php echo get_template_directory_uri();?>/assets/img/image_20.png">
        </div>
      </div> -->

    </div>
  </div>
</section>