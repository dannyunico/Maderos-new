<div class="main-blog__content main-blog__content--blog">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="main-blog__card main-blog__card--small">
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
            <?php echo excerpt(30); ?>
            </p>
            <a href="<?php the_permalink();?>" class="main-blog__link">leer más</a>
          </div>
        </div>
      </a>
    </div>
  <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

</div>