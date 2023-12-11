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
        'posts_per_page' => 8,
        'category__in' => wp_get_post_categories(get_the_ID()),
        'post__not_in' => array(get_the_ID())
    );
    $wp_query = new WP_Query($args);
?>
<?php if($wp_query->have_posts()): ?>
    <section class="article-grid sm:!pt-[200px] sm:!pb-[200px] dark:bg-[#000032] bg-[#441F57] pt-[50px] pb-[100px]" data-scroll-section>
        <div class="container max-w-[1530px] pl-[16px] pr-[16px] m-auto">
            <div class="releatd-title text-center mb-[50px]">
                <img class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/star2.png" alt="Star" />
                <h2 class="mb-0 mt-[15px] font-wadik text-[26px]/[1.2em]"><?php _e('Related Media', 'cbd'); ?></h2>
            </div>
            <div class="swiper related-posts">
                <div class="swiper-wrapper">
                    <?php while($wp_query->have_posts()):$wp_query->the_post(); ?>
                        <?php get_template_part('templates/blocks/posts/post'); ?>
                    <?php endwhile; ?>
                </div>
                <div class="pagination flex items-center justify-center sm:!mt-[50px] mt-[25px]">
                    <div class="swiper-button-prev !w-[16px] !h-[22px] !relative !left-0 !right-0 !top-0 !bottom-0 after:hidden !mt-0"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.png" alt="<" /></div>
                    <div class="swiper-pagination flex items-center justify-center ml-[20px] mr-[20px] !relative !left-0 !right-0 !top-0 !bottom-0 font-wadik text-[10px]/[1.2em] !w-auto text-bold"></div>
                    <div class="swiper-button-next !w-[16px] !h-[22px] !relative !left-0 !right-0 !top-0 !bottom-0 after:hidden !mt-0"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.png" alt=">" /></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_query(); ?>