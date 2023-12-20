<?php
/**
 * Block Name: Policy
 */
?>
<?php
	$title = get_field('title');
	$text_1 = get_field('text_1');
	$text_2 = get_field('text_2');
	$text_3 = get_field('text_3');
	$text_4 = get_field('text_4');
	$text_5 = get_field('text_5');
	$text_6 = get_field('text_6');
?>
<!-- Policy Section -->
<section class="policySection">
    <img src="<?php echo get_template_directory_uri(); ?>/images/security/PolicyBackground.png" alt="PolicyBackground" class="policyBackgroundPhoto">
    <div class="policySectionOverlaysDiv">
    	<?php if($title): ?>
        	<div class="policyHeaderDiv"><?php echo $title; ?></div>
        <?php endif; ?>
        <div class="policyBodyDiv">
            <div class="policyColumnDiv">
            	<?php if($text_1['title'] || $text_1['text']): ?>
	                <div class="policyArticleDiv">
	                	<?php if($text_1['title']): ?>
		                    <div class="policyArticleHeader">
		                        <img src="<?php echo get_template_directory_uri(); ?>/images/security/LargeListIndicator.png" alt="LargeListIndicator" class="largeListIndicatorPhoto">
		                        <div class="policyArticleHeaderText"><?php echo $text_1['title']; ?></div>
		                    </div>
		                <?php endif; ?>
		                <?php if($text_1['text']): ?>
	                    	<div class="policyArticleBody"><?php echo $text_1['text']; ?></div>
	                    <?php endif; ?>
	                </div>
	            <?php endif; ?>
	            <?php if($text_2['title'] || $text_2['text']): ?>
	                <div class="policyArticleDiv">
	                	<?php if($text_2['title']): ?>
		                    <div class="policyArticleHeader">
		                        <img src="<?php echo get_template_directory_uri(); ?>/images/security/LargeListIndicator.png" alt="LargeListIndicator" class="largeListIndicatorPhoto">
		                        <div class="policyArticleHeaderText"><?php echo $text_2['title']; ?></div>
		                    </div>
		                <?php endif; ?>
		                <?php if($text_2['text']): ?>
	                    	<div class="policyArticleBody"><?php echo $text_2['text']; ?></div>
	                    <?php endif; ?>
	                </div>
	            <?php endif; ?>
	            <?php if($text_3['title'] || $text_3['text']): ?>
	                <div class="policyArticleDiv">
	                	<?php if($text_3['title']): ?>
		                    <div class="policyArticleHeader">
		                        <img src="<?php echo get_template_directory_uri(); ?>/images/security/LargeListIndicator.png" alt="LargeListIndicator" class="largeListIndicatorPhoto">
		                        <div class="policyArticleHeaderText"><?php echo $text_3['title']; ?></div>
		                    </div>
		                <?php endif; ?>
		                <?php if($text_3['text']): ?>
	                    	<div class="policyArticleBody"><?php echo $text_3['text']; ?></div>
	                    <?php endif; ?>
	                </div>
	            <?php endif; ?>
            </div>
            <?php if($text_4['title'] || $text_4['list'] || $text_5['title'] || $text_5['list'] || $text_6['title'] || $text_6['text']): ?>
	            <div class="policyColumnDiv">
	            	<?php if($text_4['title'] || $text_4['list']): ?>
		                <div class="policyArticleDiv">
		                	<?php if($text_4['title']): ?>
			                    <div class="policyArticleHeader">
			                        <div class="policyArticleHeaderText"><?php echo $text_4['title']; ?></div>
			                    </div>
			                <?php endif; ?>
			                <?php if($text_4['list']): ?>
			                    <div class="policyArticleList">
			                    	<?php foreach($text_4['list'] as $item): ?>
				                        <div class="policyArticleListRow">
				                            <img src="<?php echo get_template_directory_uri(); ?>/images/security/ListIndicator.png" alt="ListIndicator" class="articleListIndicatorPhoto"><?php echo $item['text']; ?>
				                        </div>
				                    <?php endforeach; ?>
			                    </div>
			                <?php endif; ?>
		                </div>
	                <?php endif; ?>
	                <?php if($text_5['title'] || $text_5['list']): ?>
		                <div class="policyArticleDiv">
		                	<?php if($text_5['title']): ?>
			                    <div class="policyArticleHeader">
			                        <div class="policyArticleHeaderText"><?php echo $text_5['title']; ?></div>
			                    </div>
			                <?php endif; ?>
			                <?php if($text_5['list']): ?>
			                    <div class="policyArticleList">
			                    	<?php foreach($text_5['list'] as $item): ?>
				                        <div class="policyArticleListRow">
				                            <img src="<?php echo get_template_directory_uri(); ?>/images/security/ListIndicator.png" alt="ListIndicator" class="articleListIndicatorPhoto"><?php echo $item['text']; ?>
				                        </div>
				                    <?php endforeach; ?>
			                    </div>
		                    <?php endif; ?>
		                </div>
		           <?php endif; ?>
		           <?php if($text_6['title'] || $text_6['text']): ?>
		                <div class="policyArticleDiv">
		                	<?php if($text_6['title']): ?>
			                    <div class="policyArticleHeader">
			                        <div class="policyArticleHeaderText"><?php echo $text_6['title']; ?></div>
			                    </div>
			                <?php endif; ?>
			                <?php if($text_6['text']): ?>
		                    	<div class="policyArticleBody"><?php echo $text_6['text']; ?></div>
		                    <?php endif; ?>
		                </div>
	                <?php endif; ?>
	            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Mobile Only -->
<div class="videosButtonsMobileDiv">
    <div class="videosBackButton">
        <img src="<?php echo get_template_directory_uri(); ?>/images/CompetitionCountdownSword3.png" alt="CompetitionCountdownSword3" class="videosBackButtonPhoto">
    </div>
    <div class="videosNextButton">
        <img src="<?php echo get_template_directory_uri(); ?>/images/CompetitionCountdownSword3.png" alt="CompetitionCountdownSword3" class="videosNextButtonPhoto">
    </div>
</div>