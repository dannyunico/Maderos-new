<section class="invert-detail" id="invert-detail">
  <div class="container">
    <div class="main-nivel__small">
      <small class="nivel-small">
        <?php the_field('acerca')?>
      </small>
    </div>
    <div class="main-nivel__title ">
      <h1 class="title-nivel2--line-center title-nivel2--line">
        <strong> <?php the_field('titulo_bold')?> </strong> <?php the_field('titulo_light')?>
      </h1>
    </div>
    <?php if(get_field('descripcion_parte_derecha') == 1 && get_field('descripcion_parte_izquierda') == 1):?>
      <div class="invert-detail__grid">

        <div class="main-proyectos__text">
          <p class=" main-general__description">
          <?php the_field('descripcion_parte_izquierda')?>
          </p>
        </div>
        <div class="main-proyectos__text">
          <p class=" main-general__description">
            <?php the_field('descripcion_parte_derecha')?>
          </p>
        </div>
      </div>
     
    <?php else:?>
      <div class="text-inversion__center">
        <p class="main-general__description"><?php the_field('descripcion_parte_izquierda')?></p>
      </div>
    <?php endif;?>
  </div>
</section>