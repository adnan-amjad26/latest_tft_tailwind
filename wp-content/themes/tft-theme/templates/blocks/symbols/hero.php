<?php
/**
 * Block Name: Symbols hero
 */

$fields = get_fields();
?>

<section
		class="symbols-hero h-screen max-h-[640px] relative  overflow-hidden md:h-[913px] md:max-h-none ">
	<div class="hidden dark:block absolute left-0 top-[249px] w-full h-[1160px] z-10 bg-[linear-gradient(180deg,_rgba(0,0,50,0.00)_0%,_#000032_42.01%)] md:dark:hidden"></div>
	<img class="hidden dark:block absolute min-w-[1920px] w-full max-w-none h-auto top-0 left-2/4 -translate-x-1/2 md:top-auto"
		 src="<?= get_template_directory_uri(); ?>/img/symbols-bg-dark.svg"
		 alt="background with moon"
	/>

	<div class="dark:hidden absolute left-0 top-[249px] w-full h-[900px] z-10 bg-[linear-gradient(180deg,_rgba(129,131,20,0.00)_0%,_rgba(0,0,50,0.00)_0.01%,_#818314_42.01%)] md:hidden"></div>
	<img class="dark:hidden absolute min-w-[1920px] w-full max-w-none h-auto top-0 left-2/4 -translate-x-1/2 md:top-auto"
		 src="<?= get_template_directory_uri(); ?>/img/symbols-bg-light.svg"
		 alt="background with castle"
	/>

	<div class="max-w-[1920px] mx-auto h-full pb-20 dark:pt-7 dark:pb-0 flex items-center justify-center md:justify-start md:h-[680px] md:px-[30px] md:pb-[130px]  lg:dark:pt-[100px]  lg:px-[50px]  xl:px-[110px] ">
		<div class="relative  text-center z-10 max-w-[600px] mx-auto md:dark:text-left md:dark:m-0">
			<h1 class="text-navy dark:text-white font-wadik text-[48px] md:text-[64px]"><?= $fields['title']; ?></h1>
			<p class="text-navy dark:text-white font-wadik text-[18px] mt-5"><?= $fields['text']; ?></p>
		</div>
	</div>
</section>
