<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="featured-image"> <a href="<?php the_permalink() ?>">
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <img data-src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif"  class="lazy"> </a> </div>
  <div class="entry">
    <h2 class="header-m header-500">
      <?php the_title(); ?>
    </h2>
    <?php the_content(); ?>
  </div>
</article>
<?php endwhile; endif; ?>
