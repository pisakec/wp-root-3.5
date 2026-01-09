<?php get_header(); ?>
<!--<h1>Single</h1>-->
<main id="single">
	<section class="content">
		<div class="wrapper row-wrap">           
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('full-width'); ?>>
					<h2><a href="<?php the_permalink()?>" class=""><?php the_title(); ?></a></h2>
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="featured-image">
						<a href="<?php the_permalink() ?>">
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<img data-src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif"  class="lazy">
						</a>
					</div>
					<?php endif; ?>
					<?php global $post; $categories = get_the_category($post->ID); $cat_link = get_category_link($categories[0]->cat_ID); echo '<a href="'.$cat_link.'"  class="cat-name">'.$categories[0]->cat_name.'</a>' ?>
					
					<div class="entry">	
						<?php the_content(); ?>
						<?php /*?><p>
							<?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> </p><?php */?>
					</div>
					<?php /*?><a href="<?php the_permalink() ?>" rel="bookmark" class="read-more">Read More</a><?php */?>
				</article>
				<?php endwhile; endif; ?>
		</div>
	</section>
</main>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
