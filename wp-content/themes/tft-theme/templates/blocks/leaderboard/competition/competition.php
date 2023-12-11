<?php
/**
 * Block Name: Competition
 */
?>
<?php
	$title = get_field('title');
	$items = get_field('items');
?>
<!-- Competition Countdown Section -->
<section class="competitionCountdownSection">
    <div class="videosOverlaysDiv">
    	<?php if($title): ?>
        	<div class="videosHeader headerTextResponsive"><?php echo $title; ?></div>
        <?php endif; ?>
        <?php if($items): ?>
	        <div class="videosOverlaysBottomDiv">
	        	<?php foreach($items as $item): ?>
		            <div class="videoContainerDiv">
		            	<?php if($item['image']): ?>
		                	<img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['title']; ?>" class="videosSecurityPhoto">
		                <?php endif; ?>
		                <?php if($item['title']): ?>
		                	<div class="videoContainerHeader"><?php echo $item['title']; ?></div>
		                <?php endif; ?>
		                <?php if($item['video']): ?>
			                <div class="videoContainerActualDiv">
			                    <img src="<?php echo get_template_directory_uri(); ?>/images/VideosBorder.png" alt="VideosBorder" class="videosBorderPhoto">
			                    <div class="videosContainerVideoDiv">
			                    	<iframe class="videoIframe" src="<?php echo $item['video']['url']; ?>"<?php if($item['video']['title']) echo ' title="'.$item['video']['title'].'"'; ?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                    </div>
			                </div>
			            <?php endif; ?>
		                <?php if($item['text']): ?>
		                	<div class="videoContainerBody"><?php echo $item['text']; ?></div>
		                <?php endif; ?>
		            </div>
		        <?php endforeach; ?>
	        </div>
	    <?php endif; ?>
        <!-- Mobile Only -->
        <div class="videosButtonsMobileDiv">
            <div class="videosBackButton">
                <img src="<?php echo get_template_directory_uri(); ?>/images/CompetitionCountdownSword3.png" alt="CompetitionCountdownSword3" class="videosBackButtonPhoto">
            </div>
            <div class="videosNextButton">
                <img src="<?php echo get_template_directory_uri(); ?>/images/CompetitionCountdownSword3.png" alt="CompetitionCountdownSword3" class="videosNextButtonPhoto">
            </div>
        </div>
    </div>
</section>