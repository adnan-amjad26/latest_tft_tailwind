<?php
$timelineData = get_fields();
$data = $timelineData['timeline_feed'];
?>

<section class="w-full relative before:content-[''] before:absolute before:left-0 before:right-0 before:top-0 before:h-[400px] md:before:h-[700px] relative before:bg-gradient-to-b before:from-[#000] before:from-40% before:z-[2] after:content-[''] after:absolute after:left-0 after:right-0 after:top-[-349px] after:h-[350px] after:bg-gradient-to-t after:from-[#000] after:z-[2]">
	<div class="max-w-[1415px] w-full mx-auto px-[16px] 2xl:px-[85px] absolute left-0 right-0 top-0 z-[2]">
		<div class="flex flex-col items-center justify-center text-center gap-[30px] relative">
			<div class="w-[60px] table-tabs block relative mx-auto">
				<div class="w-[60px] h-[230px]">
					<img class="h-full relative z-[2]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch.svg" alt="torch">
					<div class="absolute z-[1] w-full pb-[80%] rounded-full glow bg-[#ff4202] top-[35%] left-[50%] opacity-[0.7] translate-x-[-50%]"></div>
				</div>
			</div>
			<h3 class="max-w-[318px] mx-auto md:mx-0 text-[50px] text-white">OUR TIMELINE</h3>
		</div>
	</div>
	<div class="flex flex-col relative">
		<div class="absolute bottom-[30%] left-0 right-0 overflow-x-auto hide-scrollbar flex flex-col justify-end h-full z-[99]">
			<img class="min-w-[1800px] md:min-w-[inherit] w-full min-h-[170px] 2xl:min-h-[205px] object-cover absolute" src="<?php echo get_template_directory_uri(); ?>/img/frame-line-bg.svg" alt="">
			<ul class="pl-[150px] 2xl:px-0 2xl:w-[80%] min-w-[1400px] 2xl:min-w-[1490px] mx-auto flex justify-start 2xl:justify-between gap-[70px] lg:gap-[6%] whitespace-nowrap pt-[8%]">
				<?php foreach ($data as $row):?>
					<li class="2xl:w-full timeline-content-link relative">
						<img class="w-full relative top-[-55%] xl:top-[-45%] 2xl:top-[-39%]" src="<?php echo get_template_directory_uri(); ?>/img/timeline-tag.svg" alt="">

						<div class="timeline-content w-[439px] absolute left-1/2 -translate-x-1/2 bottom-[100%] opacity-0 pointer-events-none">
							<div class="absolute left-0 right-0 top-0 bottom-0 z-[2] whitespace-normal p-[50px_88px] text-center text-[#181818]">
								<h4 class="max-w-[128px] mx-auto text-[18px] wadik pt-[40px] mb-[18px]"><?php echo @$row['date']; ?></h4>
								<p class="max-w-[257px] w-full mx-auto text-[18px] font-medium"><?php echo @$row['news'];?></p>
							</div>
							<img class="w-full relative top-[-60%]" src="<?php echo get_template_directory_uri(); ?>/img/timeline-content-bg.png" alt="">
						</div>
					</li>
				<?php endforeach;?>
		</div>
		<img class="w-full h-[1400px] md:h-[2000px] lg:h-auto object-cover object-left lg:object-contain" src="<?php echo get_template_directory_uri(); ?>/img/timeline-bg.svg" alt="">
	</div>
</section>
