<?php

$args = array(
	'p' => get_option('page_for_posts'),
	'post_type' => 'any',
);
get_header();

$posts_page = new WP_Query($args);
if ($posts_page->have_posts()) {
	while ($posts_page->have_posts()) {
		$posts_page->the_post();
		$fields = get_fields();
?>
		<input type="hidden" name="blog_paging_val" id="blog_paging_val" value="<?= get_option('posts_per_page') ?>">
		<?php
		get_template_part('templates/blocks/blogpage/blogpage');
		get_template_part('templates/blocks/contact/contact-banner'); ?>
<?php get_footer();
	}
}
?>
