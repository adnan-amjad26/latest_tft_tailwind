<?php
/**
 * Block Name: Privacy Policy Hero
 */

$title = get_field( 'title' );

?>

<section class="relative overflow-hidden pt-[60px] pb-[400px] mb-[-400px] dark:pb-[600px] dark:mb-[-600px] md:pt-0 md:pb-[250px] md:mb-[-250px] md:dark:pb-[350px] md:dark:mb-[-350px]">
	<div class="dark:hidden">
		<img class="min-w-[2450px] max-w-none w-full absolute h-auto top-0 left-2/4 -translate-x-1/2 z-20 opacity-80"
			 src="<?= get_template_directory_uri(); ?>/img/privacy-hero-bg.svg"
			 alt="castle in the snow"
		/>

		<div class="absolute w-full left-0 z-30 bottom-[-150px] h-[500px] bg-[linear-gradient(180deg,_rgba(55,11,35,0.00)_0%,_rgba(154,153,175,0.00)_0.01%,_#9A99AF_42.01%)]"></div>
	</div>

	<div class="hidden dark:block">
		<img class="min-w-[2088px] max-w-none w-full absolute h-auto top-0 z-10 left-[-83px] lg:left-2/4 lg:-translate-x-1/2"
			 src="<?= get_template_directory_uri(); ?>/img/privacy-hero-bg-dark.svg"
			 alt="background with moon"
		/>

		<div class="absolute w-full left-0 z-30 bottom-[-225px] h-[500px] bg-[linear-gradient(180deg,_rgba(55,11,35,0.00)_0%,_rgba(0,0,50,0.00)_0.01%,_#291049_42.01%)] md:bottom-[-170px]"></div>
	</div>

	<div class="relative z-30 max-w-[1920px] mx-auto py-[170px] md:pt-[200px] md:pb-[250px] md:px-[30px] lg:px-[50px] xl:pt-[275px] xl:pb-[450px]  xl:px-[110px]">
		<h1 class="font-wadik text-white text-center text-[40px] md:text-left md:text-[64px]"><?= $title; ?></h1>
	</div>
</section>
