<?php
/**
 * Block Name: Reviews
 */
?>
<?php $reviews = get_field('reviews', 'option'); ?>
<?php $api_key = $reviews['api_key']; ?>
<?php $business_unit_id = $reviews['business_unit_id']; ?>
<?php $title = $reviews['title']; ?>
<?php $trustpilot = $reviews['trustpilot']; ?>
<?php $image = $reviews['image']; ?>
<?php $bg = get_field('bg'); ?>
<?php $bg = ($bg) ? ' '.$bg : ''; ?>
<?php
	$url = 'https://api.trustpilot.com/v1/business-units/'.$business_unit_id.'/reviews?apikey='.$api_key;
	$json = file_get_contents($url);
	$data = json_decode($json, true);
	$reviews = $data['reviews'];
?>
<section class="testimonials p-[50px_16px] md:p-[50px_40px] text-center z-10<?php echo $bg; ?>" data-scroll-section>
    <div class="max-w-[84.375%] w-full mx-auto z-10 relative">
        <div class="flex flex-col justify-center">
            <?php if($image || $title): ?>
                <div class="w-full">
                    <?php if($image): ?>
                        <div class="icon mb-12 w-28 mx-auto">
                            <img decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <?php if($title): ?>
                        <div class="title">
                            <h3 class="text-[36px] xl:text-[40px] 2xl:text-[40px]"><?php echo $title; ?></h3>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
			<?php if($trustpilot): ?>
				<div class="button text-center mt-[50px] mb-[100px]">
					<a href="<?php echo $trustpilot['url']; ?>" class="trustpilot inline-flex items-end text-3xl gap-8 hover:scale-95"<?php if($trustpilot['target']) echo ' target="'.$trustpilot['target'].'"'; ?> rel="noopener noreferrer">
						<span><?php echo $trustpilot['title']; ?></span>
						<img class="w-72" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/trustpilot.svg" alt="trustpilot">
					</a>
				</div>
			<?php endif; ?>
            <div class="w-full">
                <?php if($reviews): ?>
					<div class="swiper overflow-visible">
						<div class="swiper-wrapper">
							<?php foreach($reviews as $review): ?>
								<?php $name = $review['consumer']['displayName']; ?>
								<?php $text = $review['text']; ?>
								<?php $rating = $review['stars']; ?>
								<?php if($rating >= 4): ?>

									<div class="swiper-slide bg-black rounded-[44px] p-[3rem] flex flex-col justify-between review-container min-h-[400px]">
											<div class="top py-[20px] max-w-[258px] mx-auto min-h-[inherit]">
												<div class="content flex flex-col justify-between min-h-[inherit]">
													<?php if($name): ?>
														<div class="title"><h4 class="text-[24px]"><?php echo $name; ?></h4></div>
													<?php endif; ?>
													<div class="review-text">
														<p class="text-[16px]"><?php
															$str = $text;
															if(strlen($text) > 250) {
																$str = explode("\n", wordwrap($text, 250));
																$str = $str[0] . '...';
															} echo $str;
														?></p>
													</div>
													<div class="bottom mt-12">
														<div class="stars">
															<?php if($rating): ?>
																<?php for($i = 1; $i <= $rating; $i++): ?>
																	<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
																<?php endfor; ?>
															<?php endif; ?>
														</div>
													</div>
												</div>
											</div>
										<img class="w-[108.7%] top-[2px] 2xl:top-0 left-1/2 -translate-x-1/2 -translate-y-[60%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/testimonials-top.svg" alt="testimonials-top">
										<img class="w-[108.7%] bottom-[-30px] xl:bottom-[-22px] 2xl:bottom-[-30px] left-1/2 -translate-x-[50%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/testimonials-bottom.svg" alt="testimonials-bottom">
										<img class="w-[4rem] top-1/2 left-0 -translate-y-1/2 -translate-x-[60%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/gem.svg" alt="gem">
										<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/gem.svg" alt="gem">
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
						<?php if(count($reviews) > 4): ?>
							<div class="swiper-pagination mt-20 lg:mt-24"></div>
						<?php endif; ?>
					</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
