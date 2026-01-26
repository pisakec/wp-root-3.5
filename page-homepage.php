<?php
/*
Template Name: Homepage
*/
get_header();
?>
<!--<h1>Homepage</h1>-->
<main id="homepage" class="a">
    <section class="content">
        <div class="wrapper">
            <?php
            // Option 1: Using WP_Query for custom post query
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 10, // Number of posts to show (-1 for all posts)
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                // Add more parameters as needed:
                // 'category_name' => 'your-category-slug',
                // 'meta_key' => 'custom_field_key',
                // 'meta_value' => 'custom_field_value',
            );

            $custom_query = new WP_Query( $args );

            if ( $custom_query->have_posts() ): while ( $custom_query->have_posts() ): $custom_query->the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('full-width'); ?>>
                <h2><a href="<?php the_permalink()?>" class="">
                    <?php the_title(); ?>
                    </a></h2>
                <?php if ( has_post_thumbnail() ) : ?>
                <div class="featured-image"> <a href="<?php the_permalink() ?>">
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                    <img data-src="<?php echo $thumb['0'];?>" alt="<?php the_title(); ?>" aria-label="<?php the_title(); ?>" src="<?php echo get_template_directory_uri(); ?>/img/blank.gif"  class="lazy"> </a> </div>
                <?php endif; ?>
                <?php global $post; $categories = get_the_category($post->ID); $cat_link = get_category_link($categories[0]->cat_ID); echo '<a href="'.$cat_link.'"  class="cat-name">'.$categories[0]->cat_name.'</a>' ?>
                <div class="entry">
                    <?php //the_content(); ?>
                    
<p>
    <?php echo wp_trim_words( get_the_content(), 90, '...' ); ?> </p>
                    
                </div>
                <a href="<?php the_permalink() ?>" rel="bookmark" class="read-more">Read More</a> </article>
            <?php
            endwhile;
            wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>
</main>
<!--no div-->
<?php get_footer(); ?>
