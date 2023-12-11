<?php
/**
 * Hero post
 * @package CBD
 */
?>
<section class="article-bg absolute top-0 left-0 w-full h-full z-0">
    <figure class="bg absolute top-0 left-0 w-full z-0">
        <div class="dark:hidden block sm:!h-auto h-screen">
            <img src="<?php echo get_template_directory_uri(); ?>/img/article-bg-light.png" alt="Article BG Light">
            <div class="absolute top-[40%] left-0 w-full h-full bg-gradient-to-b from-[rgb(0,0,50,0)] via-[#441F57] via-40% to-[#441F57] to-100%"></div>
        </div>
        <div class="dark:block hidden sm:!h-auto h-screen">
            <img src="<?php echo get_template_directory_uri(); ?>/img/article-bg-dark.png" alt="Article BG Dark">
            <div class="absolute top-[40%] left-0 w-full h-full bg-gradient-to-b from-[rgb(0,0,50,0)] via-[#000032] via-40% to-[#000032] to-100%"></div>
        </div>
    </figure>
</section>
<?php $posts_page = get_option('page_for_posts'); ?>
<section class="relative z-10 overflow-visible sm:!pt-[264px] pt-[50vh]" data-scroll-section>
    <div class="container max-w-[1780px] pl-4 pr-4 m-auto relative z-30">
        <div class="flex flex-wrap relative text-white">
            <div class="w-full max-w-[632px]">
                <div class="post-title">
                    <?php if($posts_page): ?>
                        <div class="mb-[20px] text-center sm:!text-left">
                            <a class="inline-flex items-center gap-[10px] fill-white text-[13px]/[1.2em] text-white font-body font-bold uppercase transition-all hover:text-[#F7971E] hover:fill-[#F7971E]" href="<?php echo get_the_permalink($posts_page); ?>">
                                <svg width="12" height="10" viewBox="0 0 12 10">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8412 0.429688L0 4.45683L11.8412 9.49254V0.429688Z"/>
                                </svg>
                                <span><?php _e('Back To Media', 'cbd'); ?></span>
                            </a>
                        </div>
                    <?php endif; ?>
                    <h1 class="font-wadik sm:!text-[64px]/[1] text-[48px]/[1] sm:!text-left text-center"><?php the_title(); ?></h1>
                </div>
                <?php if(has_excerpt()): ?>
                    <div class="subtitle sm:!font-wadik text-[18px]/[1.2em] mt-[20px] sm:!text-left text-center font-body">
                        <?php the_excerpt(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if(has_post_thumbnail()): ?>
            <div class="flex flex-wrap justify-center sm:!mt-[160px] mt-[50px]">
                <div class="w-full max-w-[1157px] h-auto relative">
                    <figure class="feature absolute top-0 left-0 w-full h-full pt-[4%] pb-[3%] pl-[1%] pr-[1%] z-10">
                        <?php the_post_thumbnail([1175, 660], ['class' => 'object-cover w-full h-full relative z-10']); ?>
                    </figure>
                    <div class="relative w-full h-auto z-20 pointer-events-none">
                        <img class="w-full h-auto block" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/image-frame.svg" alt="Image Frame">
                    </div>
                    <div class="absolute bottom-0 right-0 z-0 translate-x-1/2 translate-y-1/2 sm:!mb-[40px] sm:!mr-[6px] mb-[15px] mr-[25px]">
                        <img class="sm:!w-[239px] h-auto w-[78px]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/pink-stone.png" alt="Pink Stone">
                    </div>
                    <div class="absolute top-0 left-0 z-0 -translate-x-1/2 -translate-y-1/2 sm:!mt-[80px] sm:!ml-[15px] mt-[35px] ml-[35px]">
                        <img class="sm:!w-[244px] h-auto w-[129px]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/purple-stone.png" alt="Purple Stone">
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>