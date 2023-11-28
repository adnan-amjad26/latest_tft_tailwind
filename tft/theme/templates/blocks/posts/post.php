<?php
/**
 * Post item
 * @package CBD
 */
?>
<div class="swiper-slide w-full pl-0 pr-0">
    <a href="<?php the_permalink(); ?>" class="link">
        <?php if(has_post_thumbnail()): ?>
            <figure class="relative sm:!mr-[131px] mr-0">
                <div class="absolute top-0 left-0 w-full h-full pl-[1%] pr-[1%] pt-[3.5%] pb-[3.5%]">
                    <?php the_post_thumbnail(array(576, 326), ['class' => 'block w-full h-full object-cover z-0', 'title' => get_the_title()]); ?>
                </div>
                <div class="relative w-full h-auto z-10">
                    <img class="w-full h-auto max-w-full" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/article-border.svg" alt="article-border">
                </div>
            </figure>
        <?php endif; ?>
        <div class="mt-[25px] relative flex items-center">
            <div class="w-full z-10">
                <div class="mb-[25px]">
                    <h6 class="font-wadik sm:!text-[26px]/[1.2em] !m-0 hover:text-[#F7971E] transition-colors text-[24px]/[1.2em]"><?php the_title(); ?></h6>
                </div>
                <div class="font-body text-[16px]/[1.2em] font-medium">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="min-w-[131px] relative sm:!flex items-center justify-center z-0 hidden">
                <img class="max-w-[26px] max-h-[96px] w-[50%] h-auto relative z-20" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch-new.svg" alt="torch">
                <div class="glow-light absolute w-[20px] pb-[20px] rounded-full bg-[#ff4202] top-[35%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-70 z-10 shadow-[0_0_3rem_2rem_#ff4202] animate-[flicker_9s_infinite_linear]"></div>
            </div>
        </div>
    </a>
</div>