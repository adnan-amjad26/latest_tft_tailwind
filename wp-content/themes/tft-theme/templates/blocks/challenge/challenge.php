<?php
/**
 * Block Name: Challenge
 */
?>
<?php
	$challegeData = get_fields();
	$id = $challegeData['id'];
	$title = $challegeData['title'];
	$light_image = $challegeData['light_image'];
	$dark_image = $challegeData['dark_image'];
	$dark_image_2 = $challegeData['dark_image_2'];
	$dark_image_3 = $challegeData['dark_image_3'];
	$light_lottie = $challegeData['light_lottie'];
	$product = $challegeData['product'];
	$tables = get_field('product_tables', $product->ID);
	$challenge_type = wp_get_post_terms($product->ID, 'pa_challenge_type');
	$account_type = wp_get_post_terms($product->ID, 'pa_account_type');
	$account_size = wp_get_post_terms($product->ID, 'pa_account_size');
	$platform = wp_get_post_terms($product->ID, 'pa_platform');
	$broker = wp_get_post_terms($product->ID, 'pa_broker');
?>
<?php if($dark_image): ?>
	<!-- Tiles Section -->
	<section class="tilesSection" id="#challenge">
	    <div class="tilesContainerSection night">
	        <div class="tilesImageLayersDiv">
	            <div class="topTilesContainerDiv">
	                <img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="heroLayerPhotos topTilesPhoto">
	            </div>
	            <div class="tilesContainerDiv"></div>
	            <div class="tilesContainerDiv"></div>
	            <div class="tilesContainerBottomDiv"></div>
	        </div>
	    </div>
	</section>
