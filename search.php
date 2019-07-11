<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header();
?>

<h1>index</h1>
<main class="index">
	<section class="content">
		<div class="wrapper">
			<?php
			global $query_string;
			$query_args = explode( "&", $query_string );
			$search_query = array();

			foreach ( $query_args as $key => $string ) {
				$query_split = explode( "=", $string );
				$search_query[ $query_split[ 0 ] ] = urldecode( $query_split[ 1 ] );
			} // foreach

			$the_query = new WP_Query( $search_query );
			if ( $the_query->have_posts() ):
				?>
			<!-- the loop -->


			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<article>
				<a href="<?php the_permalink(); ?>">
					<h2>
						<?php the_title(); ?>
					</h2>
					<?php if(get_option( 'thumbnail_size_w')> 100 && get_option('thumbnail_crop') == 1) { the_post_thumbnail('full'); }else{ the_post_thumbnail(array(100,100)); } ?>
				</a>
			</article>
			<?php endwhile; ?>
					<!-- end of the loop -->

		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p>
			<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
		</p>
		<?php endif; ?>
		</div>
		<?php //get_sidebar(); ?>
	</section>
</main>

		<?php get_footer(); ?>
