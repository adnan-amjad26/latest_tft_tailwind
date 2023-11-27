<?php
/**
 * Block Name: Symbols specs
 */

$fields = get_fields();

$information_table_caption = $fields['information_table_caption'];
$information_table_labels  = $fields['information_table_labels'];
$hours_table_caption       = $fields['hours_table_caption'];
$hours_table_labels        = $fields['hours_table_labels'];
?>

<section
		class="trade-section-upper overflow-visible z-10 relative pt-[100px] pb-[50px] md:pt-[50px] xl:pb-[162px] before:block before:absolute before:top-0 before:left-0 before:w-full before:h-[calc(100%-100px)] before:bg-olive before:-z-10 dark:before:bg-night-blue xl:before:h-[calc(100%-162px)] after:absolute after:z-20 after:left-0 after:top-[calc(100%-100px)] after:w-full after:h-[200px] after:-z-10  after:bg-[linear-gradient(0deg,_rgba(129,131,20,0.00)_0%,_#818314_50%)] xl:after:bg-[linear-gradient(0deg,_rgba(129,131,20,0.00)_0%,_#818314_66%)] dark:after:bg-[linear-gradient(0deg,_rgba(0,0,50,0.00)_0%,_#000032_50%)] xl:dark:after:bg-[linear-gradient(0deg,_rgba(0,0,50,0.00)_0%,_#000032_66%)] xl:after:top-[calc(100%-162px)] xl:after:h-[500px]">
	<!-- Wrapper -->
	<div class="max-w-[1920px] mx-auto px-[15px] md:px-[30px] lg:px-[50px] xl:px-[110px]">
		<h2 class="font-wadik text-[30px] text-white text-center"><?= $fields['title']; ?></h2>
		<div class="font-montserrat text-[18px] text-white mt-[25px] text-center [&_strong]:font-bold [&_strong]:text-yellow"><?= $fields['subtitle']; ?></div>
		<form id="symbols-spec-search" class="block mt-[25px]">
			<input class="bg-black font-montserrat font-semibold block w-full p-[25px] text-[14px] rounded-[25px] outline-none text-white placeholder:text-[#898989] xl:text-[18px]"
				   type="text"
				   maxlength="20"
				   placeholder="<?= $fields['input_placeholder']; ?>"
			/>
		</form>

		<!-- Tabs -->
		<div class="flex items-center justify-center -mx-2.5 mt-[25px] md:mx-0 md:gap-x-3 lg:gap-x-[25px]"
			 data-tabs-toggle="#symbols-specs-tab-content"
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

			<?php if ( $fields['forex_include_tab'] ): ?>
				<button class="hidden relative before:block before:pt-[30%] bg-button-standard bg-no-repeat bg-contain bg-center w-full max-h-[85px] max-w-[283px] text-white  aria-selected:text-orange aria-selected:block transition-all duration-300 hover:translate-y-[-0.3rem] md:block"
						role="tab"
						aria-selected="true"
						aria-controls="forex_specs"
						data-tabs-target="#forex_specs"
						type="button">
					<span class="font-wadik text-[15px] absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2 md:text-[12px] lg:text-[15px]"><?= $fields['forex_tab_name']; ?></span>
				</button>
			<?php endif; ?>

			<?php if ( $fields['indices_include_tab'] ): ?>
				<button class="hidden relative before:block before:pt-[30%] bg-button-standard bg-no-repeat bg-contain bg-center w-full max-h-[85px] max-w-[283px] text-white  aria-selected:text-orange aria-selected:block transition-all duration-300 hover:translate-y-[-0.3rem] md:block"
						role="tab"
						aria-selected="false"
						aria-controls="indices_specs"
						data-tabs-target="#indices_specs"
						type="button">
					<span class="font-wadik text-[15px] absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2 md:text-[12px] lg:text-[15px]"><?= $fields['indices_tab_name']; ?></span>
				</button>
			<?php endif; ?>

			<?php if ( $fields['metals_include_tab'] ): ?>
				<button class="hidden relative before:block before:pt-[30%] bg-button-standard bg-no-repeat bg-contain bg-center w-full max-h-[85px] max-w-[283px] text-white  aria-selected:text-orange aria-selected:block transition-all duration-300 hover:translate-y-[-0.3rem] md:block"
						role="tab"
						aria-selected="false"
						aria-controls="metals_specs"
						data-tabs-target="#metals_specs"
						type="button">
					<span class="font-wadik text-[15px] absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2 md:text-[12px] lg:text-[15px]"><?= $fields['metals_tab_name']; ?></span>
				</button>
			<?php endif; ?>

			<?php if ( $fields['crypto_include_tab'] ): ?>
				<button class="hidden relative before:block before:pt-[30%] bg-button-standard bg-no-repeat bg-contain bg-center w-full max-h-[85px] max-w-[283px] text-white  aria-selected:text-orange aria-selected:block transition-all duration-300 hover:translate-y-[-0.3rem] md:block"
						role="tab"
						aria-selected="false"
						aria-controls="crypto_specs"
						data-tabs-target="#crypto_specs"
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
		<div id="symbols-specs-tab-content"
			 class="[border-image:url('img/leaderboard-border.png')_70_fill_/_70px_/_0] bg-black mt-[25px] px-[25px] py-[125px] rounded-[40px] relative z-30 md:px-10 xl:px-20">

			<?php if ( $fields['forex_include_tab'] ): ?>
				<div id="forex_specs"
					 role="tabpanel"
					 class="hidden">
					<?php
					foreach ( $fields['forex_specs'] as $spec ) {
						$name               = $spec['name'];
						$slug               = sanitize_title( $spec['name'] );
						$information_values = $spec['information_values'];
						$hours_values       = $spec['hours_values'];

						require __DIR__ . '/accordion.php';
					}
					?>
				</div>
			<?php endif; ?>

			<?php if ( $fields['indices_include_tab'] ): ?>
				<div id="indices_specs"
					 role="tabpanel"
					 class="hidden">
					<?php
					foreach ( $fields['indices_specs'] as $spec ) {
						$name               = $spec['name'];
						$slug               = sanitize_title( $spec['name'] );
						$information_values = $spec['information_values'];
						$hours_values       = $spec['hours_values'];

						require __DIR__ . '/accordion.php';
					}
					?>
				</div>
			<?php endif; ?>

			<?php if ( $fields['metals_include_tab'] ): ?>
				<div id="metals_specs"
					 role="tabpanel"
					 class="hidden">
					<?php
					foreach ( $fields['metals_specs'] as $spec ) {
						$name               = $spec['name'];
						$slug               = sanitize_title( $spec['name'] );
						$information_values = $spec['information_values'];
						$hours_values       = $spec['hours_values'];

						require __DIR__ . '/accordion.php';
					}
					?>
				</div>
			<?php endif; ?>

			<?php if ( $fields['crypto_include_tab'] ): ?>
				<div id="crypto_specs"
					 role="tabpanel"
					 class="hidden">
					<?php
					foreach ( $fields['crypto_specs'] as $spec ) {
						$name               = $spec['name'];
						$slug               = sanitize_title( $spec['name'] );
						$information_values = $spec['information_values'];
						$hours_values       = $spec['hours_values'];

						require __DIR__ . '/accordion.php';
					}
					?>
				</div>
			<?php endif; ?>

		</div> <!-- End: Tabs content -->
	</div> <!-- Wrapper -->

</section>
