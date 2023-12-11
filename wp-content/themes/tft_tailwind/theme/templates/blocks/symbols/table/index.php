<?php
/**
 * Block Name: Symbols table
 */

$fields = get_fields();

$symbol               = $fields['symbol'];
$bid_price            = $fields['bid_price'];
$ask_price            = $fields['ask_price'];
$spread               = $fields['spread'];
$simulated_comissions = $fields['simulated_comissions'];
$overall_costs        = $fields['overall_costs'];
?>

<section
		class="trade-section relative bg-olive dark:bg-night-blue relative pb-[100px] text-white md:bg-transparent md:dark:bg-transparent md:pb-[50px] md:mt-[-300px] xl:text-black xl:mt-[-230px] xl:dark:mt-[-150px]">

	<div class="hidden absolute w-full h-full left-0 top-0 md:dark:block md:dark:bg-[linear-gradient(180deg,_rgba(0,0,50,0.00)_0%,_rgba(0,0,50,0.00)_0.01%,_#000032_26.01%)] xl:dark:bg-[linear-gradient(180deg,_rgba(0,0,50,0.00)_0%,_rgba(0,0,50,0.00)_0.01%,_#000032_7.01%)]"></div>
	<div class="hidden absolute w-full h-full left-0 top-0 md:block md:dark:hidden md:bg-[linear-gradient(180deg,_rgba(129,131,20,0.00)_0%,_rgba(0,0,50,0.00)_0.01%,_#818314_16.01%)]"></div>

	<!-- Wrapper -->
	<div class="max-w-[1920px] mx-auto px-[22px] md:px-[30px] lg:px-[50px] xl:px-[110px]">
		<!-- Tabs -->
		<div class="flex items-center justify-center -mx-2.5 md:mx-0 md:gap-x-3 lg:gap-x-[25px]"
			 data-tabs-toggle="#symbols-tab-content"
			 role="tablist">

			<button class="flex w-[32px] h-[32px] items-center justify-center mr-1.5 md:hidden"
					data-tabs-prev
					type="button">
				<svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
						  d="M7.69342 14.1012C8.02537 13.7692 8.02537 13.2311 7.69342 12.8991L2.29449 7.5002L7.69342 2.10119C8.02537 1.76924 8.02537 1.23106 7.69342 0.899109C7.36148 0.567159 6.82329 0.567159 6.49134 0.899109L0.49139 6.8991C0.15939 7.2311 0.15939 7.7692 0.49139 8.1012L6.49134 14.1012C6.82329 14.4331 7.36148 14.4331 7.69342 14.1012Z"
						  fill="#F7971E"/>
				</svg>
			</button>

			<?php if ( $fields['forex_include_tab'] ) : ?>
				<button class="hidden relative before:block before:pt-[30%] bg-button-rapid bg-no-repeat bg-contain bg-center w-full max-h-[85px] max-w-[283px] text-white  aria-selected:text-orange aria-selected:block transition-all duration-300 hover:translate-y-[-0.3rem] md:block"
						role="tab"
						aria-selected="true"
						aria-controls="forex"
						data-tabs-target="#forex"
						type="button">
					<span class="font-wadik text-[15px] absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2 md:text-[12px] lg:text-[15px]"><?= $fields['forex_tab_name']; ?></span>
				</button>
			<?php endif; ?>

			<?php if ( $fields['indices_include_tab'] ): ?>
				<button class="hidden relative before:block before:pt-[30%] bg-button-rapid bg-no-repeat bg-contain bg-center w-full max-h-[85px] max-w-[283px] text-white  aria-selected:text-orange aria-selected:block transition-all duration-300 hover:translate-y-[-0.3rem] md:block"
						role="tab"
						aria-selected="false"
						aria-controls="indices"
						data-tabs-target="#indices"
						type="button">
					<span class="font-wadik text-[15px] absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2 md:text-[12px] lg:text-[15px]"><?= $fields['indices_tab_name']; ?></span>
				</button>
			<?php endif; ?>

			<?php if ( $fields['metals_include_tab'] ): ?>
				<button class="hidden relative before:block before:pt-[30%] bg-button-rapid bg-no-repeat bg-contain bg-center w-full max-h-[85px] max-w-[283px] text-white  aria-selected:text-orange aria-selected:block transition-all duration-300 hover:translate-y-[-0.3rem] md:block"
						role="tab"
						aria-selected="false"
						aria-controls="metals"
						data-tabs-target="#metals"
						type="button">
					<span class="font-wadik text-[15px] absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2 md:text-[12px] lg:text-[15px]"><?= $fields['metals_tab_name']; ?></span>
				</button>
			<?php endif; ?>

			<?php if ( $fields['crypto_include_tab'] ): ?>
				<button class="hidden relative before:block before:pt-[30%] bg-button-rapid bg-no-repeat bg-contain bg-center w-full max-h-[85px] max-w-[283px] text-white  aria-selected:text-orange aria-selected:block transition-all duration-300 hover:translate-y-[-0.3rem] md:block"
						role="tab"
						aria-selected="false"
						aria-controls="crypto"
						data-tabs-target="#crypto"
						type="button">
					<span class="font-wadik text-[15px] absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2 md:text-[12px] lg:text-[15px]"><?= $fields['crypto_tab_name']; ?></span>
				</button>
			<?php endif; ?>


			<button class="flex w-[32px] h-[32px] items-center justify-center ml-1.5 md:hidden"
					type="button"
					data-tabs-next>
				<svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
						  d="M0.306579 0.899045C-0.0253709 1.23104 -0.0253709 1.76915 0.306579 2.10115L5.70551 7.50005L0.30658 12.8991C-0.0253704 13.231 -0.0253703 13.7692 0.30658 14.1011C0.63852 14.4331 1.17671 14.4331 1.50866 14.1011L7.50861 8.10114C7.84061 7.76915 7.84061 7.23104 7.50861 6.89905L1.50866 0.899045C1.17671 0.567145 0.638519 0.567145 0.306579 0.899045Z"
						  fill="#F7971E"/>
				</svg>
			</button>

		</div> <!-- End: Tabs -->
		<!-- Tabs content -->
		<div id="symbols-tab-content"
			 class="relative pt-[50px] [&_svg]:inline [&_.color\_red]:text-[#B80000] [&_.color\_red+span]:fill-[#B80000] [&_.color\_green]:text-[#2D7600] [&_.color\_green+span]:fill-[#2D7600] xl:pt-0">
			<img src="<?= get_template_directory_uri(); ?>/img/symbols-table-bg.svg"
				 alt="Paper scroll"
				 class="hidden xl:block xl:dark:hidden"
			/>
			<img src="<?= get_template_directory_uri(); ?>/img/symbols-table-bg-dark.svg"
				 alt="Paper scroll dark mode"
				 class="hidden xl:dark:block"
			/>

			<?php if ( $fields['forex_include_tab'] ) : ?>
				<div id="forex"
					 role="tabpanel"
					 class="hidden overflow-x-auto no-scrollbar z-10 xl:w-[68%] xl:h-[56%] xl:absolute xl:top-2/4 xl:left-2/4 xl:-translate-y-1/2 xl:-translate-x-1/2 2xl:w-[66%] 2xl:h-[60%]">
					<h3 class="font-wadik text-[30px] text-left pb-[75px] block xl:!text-center xl:pb-[25px] 2xl:pb-[50px]"><?= $fields['forex_tab_name']; ?></h3>
					<?php require __DIR__ . '/forex-table.php'; ?>
				</div>
			<?php endif; ?>

			<?php if ( $fields['indices_include_tab'] ): ?>
				<div id="indices"
					 role="tabpanel"
					 class="hidden overflow-x-auto no-scrollbar z-10 xl:w-[68%] xl:h-[56%] xl:absolute xl:top-2/4 xl:left-2/4 xl:-translate-y-1/2 xl:-translate-x-1/2 2xl:w-[66%] 2xl:h-[60%]">
					<h3 class="font-wadik text-[30px] text-left pb-[75px] block xl:!text-center xl:pb-[25px] 2xl:pb-[50px]"><?= $fields['indices_tab_name']; ?></h3>
					<?php require __DIR__ . '/indices-table.php'; ?>
				</div>
			<?php endif; ?>

			<?php if ( $fields['metals_include_tab'] ): ?>
				<div id="metals"
					 role="tabpanel"
					 class="hidden overflow-x-auto no-scrollbar z-10 xl:w-[68%] xl:h-[56%] xl:absolute xl:top-2/4 xl:left-2/4 xl:-translate-y-1/2 xl:-translate-x-1/2 2xl:w-[66%] 2xl:h-[60%]">
					<h3 class="font-wadik text-[30px] text-left pb-[75px] block xl:!text-center xl:pb-[25px] 2xl:pb-[50px]"><?= $fields['metals_tab_name']; ?></h3>
					<?php require __DIR__ . '/metals-table.php'; ?>
				</div>
			<?php endif; ?>

			<?php if ( $fields['crypto_include_tab'] ): ?>
				<div id="crypto"
					 role="tabpanel"
					 class="hidden overflow-x-auto no-scrollbar z-10 xl:w-[68%] xl:h-[56%] xl:absolute xl:top-2/4 xl:left-2/4 xl:-translate-y-1/2 xl:-translate-x-1/2 2xl:w-[66%] 2xl:h-[60%]">
					<h3 class="font-wadik text-[30px] text-left pb-[75px] block xl:!text-center xl:pb-[25px] 2xl:pb-[50px]"><?= $fields['crypto_tab_name']; ?></h3>
					<?php require __DIR__ . '/crypto-table.php'; ?>
				</div>
			<?php endif; ?>

		</div> <!-- End: Tabs content -->
	</div> <!-- End: Wrapper -->
</section>
