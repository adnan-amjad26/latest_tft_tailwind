<?php
//Funding Process Challenge Blocks
$challengeData = get_fields()['process_challenge_blocks'];
?>
<section class="w-full px-[16px] md:px-[40px] 2xl:px-[85px] my-[40px]">
	<div class="max-w-[1700px] w-full mx-auto">
		<div class="w-full flex flex-col xl:flex-row gap-[25px]">
			<?php foreach ($challengeData as $data) : ?>
			<div class="w-full max-w-[534px] xl:w-1/3 relative mx-auto">
				<div
					class="absolute left-[36px] right-[36px] top-[100px] bottom-[140px] p-[20px_10px] md:p-[30px_20px]">
					<h4 class="text-[20px] md:text-[24px] text-white wadik text-center uppercase"><?php echo $data['block_title']; ?>></h4>
					<ul class="text-[18px] font-bold text-white flex flex-col mt-[20px] max-h-[calc(100%_-_-46px)] xl:max-h-[calc(100%_-_35px)] overflow-auto uppercasee text-center">
						<li class="border-b border-white border-opacity-[0.5] py-[16px]">No minimum Trading days</li>
						<li class="border-b border-white border-opacity-[0.5] py-[16px]">Upon passing phase 1 receive
							phase 2
						</li>
						<li class="border-b border-white border-opacity-[0.5] py-[16px]">Receive first payout within 20
							days of
						</li>
						<li class="border-b border-white border-opacity-[0.5] py-[16px]">Low Virtual Profit target</li>
						<li class="border-b border-white border-opacity-[0.5] py-[16px]">Scale every single month by
							10%
						</li>
						<li class="border-b border-white border-opacity-[0.5] py-[16px]">Virtual Balanced based daily
							drawdown
						</li>
						<li class="border-b border-white border-opacity-[0.5] py-[16px]">Withdrawal requests processed
							in 3 days
						</li>
					</ul>
				</div>
				<img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/challang-type-bg1.svg" alt="">
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
