<?php

get_header();
?>
<!--<h1>index</h1>-->
<main id="index">
	<section class="content">
		<div class="wrapper row-wrap with-sidebar">
			<?php /*?><div class="has-sidebar row-wrap"><?php */?>
            <div class="no-sidebar row-wrap">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('column-4'); ?>>
					<div class="featured-image">
						<a href="<?php the_permalink() ?>">
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<img data-src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif" class="lazy">
						</a>
					</div>
					<?php global $post; $categories = get_the_category($post->ID); $cat_link = get_category_link($categories[0]->cat_ID); echo '<a href="'.$cat_link.'"  class="cat-name">'.$categories[0]->cat_name.'</a>' ?>
					<h2 class="header"><a href="<?php the_permalink()?>" class=""><?php the_title(); ?></a></h2>
					<div class="entry">						
						<p>
							<?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> </p>
					</div>
					<a href="<?php the_permalink() ?>" rel="bookmark" class="read-more">Read More</a>
				</article>
				<?php endwhile; endif; ?>
			</div>
			<?php //get_sidebar(); ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
