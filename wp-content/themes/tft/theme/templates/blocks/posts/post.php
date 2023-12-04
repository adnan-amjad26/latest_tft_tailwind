<?php
/**
 * Post item
 * @package CBD
 */
?>
<div class="w-full lg:w-2/5 p-6 lg:p-12 mb-16 lg:mb-24">
    <a href="<?php the_permalink(); ?>" class="single">
        <?php if(has_post_thumbnail()): ?>
            <figure>
                <span><?php _e('Read', 'cbd'); ?></span>
                <?php the_post_thumbnail(); ?>
                <div class="background absolute top-1/2 left-1/2 z-0">
                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/article-border.svg" alt="article-border">
                </div>
            </figure>
        <?php endif; ?>
        <div class="text mt-12 lg:mt-16 relative">
            <div class="torch absolute right-0 z-0">
                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch.svg" alt="torch">
                <div class="glow"></div>
            </div>
            <div class="content w-5/6 z-10">
                <div class="title mb-4">
                    <h6><?php the_title(); ?></h6>
                </div>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </a>
</div>