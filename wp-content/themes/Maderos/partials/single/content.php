<div class="main-blog__content main-blog__content--blog main-blog__content--blog--single">
  <div class="main-blog__card main-blog__card--single">
    <div class="main-blog__img">
      <img class="img-blog" src="<?php echo get_the_post_thumbnail_url(); ?>">
    </div>
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
        <p class="text-blog">
          <?php the_title(); ?>
        </p>
        <p class="main-blog__description">
          <?php the_content(); ?>
        </p>
        <!-- <span class="main-blog__quotes">“</span> -->
        <!-- <p class="">
          <strong class="main-blog__cites">Type Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</strong>
        </p> -->


      </div>
    </div>
  </div>
  <!-- <div class="main-blog__img">
    <img class="img-blog" src="<?php echo get_template_directory_uri();?>/assets/img/image_6.png">
  </div>
  <p class="main-blog__description mt-4">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
    Aldus PageMaker including versions of Lorem Ipsum.
  </p>
  <p class="main-blog__oblique main-blog__description">
    It has survived not only five centuries, but also the leastrong into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
    of Lorem Ipsum.
  </p> -->
  <div class="main-blog__boxtags">

    <div class="main-blog__categoria">
      <div class="main-fecha__img">
        <img class="img-categoria" src="<?php echo get_template_directory_uri();?>/assets/img/Blog/tag-1.png">
      </div>
      <div class="main-categoria__text">
        <p class="text-date text-date--single">
          Tags
        </p>

      </div>
    </div>
    <div class="main-blog__categoria--tags">
    
      <?php $post_tags = get_the_tags();
        if ( $post_tags ) {
            foreach( $post_tags as $tag ) {
              ?>
              <p><?php echo $tag->name . ' '; } ?></p>
            <?php
        }?>
      
      <!-- <p>Bodegas</p>
      <p>Lotes</p>
      <p>aptos</p> -->
    </div>
  </div>
  <div class="main-blog__infoauthor">
    <div class="main-blog__infogrid">
      <div class="main-blog__infoimg">
        <div class="main-contactform__btnbox">
          <button class="btn_custom btn--medium btn--filled--black">
            Autor
          </button>
        </div>
        <div>
        <?php echo get_avatar(get_the_author_meta('ID')); ?>
        </div>          
      </div>
      <div class="main-blog__infotext">
        <div class="main-blog__infotext--top">
          <strong>
            <?php the_author();?>
          </strong>
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Más artículos de este autor</a>
        
        </div>
        <p class="main-blog__description main-blog__description--author">
          <?php echo substr( get_the_author_meta('user_description') , 0 , 300 ); ?>
        </p>
      </div>
    </div>
  </div>

  <div class="main-blog__comment">
    <div class="main-contactform__btnbox">
      <button class="btn_custom btn--medium btn--filled--black">
        Comentarios
      </button>
    </div>
  


    <!-- <div class="main-blog__infogrid mb-4">
      
      <div class="main-blog__infoimg">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/Blog/image_7.png" alt="">
      </div>
      <div class="main-blog__infotext">
        <div class="main-blog__infotext--top main-blog__infotext--column">
          <strong>
            Jonathan Arias
          </strong>
          <p class="main-sidebar__griddate mt-3 mb-3">Julio 19 del 2020</p>
        </div>
        <p class="main-blog__description">Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
          unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <a href="" class="main-blog__link main-blog__link--black">Responder</a>
      </div>


    </div>
    <div class="main-blog__infogrid mb-4">
      <div class="main-blog__infoimg">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/Blog/image_7.png" alt="">
      </div>
      <div class="main-blog__infotext">
        <div class="main-blog__infotext--top main-blog__infotext--column">
          <strong>
            Andrea Morales
          </strong>
          <p class="main-sidebar__griddate mt-3 mb-3">Julio 19 del 2020</p>
        </div>
        <p class="main-blog__description">Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
          unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <a href="" class="main-blog__link main-blog__link--black">Responder</a>
      </div>


    </div> -->
    <div class="main-contactform__btnbox">
      <!-- <a href="#comments" class="btn_custom btn--medium btn--filled--black">
        Comenta aquí
      </a> -->
    </div>
    <div id="comments">
      <?php comments_template();?>
    </div>
    <!-- <p class="main-blog__description">Tu correo electrónico no será publicado*</p>
    <form action="">
      <div class="form-group">
        <textarea class="main-blog__forms main-blog__textarea" placeholder="Tu comentario" rows="8"></textarea>
      </div>
      <div class="form-group form-group__grid">
        <input class="main-blog__forms form-control" id="formGroupExampleInput" placeholder="Nombre"
          type="text">
        <input class="main-blog__forms form-control" id="formGroupExampleInput" placeholder="Email" type="text">
        <div class="">
          <button class="btn_custom btn--medium btn--filled--black">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/Blog/send.png" alt="">
          </button>
        </div>
      </div>
      <div class="custom-control custom-checkbox my-1 mr-sm-2">
        <input class="custom-control-input" id="customControlInline" type="checkbox">
        <label class="custom-control-label main-blog__description mt-0" for="customControlInline">
          Guardar mi nombre, email en este sitio para la próxima vez que comente.
        </label>

      </div>
    </form> -->
  </div>

</div>
