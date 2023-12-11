<?php
/**
 * Block Name: Lists
 */
?>
<?php
	$list_1 = get_field('list_1');
	$list_2 = get_field('list_2');
?>
<!-- Lists Section -->
<section class="comparisonsSection">
    <div class="comparisonsContainerDiv">
        <div class="comparisonsActualContainerDiv">
        	<?php if($list_1): ?>
	            <div class="comparisonsAnimateDiv1">
					<div class="crystals"></div>
	                <div class="comparisonsTFTDiv">
	                	<img src="<?php echo get_template_directory_uri(); ?>/images/ComparisonsBorderTFT.png" alt="ComparisonsBorderTFT" class="comparisonsBorderTFTPhoto">
	                    <div class="comparisonsTFTActualDiv">
	                    	<?php if($list_1['title']): ?>
		                        <div class="comparisonsTFTHeader"><?php echo $list_1['title']; ?></div>
		                    <?php endif; ?>
		                    <?php if($list_1['list']): ?>
		                        <div class="guidelinesDiv">
		                        	<?php foreach($list_1['list'] as $item): ?>
			                            <div class="guidelinesRow">
			                                <div class="guidelinesIndicatorColumn">
			                                    <img src="<?php echo get_template_directory_uri(); ?>/images/security/ListIndicator.png" alt="ListIndicator" class="listIndicatorPhoto">
			                                </div>
			                                <div class="guidelinesTextColumn">
			                                	<?php echo $item['text']; ?>
			                                	<?php if($item['link']): ?>
		                                        	<a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target']; ?>" class="guidelinesLinkText"><?php echo $item['link']['title']; ?></a>
		                                        <?php endif; ?>
			                                </div>
			                            </div>
			                        <?php endforeach; ?>
		                        </div>
		                    <?php endif; ?>
	                    </div>
	                </div>
	            </div>
	        <?php endif; ?>
	        <?php if($list_2): ?>
	            <div class="comparisonsAnimateDiv2">
					<div class="crystals"></div>
	                <div class="comparisonsCompetitorDiv">
	                	<img src="<?php echo get_template_directory_uri(); ?>/images/ComparisonsBorderCompetitor.png" alt="ComparisonsBorderCompetitor" class="comparisonsBorderTFTPhoto">
	                    <div class="comparisonsTFTActualDiv">
	                        <div class="comparisonsTFTActualDiv">
	                        	<?php if($list_2['title']): ?>
		                            <div class="comparisonsTFTHeader"><?php echo $list_2['title']; ?></div>
		                        <?php endif; ?>
		                        <?php if($list_2['list']): ?>
		                            <div class="guidelinesDiv">
		                            	<?php foreach($list_2['list'] as $item): ?>
			                                <div class="guidelinesRow">
			                                    <div class="guidelinesIndicatorColumn">
			                                        <img src="<?php echo get_template_directory_uri(); ?>/images/security/ListIndicator.png" alt="ListIndicator" class="listIndicatorPhoto">
			                                    </div>
			                                    <div class="guidelinesTextColumn">
			                                    	<?php echo $item['text']; ?>
			                                    	<?php if($item['link']): ?>
			                                        	<a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target']; ?>" class="guidelinesLinkText"><?php echo $item['link']['title']; ?></a>
			                                        <?php endif; ?>
			                                    </div>
			                                </div>
		                                <?php endforeach; ?>
		                            </div>
		                        <?php endif; ?>
	                        </div>
	                    </div>
	                </div>
	            </div>
            <?php endif; ?>
        </div>
    </div>
</section>