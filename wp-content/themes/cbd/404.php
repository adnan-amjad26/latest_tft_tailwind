<?php
/**
 * The template for displaying 404 pages (not found)
 * @package CBD
 */
get_header(); ?>
<section class="title-bar title-404 bg-green-light" data-scroll-section>
    <div class="container relative z-30">
        <div class="row relative">
            <div class="w-full text-center s-padding hero-col">
                <div class="icon mb-12 w-28 mx-auto">
                    <svg decoding="async"><use xlink:href="#sword"></use></svg>
                </div>
                <div class="title">
                    <h2><?php _e('Good Heavens! Wrong page.', 'cbd'); ?></h2>
                </div>
                <div class="subtitle mt-12">
                    <h4><?php _e('404 looks like you\'re lost!', 'cbd'); ?></h4>
                </div>
                <div class="buttons row justify-center gap-8 sm:gap-16 lg:gap-24 mt-12 lg:mt-16">
                    <a href="<?php echo home_url(); ?>" class="btn btn-blue">
                        <span><?php _e('Have you tried home?', 'cbd'); ?></span>
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <figure class="bg absolute top-0 left-0 w-full z-0">
        <div class="imgs-day">
            <img src="<?php echo get_template_directory_uri(); ?>/img/day/hero-bg.jpg" alt="hero-bg">
        </div>
        <div class="imgs-night">
            <img src="<?php echo get_template_directory_uri(); ?>/img/day/contact-bg.jpg" alt="contact-bg">
        </div>
        <lottie-player class="dragon" src="<?php echo get_template_directory_uri(); ?>/animation/dragon.json" background="transparent" speed="0.6" loop autoplay></lottie-player>
        <lottie-player class="knight" src="<?php echo get_template_directory_uri(); ?>/animation/knight-2.json" background="transparent" speed="1" loop autoplay></lottie-player>
    </figure>
</section>
<?php get_footer();