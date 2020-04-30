<div class="main-groupfeatured__sidebar">
  <div class="main-sidebar__category">
    <div class="main-sidebar__search">
      <?php if(is_active_sidebar('buscador')){
          dynamic_sidebar('buscador');
      } ?>
      <!-- <form action="/search.html" class="search-wrapper cf">
        <input class="input-search" type="text" placeholder="Buscar" required="">
        <button class="main-sidebar__btn" type="submit">
          <img src="< ?php echo get_template_directory_uri();?>/assets/img/Blog/icon.png" alt="">
        </button>
      </form> -->
    </div>
  </div>
  <div class="main-sidebar__category">
    <p class="main-sidebar__title">Categorías</p>
    <ul class="main-sidebar__ul">

      <?php if(is_active_sidebar('categorias')){
        dynamic_sidebar('categorias');
      } ?>
      <!--
       <li class="main-sidebar__li">
        <a class="main-sidebar__link" href="">
          <p>Apartamentos</p>
          <span>(3)</span>
        </a>
      </li>
      
      <li class="main-sidebar__li">
        <a class="main-sidebar__link" href="">
          <p>Lotes</p>
          <span>(3)</span>
        </a>
      </li>
      <li class="main-sidebar__li">
        <a class="main-sidebar__link" href="">
          <p>Comercial</p>
          <span>(3)</span>
        </a>
      </li> -->
    </ul>
  </div>
  <div class="main-sidebar__category">
    <p class="main-sidebar__title">Noticias populares</p>
    <ul class="main-sidebar__ul">
      <li>
      <?php if(is_active_sidebar('populares')){
        dynamic_sidebar('populares');
      } ?>
      </li>
      <!-- <li>
        <a href="detalle-blog.html" class="main-sidebar__grid">
          <div class="main-sidebar__gridimg">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/image_7.png" alt="">
          </div>
          <div class="main-sidebar__gridbox">
            <p class="main-sidebar__griddate">Julio 19 del 2020</p>
            <p class="main-sidebar__gridtitle">2020, Las tendencias más importantes en diseño</p>
          </div>
        </a>
      </li> -->
    </ul>
  </div>
  <div class="main-sidebar__category">
    <p class="main-sidebar__title">Síguenos</p>
    <ul class="main-sidebar__ul">
      <li>
        <a href="" target="_blank" class="mr-2">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Blog/fb_2.png" alt="">

        </a>
        <a href="" target="_blank" class="mr-2">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Blog/instagram_2.png" alt="">

        </a>
      </li>

    </ul>
  </div>
</div>