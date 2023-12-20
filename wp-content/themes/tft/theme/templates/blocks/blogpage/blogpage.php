<?php

/**
 * Block Name: Blog Page
 */
$fields = get_fields();
$text = $fields['blog_text'];
$img_day = $fields['blog_img_day']['url'];
$img_night = $fields['blog_img_night']['url'];
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
	<section class="media-page-blog pt-[104px] md:pt-[72px] sm:pt-[72px] pb-[100px] sm:mb-[180px] sm:pb-[0px] md:pb-[0px]  z-[9] relative overflow-visible mb-[260px]">
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
				<div data-pan="<?= md5($name) ?>" data-page='1' class="z-[99] flex blog-articles px-10 max-w-[1332px] w-fit mx-auto flex-wrap z-[8] xl:max-w-[100%] relative !left-[17px] xl:!left-[26px] lg:!left-[26px]  md:!left-[26px] sm:!left-[0px] xl:justify-center lg:justify-center md:justify-center sm:justify-center] sm:mt-[10vw]">
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
</section>
