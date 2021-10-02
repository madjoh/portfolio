<?php 
/* 
        Template Name: Service page
*/

get_header(); 
////////////////// IF START
if (have_posts()) :
  while(have_posts()) :
    the_post();
////////////////// LOOP START test
?>
  <section class="service">
    <?php the_post_thumbnail();?>
        <h2 class="heading"><?php the_title();?></h2>
          <p><?php the_content();?></p>
          <?php $titlePage = get_the_title(11);?>
            <a href="<?php echo site_url($titlePage); ?>" class="pinkbtn">Contact me</a>
<?php 
////////////////// LOOP SLUT
endwhile;
else : ?>
  <p><?php esc_html_e('Inget innehåll hittades!');?></p>
<?php 
endif;
////////////////// IF SLUT
?>
  </section>
<?php get_footer(); ?>
 
