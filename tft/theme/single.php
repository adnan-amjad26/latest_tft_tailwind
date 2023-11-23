<?php
/**
 * The template for displaying all single posts
 * @package CBD
 */
get_header(); ?>
<?php get_template_part('templates/blocks/posts/hero-post'); ?>

	<section class="article-content dark:!bg-[#000032] !bg-[#441F57] sm:!pt-[200px] pt-[50px]">
		<div class="container max-w-[1044px] m-auto">
			<div class="w-full">
				<div class="content font-medium text-[18px]  leading-relaxed">
					<?php while(have_posts()):the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('templates/blocks/posts/related-posts'); ?>
<?php get_template_part('templates/blocks/contact/contact'); ?>
<?php get_footer();
