<?php 
/* 
        Template Name: Contact page
*/

get_header(); 

////////////////// IF START
if (have_posts()) :
  while(have_posts()) :
    the_post();
////////////////// LOOP START
?>
<section class="contactcontainer">
  <div class="contactform">
    <h2><?php the_title();?></h2>
    <p><?php the_content(); ?></p>
  </div>
  <div class="imagecontainer">
    <?php the_post_thumbnail();?>
  </div>
</section>
<?php 
////////////////// LOOP SLUT
endwhile;
else : ?>
<p><?php esc_html_e('Inget innehåll hittades!');?></p>
<?php 
endif;
////////////////// IF SLUT
//hejhej
?>

<?php get_footer(); ?>

