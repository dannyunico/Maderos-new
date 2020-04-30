<section class="service-about container" id="service-about">
  <div class="service-about__grid">
    <div class="service-about__title">
      <small class="nivel-small">
      <?php the_field('acerca') ?>
    
      </small>
      <h1 class="title-nivel2--line title-nivel2--line-initial">
        <strong><?php the_field('titulo_bold') ?> </strong> <br> <?php the_field('titulo_light') ?>
      </h1>
    </div>

    <div class="service-about__description">
      <p class="main-general__description">
      <?php the_field('descripcion') ?>
        
      </p>
    </div>

  </div>
</section>
