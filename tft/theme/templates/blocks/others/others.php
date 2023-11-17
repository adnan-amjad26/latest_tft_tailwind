<?php
/**
 * Block Name: Others
 */
?>
<?php $items = get_field('items'); ?>
<!-- Others Section -->
<div class="othersSection">
	<?php if($items): ?>
		<?php $i = 1; foreach($items as $item): ?>
		    <div class="othersAnimateDiv<?php echo $i; ?>">
		        <div class="othersContainerDiv" id="othersContainerDiv<?php echo $i; ?>">
		            <div class="othersContainerOverlaysDiv">
		            	<?php if($item['image']): ?>
		                	<img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['title']; ?>" class="othersLogoPhoto">
		                <?php endif; ?>
		                <?php if($item['text']): ?>
		                	<div class="othersContainerText"><?php echo $item['text']; ?></div>
		                <?php endif; ?>
		                <?php if($item['link']): ?>
			                <a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target']; ?>" class="CTAButton CTAButtonAnimate CTAButtonCenter">
			                    <div class="CTAButtonText noselect"><?php echo $item['link']['title']; ?></div>
			                    <img src="<?php echo get_template_directory_uri(); ?>/images/CTAButtonBackground.png" alt="CTAButtonBackground" class="CTABackgroundPhoto">
			                </a>
			            <?php endif; ?>
		            </div>
		        </div>
		    </div>
		<?php $i++; endforeach; ?>
	    <div class="othersSwordsDiv">
	    	<?php $i = 1; foreach($items as $item): ?>
		        <div class="swordsRotateDiv<?php echo $i; ?>">
		            <div class="swordsFan<?php echo $i; ?>Div">
		                <div class="othersSwordsFan<?php echo $i; ?>">
		                	<?php foreach($item['images'] as $image): ?>
		                    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="othersSwordFan<?php echo $i; ?>Photo">
		                    <?php endforeach; ?>
		                </div>
		            </div>
		        </div>
		    <?php $i++; endforeach; ?>
	    </div>
    <?php endif; ?>
</div>