 
     <?php get_header(); ?>
    <section class="portfolio">
    <?php $our_title = get_the_title(get_option('page_for_posts',true));
    ?>
     <h2 class="heading"><?php echo $our_title; ?></h2>
      <nav class="portfoliomenu">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'categorymenu'
      ));
      ?>
      </nav>
      <div class="pf">
       <?php 
          //////////////// IF START
          if(have_posts()) :
            while(have_posts()) :
              the_post(); 
              //////////////// LOOP START
              ?>
             <a href ="<?php the_permalink();?>">
              <article>
                <?php the_post_thumbnail();?>
              </article>
             </a> 
          <?php 
          //////////////// LOOP SLUT
            endwhile;
            else : ?>
            <p><?php esc_html_e('Det finns inga inlägg!');?></p>
            <?php
            endif;
            //////////////// IF SLUT
            ?>
            </div>
    </section>

    <?php get_footer(); ?>
