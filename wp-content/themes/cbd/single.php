<?php
/**
 * The template for displaying all single posts
 * @package CBD
 */
get_header(); ?>
<?php get_template_part('templates/blocks/posts/hero-post'); ?>
<section class="article-content bg-gradient-to-b from-lilac-dark to-purple-darker">
    <div class="general-content s-padding">
        <div class="container">
            <div class="row justify-center">
                <div class="w-full lg:w-4/5 2xl:w-2/3">
                    <div class="content font-medium text-3xl leading-relaxed">
                        <?php while(have_posts()):the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('templates/blocks/posts/related-posts'); ?>
</section>
<?php get_template_part('templates/blocks/contact/contact'); ?>
<?php get_footer();