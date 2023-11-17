<?php
/**
 * The template for displaying the footer
 * @package CBD
 */
?>
<?php 
	$menus = get_nav_menu_locations();
	$menu_1 = wp_get_nav_menu_object($menus['footer-1']);
	$menu_2 = wp_get_nav_menu_object($menus['footer-2']);
	$menu_3 = wp_get_nav_menu_object($menus['footer-3']);
	$footerOptions = get_fields('option');
?>
</main>
<footer class="bg-purple" data-scroll-section>
	<div class="container">
		<div class="top row justify-center py-24">
			<div class="w-full lg:w-5/6 lg:px-12">
				<div class="flex flex-col lg:flex-row gap-12 2xl:gap-24">
					<?php if ($footerOptions['logo_2']): ?>
						<div class="logo row justify-center">
							<a class="w-80" href="<?php echo home_url(); ?>">
								<img decoding="async" loading="lazy" src="<?php echo $footerOptions['logo_2']['url']; ?>"
									 alt="<?php echo $footerOptions['logo_2']['title']; ?>">
							</a>
						</div>
					<?php endif; ?>
					<?php if ($menu_1): ?>
						<div class="lg:w-1/4">
							<h3 class="menu-title mb-8"><?php echo $menu_1->name; ?></h3>
							<?php wp_nav_menu(array(
								'theme_location' => 'footer-1',
								'menu_class' => 'menu font-headers text-lg',
								'container' => false,
							)); ?>
						</div>
					<?php endif; ?>
					<?php if ($menu_2): ?>
						<div class="lg:w-1/4">
							<h3 class="menu-title mb-8"><?php echo $menu_2->name; ?></h3>
							<?php wp_nav_menu(array(
								'theme_location' => 'footer-2',
								'menu_class' => 'menu font-headers text-lg',
								'container' => false,
							)); ?>
						</div>
					<?php endif; ?>
					<?php if ($menu_3): ?>
						<div class="lg:w-1/4">
							<h3 class="menu-title mb-8"><?php echo $menu_3->name; ?></h3>
							<?php wp_nav_menu(array(
								'theme_location' => 'footer-3',
								'menu_class' => 'menu font-headers text-lg',
								'container' => false,
							)); ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if ($footerOptions['trustpilot'] || $footerOptions['newsletter']['text'] || $footerOptions['newsletter']['form']): ?>
					<div class="row mt-12 lg:mt-16 gap-12">
						<?php if ($footerOptions['trustpilot']): ?>
							<div class="tp inline-block w-full lg:w-auto">
								<?php echo $footerOptions['trustpilot']; ?>
							</div>
						<?php endif; ?>
						<?php if ($footerOptions['newsletter']['text'] || $footerOptions['newsletter']['form']): ?>
							<div class="w-full flex-1 font-headers row items-center justify-between lg:px-12">
								<?php if ($footerOptions['newsletter']['text']): ?>
									<div class="w-full lg:flex-1 flex justify-center">
										<?php echo $footerOptions['newsletter']['text']; ?>
									</div>
								<?php endif; ?>
								<?php if ($footerOptions['newsletter']['form']): ?>
									<div class="w-full lg:w-2/5 mt-6 lg:mt-0">
										<?php echo do_shortcode($footerOptions['newsletter']['form']); ?>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if ($footerOptions['description'] || $footerOptions['footer_link']): ?>
					<div class="row mt-12 lg:mt-16 items-center justify-between footer-bottom">
						<div class="w-full lg:w-2/3">
							<?php if ($footerOptions['description']): ?>
								<div class="content text-lg"><?php echo $footerOptions['description']; ?></div>
							<?php endif; ?>
						</div>
						<div class="w-full lg:w-auto mt-12 lg:mt-0">
							<?php if ($footerOptions['footer_link']): ?>
								<div class="button">
									<div class="disclaimer-toggle btn btn-simple cursor-pointer">
										<span><?php echo html_entity_decode($footerOptions['footer_link']['title']); ?></span>
										<img decoding="async" loading="lazy"
											 src="<?php echo get_template_directory_uri(); ?>/img/btn-simple.svg"
											 alt="btn-simple">
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php if ($footerOptions['copyright'] || $footerOptions['powered']): ?>
		<div class="bottom bg-purple-dark py-8">
			<div class="container">
				<div class="row justify-between font-headers">
					<?php if ($footerOptions['copyright']): ?>
						<div class="w-auto">
							<p><?php echo '© ' . date('Y') . ' ' . $footerOptions['copyright']; ?></p>
						</div>
					<?php endif; ?>
					<?php if ($footerOptions['powered']): ?>
						<div class="w-auto">
							<p>
								<a href="<?php echo $footerOptions['powered']['url']; ?>"<?php if ($footerOptions['powered']['target']) echo ' target="' . $footerOptions['powered']['target'] . '"'; ?>
								   rel="noopener noreferrer"><?php echo $footerOptions['powered']['title']; ?></a></p>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</footer>
</div>
<?php get_template_part('templates/blocks/mobile/bar'); ?>
<?php get_template_part('templates/blocks/modal/disclaimer'); ?>
<?php /* We need to output our SVG symbols into the footer so they can be used on the site - they are contained in the file referenced */ ?>
<?php get_template_part('templates/blocks/svgs/svgs'); ?>
<script type="module" src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"></script>
<?php wp_footer(); ?>
</body>
</html>
