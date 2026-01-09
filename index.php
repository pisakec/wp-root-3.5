<?php

get_header();
?>

<main id="index">
    <section class="content grunge-background">
        <div class="wrapper row-wrap">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           <h2 class=""><a href="<?php the_permalink()?>" class=""> <?php the_title(); ?> </a></h2>
                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="featured-image"> <a href="<?php the_permalink(); ?>">
                        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
                        <img data-src="<?php echo esc_url( $thumb[0] ); ?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif" class="lazy" > </a> </div>
                    <?php endif; ?>
                   <?php $categories = get_the_category(); if ( !empty( $categories ) ) { $cat_link = get_category_link( $categories[ 0 ]->term_id ); echo '<a href="' . esc_url( $cat_link ) . '" class="cat-name">' . esc_html( $categories[ 0 ]->name ) . '</a>'; } ?>
                    <div class="entry">
                        <?php //the_content(); ?>
						<p><?php echo wp_trim_words( get_the_content(), 100, '...' ); ?></p>
						<a href="<?php the_permalink(); ?>" rel="bookmark" class="read-more">Read More</a>
                    </div>
                 
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
