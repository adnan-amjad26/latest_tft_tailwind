<?php
/**
 * Hero post
 * @package CBD
 */
?>
<?php $posts_page = get_option('page_for_posts'); ?>
<section class="title-bar title-post" data-scroll-section>
    <div class="container relative z-30">
        <div class="row relative">
            <div class="w-full lg:w-3/5 s-padding hero-col">
                <div class="title">
                    <?php if($posts_page): ?>
                        <div class="breadcrumb text-lg font-bold uppercase mb-8">
                            <a href="<?php echo get_the_permalink($posts_page); ?>">
                                <svg decoding="async"><use xlink:href="#back"></use></svg>
                                <span><?php _e('Back To Media', 'cbd'); ?></span>
                            </a>
                        </div>
                    <?php endif; ?>
                    <h1 class="h3"><?php the_title(); ?></h1>
                </div>
                <?php if(has_excerpt()): ?>
                    <div class="subtitle font-medium text-3xl leading-relaxed mt-12">
                        <?php the_excerpt(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if(has_post_thumbnail()): ?>
            <div class="row justify-center">
                <div class="w-full lg:w-2/3">
                    <figure class="feature">
                        <?php the_post_thumbnail(); ?>
                        <div class="background absolute top-1/2 left-1/2 z-0">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/top-article-border.png" alt="top-article-border">
                        </div>
                    </figure>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <figure class="bg absolute top-0 left-0 w-full z-0 opacity-80">
        <div class="imgs-day">
            <img src="<?php echo get_template_directory_uri(); ?>/img/day/single-post-bg.svg" alt="single-post-bg">
        </div>
        <div class="imgs-night">
            <img src="<?php echo get_template_directory_uri(); ?>/img/single-post-bg.jpg" alt="single-post-bg">
        </div>
    </figure>
</section>