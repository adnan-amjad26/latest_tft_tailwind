<?php
/**
 * The template for displaying the footer
 * @package CBD
 */
?>
<?php $footerOptions = get_fields('option');  ?>
<?php $logo = $footerOptions['logo_2']; ?>
<?php $menus = get_nav_menu_locations(); ?>
<?php $menu_1 = wp_get_nav_menu_object($menus['footer-1']); ?>
<?php $menu_2 = wp_get_nav_menu_object($menus['footer-2']); ?>
<?php $menu_3 = wp_get_nav_menu_object($menus['footer-3']); ?>
<?php $trustpilot = $footerOptions['trustpilot']; ?>
<?php $newsletter = $footerOptions['newsletter']; ?>
<?php $description = $footerOptions['description']; ?>
<?php $link = $footerOptions['footer_link']; ?>
<?php $copyright = $footerOptions['copyright']; ?>
<?php $powered = $footerOptions['powered']; ?>
</main>
<footer class="bg-gradient-to-t from-[#3F0C39] to-[#1e0b22]" data-scroll-section>
	<div class="max-w-[1737px] w-full mx-auto">
		<div class="flex justify-center py-24 px-[20px] md:px-[40px]">
			<div class="w-full">
				<div class="flex flex-wrap mb-[30px]">
					<?php if ($logo): ?>
						<div class="logo w-full flex justify-center mb-[30px]">
							<a class="w-full max-w-[214px]" href="<?php echo home_url(); ?>">
								<img decoding="async" loading="lazy" src="<?php echo $logo['url']; ?>"
									 alt="<?php echo $logo['title']; ?>">
							</a>
						</div>
					<?php endif; ?>
					<?php if ($menu_2): ?>
						<div class="w-full">
							<?php wp_nav_menu(array(
								'theme_location' => 'footer-2',
								'menu_class' => 'menu flex flex-col md:flex-row text-center justify-center gap-[20px] lg:gap-[47px] font-headers text-[14px] wadik',
								'container' => false,
							)); ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if ($trustpilot || $newsletter['text'] || $newsletter['form']): ?>
					<div class="flex flex-col lg:flex-row">
						<?php if ($trustpilot): ?>
							<div class="flex lg:inline-block justify-center w-full lg:w-auto lg:ml-[-20px] lg:ml-0">
								<?php echo $trustpilot; ?>
							</div>
						<?php endif; ?>
						<?php if ($newsletter['text'] || $newsletter['form']): ?>
							<div class="w-full flex flex-col lg:flex-row font-headers items-center justify-between lg:pl-[50px] gap-[50px] lg:border-l border-[#fff] border-opacity-[30%]">
								<?php if ($newsletter['text']): ?>
									<div class="w-full sm:min-w-[475px] mx-auto text-center md:text-left text-[14px] wadik">
										<?php echo $newsletter['text']; ?>
									</div>
								<?php endif; ?>
								<?php if ($newsletter['form']): ?>
									<div class="w-full">
										<?php echo do_shortcode($newsletter['form']); ?>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if ($description || $link): ?>
					<div class="flex flex-col md:flex-row mt-12 lg:mt-16 items-center gap-[50px] justify-between footer-bottom">
						<div class="w-full max-w-[286px] sm:max-w-[1080px] mx-auto sm:mx-0 text-center md:text-left">
							<?php if ($description): ?>
								<div class="content text-[12px] font-[600] flex flex-col gap-[15px]"><?php echo $description; ?></div>
							<?php endif; ?>
						</div>
						<div class="md:min-w-[226px] text-center md:text-right">
							<?php if ($link): ?>
								<div class="button">
									<div class="disclaimer-toggle btn btn-simple cursor-pointer p-[.8rem_2rem_.7rem] rounded-[1rem] relative text-[1.1rem] inline-flex items-center wadik text-center">
										<span class="z-[1] relative"><?php echo html_entity_decode($link['title']); ?></span>
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
	<?php if ($copyright || $powered): ?>
		<div class="bottom bg-[#501E4E] py-8">
			<div class="w-full mx-auto px-[16px] md:px-[40px] 2xl:px-[85px]">
				<div class="flex justify-between items-center font-headers">
					<?php if ($copyright): ?>
						<div class="w-auto wadik text-[11px]">
							<p><?php echo '© ' . date('Y') . ' ' . $copyright; ?></p>
						</div>
					<?php endif; ?>
					<?php if ($powered): ?>
						<div class="w-auto text-[11px] wadik hidden sm:block">
							<p>
								<a href="<?php echo $powered['url']; ?>"<?php if ($powered['target']) echo ' target="' . $powered['target'] . '"'; ?>
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