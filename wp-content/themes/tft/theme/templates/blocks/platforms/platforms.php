<?php
/**
 * Block Name: Platforms
 */
?>
<?php $icon = get_field('icon'); ?>
<?php $title = get_field('title'); ?>
<?php $brokers = get_field('brokers'); ?>
<?php $image = get_field('image'); ?>
<?php $image_2 = get_field('image_2'); ?>
<?php $img_day = get_field('img_day'); ?>
<?php $img_night = get_field('img_night'); ?>


<section class="platform px-[16px] md:px-[40px] pt-[0] dark:pt-[100px] pb-[100px] relative z-[2] dark:bg-lilac before:z-[2] before:content-[''] before:absolute before:left-0 before:right-0 before:top-[-20px] before:h-[50%] before:bg-gradient-to-b dark:before:from-[#4e1e4d] before:from-30% before:pointer-events-none  after:content-[''] after:absolute after:left-0 after:right-0 after:bottom-0 after:h-[50%] after:bg-gradient-to-t dark:after:from-[#4e1e4d] after:from-30% after:pointer-events-none bg-[#d3b6e2]" data-scroll-section>
    <div class="max-w-[1350px] mx-auto relative z-10">
        <?php if($icon || $title): ?>
            <div class="flex">
                <div class="w-full text-center">
                    <?php if($icon): ?>
                        <div class="icon mb-12 w-28 mx-auto">
                            <img decoding="async" loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <?php if($title): ?>
                        <div class="title">
                            <h3 class="text-[36px] xl:text-[40px] 2xl:text-[40px]"><?php echo $title; ?></h3>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($brokers || $image || $image_2): ?>
            <div class="flex flex-col lg:flex-row items-center mt-[24px]">
                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end img-side !ml-[80px] !md:ml-[14%]">
                    <?php if($image || $image_2): ?>
                        <div class="parallax-scene inline-flex">
                            <?php if($image_2): ?>
                                <div data-depth="0.8">
                                    <img decoding="async" loading="lazy" src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>">
                                </div>
                            <?php endif; ?>
                            <?php if($image): ?>
                                <div data-depth="0.4">
                                    <img decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                                </div>
                            <?php endif; ?>
                            <div data-depth="0.2">
                                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/platform-gem-1.png" alt="platform-gem-1">
                            </div>
                            <div data-depth="0.2">
                                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/platform-gem-2.png" alt="platform-gem-2">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="w-full max-w-[415px] mx-auto pt-12 button-side">
                    <h4 class="text-[22px] text-center mb-[20px]">Our Trading Partners</h4>
                    <?php if($brokers): ?>
						<?php $i = 1; foreach($brokers as $broker): ?>
							<?php $image = $broker['image']; ?>
							<figure class="max-w-full md:max-w-[150px] flex flex-col justify-center items-center w-full mx-auto mb-[15px]">
								<button class="outline-0" data-broker="<?php echo $i; ?>">
									<img decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
								</button>
							</figure>
						<?php $i++; endforeach; ?>
						<div class="brokers-button-group">
							<?php $i = 1; foreach($brokers as $broker): ?>
								<?php $links = $broker['links']; ?>
								<?php if($links): ?>
									<div class="button-group mt-12 lg:mt-16<?php if($i == 1) echo ' active'; ?>" data-broker="<?php echo $i; ?>">
                                        <div class="max-w-[415px] buttons grid grid-cols-2 gap-[17px]">
												<?php foreach($links as $link): ?>
													<a href="<?php echo $link['url']; ?>" target="_blank" rel="noopener noreferrer">
														<img class="w-full" decoding="async" loading="lazy" src="<?php echo $link['image']['url']; ?>" alt="<?php echo $link['image']['title']; ?>">
													</a>
												<?php endforeach; ?>
											</div>
									</div>
								<?php endif; ?>
							<?php $i++; endforeach; ?>
						</div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php if($img_day || $img_night): ?>
        <figure class="bg absolute bottom-0 left-0 w-full h-full lg:h-auto z-0">
            <?php if($img_day): ?>
                <img class="imgs-day" decoding="async" loading="lazy" src="<?php echo $img_day['url']; ?>" alt="<?php echo $img_day['title']; ?>">
            <?php endif; ?>
            <?php if($img_night): ?>
                <img class="imgs-night" decoding="async" loading="lazy" src="<?php echo $img_night['url']; ?>" alt="<?php echo $img_night['title']; ?>">
            <?php endif; ?>
        </figure>
    <?php endif; ?>
</section>