<?php endif; ?>
<!-- Choose Challenge Section -->
<section class="chooseChallengeSection"<?php if($id) echo ' id="'.$id.'"'; ?>>
	<?php if($title || $dark_image_2 || $light_lottie): ?>
	    <div class="chooseChallengeHeaderDiv headerTextResponsive">
	        <?php echo $title; ?>
	        <?php if($dark_image_2): ?>
		        <img src="<?php echo $dark_image_2['url']; ?>" alt="<?php echo $dark_image_2['title']; ?>" class="chooseChallengeHeaderTorchPhoto torch night">
		        <div class="torchGlow torch night" id="torchGlow2"></div>
		    <?php endif; ?>
		    <?php if($light_lottie): ?>
	        	<lottie-player src="<?php echo $light_lottie; ?>" class="chooseChallengeKnightLottieDay lottieResponsive torch day" background="transparent" speed="1" loop autoplay></lottie-player>
	        <?php endif; ?>
	    </div>
	<?php endif; ?>
	<?php if($product): ?>
	    <div class="classChoicesContainerDiv">
	        <div class="classChoiceAllButtonsDiv">
	        	<?php if($challenge_type || $account_type): ?>
		            <div class="classChoicesTopDiv">
		            	<?php if($challenge_type): ?>
			                <div class="classChoiceTopButtons">
			                	<?php $i = 1; foreach($challenge_type as $attr): ?>
				                    <label class="classChoiceButton CTAButtonAnimate" challenge_type="<?php echo $attr->slug; ?>">
				                    	<input type="radio" name="challenge_type" value="<?php echo $attr->slug; ?>">
				                        <t class="classChoiceButtonText noselect"><?php echo $attr->name; ?></t>
				                        <?php $image = get_field('image', $attr); ?>
				                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="chooseChallengeBackgroundPhoto">
				                    </label>
				                <?php endforeach; ?>
			                </div>
			            <?php endif; ?>
		            	<?php if($account_type): ?>
			                <div class="classChoiceBottomButtons">
			                	<?php foreach($account_type as $attr): ?>
				                    <label class="classChoiceButton classChoiceButtonRectangles CTAButtonAnimate" account_type="<?php echo $attr->slug; ?>">
				                    	<input type="radio" name="account_type" value="<?php echo $attr->slug; ?>">
				                        <t class="classChoiceButtonText noselect"><?php echo $attr->name; ?></t>
				                        <?php $image = get_field('image', $attr); ?>
				                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="chooseChallengeBackgroundPhoto">
				                    </label>
				            	<?php endforeach; ?>
			                </div>
			            <?php endif; ?>
		            </div>
		        <?php endif; ?>
	            <?php if($account_size): ?>
		            <div class="classPriceContainerDiv">
		            	<?php foreach($account_size as $attr): ?>
			                <label class="classPriceButton CTAButtonAnimate" account_size="<?php echo $attr->slug; ?>">
			                	<input type="radio" name="account_size" value="<?php echo $attr->slug; ?>">
			                    <t class="classPriceText noselect"><?php echo $attr->name; ?></t>
			                    <img src="<?php echo get_template_directory_uri(); ?>/images/ChooseChallengePrice.png" alt="ChooseChallengePrice" class="choosePriceBackgroundPhoto">
			                </label>
			            <?php endforeach; ?>
		            </div>
		        <?php endif; ?>
	        </div>
	        <div class="chooseChallengeScrollDiv">
	        	<?php if($tables): ?>
		            <img src="<?php echo get_template_directory_uri(); ?>/images/ChooseChallengeScrollLeft.png" alt="ChooseChallengeScrollLeft" class="chooseChallengeScrollLeftPhoto">
					<?php $n = 1; foreach($tables as $table): ?>
						<?php $challange_type = $table['challange_type']->slug; ?>
						<?php $account_type = $table['account_type']->slug; ?>
						<?php $account_size = $table['account_size']->slug; ?>
		            	<div class="chooseChallengeScrollBodyDiv<?php if($n == 1) echo ' active'; ?>" challenge_type="<?php echo $challange_type; ?>" account_type="<?php echo $account_type; ?>" account_size="<?php echo $account_size; ?>">
							<?php $header = $table['table']['header']; ?>
							<?php $body = $table['table']['body']; ?>
							<div class="chooseChallengeTableDiv">
								<?php if($header): ?>
									<div class="chooseChallengeRowDiv">
										<?php $i = 0; foreach($header as $c): ?>
											<div class="chooseChallengeColumnDiv chooseChallengeRow1 <?php echo ($i == 0) ? 'chooseChallengeColumn1' : 'chooseChallengeColumn234 colorWhite chooseChallengeType'; ?><?php if($i == 2) echo ' chooseChallengeColumn2nd'; ?><?php if($i >= 3) echo ' chooseChallengeColumn3rd'; ?>"><?php echo $c['c']; ?></div>
										<?php $i++; endforeach; ?>
									</div>
								<?php endif; ?>
								<?php if($body): ?>
									<?php foreach($body as $row): ?>
										<div class="chooseChallengeRowDiv">
											<?php $j = 0; foreach($row as $c): ?>
												<?php if(strlen($c['c'])): ?>
													<div class="<?php if($j > 0 && !strlen($row[1]['c']) && !strlen($row[3]['c'])) echo 'chooseChallengeColumnBalanceDiv'; elseif($j > 0 && !strlen($row[2]['c'])) echo 'chooseChallengeColumnBalance2Div'; else echo 'chooseChallengeColumnDiv'; ?> <?php echo ($j == 0) ? 'chooseChallengeColumn1' : 'chooseChallengeColumn234'; ?><?php if($j == 2 && strlen($row[1]['c']) && strlen($row[3]['c'])) echo ' chooseChallengeColumn2nd'; ?><?php if($j >= 3 && strlen($row[1]['c']) && strlen($row[3]['c'])) echo ' chooseChallengeColumn3rd'; ?>"><?php echo $c['c']; ?></div>
												<?php endif; ?>
											<?php $j++; endforeach; ?>
										</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
							<div class="buyChallengeMobileColumnDiv">
								<?php
									global $woocommerce;
									$attributes = array(
										'attribute_pa_challenge_type' => $challange_type,
										'attribute_pa_account_type' => $account_type,
										'attribute_pa_account_size' => $account_size,
										'attribute_pa_platform' => $platform[0]->slug,
										'attribute_pa_broker' => $broker[0]->slug,
									);
									if($product && $attributes) $variation_id = find_matching_product_variation_id($product->ID, $attributes);
									if($variation_id) {
										$_product = wc_get_product($variation_id);
										$price = $_product->get_price_html();
										if($woocommerce->cart->total == 0) echo '<a href="'.$_product->add_to_cart_url().'" class="buyChallengeButtonDiv" id="buyChallengeMobile"><div class="buyChallengeButton CTAButtonAnimate"><t class="buyChallengeText noselect">'.esc_html__('BUY CHALLENGE', 'cbd').'</t><img src="'.get_template_directory_uri().'/images/BuyChallengeBackground.png" alt="BuyChallengeBackground" class="buyChallengeBackgroundPhoto"></div></a>';
										else echo '<a href="'.wc_get_checkout_url().'" class="buyChallengeButtonDiv" id="buyChallengeMobile"><div class="buyChallengeButton CTAButtonAnimate"><t class="buyChallengeText noselect">'.get_the_title(wc_get_page_id('checkout')).'</t><img src="'.get_template_directory_uri().'/images/BuyChallengeBackground.png" alt="BuyChallengeBackground" class="buyChallengeBackgroundPhoto"></div></a>';
									}
								?>
							</div>
		            	</div>
					<?php $n++; endforeach; ?>
		            <img src="<?php echo get_template_directory_uri(); ?>/images/ChooseChallengeScrollRight.png" alt="ChooseChallengeScrollRight" class="chooseChallengeScrollRightPhoto">
		        <?php endif; ?>
	            <?php if($dark_image_3): ?>
		            <div class="chooseChallengeOverlaysDiv">
		                <div class="chooseChallengeTorchDiv torch">
		                	<?php if($dark_image_3): ?>
			                    <img src="<?php echo $dark_image_3['url']; ?>" alt="<?php echo $dark_image_3['title']; ?>" class="chooseChallengeTorch night">
			                    <div class="torchGlow night" id="torchGlow3"></div>
			                <?php endif; ?>
			                <?php if($light_image): ?>
		                    	<img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="treeBranch1 torch day">
		                    <?php endif; ?>
		                </div>
		            </div>
		        <?php endif; ?>
	        </div>
	    </div>
	    <script>
		    // Challenge Scroll Changes
		    // -------------------------------------------------------
		    // Challenge Type
		    const challengeTypeCell = document.querySelector('#chooseChallengeColumnHeader1')

		    // Class Choice Scroll Buttons
		    const classChoiceButtons = document.querySelectorAll('.classChoiceButton')
		    const chooseChallengeScrollBodyDiv = document.querySelector('.chooseChallengeScrollBodyDiv')
		    let chooseChallengeScrollBodyDivWidth = chooseChallengeScrollBodyDiv.clientWidth

