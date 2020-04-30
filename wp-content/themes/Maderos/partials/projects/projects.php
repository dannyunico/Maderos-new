<section class="main-projects" id="main-projects">
  <div class="main-projects__tabs container">

    <ul class="nav nav-pills " id="pills-tab" role="tablist">
      <li class="nav-item__tabs">
        <a class="nav-link__tabs " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
          aria-controls="pills-home" aria-selected="true">Preventa</a>
      </li>
      <li class="nav-item__tabs">
        <a class="nav-link__tabs" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
          aria-controls="pills-profile" aria-selected="false">Construcción</a>
      </li>
      <li class="nav-item__tabs">
        <a class="nav-link__tabs" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
          aria-controls="pills-contact" aria-selected="false">Entrega inmediata</a>
      </li>
      <li class="nav-item__tabs ">
        <a class="nav-link__tabs active" id="pills-totals-tab" data-toggle="pill" href="#pills-totals" role="tab"
          aria-controls="pills-totals" aria-selected="false">Todos</a>
      </li>
    </ul>



    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="main-projects__content">
    <?php $args = array( 'post_type' => 'Proyectos'); ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php // proyectos ( value )
$proyectos_array = get_field( 'proyectos' );
if ( $proyectos_array ):
	foreach ( $proyectos_array as $proyectos_item ): if($proyectos_item == 'Preventa'): ?>
          <div class="main-projects__card">
         
            
            <div class="main-projects__img">
              <a href="<?php the_permalink(); ?>">
                <span class="line"></span>
                <span class="line line-bottom"></span>
                <div class="main-proyecto__icono">
                  <img class="proyecto-icono" src="<?php echo get_template_directory_uri();?>/assets/img/icon@2x.png">
                </div>
                <div class="main-proyecto_text">
                  <p>Desde <br>
                    <?php the_field('precio') ?></p>
                </div>
                <div class="mask"></div>
                <a href="<?php the_permalink(); ?>">
                  <img class="img-projects" src="<?php echo get_the_post_thumbnail_url(); ?>">
                </a>
                </a>
            </div>
       
          
            <div class="main-projects__body">
              <div class="main-projects__logo">
                <img class="projects-logo" src="<?php the_field('logo_de_ubicacion') ?>">
              </div>
              <div class="main-projects__text">
                <p class="projects-title">
                 <?php the_title(); ?>
                </p>
                <p class="projects-text">
                <?php the_field('ubicacion') ?>
                </p>
              </div>
            </div>
          </div>

      <?php
endif;
	endforeach;
