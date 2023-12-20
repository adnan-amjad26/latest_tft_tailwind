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

									<div class="swiper-slide flex flex-col justify-between review-container relative">
											<div class="top absolute left-[50px] 2xl:left-[80px] right-[50px] 2xl:right-[80px] top-[50px] bottom-[50px]">
												<div class="content flex flex-col gap-[15px] justify-between h-full">
													<?php if($name): ?>
														<div class="title mb-[14px] 2xl:mb-[35px]"><h4 class="text-[18px] 2xl:text-[24px]"><?php echo $name; ?></h4></div>
													<?php endif; ?>
													<div class="review-text overflow-auto">
														<p class="text-[16px]"><?php
															$str = $text;
															if(strlen($text) > 250) {
																$str = explode("\n", wordwrap($text, 250));
																$str = $str[0] . '...';
															} echo $str;
														?></p>
													</div>
													<div class="stars flex gap-[10px] items-center justify-center">
															<?php if($rating): ?>
																<?php for($i = 1; $i <= $rating; $i++): ?>
																	<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/star.png" alt="star">
																<?php endfor; ?>
															<?php endif; ?>
														</div>
													</div>
												</div>
										<img class="w-full" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/tstimonial-frame.svg" alt="">
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
