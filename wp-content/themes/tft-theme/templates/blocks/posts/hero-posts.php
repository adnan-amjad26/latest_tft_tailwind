<?php
/**
 * Hero posts
 * @package CBD
 */
?>
<?php $posts_page = get_option('page_for_posts'); ?>
<?php $title = get_field('title', $posts_page); ?>
<?php $text = get_field('text', $posts_page); ?>
<section class="title-bar bg-red title-news" data-scroll-section>
    <div class="container relative z-30">
        <div class="row relative">
            <div class="w-full lg:w-1/2 2xl:w-1/3 s-padding hero-col">
                <?php if($title): ?>
                    <div class="title">
                        <h1><?php echo $title; ?></h1>
                    </div>
                <?php endif; ?>
                <?php if($text): ?>
                    <div class="subtitle font-headers mt-12">
                        <?php echo $text; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <figure class="bg absolute top-0 left-0 w-full z-0">
        <div class="imgs-day">
            <div class="overlay">
                <img src="<?php echo get_template_directory_uri(); ?>/img/day/news-page-overlay.svg" alt="news-page-overlay">
            </div>
            <div class="tower">
                <img src="<?php echo get_template_directory_uri(); ?>/img/day/news-page-tower.svg" alt="news-page-tower">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/day/news-page-bg.svg" alt="news-page-bg">
            <div class="underlay">
                <img src="<?php echo get_template_directory_uri(); ?>/img/day/news-page-underlay.svg" alt="news-page-underlay">
            </div>
        </div>
        <div class="imgs-night">
            <div class="moon absolute w-52" data-scroll>
                <img src="<?php echo get_template_directory_uri(); ?>/img/moon.svg" alt="moon">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/news-page-stars.svg" alt="news-page-stars">
            <lottie-player src="<?php echo get_template_directory_uri(); ?>/animation/dragon.json" class="dragon" background="transparent" speed="0.6" loop autoplay></lottie-player>
            <img src="<?php echo get_template_directory_uri(); ?>/img/news-page-bg.svg" alt="news-page-bg">
            <div class="underlay"></div>
        </div>
    </figure>
</section>