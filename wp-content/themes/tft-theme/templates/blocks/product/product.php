<?php
/**
 * Block Name: Product
 */
session_start();
?>
<?php $id = get_field('id'); ?>
<?php $title = get_field('title'); ?>
<?php
global $woocommerce;
//	$time_start = microtime(true);
$product = get_field('product');
$tables = get_field('product_tables', $product);
$tables = array_slice($tables, 0, 1);

$quick_comparison = get_field('quick_comparison', $product);
$challenge_type = wp_get_post_terms($product, 'pa_challenge_type');
$account_type = wp_get_post_terms($product, 'pa_account_type');
$account_size = wp_get_post_terms($product, 'pa_account_size');
$platform = wp_get_post_terms($product, 'pa_platform');
$broker = wp_get_post_terms($product, 'pa_broker');

?>
<h1 style="display:none;" id="product_id"><?php echo $product; ?></h1>
<figure class="bricks-elem tower absolute top-[-120px] md:top-[-174px] lg:top-[-318px] left-0 w-full z-0 bricks-elem pointer-events-none">
	<img class="imgs-day" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/day/content-scrolls-bg.svg" alt="content-scrolls-bg">
	<img class="imgs-night !h-[870px] object-center-top" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/content-scrolls-bg.png" alt="content-scrolls-bg">
