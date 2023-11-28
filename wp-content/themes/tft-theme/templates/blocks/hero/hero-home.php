<?php

/**
 * Block Name: Hero Home
 */
?>
<?php

// global ${'hero-home' . '_acf_data'};
// $data = ${'hero-home' . '_acf_data'};
// // Access the variables from the provided data
// $title = $data['title'];
// $text = $data['text'];
// $link = $data['link'];
// $link_social = $data['link_social'];
// $scroll = $data['scroll'];
// $trustpilot = $data['trustpilot'];
// $trustpilot_widget = get_field('trustpilot', 'option');
// $image = wp_get_attachment_url($data['image']);
// $img_day = wp_get_attachment_url($data['img_day']);
// $img_day_2 = wp_get_attachment_url($data['img_day_2']);
// $img_night = wp_get_attachment_url($data['img_night']);
// $img_night_2 = wp_get_attachment_url($data['img_night_2']);
// $lottie_day = wp_get_attachment_url($data['lottie_day']);
// $lottie_day_2 = wp_get_attachment_url($data['lottie_day_2']);
// $lottie_day_3 = wp_get_attachment_url($data['lottie_day_3']);
// $lottie_night = wp_get_attachment_url($data['lottie_night']);
// $lottie_night_2 = wp_get_attachment_url($data['lottie_night_2']);

?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $link = get_field('link'); ?>
<?php $link_social = get_field('link_social'); ?>
<?php $scroll = get_field('scroll'); ?>
<?php $trustpilot = get_field('trustpilot'); ?>
<?php $trustpilot_widget = get_field('trustpilot', 'option'); ?>
<?php $image = get_field('image'); ?>
<?php $img_day = get_field('img_day'); ?>
<?php $img_day_2 = get_field('img_day_2'); ?>
<?php $img_night = get_field('img_night'); ?>
<?php $img_night_2 = get_field('img_night_2'); ?>
<?php $lottie_day = get_field('lottie_day');
?>
<?php $lottie_day_2 = get_field('lottie_day_2'); ?>
<?php $lottie_day_3 = get_field('lottie_day_3'); ?>
<?php $lottie_night = get_field('lottie_night'); ?>
<?php $lottie_night_2 = get_field('lottie_night_2'); ?>
<section class="hero bg-green px-[40px] 2xl:px-[85px] md:min-h-screen pb-[70px] md:pb-[0] pt-[150px] relative" data-scroll-section>
	<div class="max-w-[1750px] 2xl:max-w-full mx-auto flex items-center min-h-[inherit] relative z-30">
		<div class="flex flex-1 min-h-[inheri] relative">
			<div class="w-full md:min-w-[597px] hero-col flex flex-col">
				<?php if ($title) : ?>
					<div class="title md:max-w-[598px] sm:text-center md:text-left">
						<h1 class="text-[48px] xl:text-[64px]"><?php echo $title; ?></h1>
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
							<a href="<?php echo $link['url']; ?>" <?php if ($link['target']) echo ' target="' . $link['target'] . '"'; ?>
							   class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
								<span class="relative z-[1]"><?php echo $link['title']; ?></span>
								<img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy"
									 src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg"
									 alt="btn-gold-left">
								<img class="right-0 translate-x-[58%]" decoding="async" loading="lazy"
									 src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg"
									 alt="btn-gold-right">
							</a>
						<?php endif; ?>
						<?php if ($link_social) : ?>
							<a href="<?php echo $link_social['url']; ?>" <?php if ($link_social['target']) echo ' target="' . $link_social['target'] . '"'; ?>
							   class="btn btn-blue p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
								<span class="relative z-[1]"><?php echo $link_social['title']; ?></span>
								<svg decoding="async">
									<use xlink:href="#discord"></use>
								</svg>
								<img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy"
									 src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg"
									 alt="btn-gold-left">
								<img class="right-0 translate-x-[58%]" decoding="async" loading="lazy"
									 src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg"
									 alt="btn-gold-right">
							</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if ($scroll) : ?>
					<div class="scroll font-headers flex items-start justify-end w-[28px] h-[127px] mt-[150px] text-[16px] z-20 cursor-pointer ml-auto mr-auto md:mr-0 md:ml-[25px]">
						<div class="inner-scroll flex items-center gap-[1.5rem] relative left-[27px] md:left-0 top-[50px] md:top-[72px]">
							<span class="wadik"><?php _e('Scroll', 'cbd'); ?></span>
							<img src="<?php echo get_template_directory_uri(); ?>/img/scroll.svg" alt="scroll">
						</div>
					</div>
				<?php endif; ?>

				<?php /* if($trustpilot || $trustpilot_widget): ?>
                    <div class="tp mt-12 inline-block">
                        <?php echo $trustpilot_widget; ?>
                    </div>
                <?php endif; */ ?>
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
                    <img class="imgs-day" src="<?php echo $img_day_2['url']; ?>"
                         alt="<?php echo 'img day 2'; ?>">
                <?php endif; ?>
                <?php if ($img_night_2) : ?>
                    <img class="imgs-night" src="<?php echo $img_night_2['url']; ?>"
                         alt="<?php echo 'img night 2'; ?>">
                <?php endif; ?>
            </div>
		<?php endif; ?>
		<?php if ($lottie_day) : ?>
			<div id="lottie1" data-src="<?php echo $lottie_day; ?>">
<!--				<lottie-player src="--><?php //echo $lottie_day; ?><!--" class="dragon imgs-day" background="transparent"-->
<!--							   speed="0.6" loop autoplay></lottie-player>-->
				<!--				<dotlottie-player autoplay loop mode="normal"-->
				<!--								  src="-->
				<?php //echo get_template_directory_uri() . '/animation/dragon.lottie'; ?><!--"></dotlottie-player>-->

			</div>


		<?php endif; ?>
		<?php if ($lottie_night) : ?>
			<div id="lottie2" data-src="<?php echo $lottie_night; ?>" >
<!--				<lottie-player src="--><?php //echo $lottie_night; ?><!--" class="dragon imgs-night" background="transparent"-->
<!--							   speed="0.6" loop autoplay></lottie-player>-->
			</div>

		<?php endif; ?>

		<?php if ($lottie_day_2) : ?>
			<div id="lottie3" data-src="<?php echo $lottie_day_2; ?>">
<!--				<lottie-player src="--><?php //echo $lottie_day_2; ?><!--" class="horse imgs-day" background="transparent"-->
<!--							   speed="1"-->
<!--							   loop autoplay></lottie-player>-->
			</div>

		<?php endif; ?>
		<?php if ($lottie_night_2) : ?>
			<div id="lottie4" data-src="<?php echo $lottie_night_2; ?>">
<!--				<lottie-player src="--><?php //echo $lottie_night_2; ?><!--" class="knight imgs-night" background="transparent"-->
<!--							   speed="0.6" loop autoplay></lottie-player>-->
			</div>
		<?php endif; ?>
		<?php if ($lottie_day_3) : ?>
			<div id="lottie5" data-src="<?php echo $lottie_day_3; ?>">
<!--				<lottie-player src="--><?php //echo $lottie_day_3; ?><!--" class="knight imgs-day" background="transparent"-->
<!--							   speed="0.6" loop autoplay></lottie-player>-->
			</div>

		<?php endif; ?>
	</div>
</section>
