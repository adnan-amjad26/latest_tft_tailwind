<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Funded_Trader
 */

get_header(); ?>

	<section id="primary">
		<main id="main" class="overflow-hidden text-2xl">
			<section class="contact-us-page pt-[260px] pb-40 bg-[#000032]">

				<figure class="bg absolute top-0 left-0 w-full h-full z-0 block">
					<div class="dark:hidden block sm:!h-auto h-screen">
						<img class="object-cover h-screen object-center w-full" src="<?php echo get_template_directory_uri(); ?>/img/contact-bg-light.png" alt="Contact background day">
						<div class="contact-bg-day absolute left-0 top-[350px] w-full h-full"></div>
					</div>
					<div class="hidden dark:block sm:!h-auto h-screen">
						<img class="object-cover h-screen object-center w-full" src="<?php echo get_template_directory_uri(); ?>/img/contact-bg-dark.png" alt="Contact background night">
						<div class="contact-bg-night absolute left-0 top-[270px] w-full h-full"></div>
					</div>
				</figure>

				<section class="page-title-area relative z-10 mb-[250px]">
					<div class="container max-w-[1780px] pl-4 pr-4 m-auto">
						<div class="title-wrapper text w-full sm:!text-left text-center">
							<h1 class="font-wadik 2xl:text-[64px]/[1.2] xl:text-[64px]/[1.2] md:text-[44px]/[1.2] lg:text-[54px]/[1.2] text-[48px]/[1.1] text-white"><?php the_title(); ?></h1>
						</div>
					</div>
				</section>

				<section class="contact-section relative z-20">
					<div class="container sm:!max-w-[1380px] max-w-full w-full pl-4 pr-4 m-auto">
						<div class="contact-step-wrapper relative p-[2px_22px] sm:!p-[20px_0px]">
							<div class="step-borders absolute top-0 left-0 w-full h-full z-30 pointer-events-none">
								<img class="w-full h-full sm:!block hidden" src="<?php echo get_template_directory_uri(); ?>/img/step-frame.png" alt="Border Frame">
								<img class="w-full h-full 2xl:hidden xl:hidden md:hidden lg:hidden" src="<?php echo get_template_directory_uri(); ?>/img/step-frame-mobile.png" alt="Border Frame">
							</div>

							<div class="torch absolute top-1/2 left-0 -translate-x-[48%] -translate-y-[54%] z-30 sm:!block hidden">
								<div class="glow-light absolute w-full pb-[80%] rounded-full bg-[#ff4202] top-[35%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-70 z-10 shadow-[0_0_4rem_3.5rem_#ff4202] animate-[flicker_9s_infinite_linear]"></div>
								<img class="w-[63px] h-[231px] relative z-20" src="<?php echo get_template_directory_uri(); ?>/img/torch-new.svg" alt="Torch">
							</div>

							<div class="contact-steps flex justify-between items-start sm:!flex-nowrap flex-wrap sm:!p-[82px_100px_78px_100px] p-[150px_50px] bg-black text-white z-10 overflow-hidden relative">
								
								<div class="single-step sm:!w-[30%] w-full flex justify-center items-start flex-wrap text-center pl-5 pr-5 relative">
									<div class="glow-light absolute top-0 left-0 w-[0px] h-[0px] rounded-full sm:!ml-[45%] sm:!-mt-[140px] -ml-[45%] mt-[70px] pointer-events-none z-0 sm:!shadow-[0_0_11rem_8rem_#f7971e] shadow-[0_0_14rem_12rem_#f7971e]"></div>
									<img class="max-h-[145px] w-auto mb-[25px] relative z-10" src="<?php echo get_template_directory_uri(); ?>/img/man1.svg" alt="Step 1">
									<p class="font-wadik sm:!text-[16px]/[1.1] xl:!text-[14px]/[1.1] md:!text-[12px]/[1.1] text-[12px]/[1.1] w-full relative z-10">14001 W HWY 29, Suite 102, Liberty Hill, TX 78642</p>
								</div>

								<div class="sm:!w-[1px] min-w-[1px] w-[80%] sm:!h-[200px] h-[1px] m-[100px_auto] sm:!m-auto bg-[#363636]"></div>

								<div class="single-step sm:!w-[38%] w-full flex justify-center items-start flex-wrap text-center pl-5 pr-5 relative">
									<div class="glow-light absolute top-0 left-0 w-[0px] h-[0px] rounded-full sm:!ml-[45%] sm:!-mt-[140px] -ml-[45%] mt-[70px] pointer-events-none z-0 sm:!shadow-[0_0_11rem_8rem_#f7971e] shadow-[0_0_14rem_12rem_#f7971e]"></div>
									<img class="max-h-[145px] w-auto mb-[25px] relative z-10" src="<?php echo get_template_directory_uri(); ?>/img/man2.svg" alt="Step 2">
									<p class="font-wadik 2xl:text-[16px]/[1.1] xl:text-[14px]/[1.1] md:text-[12px]/[1.1] sm:text-[12px]/[1.1] break-all w-full relative z-10"><a href="mailto:Support@thefundedtraderprogram.com" class="text-white hover:text-[##f7971e]">Support@thefundedtraderprogram.com</a></p>
								</div>

								<div class="sm:!w-[1px] min-w-[1px] w-[80%] sm:!h-[200px] h-[1px] m-[100px_auto] sm:!m-auto bg-[#363636]"></div>

								<div class="single-step sm:!w-[24%] w-full flex justify-center items-start flex-wrap text-center pl-5 pr-5 relative">
									<div class="glow-light absolute top-0 left-0 w-[0px] h-[0px] rounded-full sm:!ml-[45%] sm:!-mt-[140px] -ml-[45%] mt-[70px] pointer-events-none z-0 sm:!shadow-[0_0_11rem_8rem_#f7971e] shadow-[0_0_14rem_12rem_#f7971e]"></div>
									<img class="max-h-[145px] w-auto mb-[25px] relative z-10" src="<?php echo get_template_directory_uri(); ?>/img/man1.svg" alt="Step 3">
									<p class="font-wadik 2xl:text-[16px]/[1.1] xl:text-[14px]/[1.1] md:text-[12px]/[1.1] sm:text-[12px]/[1.1] w-full relative z-10"><a href="tel:(888) 920-3079" class="text-white hover:text-[##f7971e]">(888) 920-3079</a></p>
								</div>

							</div>

							<div class="torch absolute top-1/2 right-0 translate-x-[42%] -translate-y-[54%] z-30 sm:!block hidden">
								<div class="glow-light absolute w-full pb-[80%] rounded-full bg-[#ff4202] top-[35%] left-[50%] -translate-x-[50%] -translate-y-[50%] opacity-70 z-10 shadow-[0_0_4rem_3.5rem_#ff4202] animate-[flicker_9s_infinite_linear]"></div>
								<img class="w-[63px] h-[231px] relative z-20" src="<?php echo get_template_directory_uri(); ?>/img/torch-new.svg" alt="Torch">
							</div>
						</div>

						<div class="contact-form sm:!mt-[200px] md:!mt-[150px] lg:mt-[180px] mt-[120px] sm:!pt-[24px] pt-[20px] pl-1 pr-1 pb-1 relative">
							<div class="form-border absolute top-0 left-0 w-full h-full pointer-events-none">
								<img class="w-full h-full" src="<?php echo get_template_directory_uri(); ?>/img/form-frame.png" alt="Form Frame">
							</div>
							
							<div class="form-wrapper bg-black sm:!p-[157px_200px] p-[147px_27px] sm:!rounded-[100px] rounded-[30px] text-white">
								<div class="sm:max-w-[800px] sm:m-auto">
									<div class="title mb-[25px] text-center">
										<h2 class="font-wadik sm:!text-[30px]/[1.2] text-[24px]/[1.2]">Send us a mail</h2>
									</div>
									<div class="form">
										<?php echo do_shortcode('[gravityform id="1" title="true"]'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>