<?php if(get_field('planos') == 1): ?>
  <section class="main-details__projects--planos ">
    <div class="container">
      <div class="main-details__planos--content">
        <?php if(get_field('imagen_del_plano')): ?>
          <div class="main-details__planos--items">
            <div class="main-details__planos--img">
              
              <img style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano') ?>">
              
            </div>
            <div class="main-details__planos-text">
              <h1 class="title-nivel2--line  title-nivel2--line-initial">
                <strong> PLANOS</strong>
              </h1>
              <p class="details-planos__text">
                <?php the_field('descripcion_del_plano'); ?>
              </p>
            </div>
          </div>
        <?php else: ?>
        
        <?php endif; ?>
        <?php if(get_field('imagen_del_plano_2')): ?>
          <div class="main-details__planos--items">
            <div class="main-details__planos--img">
            
            <img style="" src="<?php the_field('imagen_del_plano_2') ?>">
            
            </div>
            <div class="main-details__planos-text">
              <h1 class="title-nivel2--line  title-nivel2--line-initial">
                <strong> PLANOS</strong>
              </h1>
              <p class="details-planos__text">
                <?php the_field('descripcion_del_plano'); ?>
              </p>
            </div>
          </div>
        <?php else: ?>
        
        <?php endif; ?>

        <?php if(get_field('imagen_del_plano_3')): ?>
          <div class="main-details__planos--items">
            <div class="main-details__planos--img">
            
            <img style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano_3') ?>">
            
            </div>
            <div class="main-details__planos-text">
              <h1 class="title-nivel2--line  title-nivel2--line-initial">
                <strong> PLANOS</strong>
              </h1>
              <p class="details-planos__text">
                <?php the_field('descripcion_del_plano'); ?>
              </p>
            </div>
          </div>
        <?php else: ?>
        
        <?php endif; ?>

        <?php if(get_field('imagen_del_plano_4')): ?>
          <div class="main-details__planos--items">
            <div class="main-details__planos--img">
            
            <img style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano_4') ?>">
            
            </div>
            <div class="main-details__planos-text">
              <h1 class="title-nivel2--line  title-nivel2--line-initial">
               <strong> PLANOS</strong>
              </h1>
              <p class="details-planos__text">
                <?php the_field('descripcion_del_plano'); ?>
              </p>
            </div>
          </div>
        <?php else: ?>
        
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php else: ?>
      
<?php endif; ?>