<<<<<<< HEAD
		    for (let i = 0; i < classChoiceButtons.length; i++) {
		        classChoiceButtons[i].addEventListener('click', () => {
		            gsap.to('.chooseChallengeScrollBodyDiv', {duration: 0.5, width: 20, ease: 'Power1.easeInOut'})
		            gsap.to('.chooseChallengeScrollBodyDiv', {duration: 0.5, delay: 0.75, width: chooseChallengeScrollBodyDivWidth, ease: 'Power1.easeInOut'})
		            challengePriceChangeAnimations(challengeTypeCell)
		        })
		    }

		    // Price Changes
		    const classPriceButtons = document.querySelectorAll('.classPriceButton')
		    const chooseChallengeColumnBalanceDiv = document.querySelector('.chooseChallengeColumnBalanceDiv')

		    for (let i = 0; i < classPriceButtons.length; i++) {
		        classPriceButtons[i].addEventListener('click', () => {
		            challengePriceChangeAnimations(chooseChallengeColumnBalanceDiv)
		        })
		    }
=======
			classChoiceButtons.forEach(button => {
				button.addEventListener('click', () => {
					gsap.to('.chooseChallengeScrollBodyDiv', {
						duration: 0.5,
						width: 20,
						ease: 'Power1.easeInOut'
					});
					gsap.to('.chooseChallengeScrollBodyDiv', {
						duration: 0.5,
						delay: 0.75,
						width: chooseChallengeScrollBodyDivWidth,
						ease: 'Power1.easeInOut'
					});
					challengePriceChangeAnimations(challengeTypeCell);
				});
			});
			// Price Changes
			const classPriceButtons = document.querySelectorAll('.classPriceButton')
			const chooseChallengeColumnBalanceDiv = document.querySelector('.chooseChallengeColumnBalanceDiv')

			classPriceButtons.forEach(button => {
				button.addEventListener('click', () => {
					challengePriceChangeAnimations(chooseChallengeColumnBalanceDiv)
				});
			});
>>>>>>> 4df809d5fb25d28b078e81bd1ef07c267ae4c4f3

		    // Choose Challenge Price Change Animations
		    // Call this function to highlight a change in the scroll
		    // obj must either be a variable or a querySelector pointing to the specific cell in the table
		    const challengePriceChangeAnimations = (obj) => {
		        gsap.to(obj, {duration: 0, backgroundColor: '#f7971e'})
		        gsap.to(obj, {duration: 0.25, delay: 0.5, backgroundColor: 'transparent'})
		    }
	    </script>
    <?php endif; ?>
</section>