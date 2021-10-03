<?php get_header(); 
////////////////// IF START
if (have_posts()) :
  while(have_posts()) :
    the_post();
////////////////// LOOP START
?>
<div class="aboutcontainer">
      <main>
        <div class="illustration" >
          <?php the_post_thumbnail();?>
        </div>
        <div class="abouttext">
        <div class="text">
          <div><h2 class="heading"><?php the_title();?></h2></div>
         <p><?php the_content(); ?></p>
        </div> 
        <div class="pfbtn">
        <?php $titlePage = get_the_title(9);?>
              <a href="<?php echo site_url($titlePage); ?>" class="pinkbtn">To portfolio</a>
            <?php $titlePage = get_the_title(11);?>
              <a href="<?php echo site_url($titlePage); ?>" class="blackbtn">Contact me</a>
        </div>
      </div>
      </main>
     
      
      <?php $skillsgroup = get_field('skills'); 
       if($skillsgroup) : 
       //Hämtar värden på skillsbar från WP där min är 0 och max är 11?>
        <div class="skills">
        <div class="skillsection"><h2 class="heading"><?php the_field('skillsheading'); ?></h2>
      <p><?php the_field('skillstext'); ?></p></div>
        <label for="gd"><?php echo $skillsgroup['headingskills_1'];?></label>
        <input type="range" value="<?php echo $skillsgroup['skillsbar_1'];?>" min="0" max="11" disabled />
        <label for="hcj"><?php echo $skillsgroup['headingskills_2'];?></label>
        <input type="range" value="<?php echo $skillsgroup['skillsbar_2'];?>" min="0" max="11" disabled />
        <label for="wp"><?php echo $skillsgroup['headingskills_3'];?></label>
        <input type="range" value="<?php echo $skillsgroup['skillsbar_3'];?>" min="0" max="11" disabled />
        <label for="photo"><?php echo $skillsgroup['headingskills_4'];?></label>
        <input type="range" value="<?php echo $skillsgroup['skillsbar_4'];?>" min="0" max="11" disabled />
      </div>
      <?php endif;
      ?>
    </div>
    </div>
<?php 
////////////////// LOOP SLUT
endwhile;
else : ?>
<p><?php esc_html_e('Inget innehåll hittades!');?></p>
<?php 
endif;
////////////////// IF SLUT
?>
<?php get_footer(); ?>
