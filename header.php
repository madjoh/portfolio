<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <?php wp_head(); ?>
  </head>
  <body class="pattern" <?php body_class(); ?>>
    <header>
      <?php $titlePage = get_the_title(5);?>
      <a class="home" href="<?php echo site_url($titlePage); ?>">
        <?php
        //Skriver ut logotyp som jag laddat upp i WP
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( has_custom_logo() ) {
            echo '<img class="logo" src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '" >';
          } else {
          //Annars skrivs namnet ut på sidan
            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
          }
        ?>
      </a>
      <nav>
        <div class="hamburger"> 
            <span></span>
            <span></span>
            <span></span>
        </div>
        <?php wp_nav_menu(array(
          'theme_location' => 'mainmenu'
        ));?>
    </nav>
    </header>