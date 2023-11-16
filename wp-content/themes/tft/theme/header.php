<?php
/**
 * The header for our theme
 *
 */
?>
<?php
// $post_id = get_the_ID();  // Replace with your post ID

// // Get the post content
// $content = get_post_field('post_content', $post_id);

// // Parse ACF blocks
// $blocks = parse_blocks($content);

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<script>
		(function (w, d, s, r, n) {
			w.TrustpilotObject = n;
			w[n] = w[n] || function () {
				(w[n].q = w[n].q || []).push(arguments)
			};
			a = d.createElement(s);
			a.async = 1;
			a.src = r;
			a.type = 'text/java' + s;
			f = d.getElementsByTagName(s)[0];
			f.parentNode.insertBefore(a, f)
		})(window, document, 'script', 'https://invitejs.trustpilot.com/tp.min.js', 'tp');
		tp('register', 'Uhf3Id4hdsMHEOke');
	</script>
</head>
<body <?php body_class(); ?> data-day>
<?php wp_body_open(); ?>
<?php $logo = get_field('logo', 'option'); ?>
<?php $menus = get_nav_menu_locations(); ?>
<?php $header_menu = wp_get_nav_menu_object($menus['header']); ?>
<?php $menu = wp_get_nav_menu_object($menus['main']); ?>
<?php $link = get_field('header_link', 'option'); ?>
<?php $audio = get_field('audio', 'option'); ?>
<?php $bg = get_field('bg'); ?>
<?php $bg = ($bg) ? $bg : 'bg-red';
if (is_singular('post')) $bg = 'bg-lilac-dark'; ?>
<header class="fixed z-50 top-0 left-0 w-full text-white">
	<div class="container  relative z-10">
		<div class="row justify-between">
			<div class="w-auto flex-1 relative z-50">
				<?php if ($logo): ?>
					<a href="<?php echo home_url(); ?>" class="logo inline-block z-50">
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>">
					</a>
				<?php endif; ?>
			</div>
			<div class="w-auto z-40 row items-center justify-end gap-12">
				<div class="menu-container fixed z-40 top-0 right-0 w-full h-full p-12 lg:p-0 lg:relative lg:flex-1 flex flex-col lg:items-center lg:flex-row lg:gap-12">
					<?php if ($header_menu) wp_nav_menu(array(
						'theme_location' => 'header',
						'menu_class' => 'menu flex flex-col lg:flex-row gap-12 2xl:gap-24 lg:mr-12',
						'container' => false,
					)); ?>
					<?php if ($menu) wp_nav_menu(array(
						'theme_location' => 'main',
						'menu_class' => 'menu-nav',
						'container' => false,
					)); ?>
					<div class="buttons flex gap-6 justify-between mt-12 lg:mt-0">
						<?php if ($link): ?>
							<a href="<?php echo $link['url']; ?>"<?php if ($link['target']) echo ' target="' . $link['target'] . '"'; ?>
							   class="btn btn-gold">
								<span><?php echo $link['title']; ?></span>
								<img decoding="async" loading="lazy"
									 src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg"
									 alt="btn-gold-left">
								<img decoding="async" loading="lazy"
									 src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg"
									 alt="btn-gold-right">
							</a>
						<?php endif; ?>
						<div class="buttons-setup flex items-center">
							<div class="mode lg:fixed">
								<div class="toggle">
									<input class="toggle-input" type="checkbox" aria-label="Day/Night">
									<div class="toggle-bg"></div>
									<div class="toggle-switch">
										<div class="toggle-switch-figure"></div>
										<div class="toggle-switch-figureAlt"></div>
									</div>
								</div>
								<script>
									/* Controls the day/night mode appearance on page load */
									if (!localStorage.getItem('dnmode')) {
										var DNMode = 'night', TimeNow = new Date().getHours();
										DNMode = (TimeNow < 18) ? 'day' : 'night';
										localStorage.setItem('dnmode', DNMode);
									}
									if (localStorage.getItem('dnmode') == 'night') {
										jQuery('.mode .toggle-input').trigger('click');
										jQuery('body').addClass('theme-dark').removeAttr('data-day');
									}
								</script>
							</div>
							<div class='lang-switcher'>
								<?php /* Outputs the WPML language switcher in the header */ ?>
								<?php echo do_shortcode('[wpml_language_switcher type="custom" native=0 flags=1]'); ?>
							</div>
							<?php /* Checks if the audio file is set in the theme options before outputting a toggle for it into the header */ ?>
							<?php if ($audio): ?>
								<div class="music-controls">
									<img decoding="async" src="<?php echo get_template_directory_uri(); ?>/img/lute.svg"
										 alt="lute">
									<audio loop>
										<source src="<?php echo $audio; ?>" type="audio/ogg">
										<source src="<?php echo $audio; ?>" type="audio/mpeg">
									</audio>
								</div>
							<?php endif; ?>
							<button class="btn-menu"><i></i></button>
						</div>
					</div>
				</div>
				<div class="menu-toggle w-24 flex flex-col items-center justify-center lg:hidden">
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</div>
	<?php if ($menu): ?>
		<div class="menu-nav-wrap">
			<?php wp_nav_menu(array(
				'theme_location' => 'main',
				'menu_class' => 'menu-nav',
				'container' => false,
			)); ?>
			<button class="btn-menu-close"></button>
		</div>
	<?php endif; ?>
</header>
<div class="z-40" data-scroll-container>
	<main class="relative <?php echo $bg; ?>">
