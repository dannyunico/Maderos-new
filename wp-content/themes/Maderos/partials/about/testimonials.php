<section class="main-testimonios">
  <div class="main-testimonio__title--content container">
    <div class="main-nosotros__small">
      <small class="nivel-small">
        NUESTROS
      </small>
    </div>
    <div class="main-nosotros__title">
      <h1 class="title-nivel2--line title-nivel2--line-initial ">
        <strong>TESTIMO</strong>NIOS
      </h1>
    </div>
  </div>
  <div class="container">
    <div class="main-testimonios__content ">
    <?php $args = array( 'post_type' => 'testimonios');?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
      <div class="main-testimonio__card">
        <div class="main-general__description main-testimonio__text">
          <p class="  text-testimonio">
            <?php the_content(); ?>
          </p>
        </div>
        <div class="main-testimonio__persona">
          <div class="testimonio-persona__img">
            <img class="persona-img" src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
          <div class="main-descripcion__persona">
            <p class="descripcion-persona__nombre">
              <?php the_title(); ?>
            </p>
            <p class="descripcion-persona__profesion">
              <?php the_field('profesion'); ?>
            </p>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

      
      <!-- <div class="main-testimonio__card">
        <div class="main-testimonio__text">
          <p class="text-testimonio">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis qui, incidunt veritatis ut possimus
            eligendi recusandae repellat. Debitis quae dicta placeat eligendi totam, mollitia ut molestias, aliquid
            facere, maxime ratione.
          </p>
        </div>
        <div class="main-testimonio__persona">
          <div class="testimonio-persona__img">
            <img class="persona-img" src="<?php echo get_template_directory_uri();?>/assets/img/user.png">
          </div>
          <div class="main-descripcion__persona">
            <p class="descripcion-persona__nombre">
              Jane Smith
            </p>
            <p class="descripcion-persona__profesion">
              ingeniera civil
            </p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>