<?php
$actionData = get_fields();
$title = $actionData['title'];
$text = $actionData['text'];
$data = $actionData['action_points'];
?>
<section class="w-full py-[300px] px-[16px] 2xl:px-[85px]" style="background: url('<?php echo get_template_directory_uri(); ?>/img/action-bg.svg') top center;">
	<div class="max-w-[1330px] w-full mx-auto">
		<div class="flex flex-col text-center gap-[30px]">
			<h3 class="max-w-[352px] mx-auto md:mx-0 md:max-w-full w-full text-[36px] lg:text-[44px] 2xl:text-[50px] text-white"><?php echo $title;?></h3>
			<p class="max-w-[334px]  md:max-w-[1316px] w-full mx-auto text-[18px] font-[500]">
				<?php echo $text;?>
			</p>
		</div>


		<div class="w-full flex flex-wrap items-center justify-center mt-[130px]">
			<?php foreach ($data as $row): ?>
				<!-- Action Card -->
				<div class="w-full lg:w-1/2 p-[20px] mb-[40px]">
					<div class="max-w-[658px] w-full mx-auto relative">
						<div class="absolute text-center flex flex-col gap-[30px] px-[20px] rounded-[30px] left-[50px] right-[50px] top-[75px] bottom-[75px] max-h-[calc(100%_-_100px)] overflow-auto">
							<div class="w-[245px] h-[207px] mx-auto">
								<img class="w-full h-[full]" src="<?php echo $row['action_point_image']['url']; ?>" alt="">
							</div>
							<h3 class="text-[24px] text-white"><?php echo $row['action_point_title']; ?></h3>
							<p class="max-w-[456px] w-full mx-auto text-[20px] text-white font-[500]">
								<?php echo $row['action_point_description']; ?>
							</p>
						</div>
						<img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/action-card-bg.svg" alt="">
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
