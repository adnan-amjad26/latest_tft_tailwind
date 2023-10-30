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
<section class="testimonials s-padding text-center z-10<?php echo $bg; ?>" data-scroll-section>
    <div class="container z-10 relative">
        <div class="row justify-center">
            <?php if($image || $title): ?>
                <div class="w-full">
                    <?php if($image): ?>
                        <div class="icon mb-12 w-28 mx-auto">
                            <img decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <?php if($title): ?>
                        <div class="title">
                            <h3><?php echo $title; ?></h3>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
			<?php if($trustpilot): ?>
				<div class="button text-center mt-20">
					<a href="<?php echo $trustpilot['url']; ?>" class="trustpilot inline-flex items-end text-3xl gap-8 hover:scale-95"<?php if($trustpilot['target']) echo ' target="'.$trustpilot['target'].'"'; ?> rel="noopener noreferrer">
						<span><?php echo $trustpilot['title']; ?></span>
						<img class="w-72" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/trustpilot.svg" alt="trustpilot">
					</a>
				</div>
			<?php endif; ?>
            <div class="w-full lg:w-5/6 mt-20 lg:mt-24">
                <?php if($reviews): ?>
					<div class="swiper overflow-visible">
						<div class="swiper-wrapper">
							<?php foreach($reviews as $review): ?>
								<?php $name = $review['consumer']['displayName']; ?>
								<?php $text = $review['text']; ?>
								<?php $rating = $review['stars']; ?>
								<?php if($rating >= 4): ?>
									<div class="swiper-slide flex flex-col justify-between review-container">
										<div class="top">
											<div class="content">
												<?php if($name): ?>
													<div class="title h6 mb-4"><p><?php echo $name; ?></p></div>
												<?php endif; ?>
												<div class="review-text">
													<span><?php
														$str = $text;
														if(strlen($text) > 250) {
															$str = explode("\n", wordwrap($text, 250));
															$str = $str[0] . '...';
														} echo $str;
													?></span>
												</div>
											</div>
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
										<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/testimonials-top.svg" alt="testimonials-top">
										<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/testimonials-bottom.svg" alt="testimonials-bottom">
										<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/gem.svg" alt="gem">
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
