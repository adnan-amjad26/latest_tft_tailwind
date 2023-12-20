<?php
/*
 * Block : Why Choose Table
 * */


$title = get_field('title');
$table = get_field('table');
?>

<div class="w-full pt-[200px] pb-[100px] bg-black relative px-[16px] md:px-[40px]">
	<div class="max-w-[1068px] w-full mx-auto relative z-[10]">
		<h2 class="text-[36px] xl:text-[40px] 2xl:text-[40px] mb-[40px] max-w-[600px] w-full mx-auto text-center">WHY
			CHOOSE THE FUNDED TRADER</h2>
		<div class="flex items-center mb-[-4px] md:mb-[-17px]">
			<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/table-top-shape.svg" alt="torch">
		</div>
		<div class="w-full relative custom-groove-border bg-white p-[10px] sm:p-[30px] md:p-[30px_60px] min-h-[800px]">
			<table class="w-full border-0 border-collapse text-[#3A4E5E] text-[14px] md:text-[16px] whychoose-table">
				<thead>
					<tr>
						<th></th>
						<th><img class="mb-[40px] mx-auto" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/ftmo-logo.svg" alt="torch"></th>
						<th><img class="mb-[40px] mx-auto" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/fundednext.svg" alt="torch"></th>
						<th><img class="mb-[40px] mx-auto" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/trade-logo.svg" alt="torch"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($table['body'] as $row) : ?>
						<tr>
							<?php foreach ($row as $index => $cell) : ?>

								<td class="py-[15px] <?php if ($index != 0) echo ' text-center';
														if ($cell['c'] == 'yes') echo ' yes';
														if ($cell['c'] == 'no') echo ' no';
														if ($cell['c'] != '' && (count($row) == $index + 1)) {
															echo ' tooltipp';
														}
														?>"
														 <?php if ($cell['c'] != '' && (count($row) == $index + 1)) {
															echo ' data-tooltip ="'.$cell['c'].'"';
														}?>>
														<?php
																	if ($cell['c'] !== 'yes' && $cell['c'] !== 'no' && count($row) != $index + 1) {
																		echo $cell['c'];
																	}

																	?></td>
							<?php endforeach; ?>

						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

		</div>
		<div class="flex items-center mt-[-4px] md:mt-[-14px] relative">
			<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/table-bottom-shape.svg" alt="torch">
		</div>
	</div>
	<figure class="bg absolute bottom-0 left-0 w-full h-full dark:h-[auto] z-0 before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:z-[2] before:h-[50%] dark:before:h-[100px] before:bg-gradient-to-t dark:before:from-[#5e113b]  before:from-[#5c69ac]">
		<img class="w-full imgs-day" src="<?php echo get_template_directory_uri(); ?>/img/lightMode-media.svg" alt="">
		<img class="w-full imgs-night !object-bottom bottom-[-295px] relative" src="<?php echo get_template_directory_uri(); ?>/img/media-bg.svg" alt="">
	</figure>
</div>
