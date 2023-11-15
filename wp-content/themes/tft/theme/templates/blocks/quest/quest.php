<?php
/**
 * Block Name: Quest
 */
?>
<?php
	$title = get_field('title');
	$text = get_field('text');
	$video = get_field('video');
	$image = get_field('image');
	$image_2 = get_field('image_2');
	$light_image = get_field('light_image');
	$dark_image = get_field('dark_image');
?>
<!-- Quest Intro Section -->
<section class="questIntroSection ourQuestSection">
	<?php if($title || $text): ?>
	    <div class="questIntroTextDiv">
	    	<?php if($title): ?>
		        <div class="questIntroHeaderDiv headerTextResponsive"><?php echo $title; ?></div>
		    <?php endif; ?>
	        <?php if($text): ?>
	        	<div class="questIntroBodyDiv"><?php echo $text; ?></div>
	        <?php endif; ?>
	    </div>
	<?php endif; ?>
	<?php if($video['url'] || $image || $image_2): ?>
	    <div class="questVideoContainerDiv">
	        <div class="questIntroVideoDiv">
	            <div class="testVideoDiv">
	                <iframe class="videoIframe" src="<?php echo $video['url']; ?>"<?php if($video['title']) echo ' title="'.$video['title'].'"'; ?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <img src="<?php echo get_template_directory_uri(); ?>/images/QuestIntroVideoBackground.png" alt="QuestIntroVideoBackground" class="questIntroVideoBackgroundPhoto">
	            <?php if($image): ?>
		            <div class="questIntroPurpleGemDiv">
		                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="questIntroPurpleGemPhoto gem">
		            </div>
		        <?php endif; ?>
		        <?php if($image_2): ?>
		            <div class="questIntroPinkGemDiv">
		                <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>" class="questIntroPinkGemPhoto gem">
		            </div>
		        <?php endif; ?>
	        </div>
	    </div>
    <?php endif; ?>
    <?php if($light_image || $dark_image): ?>
	    <div class="questIntroOverlaysDiv">
	    	<?php if($dark_image): ?>
		        <div class="questIntroTorchDiv torch night">
		            <img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="questIntroTorch">
		            <div class="torchGlow" id="torchGlow1"></div>
		        </div>
		    <?php endif; ?>
		    <?php if($light_image): ?>
		        <div class="questIntroTorchDiv torch day">
		            <img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="questIntroTorch">
		        </div>
		    <?php endif; ?>
	    </div>
	<?php endif; ?>
</section>