endif;  endwhile; ?>


          <!-- <div class="main-projects__card">
            <div class="main-projects__img">
              <a href="<?php the_permalink(); ?>">
                <span class="line"></span>
                <span class="line line-bottom"></span>
                <div class="main-proyecto__icono">
                  <img class="proyecto-icono" src="<?php echo get_template_directory_uri();?>/assets/img/icon@2x.png">
                </div>
                <div class="main-proyecto_text">
                  <p>Desde <br>
                    150.000.000 millones de pesos</p>
                </div>
                <div class="mask"></div>

                <a href="#">
                  <img class="img-projects" src="<?php echo get_template_directory_uri();?>/assets/img/projects1.png">
                </a>
              </a>
            </div>
            <div class="main-projects__body">
              <div class="main-projects__logo">
                <img class="projects-logo" src="<?php echo get_template_directory_uri();?>/assets/img/logo-projects2.png">
              </div>
              <div class="main-projects__text">
                <p class="projects-title">
                  Almanza Llanogrande
                </p>
                <p class="projects-text">
                  Llanogrande, Antioquia
                </p>
              </div>
            </div>
          </div>
          -->
        </div>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="main-projects__content">
 <?php $args = array( 'post_type' => 'Proyectos'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

  <?php // proyectos ( value )
$proyectos_array = get_field( 'proyectos' );
if ( $proyectos_array ):
	foreach ( $proyectos_array as $proyectos_item ): if($proyectos_item == 'Construcción'): ?>
          <div class="main-projects__card">
         
            
            <div class="main-projects__img">
              <a href="<?php the_permalink(); ?>">
                <span class="line"></span>
                <span class="line line-bottom"></span>
                <div class="main-proyecto__icono">
                  <img class="proyecto-icono" src="<?php echo get_template_directory_uri();?>/assets/img/icon@2x.png">
                </div>
                <div class="main-proyecto_text">
                  <p>Desde <br>
                    <?php the_field('precio') ?></p>
                </div>
                <div class="mask"></div>
                <a href="<?php the_permalink(); ?>">
                  <img class="img-projects" src="<?php echo get_the_post_thumbnail_url(); ?>">
                </a>
                </a>
            </div>
       
          
            <div class="main-projects__body">
              <div class="main-projects__logo">
                <img class="projects-logo" src="<?php the_field('logo_de_ubicacion') ?>">
              </div>
              <div class="main-projects__text">
                <p class="projects-title">
                 <?php the_title(); ?>
                </p>
                <p class="projects-text">
                <?php the_field('ubicacion') ?>
                </p>
              </div>
            </div>
          </div>

      <?php
endif;
	endforeach;
endif;  endwhile; ?>


        </div>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="main-projects__content">

        <?php $args = array( 'post_type' => 'Proyectos'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
          <?php // proyectos ( value )
$proyectos_array = get_field( 'proyectos' );
if ( $proyectos_array ):
	foreach ( $proyectos_array as $proyectos_item ): if($proyectos_item == 'Entrega inmediata'): ?>
          <div class="main-projects__card">
         
            
            <div class="main-projects__img">
              <a href="<?php the_permalink(); ?>">
                <span class="line"></span>
                <span class="line line-bottom"></span>
                <div class="main-proyecto__icono">
                  <img class="proyecto-icono" src="<?php echo get_template_directory_uri();?>/assets/img/icon@2x.png">
                </div>
                <div class="main-proyecto_text">
                  <p>Desde <br>
                    <?php the_field('precio') ?></p>
                </div>
                <div class="mask"></div>
                <a href="<?php the_permalink(); ?>">
                  <img class="img-projects" src="<?php echo get_the_post_thumbnail_url(); ?>">
                </a>
                </a>
            </div>
       
          
            <div class="main-projects__body">
              <div class="main-projects__logo">
                <img class="projects-logo" src="<?php the_field('logo_de_ubicacion') ?>">
              </div>
              <div class="main-projects__text">
                <p class="projects-title">
                 <?php the_title(); ?>
                </p>
                <p class="projects-text">
                <?php the_field('ubicacion') ?>
                </p>
              </div>
            </div>
          </div>

      <?php
endif;
	endforeach;
endif;  endwhile; ?>


        
        </div>
      </div>
      <div class="tab-pane fade show active" id="pills-totals" role="tabpanel" aria-labelledby="pills-totals-tab">
        <div class="main-projects__content">

         <?php $args = array( 'post_type' => 'Proyectos'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="main-projects__card">
         
            
         <div class="main-projects__img">
           <a href="<?php the_permalink(); ?>">
             <span class="line"></span>
             <span class="line line-bottom"></span>
             <div class="main-proyecto__icono">
               <img class="proyecto-icono" src="<?php echo get_template_directory_uri();?>/assets/img/icon@2x.png">
             </div>
             <div class="main-proyecto_text">
               <p>Desde <br>
                 <?php the_field('precio') ?></p>
             </div>
             <div class="mask"></div>
             <a href="<?php the_permalink(); ?>">
               <img class="img-projects" src="<?php echo get_the_post_thumbnail_url(); ?>">
             </a>
             </a>
         </div>
    
       
         <div class="main-projects__body">
           <div class="main-projects__logo">
             <img class="projects-logo" src="<?php the_field('logo_de_ubicacion') ?>">
           </div>
           <div class="main-projects__text">
             <p class="projects-title">
              <?php the_title(); ?>
             </p>
             <p class="projects-text">
             <?php the_field('ubicacion') ?>
             </p>
           </div>
         </div>
        </div>
        <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>