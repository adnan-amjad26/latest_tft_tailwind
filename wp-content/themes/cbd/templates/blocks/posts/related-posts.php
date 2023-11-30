<?php
/**
 * Related posts
 * @package CBD
 */
?>
<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 2,
        'category__in' => wp_get_post_categories(get_the_ID()),
        'post__not_in' => array(get_the_ID())
    );
    $wp_query = new WP_Query($args);
?>
<?php if($wp_query->have_posts()): ?>
    <div class="article-grid s-padding" data-scroll-section>
        <div class="container">
            <div class="row">
                <div class="w-full text-center">
                    <div class="filter font-headers">
                        <p><?php _e('Related Media', 'cbd'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row justify-around mt-12 lg:mt-24">
                <?php while($wp_query->have_posts()):$wp_query->the_post(); ?>
                    <?php get_template_part('templates/blocks/posts/post'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>