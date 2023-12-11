<?php

/**
 * Block Name: Media Page
 */

$fields = get_fields();
$title = $fields['media_title'];
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
<section class="media-page relative sm:pt-56 z-[9] overflow-x-hidden">
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
	<section class="media-page-video relative z-[81] mt-[-191px] xl:mt-[-394px] xl:after:!h-[700px] lg:after:!h-[520px] lg:after:!top-[23px] lg:mt-[-390px] lg:before:!h-[calc(100%_-_352px)] md:before:!h-[calc(100%_-_352px)] md:after:!h-[520px] md:after:!top-[23px] md:mt-[-390px] sm:after:!h-[620px]  sm:mt-[-90px] sm:after:!top-[-3vw]">
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
	<?php
	$blog_posts = array();
	$terms = get_terms(array("taxonomy" => "category", "hide_empty" => true));
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
	);
	$q = new WP_Query($args);
	if ($q->have_posts()) {
		$all = $q->found_posts;
		$posts = array();
		while ($q->have_posts()) {
			$q->the_post();
			$temp = array();
			$temp['title'] = get_the_title();
			$temp['excerpt'] = mb_strimwidth(get_the_excerpt(), 0, 310, "...");
			$temp['image'] = get_the_post_thumbnail_url();
			$temp['url'] = get_permalink(get_the_ID());
			$temp['single'] = 1 == $all ? true : false;
			array_push($posts, $temp);
		}
		$blog_posts['all_posts']['posts'] = $posts;
		$blog_posts["all_posts"]['cat_name'] = "All posts";
		wp_reset_postdata();
	}
	foreach ($terms as $term) {
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => -1,
			'tax_query' => [
				[
					'taxonomy' => "category",
					'terms' => [$term->slug],
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
				$temp['excerpt'] = mb_strimwidth(get_the_excerpt(), 0, 310, "...");
				$temp['image'] = get_the_post_thumbnail_url();
				$temp['url'] = get_permalink(get_the_ID());
				$temp['single'] = 1 == $all ? true : false;
				array_push($posts, $temp);
			}
			$blog_posts[$term->slug]['posts'] = $posts;
			$blog_posts[$term->slug]['cat_name'] = $term->name;
			wp_reset_postdata();
		}
	}
	?>
	<section class="media-page-blog pt-[104px] md:pt-[72px] sm:pt-[72px] pb-[200px] sm:mb-[180px] sm:pb-[0px] md:pb-[0px]  z-[9] relative overflow-visible mb-[400px]">
		<div class="hidden blog-content">
			<div class="blog-categories relative max-w-[1731px] z-10 mx-auto px-10 ">
				<h2 class="font-wadik text-[50px]/[1.2] text-center text-white">BLOG</h2>
				<div class="blog-topics media-topics items-center flex relative z-[9] w-fit mx-auto flex-wrap xl:justify-center lg:justify-center md:justify-center sm:justify-center my-[50px]">
					<?php
					$first = "current";
					foreach ($blog_posts as  $key => $val) {
						$name = $val['cat_name'];
					?>
						<button data-pan="<?= md5($name) ?>" class="media-decor-button sm:!mx-0 blog-topic <?= $first ?> w-[217px] mr-[21px] h-[71px] xl:!mx-[10px] xl:mt-[10px] lg:!mx-[10px] lg:mt-[10px] md:!mx-[10px] md:mt-[10px] sm:mt-[10px]  px-6 font-wadik text-[14px]/[1.2] text-white justify-center items-center">
							<?= mb_strimwidth($name, 0, 42, "...") ?>
						</button>
					<?php
						if ($first == "current") {
							$first = "";
						}
					}
					?>
				</div>
			</div>
			<div class="media-page-torch absolute z-[7] top-[31%] max-w-[1731px] w-fit left-[117px] translate-x-[-50%] px-10 hidden">
				<img src="<?php echo get_template_directory_uri(); ?>/img/media-page-torch.svg" alt="">
				<div class="glow"></div>
			</div>
			<?php
			foreach ($blog_posts as $key => $val) {
				$name = $val['cat_name'];
			?>
				<div data-pan="<?= md5($name) ?>" data-page='1' class="flex blog-articles px-10 max-w-[1332px] w-fit mx-auto flex-wrap z-[8] xl:max-w-[100%] relative !left-[17px] xl:!left-[26px] lg:!left-[26px]  md:!left-[26px] sm:!left-[0px] xl:justify-center lg:justify-center md:justify-center sm:justify-center] sm:mt-[10vw]">
					<?php
					foreach ($val['posts'] as $blog_post) {
					?>
						<div class="blog-article hidden w-[384px] h-[513px] relative mr-[50px] xl:!mr-[50px] lg:!mr-[50px] md:!mr-[50px] mb-[50px] sm:mb-[10vw] sm:!mx-auto">
							<img src="<?php echo get_template_directory_uri(); ?>/img/blog-post-frame-top.svg" class="absolute w-[92.6%] h-fit z-[9] top-0 left-0 translate-y-[-5.8%] translate-x-[3.7%] " alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/img/blog-post-frame-bottom.svg" class="absolute w-[92.6%] h-fit z-[9] bottom-0 left-0 translate-y-[-10.5%] translate-x-[3.7%]" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/img/blog-post-frame-left.svg" class="absolute w-fit h-[86.07%] z-[9] top-0 left-0 translate-y-[8.1%] translate-x-[-2.8%]" alt="">
							<img src="<?php echo get_template_directory_uri(); ?>/img/blog-post-frame-right.svg" class="absolute w-fit h-[86.07%] z-[9] top-0 right-0 translate-y-[8.1%] translate-x-[-0.1%]" alt="">
							<div class="blog-article-clip w-full h-full">
								<div class="blog-article-inframe bg-[#000] w-[350px] h-[466px] m-auto !mt-[20px]">
									<div class="w-full h-full flex flex-col">
										<a href="<?= $blog_post['url'] ?>" class="w-full max-w-[342px] h-[181px] block article-image">
											<img src="<?= $blog_post['image'] ?>" class="object-cover w-full max-w-[342px] h-[181px] article-image" alt="">
										</a>
										<div class="scrollable">
											<h3 class="font-wadik text-[14px]/[1.2] text-white uppercase font-[700] mt-7 mb-[10px] max-w-[304px] mx-auto text-center">
												<a href="<?= $blog_post['url'] ?>" class="hover:text-[14px]/[1.2] hover:text-white hover:no-underline hover:cursor-pointer text-[14px]/[1.2] text-white"> <?= $blog_post['title'] ?></a>
											</h3>
											<p class="font-montserrat text-[14px]/[1.2] text-white text-center max-w-[304px] max-h-[128px] overflow-y-auto mx-auto font-[400]">
												<?= $blog_post['excerpt'] ?>
											</p>
										</div>
										<a href="<?= $blog_post['url'] ?>" class="flex w-[188px] h-[46px]  bg-no-repeat font-wadik text-[10px]/[1.2] font-[700] text-white m-auto mb-[8px] relative">
											<img src="<?php echo get_template_directory_uri(); ?>/img/button-frame.svg" class="absolute w-full h-full top-0 left-0 object-contain" alt="">
											<div class="bg-[#493830] g-[#493830] bg-center bg-contain ] w-[142px] h-[31px] m-auto pt-[3px] flex items-center justify-center">Read more</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			<?php
			}
			?>
			<div class="media-lower-bg absolute z-[0] bottom-0 w-full h-[600px] translate-y-[40%]  sm:h-[500px]"></div>
			<?php
			foreach ($blog_posts as $key => $val) {
				$name = $val['cat_name'];
				$count = count($val['posts']) / 6;
				if ($count > 1) {

			?>
					<div data-pan="<?= md5($name) ?>" class="pagination w-fit flex items-center relative mx-auto z-[8]">
						<button data-page="<?= 1 ?>" class="pagination-arrow back w-[22px] h-[16px] mr-[10px]"></button>
						<?php

						if (fmod($count, intval($count)) > 0) {
							$count++;
						}
						for ($i = 1; $i <= $count; $i++) {
						?>
							<button data-page="<?= $i ?>" class="pagination-number flex justify-center font-wadik text-[10px]/[1.2] font-[700] text-white  items-center w-[23.5px] h-[22.5px] mr-[10px]"><?= $i ?></button>
						<?php
						}
						?>
						<button data-page="<?= 2 ?>" class="pagination-arrow next rotate-180 w-[22px] h-[16px]"></button>
					</div>
			<?php
				}
			}
			?>
		</div>
	</section>
	<script src="<?php echo get_template_directory_uri(); ?>/js/media-page.min.js?t=<?= time() ?>"> </script>
</section>
