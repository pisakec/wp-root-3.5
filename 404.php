<?php get_header(); ?>
<section id="content" role="main">
<article id="post-0" class="post not-found">
<header class="header">
<h1 class="entry-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
</header>
<section class="entry-content">
<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
</section>

<section class="content ">
		<div class="wrapper has-sidebar">
			<div class="badge-01">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="featured-image">
						<a href="<?php the_permalink()?>"><?php the_post_thumbnail('full', array('class' => 'news-img-lg full-width')); ?></a>
					</div>
					<div class="entry">
						<h2 class="header-m header-500"><a href="<?php the_permalink()?>" class=""><?php the_title(); ?></a> </h2>
						<p>
							<?php echo wp_trim_words( get_the_content(), 40, '...' ); ?> </p>
					</div>
					<a href="<?php the_permalink()?>" class="read-more btn"><i class="icon-eye"></i></a>
				</article>				
			   <?php endwhile; endif; ?>
			<?php wp_pagenavi(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>