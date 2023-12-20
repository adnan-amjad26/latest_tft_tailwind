<?php
/**
 * Block Name: Terms Of Use Hero
 */

$title = get_field('title');
?>
<section class="relative overflow-hidden pt-[60px] pb-[400px] mb-[-400px] md:pt-0 md:pb-[250px] md:mb-[-250px]">
	<div class="dark:hidden">
		<img class="min-w-[2450px] max-w-none w-full absolute h-auto top-0 left-2/4 -translate-x-1/2 z-20"
			 src="<?= get_template_directory_uri(); ?>/img/terms-banner-bg.svg"
			 alt="red rocks" />
		<img class="min-w-[2450px] max-w-none absolute h-auto top-0 left-2/4 -translate-x-1/2 z-10"
			 src="<?= get_template_directory_uri(); ?>/img/terms-banner-underlay.svg"
			 alt="sky" />
		<img class="min-w-[2450px] max-w-none absolute h-auto top-0 left-2/4 -translate-x-1/2 z-20"
			 src="<?= get_template_directory_uri(); ?>/img/terms-banner-overlay.svg"
			 alt="cloud" />
		<img class="min-w-[2450px] max-w-none absolute h-auto top-0 left-2/4 z-10 animate-bob"
			 src="<?= get_template_directory_uri(); ?>/img/terms-banner-tower.svg"
			 alt="tower" />
		<div class="absolute w-full h-full top-0 left-0 z-30 bg-black opacity-30 xl:opacity-10"></div>
		<div
			 class="absolute w-full left-0 z-30 bottom-[-150px] h-[500px] bg-[linear-gradient(180deg,_rgba(55,11,35,0.00)_0%,_rgba(87,17,20,0.00)_0.01%,_#571114_42.01%)]">
		</div>
	</div>

	<div class="hidden dark:block">
		<img class="min-w-[2800px] max-w-none w-full absolute h-auto top-0 z-10 left-[-530px] lg:left-2/4 lg:-translate-x-1/2"
			 src="<?= get_template_directory_uri(); ?>/img/terms-banner-bg-dark.svg"
			 alt="volcano" />
		<div data-scroll
			 class="absolute w-[175px] right-[calc(100vw_/_2_-_600px)] top-[250px] z-10 transition-all ease-[cubic-bezier(.76,0,.24,1)] duration-[1.4s] opacity-0 translate-y-[250%] [&.is-inview]:translate-y-0 [&.is-inview]:opacity-100  before:absolute before:z-[-1] before:left-2/4 before:top-2/4 before:w-[120%] before:h-[120%] before:bg-[#3372C4] before:blur-xl before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2">
			<img class="max-w-none w-full h-auto animate-spin"
				 src="<?= get_template_directory_uri(); ?>/img/terms-banner-moon.svg"
				 alt="moon" />
		</div>
		<div
			 class="absolute w-full left-0 z-30 bottom-[-150px] h-[500px] bg-[linear-gradient(180deg,_rgba(55,11,35,0.00)_0%,_rgba(0,0,50,0.00)_0.01%,_#000032_42.01%)]">
		</div>
	</div>

	<div
		 class="relative z-30 max-w-[1920px] mx-auto py-[170px] md:pt-[200px] md:pb-[250px] md:px-[30px] lg:px-[50px] xl:pt-[275px] xl:pb-[450px]  xl:px-[110px]">
		<h1 class="font-wadik text-white text-center text-[40px] md:text-left md:text-[64px]">
			<?= $title; ?>
		</h1>
	</div>
</section>
