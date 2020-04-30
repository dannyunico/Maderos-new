<section class="main-blog container">
  <div class="main-nivel__small">
    <small class="nivel-small">
      LO ÚLTIMO
    </small>
  </div>
  <div class="main-nivel__title ">
    <h1 class="title-nivel2--line-center title-nivel2--line">
      <strong> NUESTRO</strong> BLOG
    </h1>
  </div>
  <div class="main-blog__content">
    <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 2); ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      
      <div class="main-blog__card">
      <a href="<?php the_permalink();?>">
    
        <div class="main-blog__img">
          <a href="">
            <img class="img-blog" src="<?php echo get_the_post_thumbnail_url(); ?>">
          </a>
        </div>
      </a>
      <a href="<?php the_permalink();?>">
    
        <div class="main-blog__body">
          <div class="main-title__blog">
            <div class="main-blog__fecha">
              <div class="main-fecha__img">
                <img class="img-fecha" src="<?php echo get_template_directory_uri();?>/assets/img/calendar.png">
              </div>
              <div class="main-fecha__text">
                <p class="text-date">
                  <?php the_time(get_option('date_format')); ?>
                </p>
              </div>
            </div>
            <div class="main-blog__categoria">
              <div class="main-fecha__img">
                <img class="img-categoria" src="<?php echo get_template_directory_uri();?>/assets/img/tag.png">
              </div>
              <div class="main-categoria__text">
          
                <ul class="list-categoria">
                <?php $post_tags = get_the_tags();
                  if ( $post_tags ) {
                      foreach( $post_tags as $tag ) {
                        ?>
                        <li class="items-categoria"><?php echo $tag->name; ?></li>
                      <?php
                      }
                  }?>
                 
                </ul>
              </div>
            </div>
          </div>
          <div class="main-blog__text">
            <a href="<?php the_permalink(); ?>" class="text-blog">
              <?php the_title(); ?>
            </a>
          </div>
        </div>
      </a>
      </div>
    <?php endwhile; ?>

    <!-- <div class="main-blog__card">
      <div class="main-blog__img">
        <a href="">
          <img class="img-blog" src="<?php echo get_template_directory_uri();?>/assets/img/image_7.png">
        </a>
      </div>
      <div class="main-blog__body">
        <div class="main-title__blog">
          <div class="main-blog__fecha">
            <div class="main-fecha__img">
              <img class="img-fecha" src="<?php echo get_template_directory_uri();?>/assets/img/calendar.png">
            </div>
            <div class="main-fecha__text">
              <p class="text-date">
                Julio 19 2019
              </p>
            </div>
          </div>
          <div class="main-blog__categoria">
            <div class="main-fecha__img">
              <img class="img-categoria" src="<?php echo get_template_directory_uri();?>/assets/img/tag.png">
            </div>
            <div class="main-categoria__text">
            
            <ul class="list-categoria">
              <li class="items-categoria">Construcción</li>
              <li class="items-categoria">
                Arquitectura
              </li>
            </ul>
            </div>
          </div>
        </div>
        <div class="main-blog__text">
          <a href="" class="text-blog">
            Blancos en creación arquitectónica
          </a>
        </div>
      </div>
    </div> -->
  </div>
</section>