<?php
/**
 * The template for displaying the footer
 * @package CBD
 */
?>
<?php $logo = get_field('logo_2', 'option'); ?>
<?php $menus = get_nav_menu_locations(); ?>
<?php $menu_1 = wp_get_nav_menu_object($menus['footer-1']);  ?>
<?php $menu_2 = wp_get_nav_menu_object($menus['footer-2']);  ?>
<?php $menu_3 = wp_get_nav_menu_object($menus['footer-3']);  ?>
<?php $trustpilot = get_field('trustpilot', 'option'); ?>
<?php $newsletter = get_field('newsletter', 'option'); ?>
<?php $description = get_field('description', 'option'); ?>
<?php $link = get_field('footer_link', 'option'); ?>
<?php $copyright = get_field('copyright', 'option'); ?>
<?php $powered = get_field('powered', 'option'); ?>
</main>
<footer class="bg-purple" data-scroll-section>
    <div class="container">
        <div class="top row justify-center py-24">
            <div class="w-full lg:w-5/6 lg:px-12">
				<div class="flex flex-col lg:flex-row gap-12 2xl:gap-24">
					<?php if($logo): ?>
						<div class="logo row justify-center">
							<a class="w-80" href="<?php echo home_url(); ?>">
								<img decoding="async" loading="lazy" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>">
							</a>
						</div>
					<?php endif; ?>
					<?php if($menu_1): ?>
						<div class="lg:w-1/4">
							<h3 class="menu-title mb-8"><?php echo $menu_1->name; ?></h3>
							<?php wp_nav_menu(array(
								'theme_location' => 'footer-1',
								'menu_class' => 'menu font-headers text-lg',
								'container' => false,
							)); ?>
						</div>
					<?php endif; ?>
					<?php if($menu_2): ?>
						<div class="lg:w-1/4">
							<h3 class="menu-title mb-8"><?php echo $menu_2->name; ?></h3>
							<?php wp_nav_menu(array(
								'theme_location' => 'footer-2',
								'menu_class' => 'menu font-headers text-lg',
								'container' => false,
							)); ?>
						</div>
					<?php endif; ?>
					<?php if($menu_3): ?>
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
                <?php if($trustpilot || $newsletter['text'] || $newsletter['form']): ?>
                    <div class="row mt-12 lg:mt-16 gap-12">
                        <?php if($trustpilot): ?>
                            <div class="tp inline-block w-full lg:w-auto">
                                <?php echo $trustpilot; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($newsletter['text'] || $newsletter['form']): ?>
                            <div class="w-full flex-1 font-headers row items-center justify-between lg:px-12">
                                <?php if($newsletter['text']): ?>
                                    <div class="w-full lg:flex-1 flex justify-center">
                                        <?php echo $newsletter['text']; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if($newsletter['form']): ?>
                                    <div class="w-full lg:w-2/5 mt-6 lg:mt-0">
                                        <?php echo do_shortcode($newsletter['form']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if($description || $link): ?>
                    <div class="row mt-12 lg:mt-16 items-center justify-between footer-bottom">
                        <div class="w-full lg:w-2/3">
                            <?php if($description): ?>
                                <div class="content text-lg"><?php echo $description; ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="w-full lg:w-auto mt-12 lg:mt-0">
                            <?php if($link): ?>
                                <div class="button">
                                    <div class="disclaimer-toggle btn btn-simple cursor-pointer p-[.8rem_2rem_.7rem] rounded-[1rem] relative text-[1.1rem] inline-flex items-center wadik text-center">
                                        <span class="z-[1] relative"><?php echo html_entity_decode($link['title']); ?></span>
                                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-simple.svg" alt="btn-simple">
                                    </div> 
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if($copyright || $powered): ?>
        <div class="bottom bg-purple-dark py-8">
            <div class="container">
                <div class="row justify-between font-headers">
                    <?php if($copyright): ?>
                        <div class="w-auto">
                            <p><?php echo '© '.date('Y').' '.$copyright;  ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if($powered): ?>
                        <div class="w-auto">
                            <p><a href="<?php echo $powered['url']; ?>"<?php if($powered['target']) echo ' target="'.$powered['target'].'"'; ?> rel="noopener noreferrer"><?php echo $powered['title']; ?></a></p>
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
<?php wp_footer(); ?>
</body>
</html>