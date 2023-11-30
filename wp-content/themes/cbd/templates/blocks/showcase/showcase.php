<?php
/**
 * Block Name: Showcase
 */
?>
<?php
	$image = get_field('image');
	$title = get_field('title');
	$image_2 = get_field('image_2');
	$image_3 = get_field('image_3');
	$image_4 = get_field('image_4');
	$image_5 = get_field('image_5');
	$image_6 = get_field('image_6');
	$image_7 = get_field('image_7');
	$text_1 = get_field('text_1');
	$text_2 = get_field('text_2');
	$link = get_field('link');
	$link_2 = get_field('link_2');
	$light_image = get_field('light_image');
	$dark_image = get_field('dark_image');
	$dark_lottie = get_field('dark_lottie');
?>
<!-- App Showcase Section -->
<section class="appShowcaseSection">
    <div class="appShowcaseTransition"></div>
    <?php if($light_image): ?>
	    <!-- Day -->
	    <img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="appShowcaseBackgroundPhotoDay day">
	<?php endif; ?>
	<?php if($dark_image): ?>
    	<!-- Night -->
    	<img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="appShowcaseBackgroundPhoto night">
    <?php endif; ?>
    <?php if($dark_lottie): ?>
	    <div class="appKnightLottieDiv night">
	        <lottie-player src="<?php echo $dark_lottie; ?>" class="appKnightLottie lottieResponsive" background="transparent" speed="1" loop autoplay></lottie-player>
	    </div>
	<?php endif; ?>
    <div class="appShowcaseOverlaysDiv">
    	<?php if($image): ?>
        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>" class="appShowcaseCrownPhoto">
        <?php endif; ?>
        <?php if($title): ?>
        	<div class="appShowcaseOverlaysHeader headerTextResponsive"><?php echo $title; ?></div>
        <?php endif; ?>
        <div class="appShowcaseOverlaysActualDiv">
        	<?php if($image_2 || $image_3 || $image_4 || $image_5): ?>
	            <div class="appShowcaseOverlaysActualLeftDiv">
	            	<?php if($image_2): ?>
		                <div class="appShowcaseMobileDiv">
		                    <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>" class="appShowcaseMobilePhoto">
		                </div>
		            <?php endif; ?>
		            <?php if($image_3): ?>
		                <div class="appShowcasePadDiv">
		                    <img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['title']; ?>" class="appShowcasePadPhoto">
		                </div>
		            <?php endif; ?>
		            <?php if($image_4): ?>
		                <div class="appShowcasePurpleGem">
		                    <img src="<?php echo $image_4['url']; ?>" alt="<?php echo $image_4['title']; ?>" class="appShowcasePurpleGemPhoto gem">
		                </div>
		            <?php endif; ?>
		            <?php if($image_5): ?>
		                <div class="appShowcaseYellowGem">
		                    <img src="<?php echo $image_5['url']; ?>" alt="<?php echo $image_5['title']; ?>" class="appShowcaseYellowGemPhoto gem">
		                </div>
		            <?php endif; ?>
	            </div>
	        <?php endif; ?>
	        <?php if($link['icon'] || $link_2['icon'] || $image_6 || $text_1 || $text_2 || $image_7): ?>
	            <div class="appShowcaseOverlaysActualRightDiv">
	            	<?php if($link['icon'] || $link_2['icon']): ?>
		                <div class="appShowcaseOverlaysActualRightButtonsDiv">
		                	<?php if($link['icon']): ?>
		                		<?php if($link['url']) echo '<a href="'.$link['url'].'">'; ?>
		                    		<img src="<?php echo $link['icon']['url']; ?>" alt="<?php echo $link['icon']['title']; ?>" class="appShowcaseButtonApplePhoto">
		                    	<?php if($link['url']) echo '</a>'; ?>
		                    <?php endif; ?>
		                    <?php if($link_2['icon']): ?>
		                		<?php if($link_2['url']) echo '<a href="'.$link_2['url'].'">'; ?>
		                    		<img src="<?php echo $link_2['icon']['url']; ?>" alt="<?php echo $link_2['icon']['title']; ?>" class="appShowcaseButtonGooglePhoto">
		                    	<?php if($link_2['url']) echo '</a>'; ?>
		                    <?php endif; ?>
		                </div>
		            <?php endif; ?>
	                <?php if($image_6): ?>
	                	<img src="<?php echo $image_6['url']; ?>" alt="<?php echo $image_6['title']; ?>" class="appShowcase8CapPhoto">
	                <?php endif; ?>
	                <?php if($text_1 || $text_2 || $image_7): ?>
		                <div class="appShowcaseOverlaysActualRightLogosDiv">
		                	<?php if($text_1 || $text_2): ?>
			                    <div class="appShowcaseTextRightContainer">
			                    	<?php if($text_1): ?>
			                        	<div class="appShowcaseTextRightTop"><?php echo $text_1; ?></div>
			                        <?php endif; ?>
			                        <?php if($text_2): ?>
			                        	<div class="appShowcaseTextRightBottom"><?php echo $text_2; ?></div>
			                        <?php endif; ?>
			                    </div>
			                <?php endif; ?>
		                    <?php if($image_7): ?>
		                    	<img src="<?php echo $image_7['url']; ?>" alt="<?php echo $image_7['title']; ?>" class="appShowcasePurpleTradingPhoto">
		                    <?php endif; ?>
		                </div>
		            <?php endif; ?>
	            </div>
	        <?php endif; ?>
        </div>
    </div>
</section>