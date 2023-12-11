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

<?php
// $acf_data = '<!-- wp:acf/platforms {"name":"acf/platforms","data":{"icon":651,"_icon":"field_6428026f59e4b","title":"Royal Trading Platforms","_title":"field_6428027b59e4c","brokers_0_image":1819,"_brokers_0_image":"field_649ff2e84870d","brokers_0_links_0_image":671,"_brokers_0_links_0_image":"field_649ff3514870f","brokers_0_links_0_url":"https://portal.thinkmarkets.com/account/individual","_brokers_0_links_0_url":"field_649ff4d48f903","brokers_0_links_1_image":673,"_brokers_0_links_1_image":"field_649ff3514870f","brokers_0_links_1_url":"https://portal.thinkmarkets.com/account/individual","_brokers_0_links_1_url":"field_649ff4d48f903","brokers_0_links_2_image":672,"_brokers_0_links_2_image":"field_649ff3514870f","brokers_0_links_2_url":"https://portal.thinkmarkets.com/account/individual","_brokers_0_links_2_url":"field_649ff4d48f903","brokers_0_links_3_image":670,"_brokers_0_links_3_image":"field_649ff3514870f","brokers_0_links_3_url":"https://portal.thinkmarkets.com/account/individual","_brokers_0_links_3_url":"field_649ff4d48f903","brokers_0_links":4,"_brokers_0_links":"field_649ff3134870e","brokers_1_image":653,"_brokers_1_image":"field_649ff2e84870d","brokers_1_links_0_image":671,"_brokers_1_links_0_image":"field_649ff3514870f","brokers_1_links_0_url":"https://join.eightcap.com/visit/?bta=39063\u0026brand=eightcap","_brokers_1_links_0_url":"field_649ff4d48f903","brokers_1_links_1_image":673,"_brokers_1_links_1_image":"field_649ff3514870f","brokers_1_links_1_url":"https://join.eightcap.com/visit/?bta=39063\u0026brand=eightcap","_brokers_1_links_1_url":"field_649ff4d48f903","brokers_1_links_2_image":672,"_brokers_1_links_2_image":"field_649ff3514870f","brokers_1_links_2_url":"https://join.eightcap.com/visit/?bta=39063\u0026brand=eightcap","_brokers_1_links_2_url":"field_649ff4d48f903","brokers_1_links_3_image":670,"_brokers_1_links_3_image":"field_649ff3514870f","brokers_1_links_3_url":"https://join.eightcap.com/visit/?bta=39063\u0026brand=eightcap","_brokers_1_links_3_url":"field_649ff4d48f903","brokers_1_links":4,"_brokers_1_links":"field_649ff3134870e","brokers_2_image":1534,"_brokers_2_image":"field_649ff2e84870d","brokers_2_links_0_image":671,"_brokers_2_links_0_image":"field_649ff3514870f","brokers_2_links_0_url":"#","_brokers_2_links_0_url":"field_649ff4d48f903","brokers_2_links_1_image":673,"_brokers_2_links_1_image":"field_649ff3514870f","brokers_2_links_1_url":"#","_brokers_2_links_1_url":"field_649ff4d48f903","brokers_2_links_2_image":672,"_brokers_2_links_2_image":"field_649ff3514870f","brokers_2_links_2_url":"#","_brokers_2_links_2_url":"field_649ff4d48f903","brokers_2_links_3_image":670,"_brokers_2_links_3_image":"field_649ff3514870f","brokers_2_links_3_url":"#","_brokers_2_links_3_url":"field_649ff4d48f903","brokers_2_links":4,"_brokers_2_links":"field_649ff3134870e","brokers":3,"_brokers":"field_6428037c4785d","image":1516,"_image":"field_6428030f59e53","image_2":1522,"_image_2":"field_6428031f59e54","img_day":661,"_img_day":"field_642802db59e51","img_night":657,"_img_night":"field_642802f659e52"},"mode":"edit"} /-->';

// preg_match('/"icon":(\d+),/', $acf_data, $icon);
// preg_match('/"title":"(.*?)",/', $acf_data, $title);
// preg_match('/"brokers_0_image":(\d+),/', $acf_data, $brokers_0_image);
// preg_match('/"brokers_1_image":(\d+),/', $acf_data, $brokers_1_image);
// preg_match('/"brokers_2_image":(\d+),/', $acf_data, $brokers_2_image);
// preg_match('/"image":(\d+),/', $acf_data, $image);
// preg_match('/"image_2":(\d+),/', $acf_data, $image_2);
// preg_match('/"img_day":(\d+),/', $acf_data, $img_day);
// preg_match('/"img_night":(\d+),/', $acf_data, $img_night);
// // Add more regular expressions to extract other fields as needed

// // Define default values in case the ACF fields are not present
// $icon = isset($icon[1]) ? $icon[1] : '';
// $title = isset($title[1]) ? $title[1] : '';
// $brokers_0_image = isset($brokers_0_image[1]) ? $brokers_0_image[1] : '';
// $brokers_1_image = isset($brokers_1_image[1]) ? $brokers_1_image[1] : '';
// $brokers_2_image = isset($brokers_2_image[1]) ? $brokers_2_image[1] : '';
// $image = isset($image[1]) ? $image[1] : '';
// $image_2 = isset($image_2[1]) ? $image_2[1] : '';
// $img_day = isset($img_day[1]) ? $img_day[1] : '';
// $img_night = isset($img_night[1]) ? $img_night[1] : '';
// Define default values for other fields as well

?>
<section class="platform p-[100px_16px] md:p-[150px_40px] bg-lilac" data-scroll-section>
    <div class="max-w-[1290px] mx-auto relative z-10">
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
							<figure class="max-w-full md:max-w-[150px] flex flex-col justify-center items-center w-full mx-auto">
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
