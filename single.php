<?php get_header(); ?>
    <section class="singelcontent">
      <div class="imagecontainer">
      <?php 
      //////////////// IF START
      if(have_posts()) :
        while(have_posts()) :
          the_post();
          //////////////// LOOP START test
          ?>
           <?php the_post_thumbnail();?>
        </div>
           <div class="projectcontent">
      <div class="infobox">
      <?php $imgstar = get_field('star'); 
      //Hämtar stjärna från fält till informationsboxen?>
      <div>
        <img class="pinkstar" src="<?php echo $imgstar ['url'] ?>" alt="<?php echo $image ['alt'] ?>" alt="">
        <div>
          <h4>PROJECT</h4> 
          <h5><?php the_title();?></h5>
        </div>
      </div>
        <div>
          <img class="pinkstar" src="<?php echo $imgstar ['url'] ?>" alt="<?php echo $image ['alt'] ?>" alt="">
          <div>
            <h4>CATEGORY</h4>
            <?php 
            //Hämtar kategorier för varje inlägg.
            $categories = get_the_category(); 
            foreach($categories as $category) {
                $name = $category -> name;
                $category_link = get_category_link($category -> term_id);
                echo "<a href='$category_link'>".$name." </a>";
            }?>
          </div>
      </div>
      <div>
        <img class="pinkstar" src="<?php echo $imgstar ['url'] ?>" alt="<?php echo $image ['alt'] ?>" alt="">
        <div>
          <h4>YEAR</h4>
          <h5><?php $post_date = get_the_date('Y'); echo $post_date; 
          //Hämtar datum då inlägget publicerades?> </h5></div>
        </div>
      </div>
      <div class="projecttext">
      <h1 class="projectheading"><?php the_title();?></h1>
        <?php the_content();?>
    </div>
    </div>
    <div class="contentbox">
        <?php $image = get_field('bild'); ?>
        <img class="contentpic" src="<?php echo $image ['url'] ?>" alt="<?php echo $image ['alt'] ?>">
        <div class="contenttext">
          <h3 class="heading"><?php the_field('heading'); ?></h3>
        <p>
       <?php the_field('text'); ?>
        </p>
      </div>
      </div>
    <section class="singelbtn">
      <?php previous_post_link('%link', 'Previous'); 
       next_post_link('%link', 'Next'); 
       //Länkar fram och tillbaks mellan inlägg?>
    </section>
          <?php
          //////////////// LOOP SLUT
        endwhile;
        else : ?>
        <p><?php esc_html_e('Det finns inget innehåll!'); ?></p>
        <?php 
        endif;
        ///////////////// IF SLUT
        ?>
    </section>
    <?php get_footer(); ?>
