<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="author" content="">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content=" ">
	<!-- meta character set -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content='#212121' name='theme-color'>
	<meta content='website' property='og:type'>
	<meta content='Nivel' property='og:title'>
	<meta content=''>
  <meta content='' property='og:url'>
  
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/offcanvas.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/contacto.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet"> -->
  <?php wp_head(); ?>
</head>

<body>
  <header id="home">
    <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">

      <div class="container">
        <div class="main-brand">
          <a class="navbar-brand" href="<?php echo bloginfo('url').'/';?>">
            <img class="img-logo" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png">
          </a>
          <button class="navbar-toggler p-2  hamburger hamburger--elastic ml-autos" data-toggle="offcanvas"
            type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>

          </button>
        </div>

        <div class="navbar-collapse offcanvas-collapse">ss
          <div class="navbar-nav mr-autos">
            <a href="<?php echo bloginfo('url').'/';?>" class="main-logo__collapse">
              <img class="logo-collapse" src="<?php echo get_template_directory_uri();?>/assets/img/logo_4.png">
            </a>
            <li class="nav-item">
              <a class="nav-link nav-link__mobile active" href="<?php echo bloginfo('url').'/';?>">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link__mobile active" href="<?php echo bloginfo('url').'/proyecto';?>">Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url').'/blog';?>">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url').'/nosotros';?>">La empresa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url').'/servicios';?>">Servicio al cliente</a>
            </li>

            <!--<li class="nav-item">
              <a class="nav-link nav-link__mobile" href="<?php echo bloginfo('url').'/inversion';?>">invierte desde el
                exterior</a>
            </li>-->
            <li class="nav-item nav-item--last">
              <a class="nav-link " href="<?php echo bloginfo('url').'/contacto';?>">contacto</a>
            </li>
            <li class="mt-4 pb-4">
              <a href="https://www.facebook.com/nivelpropiedadraiz" target="_blank" class="mr-2">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/fb_2.png" alt="">

              </a>
              <a href="https://www.instagram.com/nivelpropiedadraiz/" target="_blank" class="mr-2">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/instagram.png" alt="">

              </a>
            </li>
          </div>
        </div>
      </div>

    </nav>
	</header>