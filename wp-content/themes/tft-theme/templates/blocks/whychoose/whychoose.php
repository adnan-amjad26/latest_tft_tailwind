<?php
/*
 * Block : Why Choose Table
 * */


$title = get_field('title');
$table = get_field('table');
print_r($table);
?>

<div class="w-full pt-[200px] pb-[100px] bg-black relative px-[16px] md:px-[40px]">
	<div class="max-w-[1068px] w-full mx-auto relative z-[10]">
		<h2 class="text-[36px] xl:text-[40px] 2xl:text-[40px] mb-[40px] max-w-[600px] w-full mx-auto text-center">WHY
			CHOOSE THE FUNDED TRADER</h2>
		<div class="flex items-center mb-[-4px] md:mb-[-17px]">
			<img decoding="async" loading="lazy"
				 src="<?php echo get_template_directory_uri(); ?>/img/table-top-shape.svg" alt="torch">
		</div>
		<div class="w-full relative custom-groove-border bg-white p-[10px] sm:p-[30px] md:p-[30px_60px]">
			<table class="w-full border-0 border-collapse text-[#3A4E5E] text-[14px] md:text-[16px]">
				<thead>
				<tr>
					<th></th>
					<th><img class="mb-[40px] mx-auto" decoding="async" loading="lazy"
							 src="<?php echo get_template_directory_uri(); ?>/img/ftmo-logo.svg" alt="torch"></th>
					<th><img class="mb-[40px] mx-auto" decoding="async" loading="lazy"
							 src="<?php echo get_template_directory_uri(); ?>/img/fundednext.svg" alt="torch"></th>
					<th><img class="mb-[40px] mx-auto" decoding="async" loading="lazy"
							 src="<?php echo get_template_directory_uri(); ?>/img/trade-logo.svg" alt="torch"></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($table['body'] as $row): ?>
					<tr>
						<?php foreach ($row as $index => $cell): ?>

							<td class="py-[15px] <?php if ($index != 0) echo ' text-center';
							if ($cell['c'] == 'yes') echo ' yes';
							if ($cell['c'] == 'no') echo ' no'; ?>"><?php if ($cell['c'] !== 'yes' && $cell['c'] !== 'no') {
									echo $cell['c'];
								} ?></td>
						<?php endforeach; ?>

					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

		</div>
		<div class="flex items-center mt-[-4px] md:mt-[-14px] relative">
			<img decoding="async" loading="lazy"
				 src="<?php echo get_template_directory_uri(); ?>/img/table-bottom-shape.svg" alt="torch">
		</div>
	</div>
	<figure class="bg absolute bottom-0 left-0 w-full h-full z-0">
		<img class="w-full" class="imgs-night" src="<?php echo wp_get_upload_dir()['url'] . '/media-bg.svg'; ?>" alt="">

	</figure>
</div>
