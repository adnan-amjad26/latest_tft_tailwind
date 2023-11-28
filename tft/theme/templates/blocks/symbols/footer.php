<?php
/**
 * Block Name: Symbols banner
 */

$fields = get_fields();
?>

<section
		class="overflow-hidden  text-center text-white relative px-[15px] py-[75px] min-h-[640px] flex items-center before:absolute before:w-full before:h-full before:top-0 before:left-0 before:bg-black before:opacity-50 before:z-10 md:px-[30px] lg:px-[50px] xl:px-[110px] xl:min-h-[854px]">
	<img class="hidden dark:block absolute min-w-[1920px] w-full max-w-none h-auto top-0 left-2/4 -translate-x-1/2 md:top-auto"
		 src="<?= get_template_directory_uri(); ?>/img/symbols-footer-dark.svg"
		 alt="background with moon"
	/>

	<img class="block dark:hidden absolute min-w-[1920px] w-full max-w-none h-auto top-0 left-2/4 -translate-x-1/2 md:top-auto"
		 src="<?= get_template_directory_uri(); ?>/img/symbols-footer-light.svg"
		 alt="background with moon"
	/>

	<div class="relative max-w-[950px] mx-auto z-30">
		<h3 class="font-montserrat text-[18px] dark:drop-shadow-[0_4px_4px_rgba(0,0,0,0.50)] md:font-semibold xl:text-[24px]"><?= $fields['text']; ?></h3>
		<?php if ( ! empty( $fields['button'] ) && ! empty( $fields['button']['url'] ) ): ?>
			<a class="bg-button-gold bg-no-repeat bg-contain bg-center inline-block leading-none px-[64px] pt-[32px] pb-[26px] mt-[25px] transition-all duration-300 hover:translate-y-[-0.3rem] xl:mt-[35px]"
			   href="<?= $fields['button']['url']; ?>"
			   target="<?= $fields['button']['target']; ?>">
				<span class="font-wadik text-[14px] leading-none"><?= $fields['button']['title']; ?></span>
			</a>
		<?php endif; ?>
	</div>

	<lottie-player src="<?= get_template_directory_uri(); ?>/animation/Footer-Knight.json"
				   class="lottieResponsive hidden absolute w-auto h-[250px] bottom-0 right-[calc(100vw/2-350px)] md:block xl:bottom-[40px] xl:right-auto xl:left-[calc(100vw/2-750px)] xl:h-[390px]"
				   background="transparent"
				   speed="1"
				   loop=""
				   autoplay=""></lottie-player>
</section>
