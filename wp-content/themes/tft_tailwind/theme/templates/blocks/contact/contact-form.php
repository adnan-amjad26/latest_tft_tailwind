<?php
/**
 * Block Name: Contact Form
 */
?>
<?php
	$image = get_field('image');
	$image_2 = get_field('image_2');
	$address = get_field('address');
	$email = get_field('email');
	$phone = get_field('phone');
	$form = get_field('form');
?>
<!-- Contact Info Section -->
<section class="contactInfoSection">
    <div class="contactInfoDiv">
        <img src="<?php echo get_template_directory_uri(); ?>/images/contact/ContactInfoBackground.png" alt="ContactInfoBackground" class="contactInfoBackgroundPhoto">
        <?php if($image || $image_2): ?>
	        <div class="contactInfoTorchDiv">
	        	<?php if($image): ?>
		            <div class="torch" id="torch1">
		                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="contactInfoTorch">
		                <div class="torchGlow" id="torchGlow1"></div>
		            </div>
		        <?php endif; ?>
		        <?php if($image_2): ?>
		            <div class="torch" id="torch2">
		                <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>" class="contactInfoTorch">
		                <div class="torchGlow" id="torchGlow1"></div>
		            </div>
	            <?php endif; ?>
	        </div>
	    <?php endif; ?>
	    <?php if($address['image'] || $address['address'] || $email['image'] || $email['email'] || $phone['image'] || $phone['phone']): ?>
	        <div class="contactInfoOverlaysDiv">
	        	<?php if($address['image'] || $address['address']): ?>
		            <div class="contactInfoCategories">
		                <div class="contactInfoSpotlight" id="contactInfoSpotlight1"></div>
		                <?php if($address['image']): ?>
			                <div class="contactInfoPhotos">
			                    <img src="<?php echo $address['image']['url']; ?>" alt="<?php echo $address['image']['title']; ?>" class="contactInfoAddressPhoto">
			                </div>
			            <?php endif; ?>
		                <?php if($address['address']): ?>
		                	<div class="contactInfoText contactInfoAddressText"><?php echo $address['address']; ?></div>
		                <?php endif; ?>
		            </div>
		        <?php endif; ?>
		        <?php if($email['image'] || $email['email']): ?>
		            <div class="contactInfoCategories">
		                <div class="contactInfoSpotlight" id="contactInfoSpotlight2"></div>
		                <?php if($email['image']): ?>
			                <div class="contactInfoPhotos">
			                    <img src="<?php echo $email['image']['url']; ?>" alt="<?php echo $email['image']['title']; ?>" class="contactInfoEmailPhoto">
			                </div>
			            <?php endif; ?>
		                <?php if($email['email']): ?>
			                <div class="contactInfoText contactInfoEmailText">
			                    <a href = "mailto:<?php echo $email['email']; ?>" class="contactEmailLinkText"><?php echo $email['email']; ?></a>
			                </div>
			            <?php endif; ?>
		            </div>
		        <?php endif; ?>
		        <?php if($phone['image'] || $phone['phone']): ?>
		            <div class="contactInfoCategories">
		                <div class="contactInfoSpotlight" id="contactInfoSpotlight3"></div>
		                <?php if($phone['image']): ?>
			                <div class="contactInfoPhotos">
			                    <img src="<?php echo $phone['image']['url']; ?>" alt="<?php echo $phone['image']['title']; ?>" class="contactInfoPhonePhoto">
			                </div>
			            <?php endif; ?>
		                <?php if($phone['phone']): ?>
			                <div class="contactInfoText contactInfoPhoneText">
			                    <?php $tel = preg_replace('/[^0-9]/', '', $phone['phone']); ?>
			                    <a href="tel:<?php echo $tel; ?>"><?php echo $phone['phone']; ?></a>
			                </div>
			            <?php endif; ?>
		            </div>
		        <?php endif; ?>
	        </div>
	    <?php endif; ?>
    </div>

    <!-- Mobile Only -->
    <div class="videosButtonsMobileDiv">
        <div class="videosBackButton">
            <img src="<?php echo get_template_directory_uri(); ?>/images/CompetitionCountdownSword3.png" alt="CompetitionCountdownSword3" class="videosBackButtonPhoto">
        </div>
        <div class="videosNextButton">
            <img src="<?php echo get_template_directory_uri(); ?>/images/CompetitionCountdownSword3.png" alt="CompetitionCountdownSword3" class="videosNextButtonPhoto">
        </div>
    </div>

    <?php if($form['title'] || $form['shortcode']): ?>
	    <!-- Contact Form -->
	    <div class="contactFormDiv">
	        <div class="contactFormOverlaysDiv">
	        	<?php if($form['title']): ?>
	            	<div class="contactFormHeader"><?php echo $form['title']; ?></div>
	            <?php endif; ?>
	            <?php if($form['shortcode']): ?>
	            	<div class="contactForm"><?php echo do_shortcode($form['shortcode']); ?></div>
	            <?php endif; ?>
	        </div>
	    </div>
	<?php endif; ?>
</section>