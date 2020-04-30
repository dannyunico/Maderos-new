<section class="main-contactform" id="main-contactform">
  <div class="container">
    <div class="main-contactform__content">
      <div class="main-contactform__item">
        <div class="main-contactform__boxtext">
          <div class="main-nivel__small main-nivel__small--start">
            <small class="nivel-small nivel-small--contact">
            <?php the_field('acerca')?>
            </small>
          </div>
          <div class="main-nivel__title main-nivel__title--column ">
            <h1 class="title-nivel2--line title-nivel2--line-initial title-nivel2--line-initial--contact">
              <strong> <?php the_field('titulo_bold'); ?></strong><br> <?php the_field('titulo_light'); ?>
            </h1>
          
          </div>
          <div class="main-contactform__info">
            <p><?php the_field('descripcion')?></p>
            <ul class="main-contactform__ul">

            <!-- Direccion-->
              <?php if(get_field('direccion')): ?>
                <li>
                  <a href="" class="d-flex">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Contact/icon.png" alt="">
                    <p><?php the_field('direccion')?></p>
                  </a>
                </li>
              <?php else: ?>

              <?php endif; ?>
              

              <!-- Telefono-->
              <?php if(get_field('telefono')): ?>
                <li>
                  <a href="<?php echo '+'.the_field('telefono')?>" class="d-flex">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Contact/icon_2.png" alt="">
                    <p><?php the_field('telefono')?></p>
                  </a>

                </li>
              <?php else: ?>

              <?php endif; ?>
              
              <!-- Correo-->
              <?php if(get_field('correo')): ?>
                <li>
                  <a href="" class="d-flex">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Contact/icon_3.png" alt="">
                    <p><?php the_field('correo')?></p>
                  </a>

                </li>
              <?php else: ?>

              <?php endif; ?>

              
              <li>
                <!-- facebook-->
                <?php if(get_field('facebook')): ?>
                  <a href="<?php the_field('facebook')?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Contact/fb_2.png" alt="">
                  </a>
                <?php else: ?>

                <?php endif; ?>

                <!-- instagram-->
                <?php if(get_field('instagram')): ?>
                  <a href="<?php the_field('instagram')?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/Contact/instagram_2.png" alt="">
                  </a>
                <?php else: ?>

                <?php endif; ?>
              </li>
            </ul>
          </div>

        </div>

      </div>
      <div class="main-contactform__item">
        <div class="main-contactform__box container">
          <!-- <form action="">
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput" placeholder="Nombre" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput" placeholder="Apellidos" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput2" placeholder="Correo" type="text">
            </div>
            <div class="main-grid">
              <div class="form-group">
                <input class="form-control" id="formGroupExampleInput2" placeholder="Teléfono" type="tel">
              </div>
            </div>

            <div class="form-group">
              <textarea class="main-contactform__textarea" placeholder="Mensaje" rows="8"></textarea>
            </div>
            <div class="custom-control custom-checkbox my-1 mr-sm-2">
              <input class="custom-control-input" id="customControlInline" type="checkbox">
              <label class="custom-control-label" for="customControlInline">
                Acepto
              </label>
              <a class="main-contactform__textlink" href="#">
                términos y condiciones
              </a>
            </div>
            <div class="main-contactform__btnbox">
              <button class="btn_custom btn--medium btn--filled--red">
                Enviar
              </button>
            </div>
          </form> -->
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
        </div>
      </div>
    </div>
  </div>

</section>