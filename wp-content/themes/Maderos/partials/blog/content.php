<div class="main-blog__content main-blog__content--blog">
  <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 6); ?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="main-blog__card main-blog__card--medium">
      <a href="<?php the_permalink();?>">

        <div class="main-blog__img">
          <img class="img-blog" src="<?php echo get_the_post_thumbnail_url(); ?>">
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
            <a href="<?php the_permalink();?>" class="text-blog">
              <?php the_title(); ?>
            </a>
            <p class="main-blog__description">
            <?php echo excerpt(43); ?>
            </p>
            <a href="<?php the_permalink();?>" class="main-blog__link">leer más</a>
          </div>
        </div>
      </a>
    </div>
  <?php endwhile; ?>

    <!-- <div class="main-blog__card">
      <div class="main-blog__img">
        <img class="img-blog" src="<?php echo get_template_directory_uri();?>/assets/img/image_7.png">
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
              <p class="text-date">
                Construcción
              </p>
              <ul class="list-categoria">
                <li class="items-categoria">
                  Arquitectura
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="main-blog__text">
          <p class="text-blog">
            Blancos en creación arquitectónica
          </p>
          <p class="main-blog__description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.
          </p>
          <a href="" class="main-blog__link">leer más</a>
        </div>
      </div>
    </div> -->
</div>