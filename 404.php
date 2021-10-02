<?php 
/* 
        Template Name: 404 Content
*/

get_header(); 

$link = get_field('link',167);
$img = get_field('bild404',167);
$heading = get_field('heading',167);
$text = get_field('text',167);
?>
    <section class="error">
    <?php if(isset($img['url'])) : ?>
        <div class="imagecontainer">
          <img src="<?php echo $img ['url'] ?>" alt="<?php echo $image ['alt'] ?>">
        </div>
        <?php endif; ?>
        <div class="errortext">
          <?php if(isset($heading)) : ?>
            <h1><?php echo $heading; ?></h1>
          <?php endif; ?>
          <?php if(isset($text)) : ?>
            <h2><?php echo $text; ?></h2>
          <?php endif; ?>
          <?php if(isset($link['url']) && isset($link['title'])) : ?>
            <a href="<?php echo $link ['url'];?>" class="pinkbtn"><?php echo $link['title'];?></a>
          <?php endif; ?>
      </div>
    </section>
    <?php get_footer(); ?>