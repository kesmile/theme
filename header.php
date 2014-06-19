<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo get_bloginfo('name'); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/foundation.css" />
    
     <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/vendor/modernizr.js"></script>
    <?php wp_head(); ?>
    <style>
      @font-face {
          font-family: "foundation-icons";
          src: url("<?php bloginfo( 'stylesheet_directory' ); ?>/css/fonts/foundation-icons.eot");
          src: url("<?php bloginfo( 'stylesheet_directory' ); ?>/css/fonts/foundation-icons.eot?#iefix") format("embedded-opentype"),
               url("<?php bloginfo( 'stylesheet_directory' ); ?>/css/fonts/foundation-icons.woff") format("woff"),
               url("<?php bloginfo( 'stylesheet_directory' ); ?>/css/fonts/foundation-icons.ttf") format("truetype"),
               url("<?php bloginfo( 'stylesheet_directory' ); ?>/css/fonts/foundation-icons.svg#fontcustom") format("svg");
          font-weight: normal;
          font-style: normal;
        }
    </style>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/foundation-icons.css" />
  </head>

<body <?php body_class(); ?>>
      <header id="menu-head" class="">
      <div class="row">
	<div class="large-4 columns">
	  <h1>Blog <small>Description</small></h1>
	</div>
	<div class="large-8 columns" >
	  <nav id="menu">
	    <ul>
	      <li><a id="link" href="#footer">Cursos</a></li>
	      <li><a href="#">Manuales</a></li>
	      <li><a href="#">Proyectos</a></li>
	      <li><a href="#">Contacto</a></li>
	    </ul>
	  </nav>
	</div>
      </div>
    </header>