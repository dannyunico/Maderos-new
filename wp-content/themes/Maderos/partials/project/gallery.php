<?php if(get_field('agregar_galeria') == 1): ?>
  <section class="main-details__galeria ">
    <div class="container">
      <div class="main-details__galeria--title">
        <h1 class="title-nivel2--line title-nivel2--line-initial title-nivel2--line-initial--gallery">
          <strong> GALERÍA</strong>
        </h1>

      </div>
      <?php if(get_field('link_vista_360')): ?>
        <div class="link-360">
          <a href="<?php the_field('link_vista_360');?>">
            <p>Ver imágenes 360</p>
          </a>
        </div>
      <?php else: ?>

      <?php endif ?>
      <div class="main-details__galeria--content">

        <?php if(get_field('imagen_galeria')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_2')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_2');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_3')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_3');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_4')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_4');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_5')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_5');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_6')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_6');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_7')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_7');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_8')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_8');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>
      </div>
    </div>

    <?php if(get_field('cargar_pdf')): ?>
      <div class="main-details__video--buttom main-details__video--presentation">
        <a class="btn_custom btn--medium btn--filled2" target="_blank" href="<?php the_field('cargar_pdf') ?>">
          VER PRESENTACIÓN
        </a>
      </div>
    <?php else: ?>

    <?php endif ?>
  
  </section>
<?php else: ?>

<?php endif ?>