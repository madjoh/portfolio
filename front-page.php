<?php get_header(); ?>
    <div class="container">
      <main>
        <?php $image = get_field('hero'); ?>
        <div class="illustration-container">
          <img class="illustration" src="<?php echo $image ['url'] ?>" alt="<?php echo $image ['alt'] ?>">
        </div>
        <div class="text">
            <?php the_field('mainheading'); 
              // wysiwyg-editor
            ?> 
            <?php the_field('subheading'); 
              // wysiwyg-editor
            ?>
            <div class="sidebar">
              <?php dynamic_sidebar('socialmediasection'); ?>
            </div>
        </div>
      </main>
      
      <?php  
      //hämtar in bakgrundsbild som är en våg
          $pattern = get_field('pattern');
          $patternUrl = $pattern['url'];
          if($pattern) : ?>
         <section class="latestprojects pattern" style="background-image: url(<?php echo $patternUrl;?>);">
          <?php 
          else : ?>
          <?php 
          endif;
      ?>
        <div>
          <div class="fill-and-center">
            <h2 class="heading"><?php the_field('headinglatest'); ?></h2>
          </div>
          <section class="postcards slider">
         
          <?php 
          //Hämtar ut de senaste 4 inläggen på front-page
           $args = array(
               'post_type' =>'post',
               'post_status' => 'publish',
               'posts_per_page' => 4,
               'order' => 'DESC',
               'orderby' => 'ID'
           );
           $the_query = new WP_Query($args);
           
           if($the_query -> have_posts()) :
            while($the_query -> have_posts()) :
                $the_query -> the_post();
                /////////////LOOP START
           ?>
          <a href ="<?php the_permalink();?>">
            <article class="card">
                  <?php the_post_thumbnail('medium_large');?>
                      <h4 class="cardname"><?php $post_date = get_the_date('d/m/Y'); echo $post_date; ?> <span class="pinktext"><?php the_title(); ?></span></h4>
            </article> 
          </a> 
           <?php
           /////////////LOOP SLUT
           endwhile;
           wp_reset_postdata();
        else : ?>
          <p><?php esc_html_e('Det finns inga inlägg!');?></p>
        <?php 
        endif;
        ?> 
      </section>
      <?php $titlePage = get_the_title(9);?>
        <div class="fill-and-center">
          <a href="<?php echo site_url($titlePage); ?>" class="pinkbtn">To portfolio</a>
        </div>
      </section>
      </div>
    </div>
  <?php get_footer(); ?>
