<?php
/**
 * The main template file
 */
get_header(); ?>
<?php get_template_part('templates/blocks/posts/hero-posts'); ?>
<?php get_template_part('templates/blocks/posts/featured-post'); ?>
	<section class="article-grid s-padding z-10" data-scroll-section>
		<div class="container">
			<?php if(have_posts()): ?>
				<?php get_template_part('templates/blocks/posts/filter-posts'); ?>
				<div class="row justify-around mt-12 lg:mt-24">
					<?php while(have_posts()):the_post(); ?>
						<?php get_template_part('templates/blocks/posts/post'); ?>
					<?php endwhile; ?>
				</div>
				<?php get_template_part('templates/blocks/posts/pagination'); ?>
			<?php else: ?>
				<div class="title text-center mb-12 lg:mb-24 2xl:mb-32">
					<h5><?php _e('Posts not found', 'cbd'); ?></h5>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php get_template_part('templates/blocks/contact/contact'); ?>
<?php get_footer();