</figure>
<section<?php if($id) echo ' id="'.$id.'"'; ?> class="table-tabs bricks-elem relative z-[2]">
	<div class="max-w-[1750px] w-full mx-auto pt-[100px] px-[16px] md:px-[40px] 2xl:px-[85px]">
		<?php if($title): ?>
            <div class="flex">
                <div class="w-full text-center">
                    <div class="title relative">
                        <h3 class="relative z-[2] max-w-[400px] mx-auto text-center text-[36px] sm:text-[36px] lg:text-[30px] xl:text-[40px] 2xl:text-[40px] mt-[178px] md:mt-0"><?php echo $title; ?></h3>
                        <div class="absolute left-1/2 top-[-138px] -translate-x-1/2">
                            <div class="w-[63px] h-[230px]">
                                <img class="h-full relative z-[2]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch.svg" alt="torch">
                                <div class="absolute z-[1] w-full pb-[80%] rounded-full glow bg-[#ff4202] top-[35%] left-[50%] opacity-[0.7] translate-x-[-50%]"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
		<?php endif; ?>
		<?php if($product): ?>
			<div class="row justify-center mt-24">
				<div class="w-full row justify-center">
					<?php if($challenge_type): ?>
						<ul class="wadik top-tabs toggles w-full first flex flex-col items-center lg:flex-row gap-[20px] lg:gap-12 justify-center font-headers text-[10px] lg:text-[15px]">
							<?php foreach($challenge_type as $attr): ?>
								<?php $image = get_field('image', $attr); ?>
								<li <?php if($image['url']) echo ' style="background-image: url('.$image['url'].');"'; ?> challenge_type="<?php echo $attr->slug; ?>"<?php if($challenge_type[0]->slug == $attr->slug) {echo ' class="challenge_type active"';} else { echo ' class="challenge_type"'; } ?>>
									<span><?php echo $attr->name; ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<h3 class="text-[24px] md:text-[30px] xl:text-[40px] mt-[25px]">RISK</h3>
					<?php if($account_type): ?>
						<ul class="toggles w-full second flex gap-6 lg:gap-12 justify-center font-headers text-[15px] mt-12 lg:mt-16">
							<?php foreach($account_type as $attr): ?>
								<?php $image = get_field('image', $attr); ?>
								<li class="account_type w-full md:w-auto md:min-w-[243px] text-center wadik text-[14px] lg:text-[15px]" <?php if($image['url']) echo ' style="background-image: url('.$image['url'].');"'; ?> account_type="<?php echo $attr->slug; ?>">
									<span><?php echo $attr->name; ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<?php if($account_size): ?>
						<ul class="payment-list toggles w-full third block whitespace-nowrap overflow-auto font-headers text-[16px] mt-12 lg:mt-16 text-center">
							<?php foreach($account_size as $attr): ?>
								<li class="account_size inline-block mx-[4px] min-w-[85px] lg:min-w-[165px] wadik text-[12px] lg:text-[16px]" account_size="<?php echo $attr->slug; ?>">
									<span><?php echo $attr->name; ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
				<?php if($tables): ?>
					<?php $i = 1; foreach($tables as $table): ?>
						<?php $challange_type = $table['challange_type']->slug; ?>
						<?php $account_type = $table['account_type']->slug; ?>
						<?php $account_size = $table['account_size']->slug; ?>
						<div class="w-full pt-[25px] product-table" challenge_type="<?php echo $challange_type; ?>" account_type="<?php echo $account_type; ?>" account_size="<?php echo $account_size; ?>">
							<?php $table = $table['table']; ?>
							<?php if($quick_comparison): ?>
								<div class="table__header text-center">
									<div class="table__tab mb-[15px] inline-block mx-auto text-[#092236] bg-[#CED3D7] leading-[1.4] font-[700] text-[1.5rem] wadik p-[14px_43px] cursor-pointer rounded-[10px]" quick_comparison><?php _e('Quick Comparison', 'cbd'); ?></div>
								</div>
							<?php endif; ?>

							<div class="w-full flex gap-[50px]">
								<div class="min-w-[80px] pt-[50px] hidden xl:block">
									<div class="relative">
										<div class="w-[80px] h-[260px] mx-auto">
											<img class="h-full relative z-[2]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch.svg" alt="torch">
											<div class="absolute z-[1] w-full pb-[80%] rounded-full glow bg-[#ff4202] top-[35%] left-[50%] opacity-[0.7] -translate-x-1/2"></div>
										</div>
									</div>
								</div>
								<div class="w-full">
									<div class="table__wrapper__block relative mb-[0] max-w-[1080px] w-full mx-auto">
										<div class="flex items-center mb-[-5px] md:mb-[-17px]">
											<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/table-top-shape.svg" alt="torch">
										</div>
										<div class="table__wrapper relative bg-white custom-groove-border px-[15px] md:px-[40px] lg:px-[80px] pb-[40px]">
											<div>
												<div class="custom-table block lg:table text-[12px] lg:text-[14px] font-[500] text-[#3a4e5e] border-collapse">
													<div class="product-table-desktop">
														<?php if($table['header']): ?>
															<div class="table__head">
																<div class="row">
																	<?php foreach($table['header'] as $row): ?>
																		<div class="col-xxs-3">
																			<?php echo preg_replace("/<span\s(.+?)>(.+?)<\/span>/is", "<b>$2</b>", $row['c']); ?>
																		</div>
																	<?php endforeach; ?>
																</div>
															</div>
														<?php endif; ?>
														<?php if($table['body']): ?>
															<div class="table__body">
																<?php $n = 0; foreach($table['body'] as $row): ?>
																	<?php echo ($n % 2 == 0) ? '<div class="row" data-spoiler>' : '<div class="table__expand" hidden><div class="row">'; ?>
																	<?php foreach($row as $cell): ?>
																		<div class="col-xxs-3<?php if(!$cell['c']) echo ' empty'; ?>"><?php echo $cell['c']; ?></div>
																	<?php endforeach; ?>
																	<?php echo ($n % 2 == 0) ? '</div>' : '</div></div>'; ?>
																	<?php $n++; endforeach; ?>
															</div>
														<?php endif; ?>
													</div>
													<div class="product-table-mobile">
														<div class="row">
															<div class="col-xxs-6">
																<?php if($table['header']): ?>
																	<div class="table__head">
																		<div class="row">
																			<div><?php echo $table['header'][0]['c']; ?></div>
																		</div>
																	</div>
																<?php endif; ?>
																<?php if($table['body']): ?>
																	<div class="table__body">
																		<?php $n = 0; foreach($table['body'] as $row): ?>
																			<?php if($n % 2 == 0): ?>
																				<div class="row" data-spoiler>
																					<div><?php echo $row[0]['c']; ?></div>
																				</div>
																			<?php else: ?>
																				<div class="table__expand" hidden>
																					<div class="row">
																						<div<?php if(!$row[1]['c']) echo ' class="empty"'; ?>><?php echo $row[1]['c']; ?></div>
																					</div>
																				</div>
																			<?php endif; ?>
																			<?php $n++; endforeach; ?>
																	</div>
																<?php endif; ?>
															</div>
															<div class="col-xxs-6">
																<div class="swiper product-table-mobile-swiper">
																	<div class="swiper-wrapper">
																		<?php for($i = 1; $i < count($table['header']); $i++): ?>
																			<div class="swiper-slide">
																				<?php if($table['header']): ?>
																					<div class="table__head">
																						<div class="row">
																							<div><?php echo $table['header'][$i]['c']; ?></div>
																						</div>
																					</div>
																				<?php endif; ?>
																				<div class="table__body">
																					<?php $n = 0; foreach($table['body'] as $row): ?>
																						<?php if($n % 2 == 0): ?>
																							<div class="row">
																								<div><?php echo $row[$i]['c']; ?></div>
																							</div>
																						<?php else: ?>
																							<div class="table__expand" hidden>
																								<div class="row">
																									<div></div>
																								</div>
																							</div>
																						<?php endif; ?>
																						<?php $n++; endforeach; ?>
																				</div>
																			</div>
																		<?php endfor; ?>
																	</div>
																</div>
															</div>
														</div>
														<div class="swiper-button-prev product-table-mobile-prev"></div>
														<div class="swiper-button-next product-table-mobile-next"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="flex items-center mt-[-5px] md:mt-[-14px] relative">
											<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/table-bottom-shape.svg" alt="torch">
										</div>
									</div>
									<?php
									$attributes = array(
										'attribute_pa_challenge_type' => $challange_type,
										'attribute_pa_account_type' => $account_type,
										'attribute_pa_account_size' => $account_size,
										'attribute_pa_platform' => $platform[0]->slug,
										'attribute_pa_broker' => $broker[0]->slug,
									);
									if($product && $attributes) $variation_id = find_matching_product_variation_id($product, $attributes);
									?>
									<?php if($variation_id): ?>
										<?php $_product = wc_get_product($variation_id); ?>
										<div class="flex justify-center">
											<div class="button mt-12 lg:mt-24 mx-auto">
												<a id="buyChallenge" href="<?php echo '/purchasechallenge-n/?planid=1190'?>" class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
													<span class="z-[1]"><?php _e('Buy Challenge', 'cbd'); ?></span>
													<img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
													<img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
												</a>
											</div>
										</div>


									<?php endif; ?>
								</div>
								<div class="min-w-[80px] hidden xl:block"></div>
							</div>
						</div>
						<?php $i++; endforeach; ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php if($quick_comparison): ?>
			<?php foreach($quick_comparison as $table): ?>
				<?php $challange_type = $table['challange_type']->slug; ?>
				<?php $table = $table['table']; ?>
				<div class="custom-table block lg:table text-[12px] lg:text-[14px] font-[500] text-[#3a4e5e] border-collapse comparison-table" challenge_type="<?php echo $challange_type; ?>">
					<div class="comparison-table-desktop">
						<?php if($table['header']): ?>
							<div class="table__head">
								<div class="row">
									<?php foreach($table['header'] as $row): ?>
										<div style="min-width: <?php echo 100 / count($table['header']); ?>%;">
											<?php echo preg_replace("/<span\s(.+?)>(.+?)<\/span>/is", "<b>$2</b>", $row['c']); ?>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
						<?php if($table['body']): ?>
							<div class="table__body">
								<?php foreach($table['body'] as $row): ?>
									<div class="row">
										<?php foreach($row as $cell): ?>
											<div style="min-width: <?php echo 100 / count($row); ?>%;"><?php echo $cell['c']; ?></div>
										<?php endforeach; ?>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="comparison-table-mobile">
						<?php if($table['header']): ?>
							<div class="table__head">
								<div class="row">
									<div class="col-xxs-6"><?php echo $table['header'][0]['c']; ?></div>
									<?php array_shift($table['header']); ?>
									<?php foreach($table['header'] as $row): ?>
										<?php if(!empty($row['c'])) echo '<div class="col-xxs-6">'.$row['c'].'</div>'; ?>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
						<?php if($table['body']): ?>
							<div class="row">
								<div class="col-xxs-6">
									<div class="table__body">
										<?php foreach($table['body'] as $row): ?>
											<div class="row">
												<div><?php echo $row[0]['c']; ?></div>
											</div>
										<?php endforeach; ?>
									</div>
								</div>
								<div class="col-xxs-6">
									<div class="swiper comparison-table-mobile-swiper">
										<div class="swiper-wrapper">
											<?php for($i = 1; $i < count($table['header']); $i++): ?>
												<div class="swiper-slide">
													<div class="table__body">
														<?php foreach($table['body'] as $row): ?>
															<div class="row">
																<div><?php echo $row[$i]['c']; ?></div>
															</div>
														<?php endforeach; ?>
													</div>
												</div>
											<?php endfor; ?>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-button-prev comparison-table-mobile-prev"></div>
							<div class="swiper-button-next comparison-table-mobile-next"></div>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</section>
