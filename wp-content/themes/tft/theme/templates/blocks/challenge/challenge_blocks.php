<?php
//Funding Process Challenge Blocks

$challengeData = get_fields()['process_challenge_blocks'];

?>
<section class="w-full px-[16px] md:px-[40px] 2xl:px-[85px] mb-[40px] mt-[100px]">
	<div class="max-w-[1700px] w-full mx-auto">
		<div class="w-full flex flex-col xl:flex-row gap-[25px]">
			<?php foreach ($challengeData as $data) : ?>
				<div class="w-full max-w-[534px] xl:w-1/3 relative mx-auto">
					<div
						class="absolute left-[36px] right-[36px] top-[100px] bottom-[75px] p-[20px_10px] md:p-[30px_20px]">
						<h4 class="text-[20px] md:text-[24px] text-white wadik text-center uppercase mt-[15px]"><?php echo $data['block_title']; ?></h4>
                        <div class="challenge-content-box text-[18px] font-bold text-white xl:max-h-[calc(100%_-_35px)] overflow-auto uppercasee text-center mt-[30px]">
                            <?php echo $data['block_list']; ?>
                        </div>

					</div>
					<img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/challang-type-bg1.svg" alt="">
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>


