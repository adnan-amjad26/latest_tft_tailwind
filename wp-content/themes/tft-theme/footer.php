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
<footer class="bg-gradient-to-t from-[#3F0C39] to-[#1e0b22]" data-scroll-section>
	<div class="max-w-[1389px] w-full mx-auto">
		<div class="flex justify-center py-24">
			<div class="w-full">
				<div class="flex flex-wrap mb-[30px]">
					<?php if ($footerOptions['logo_2']): ?>
						<div class="logo w-full flex justify-center mb-[30px]">
							<a class="w-full max-w-[214px]" href="<?php echo home_url(); ?>">
								<img decoding="async" loading="lazy" src="<?php echo $logo['url']; ?>"
									 alt="<?php echo $footerOptions['logo_2']['title']; ?>">
							</a>
						</div>
					<?php endif; ?>
					<!-- <?php if ($menu_1): ?>
						<div class="w-full">
							<h3 class="menu-title mb-8"><?php echo $menu_1->name; ?></h3>
							<?php wp_nav_menu(array(
								'theme_location' => 'footer-1',
								'menu_class' => 'menu font-headers text-lg',
								'container' => false,
							)); ?>
						</div>
					<?php endif; ?> -->
					<?php if ($menu_2): ?>
						<div class="w-full">
							<?php wp_nav_menu(array(
								'theme_location' => 'footer-2',
								'menu_class' => 'menu flex justify-center gap-[47px] font-headers text-[14px]',
								'container' => false,
							)); ?>
						</div>
					<?php endif; ?>
					<!-- <?php if ($menu_3): ?>
						<div class="lg:w-1/4">
							<h3 class="menu-title mb-8"><?php echo $menu_3->name; ?></h3>
							<?php wp_nav_menu(array(
								'theme_location' => 'footer-3',
								'menu_class' => 'menu font-headers text-lg',
								'container' => false,
							)); ?>
						</div>
					<?php endif; ?> -->
				</div>
				<?php if ($footerOptions['trustpilot'] || $footerOptions['newsletter']['text'] || $footerOptions['newsletter']['form']): ?>
					<div class="flex">
						<?php if ($trustpilot): ?>
							<div class="inline-block w-full lg:w-auto">
								<?php echo $trustpilot; ?>
							</div>
						<?php endif; ?>
						<?php if ($footerOptions['newsletter']['text'] || $footerOptions['newsletter']['form']): ?>
							<div class="w-full flex font-headers items-center justify-between px-[50px] gap-[50px] border-l border-[#fff] border-opacity-[30%]">
								<?php if ($newsletter['text']): ?>
									<div class="w-full max-w-[539px] text-[14px]">
										<?php echo $newsletter['text']; ?>
									</div>
								<?php endif; ?>
								<?php if ($footerOptions['newsletter']['form']): ?>
									<div class="w-full">
										<?php echo do_shortcode($newsletter['form']); ?>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if ($footerOptions['description'] || $footerOptions['link']): ?>
					<div class="flex mt-12 lg:mt-16 items-center gap-[50px] justify-between footer-bottom">
						<div class="w-full max-w-[1080px]">
							<?php if ($description): ?>
								<div class="content text-lg"><?php echo $description; ?></div>
							<?php endif; ?>
						</div>
						<div class="w-auto">
							<?php if ($footerOptions['footer_link']): ?>
								<div class="button">
									<div class="disclaimer-toggle btn btn-simple cursor-pointer p-[.8rem_2rem_.7rem] rounded-[1rem] relative text-[1.1rem] inline-flex items-center wadik text-center">
										<span class="z-[1] relative"><?php echo html_entity_decode($footerOptions['footer_link']['title']); ?></span>
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
			<div class="max-w-[1750px] w-full mx-auto px-[40px] 2xl:px-[85px]">
				<div class="flex justify-between items-center font-headers">
					<?php if ($footerOptions['copyright']): ?>
						<div class="w-auto">
							<p><?php echo '© ' . date('Y') . ' ' . $footerOptions['copyright']; ?></p>
						</div>
					<?php endif; ?>
					<?php if ($footerOptions['powered']): ?>
						<div class="w-auto text-[11px]">
							<p>
								<a href="<?php echo $footerOptions['powered']['url']; ?>"<?php if ($footerOptions['powered']['target']) echo ' target="' . $footerOptions['powered']['target'] . '"'; ?>
								   rel="noopener noreferrer"><?php echo $powered['title']; ?></a></p>
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
