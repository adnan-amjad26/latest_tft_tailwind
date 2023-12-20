
<?php
	/**
	 * Block Name: Media Page
	 */

	$fields = get_fields();
	$text = $fields['media_text'];
	$media = $fields['media'];
	$img_day = $fields['media_img_day']['url'];
	$img_night = $fields['media_img_night']['url'];
	$cat_videos = array();
	$media_videos = array();
	$terms = get_terms(array("taxonomy" => "media_video_category", "hide_empty" => true));
	$tids = array();
	foreach ($terms as $term) {
		array_push($tids, $term->term_id);
		$args = array(
			'post_type' => 'media_video',
			'posts_per_page' => -1,
			'tax_query' => [
				[
					'taxonomy' => "media_video_category",
					'terms' => $term->slug,
					'field' => 'slug',
				]
			],
		);
		$q = new WP_Query($args);
		if ($q->have_posts()) {
			$all = $q->found_posts;
			$posts = array();
			while ($q->have_posts()) {
				$q->the_post();
				$temp = array();
				$temp['title'] = get_the_title();
				$temp['single'] = 1 == $all ? true : false;
				$fields_post = get_fields(get_the_ID());
				$temp['poster'] = $fields_post["mv_thumbnail_source"] == "provide" ? $fields_post["mv_poster"]['url'] : "https://img.youtube.com/vi/" . str_replace("?autoplay=1", "",  explode("/embed/",  $fields_post["mv_video_url"])[1]) . "/hqdefault.jpg";
				if ($fields_post["mv_video_source_type"] == "url" || !$fields_post["mv_video_source_type"]) {
					$temp['url'] = $fields_post["mv_video_url"];
				} else {
					$temp['poster'] =  $fields_post["mv_poster"]['url'];
					$temp['url'] = $fields_post["mv_video_file"]['url'];
				}
				array_push($posts, $temp);
			}
			$media_videos[$term->slug]['videos'] = $posts;
			$media_videos[$term->slug]['cat_name'] = $term->name;
			wp_reset_postdata();
		}
	}
