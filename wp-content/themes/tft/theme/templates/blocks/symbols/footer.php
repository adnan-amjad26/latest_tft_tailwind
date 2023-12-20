<?php
/**
 * Block Name: Symbols banner
 */

$fields = get_fields();
?>

<section
		 class="overflow-hidden  text-center text-white relative px-[8px] pt-[120px] pb-[90px] min-h-[640px] flex items-center before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-[linear-gradient(180deg,_rgba(63,12,57,0.10)_0%,_#3F0C39_70%)] md:px-[30px] md:before:bg-black md:before:bg-none md:before:opacity-50 lg:px-[50px] xl:px-[110px] xl:py-[270px]">

	<img class="hidden dark:block absolute min-w-[1920px] w-full max-w-none h-auto bottom-0 left-2/4 -translate-x-1/2"
		 src="<?= get_template_directory_uri(); ?>/img/symbols-footer-dark.svg"
		 alt="background with moon" />

	<img class="block dark:hidden absolute min-w-[1920px] w-full max-w-none h-auto top-0 left-2/4 -translate-x-1/2 md:top-auto"
		 src="<?= get_template_directory_uri(); ?>/img/symbols-footer-light.svg"
		 alt="background with moon" />

	<div class="relative mx-auto z-30 max-w-full md:max-w-[930px]">
		<div class="hidden md:block">
			<h3 class="font-body font-bold text-[24px] dark:drop-shadow-[0_4px_4px_rgba(0,0,0,0.50)]">
				<?= $fields['desktop_text']; ?>
			</h3>
			<?php if (!empty($fields['desktop_button']) && !empty($fields['desktop_button']['url'])): ?>
			<a class="bg-button-gold bg-no-repeat bg-contain bg-center inline-block leading-none px-[64px] pt-[32px] pb-[26px] mt-[35px] transition-all duration-300 hover:translate-y-[-0.3rem]"
			   href="<?= $fields['desktop_button']['url']; ?>"
			   target="<?= $fields['desktop_button']['target']; ?>">
				<span
					  class="font-wadik text-[14px] leading-none"><?= $fields['desktop_button']['title']; ?></span>
			</a>
			<?php endif; ?>
		</div>

		<div class="md:hidden">
			<div class="animate-bob relative left-2/4">
				<img class="mx-auto"
					 src="<?= get_template_directory_uri(); ?>/img/sword.svg"
					 alt="Sword" />
			</div>

			<h3 class="mt-[35px] text-[36px]">
				<?= $fields['mobile_title']; ?>
			</h3>
			<div
				 class="mt-[35px] break-words [&_h3]:text-[24px] [&_h3]:mt-[35px] [&_h3:first-child]:mt-0 [&_p]:text-[18px] [&_p]:font-normal">
				<?= $fields['mobile_text']; ?>
			</div>

			<a href="https://discord.com/invite/R5CX3rsPFD"
			   target="_blank"
			   class="mt-[45px] relative inline-flex items-center bg-[#493830] px-[30px] py-[15px] rounded-lg transition-all hover:bg-[#197bf4] hover:translate-y-[-0.3rem]">
				<svg decoding="async"
					 width="26"
					 height="20"
					 class="fill-white mr-[10px] pointer-events-none select-none">
					<use xlink:href="#discord"></use>
				</svg>
				<span class="wadik text-[14px]">Join Our Discord</span>
				<img class="pointer-events-none select-none left-[-30px] top-[-20px] max-w-none absolute w-[calc(100%+60px)] h-[calc(100%+30px)] hue-rotate-180"
					 src="<?= get_template_directory_uri(); ?>/img/btn-gold-corners.svg"
					 alt="button" />
			</a>
		</div>

	</div>

	<lottie-player src="<?= get_template_directory_uri(); ?>/animation/Footer-Knight.json"
				   class="lottieResponsive hidden absolute w-auto h-[250px] bottom-0 right-[calc(100vw/2-350px)] md:block xl:bottom-[65px] xl:right-auto xl:left-[calc(100vw/2-750px)] xl:h-[390px]"
				   background="transparent"
				   speed="1"
				   loop=""
				   autoplay=""></lottie-player>
</section>