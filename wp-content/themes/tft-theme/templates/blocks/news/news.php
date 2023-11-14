<?php
/**
 * Block Name: News
 */
?>
<?php
	$title = get_field('title');
	$text = get_field('text');
	$link = get_field('link');
	$video = get_field('video');
	$image = get_field('image');
	$image_2 = get_field('image_2');
	$image_3 = get_field('image_3');
	$type = (get_field('type')) ? get_field('type') : 'home';
?>
<!-- News Section -->
<?php if($type == 'home'): ?>
	<section class="questIntroSection newsSection">
		<?php if($title || $text || $link): ?>
		    <div class="questIntroTextDiv">
		    	<?php if($title): ?>
		        	<div class="questIntroHeaderDiv headerTextResponsive"><?php echo $title; ?></div>
		        <?php endif; ?>
		        <?php if($text): ?>
		        	<div class="questIntroBodyDiv"><?php echo $text; ?></div>
		        <?php endif; ?>
		        <?php if($link): ?>
			        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
			            <div class="newsButton CTAButtonAnimate">
			                <img src="<?php echo get_template_directory_uri(); ?>/images/NewsButton.png" alt="NewsButton" class="newsButtonPhoto">
			                <div class="newsButtonText noselect"><?php echo $link['title']; ?></div>
			            </div>
			        </a>
		        <?php endif; ?>
		    </div>
	    <?php endif; ?>
	    <?php if($video['url'] || $image || $image_2): ?>
		    <div class="questVideoContainerDiv">
		        <div class="questIntroVideoDiv">
		        	<?php if($video['url']): ?>
			            <div class="testVideoDiv">
			                <iframe class="videoIframe" src="<?php echo $video['url']; ?>"<?php if($video['title']) echo ' title="'.$video['title'].'"'; ?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			            </div>
			            <img src="<?php echo get_template_directory_uri(); ?>/images/QuestIntroVideoBackground.png" alt="QuestIntroVideoBackground" class="questIntroVideoBackgroundPhoto">
			        <?php endif; ?>
		            <?php if($image): ?>
			            <div class="newsRedGem">
			                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="newsRedGemPhoto gem">
			            </div>
			        <?php endif; ?>
			        <?php if($image_2): ?>
			            <div class="newsYellowGem">
			                <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['url']; ?>" class="newsYellowGemPhoto gem">
			            </div>
			        <?php endif; ?>
		        </div>
		    </div>
	    <?php endif; ?>
	    <?php if($image_3): ?>
		    <div class="questIntroOverlaysDiv">
		        <div class="questIntroTorchDiv torch">
		            <img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['title']; ?>" class="questIntroTorch">
		            <div class="torchGlow" id="torchGlow5"></div>
		        </div>
		    </div>
		<?php endif; ?>
	</section>
<?php elseif($type == 'about'): ?>
	<section class="newsSection">
		<?php if($title || $text || $link): ?>
	        <div class="ourTeamTextDiv">
	        	<?php if($title): ?>
	        		<div class="ourTeamHeaderDiv headerTextResponsive"><?php echo $title; ?></div>
	        	<?php endif; ?>
	        	<?php if($text): ?>
	        		<div class="ourTeamBodyDiv"><?php echo $text; ?></div>
	        	<?php endif; ?>
	        	<?php if($link): ?>
	        		<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
	        			<div class="newsButton CTAButtonAnimate">
	        				<img src="<?php echo get_template_directory_uri(); ?>/images/NewsButton.png" alt="NewsButton" class="newsButtonPhoto">
	        				<div class="newsButtonText noselect"><?php echo $link['title']; ?></div>
	        			</div>
	        		</a>
	        	<?php endif; ?>
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
		                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="newsRedGemPhoto gem">
		                </div>
	                <?php endif; ?>
	                <?php if($image_2): ?>
		                <div class="ourTeamPinkGemDiv">
		                    <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>" class="newsYellowGemPhoto gem">
		                </div>
	                <?php endif; ?>
	            </div>
	        </div>
	    <?php endif; ?>
    </section>
<?php endif; ?>