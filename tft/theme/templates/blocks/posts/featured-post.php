<?php
/**
 * Featured post
 * @package CBD
 */
?>
<?php $posts_page = get_option('page_for_posts'); ?>
<?php $featured_post = get_field('featured_post', $posts_page); ?>
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php
    if($featured_post) {
        $wp_query->set('post__not_in', array($featured_post)); 
        $wp_query->query($wp_query->query_vars);
    }
?>
<?php if($featured_post && $paged == 1): ?>
    <section class="top-article s-padding" data-scroll-section>
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-2/3">
                    <div class="title text-center mb-12 lg:mb-24 2xl:mb-32">
                        <h5><?php _e('Featured Media', 'cbd'); ?></h5>
                    </div>
                    <article>
                        <a href="<?php echo get_the_permalink($featured_post); ?>">
                            <figure data-scroll>
                                <?php if(has_post_thumbnail($featured_post)): ?>
                                    <?php echo get_the_post_thumbnail($featured_post); ?>
                                <?php else: ?>
                                    <span class="placeholder"></span>
                                <?php endif; ?>
                                <div class="background absolute top-1/2 left-1/2 z-0">
                                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/top-article-border.png" alt="top-article-border">
                                </div>
                                <figcaption class="absolute bottom-0 left-0 w-full lg:w-3/4 p-12 z-20">
                                    <div class="title mb-4">
                                        <h6><?php echo get_the_title($featured_post); ?></h6>
                                    </div>
                                    <?php echo get_the_excerpt($featured_post); ?>
                                </figcaption>
                            </figure>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>