<div class="main-banner" id="home">
  <div class="main-banner__content">
    <div class="main-banner__item" style="position: inherit !important;">
      <div class="mask">
        <div class="main-banner__boxtext container">
          <div class="main-banner__palabra main-banner__palabra--contacto">
            <p>cerca</p>
            <p>nía</p>
          </div>
          <div class="main-banner__text">

            <div class="main-banner__title main-banner__title--projects">
              <p>
                <?php single_cat_title(); ?>
              </p>

            </div>


          </div>
        </div>
      </div>
      <div class="main-banner__img2">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
      </div>
    </div>
  </div>
  <a class="main-banner__angle-down" href="#main-projects">
    <p>bajar</p>
    <img src="<?php echo get_template_directory_uri();?>/assets/img/back_3.png" alt="">
  </a>
</div>