?>
	<section class="media-page relative sm:pt-56 z-[9] pb-[300px] overflow-x-hidden">
		<figure class="bg absolute top-0 left-0 w-full h-full max-h-[1085px] z-0 block">
			<div class="imgs-day  relative z-10 sm:h-screen">
				<img decoding="async" loading="lazy" class="w-full sm:object-cover sm:h-screen sm:object-center sm:w-full" src="<?= $img_day ?>" alt="Media background day">
			</div>
			<div class="imgs-night relative z-10 sm:h-screen">
				<img decoding="async" loading="lazy" class="w-full sm:object-cover sm:h-screen sm:object-center sm:w-full" src="<?= $img_night ?>" alt="Media background night">
			</div>
			<div class="media-hero-bg absolute left-0 top-14 w-full h-full"></div>
		</figure>
		<section class="page-title-area relative z-[81] pt-[289px] pb-[370px] xl:pb-[31.7708vw] lg:pb-[33.7135vw] md:pb-[50vw] md:pt-[20vw] sm:pb-[32vw] sm:pt-[18vw]">
			<div class="container max-w-full pl-10 pr-10 m-auto">
				<div class="title-wrapper text w-full sm:text-center">
					<h1 class="font-wadik 2xl:text-[64px]/[1.2] xl:text-[64px]/[1.2] md:text-[54px]/[1.2] lg:text-[54px]/[1.2] sm:text-[48px]/[1.1] text-white"><?php the_title(); ?></h1>
				</div>
				<div class="media-text text w-full sm:text-center">
					<h2 class="absolute mt-[20px] max-w-[597px] font-wadik 2xl:text-[18px]/[1.2] xl:text-[18px]/[1.2] md:text-[16px]/[1.2] lg:text-[16px]/[1.2] sm:text-[14px]/[1.1] text-white"><?= $text ?></h2>
				</div>
			</div>
		</section>
		<section class="media-page-video relative pb-[240px] z-[81] mt-[-191px] xl:mt-[-394px] xl:after:!h-[700px] lg:after:!h-[520px] lg:after:!top-[23px] lg:mt-[-390px] lg:before:!h-[calc(100%_-_352px)] md:before:!h-[calc(100%_-_352px)] md:after:!h-[520px] md:after:!top-[23px] md:mt-[-390px] sm:after:!h-[620px]  sm:mt-[-90px] sm:after:!top-[-3vw]">
			<div class="media-video mt-52 w-full !px-10 mx-auto relative max-w-[1731px] sm:my-[9.1265vw]">
				<div class="video-topics media-topics items-center flex relative z-[9] w-fit mx-auto flex-wrap xl:justify-center lg:justify-center md:justify-center sm:justify-center">
					<?php
					$first = "current";
					foreach ($media_videos as $media_video) {
					?>
						<button data-cat="<?= md5($media_video['cat_name']) ?>" class="media-decor-button sm:!mx-0 meida-topic <?= $first ?> w-[217px] mr-[21px] h-[71px] xl:!mx-[10px] xl:mt-[10px] lg:!mx-[10px] lg:mt-[10px] md:!mx-[10px] md:mt-[10px] sm:mt-[10px]  px-[20px] font-wadik text-[14px]/[1.2] text-white justify-center items-center">
							<?= mb_strimwidth($media_video['cat_name'], 0, 42, "...") ?>
						</button>
					<?php
						if ($first == "current") {
							$first = "";
						}
					}
					?>
				</div>
				<div class="video-frame v-collection-item video-decorated relative z-[12] max-w-[1158px] h-[734px] pt-[46.9px] mt-[50px] xl:w-[75.3906vw] xl:h-[47.7865vw] xl:mt-[50px] xl:pt-[3.0406vw] lg:w-[75.3906vw] lg:h-[47.7865vw] lg:pt-[3.0406vw] md:w-[75.3906vw] md:h-[47.7865vw] md:pt-[3.0406vw] sm:w-[89.5698vw] sm:h-[56.7927vw] sm:pt-[3.65vw] w-full mx-auto  mb-[50px]">
					<iframe src="<?= $media_videos[array_keys($media_videos)[0]]['videos'][0]['url'] ?>" id="media_source_iframe" class="z-[12] source-iframe video-switch relative max-w-[1132px] h-[646px] w-full xl:w-[73.6979vw] xl:h-[42.0573vw] lg:w-[73.6979vw] lg:h-[42.0573vw] md:w-[73.6979vw] md:h-[42.0573vw] sm:w-[87.3698vw] sm:h-[49.76vw] mx-auto" frameborder="0"></iframe>
					<div class="diamond-1 absolute top-0 left-0 translate-x-[-44%] translate-y-[-32%] ">
						<img decoding="async" loading="lazy" class="w-[244px] h-[437px]" src="<?php echo get_template_directory_uri(); ?>/img/media-diamond-1.png" alt="">
					</div>
					<div class="diamond-2 absolute bottom-0 right-0 translate-x-[48%] translate-y-[38%] ">
						<img decoding="async" loading="lazy" class="w-[239px] h-[366px]" src="<?php echo get_template_directory_uri(); ?>/img/media-diamond-2.png" alt="">
					</div>
				</div>
				<div class="media-page-torch absolute w-[63px] top-[60%] right-0 z-[5] -translate-x-[57%] -translate-y-[54%]  sm:hidden hidden">
					<img src="<?php echo get_template_directory_uri(); ?>/img/media-page-torch.svg" alt="">
					<div class="glow"></div>
				</div>
			</div>
			<div class="media-page-slider relative max-w-[1731px] px-10 z-10 mx-auto pb-[104px] sm:!pb-[54px] sm:!pr-0">
				<h2 class="font-wadik text-[16px]/[1.2] text-white"><?= $slider_name ?></h2>
				<?php
				$shown = "block";
				foreach ($media_videos as $category => $videos) {
				?>
					<div data-cat="<?= md5($media_videos[$category]['cat_name']) ?>" class=" <?= $shown ?> swiper-slider overflow-hidden h-fit">
						<div class="swiper-wrapper flex">
							<?php
							foreach ($videos["videos"] as $vid) {
							?>
								<div class="hover:cursor-pointer swiper-slide video-frame v-collection-item flex video-decorated relative z-[9] max-w-[264px] max-h-[148px] min-w-[264px] min-h-[168px] pt-[10px] mt-[10px] mb-[10px]">
									<button data-url="<?= $vid['url'] ?>" class="source-iframe video-switch z-[9] relative max-w-[261px] px-[1px] h-[146px] w-full mx-auto"><img class="w-full h-full object-cover" src="<?= $vid['poster'] ?>" /></button>
								</div>
							<?php
							}
							?>
						</div>
						<div class="swiper-scrollbar !mt-[10px] !bg-[rgba(73, 56, 48, 0.50)] !rounded-[25px] !h-[10px] !overflow-hidden !static !w-full !flex !items-center"></div>
					</div>
				<?php
					if ($shown == "block") {
						$shown = "hidden";
					}
				}
				?>
			</div>
		</section>
		<script src="<?php echo get_template_directory_uri(); ?>/js/media-page.min.js?t=<?= time() ?>"> </script>
	</section>
	<div class="media-lower-bg absolute w-full h-[550px] translate-y-[-114%] z-[84] sm:h-[500px]"></div>
