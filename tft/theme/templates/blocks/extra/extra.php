<?php
/**
 * Block Name: Extra
 */
?>
<?php
	$text = get_field('text');
	$video = get_field('video');
	$image = get_field('image');
	$image_2 = get_field('image_2');
	$light_image = get_field('light_image');
	$dark_image = get_field('dark_image');
?>
<!-- Extra Section -->
<section class="ourTeamSection extraSection">
	<?php if($text): ?>
	    <div class="ourTeamTextDiv">
	        <div class="ourTeamBodyDiv"><?php echo $text; ?></div>
	    </div>
	<?php endif; ?>
	<?php if($video['url'] || $image || $image_2): ?>
	    <div class="ourTeamVideoContainerDiv">
	        <div class="ourTeamVideoDiv">
	        	<?php if($video['url']): ?>
		            <div class="testVideoDiv">
		            	<iframe class="videoIframe" src="<?php echo $video['url']; ?>"<?php if($video['title']) echo ' title="'.$video['title'].'"'; ?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		            </div>
		            <img src="<?php echo get_template_directory_uri(); ?>/images/QuestIntroVideoBackground.png" alt="QuestIntroVideoBackground" class="ourTeamVideoBackgroundPhoto">
		        <?php endif; ?>
	            <?php if($image): ?>
		            <div class="ourTeamPurpleGemDiv">
		                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="extraOrangeGemPhoto gem">
		            </div>
		        <?php endif; ?>
		        <?php if($image_2): ?>
		            <div class="ourTeamPinkGemDiv">
		                <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>" class="extraBlueGemPhoto gem">
		            </div>
		        <?php endif; ?>
	        </div>
	    </div>
	<?php endif; ?>
    <?php if($light_image || $dark_image): ?>
	    <div class="ourTeamOverlaysDiv">
	        <div class="ourTeamTorchDiv torch">
	        	<?php if($dark_image): ?>
	            	<img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="ourTeamTorch night">
	            	<div class="torchGlow night" id="torchGlow1"></div>
	            <?php endif; ?>
	            <?php if($light_image): ?>
	            	<img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="treeBranch1 torch day">
	            <?php endif; ?>
	        </div>
	    </div>
	<?php endif; ?>
</section>