<section class="main-nosotros__video">
  <div class="main-nosotros__video--img">
    <div class="mask-video">
      <div class="main-nosotros__icono">
        <div class="main-nosotros__mask--text">
          <p class="small-mask__nosotros">
            Nueva presentación
          </p>
          <p class="text-nosotros__mask">
            <?php the_field('titulo_video');?>
          </p>
          <div class="main-nosotros__icono--img">
            <img class="icono-video__nosotros" src="<?php echo get_template_directory_uri();?>/assets/img/play.png">
          </div>

        </div>
      </div>
    </div>
    <video class="nosotros-video__img" src="<?php the_field('video');?>">
    </video>
  </div>
</section>