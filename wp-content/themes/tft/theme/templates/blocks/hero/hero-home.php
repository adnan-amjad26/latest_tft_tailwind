<?php

/**
 * Block Name: Hero Home
 */
?>
<?php $heroHomeData = get_fields(); ?>
<?php $title = $heroHomeData['title']; ?>
<?php $text = $heroHomeData['text']; ?>
<?php $link = $heroHomeData['link']; ?>
<?php $link_social = $heroHomeData['link_social']; ?>
<?php $scroll = $heroHomeData['scroll']; ?>

<?php $trustpilot = get_field('trustpilot'); ?>
<?php $trustpilot_widget = get_field('trustpilot', 'option'); ?>

<?php $image = $heroHomeData['image']; ?>
<?php $img_day = $heroHomeData['img_day']; ?>
<?php $img_day_2 = $heroHomeData['img_day_2']; ?>
<?php $img_night = $heroHomeData['img_night']; ?>
<?php $img_night_2 = $heroHomeData['img_night_2']; ?>
<?php $lottie_day = $heroHomeData['lottie_day'];?>
<?php $lottie_day_2 = $heroHomeData['lottie_day_2']; ?>
<?php $lottie_day_3 = $heroHomeData['lottie_day_3']; ?>
<?php $lottie_night = $heroHomeData['lottie_night']; ?>
<?php $lottie_night_2 = $heroHomeData['lottie_night_2']; ?>
<section class="hero bg-green px-[40px] 2xl:px-[85px] md:min-h-[1050px] pb-[70px] md:pb-[0] pt-[215px] relative" data-scroll-section>
	<div class="max-w-[1750px] 2xl:max-w-full mx-auto flex items-center relative z-30">
		<div class="flex flex-1 min-h-[inheri] relative">
			<div class="w-full md:min-w-[597px] hero-col flex flex-col">
				<?php if ($title) : ?>
					<div class="title md:max-w-[598px] sm:text-center md:text-left">
						<h1 class="text-[48px] xl:text-[6.4rem]"><?php echo $title; ?></h1>
					</div>
				<?php endif; ?>
				<?php if ($text) : ?>
					<div class="max-w-[358px] mx-auto md:mx-0 sm:text-center md:text-left subtitle text-[18px] font-bold mt-12 md:max-w-[598px]">
						<?php echo $text; ?>
					</div>
				<?php endif; ?>
				<?php if ($link || $link_social) : ?>
					<div class="buttons flex flex-col md:flex-row items-center gap-8 sm:gap-[60px] lg:gap-24 mt-[30px] md:mt-12 lg:mt-16">
						<?php if ($link) : ?>
							<a href="<?php echo $link['url']; ?>" <?php if ($link['target']) echo ' target="' . $link['target'] . '"'; ?> class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.4rem]">
								<span class="relative z-[1]"><?php echo $link['title']; ?></span>
								<img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
								<img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
							</a>
						<?php endif; ?>
						<?php if ($link_social) : ?>
							<a href="<?php echo $link_social['url']; ?>" <?php if ($link_social['target']) echo ' target="' . $link_social['target'] . '"'; ?> class="btn btn-blue p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.4rem]">
								<span class="relative z-[1]"><?php echo $link_social['title']; ?></span>
								<svg decoding="async">
									<use xlink:href="#discord"></use>
								</svg>
								<img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
								<img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
							</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if ($scroll) : ?>
					<div class="scroll font-headers flex items-start justify-end w-[28px] h-[127px] mt-[200px] text-[16px] z-20 cursor-pointer ml-auto mr-auto md:mr-0 md:ml-[25px]">
						<div class="inner-scroll flex items-center gap-[1.5rem] relative left-[27px] md:left-0 top-[50px] md:top-[72px]">
							<span class="wadik"><?php _e('Scroll', 'cbd'); ?></span>
							<img src="<?php echo get_template_directory_uri(); ?>/img/scroll.svg" alt="scroll">
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php if ($image) : ?>
		<div class="hand w-[45vw] h-[77vh] absolute bottom-0 right-0 z-20 hidden xl:block">
			<img class="w-full h-full" src="<?php echo $image['url']; ?>" alt="<?php echo 'hero-hand'; ?>">
		</div>
	<?php endif; ?>
	<?php if ($img_day || $img_night) : ?>
		<figure class="bg absolute top-0 left-0 w-full h-full z-0 opacity-70">
			<?php if ($img_day) : ?>
				<img class="imgs-day" src="<?php echo $img_day['url']; ?>" alt="<?php echo 'img day'; ?>">
			<?php endif; ?>
			<?php if ($img_night) : ?>
				<img class="imgs-night" src="<?php echo $img_night['url']; ?>" alt="<?php echo 'img night'; ?>">
			<?php endif; ?>
		</figure>
	<?php endif; ?>
	<div class="animations absolute top-0 left-0 w-full h-full z-10">
		<?php if ($img_day_2 || $img_night_2) : ?>
			<div class="moon absolute w-44 left-1/2 top-[15%] md:top-[20%]" data-scroll>
				<?php if ($img_day_2) : ?>
					<img class="imgs-day" src="<?php echo $img_day_2['url']; ?>" alt="<?php echo 'img day 2'; ?>">
				<?php endif; ?>
				<?php if ($img_night_2) : ?>
					<img class="imgs-night" src="<?php echo $img_night_2['url']; ?>" alt="<?php echo 'img night 2'; ?>">
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php if ($lottie_day) : ?>
			<div id="lottie1" data-src="<?php echo $lottie_day; ?>">

			</div>


		<?php endif; ?>
		<?php if ($lottie_night) : ?>
			<div id="lottie2" data-src="<?php echo $lottie_night; ?>">
			</div>

		<?php endif; ?>

		<?php if ($lottie_day_2) : ?>
			<div id="lottie3" data-src="<?php echo $lottie_day_2; ?>">
			</div>

		<?php endif; ?>
		<?php if ($lottie_night_2) : ?>
			<div id="lottie4" data-src="<?php echo $lottie_night_2; ?>">
			</div>
		<?php endif; ?>
		<?php if ($lottie_day_3) : ?>
			<div id="lottie5" data-src="<?php echo $lottie_day_3; ?>">
			</div>

		<?php endif; ?>
	</div>
</section>
