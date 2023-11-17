<?php
/**
 * Block Name: Leaderboards
 */
?>

<?php 

$leaderboard_url = "https://api.arizet.io/tft/competitions/leaderboard?apiKey=tftOZ5fQtHgsHMxMErMgp3pPK3k5kXq42bAfR734XM2yYI8Oonr9L18XyuMmG6AjgyXk3yQfrupTdbkMkGLuQmdBAS9VZzGyuWnoIGPxM9AtfvE7pjRZGam8WDwWckiF";
$leaderboard_response = file_get_contents($leaderboard_url);
$leaderboard_response = json_decode($leaderboard_response);

$top_trader = $leaderboard_response->Data[0]->data[0];
$traders_list = $leaderboard_response->Data[0]->data;

?>

<?php
	$id = get_field('id');
	$title = get_field('title');
	$text = get_field('text');
	$image = get_field('image');
	$image_2 = get_field('image_2');
	$image_3 = get_field('image_3');
	$image_4 = get_field('image_4');
	$text_1 = get_field('text_1');
	$text_2 = get_field('text_2');
	$leaderboard = get_field('leaderboard');
	$decor_image = get_field('decor_image');
	$decor_image_2 = get_field('decor_image_2');
	$light_image = get_field('light_lottie');
	$dark_image = get_field('dark_image');
?>
<!-- Leaderboards Section -->
<section class="leaderboardsSection">
    <div class="leaderboardsSectionTopDiv">
    	<?php if($id || $title || $text): ?>
	        <div class="leaderboardsTextDiv">
		        <div class="leaderboardsTextHeader"<?php if($id) echo ' id="'.$id.'"'; ?>><?php echo $title; ?></div>
	            <?php if($text): ?>
	            	<div class="leaderboardsTextBody"><?php echo $text; ?></div>
	            <?php endif; ?>
	        </div>
        <?php endif; ?>
        <?php if($image || $image_2 || $image_3 || $image_4 || $text_1 || $text_2): ?>
	        <div class="leaderboardsTopPlayerAnimateDiv">
	            <div class="leaderboardsTopPlayerDiv">
	            	<?php if($image): ?>
	                	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="leaderboardsTopPlayerBackgroundPhoto">
	                <?php endif; ?>
	                <?php if($image_2 || $image_3 || $image_4 || $text_1 || $text_2): ?>
		                <div class="leaderboardsTopPlayerOverlaysDiv">
		                	<?php if($image_2): ?>
		                		<img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>" class="leaderboardsTopPlayerFramePhoto">
		                	<?php endif; ?>
		                	<?php if($image_3): ?>
		                		<img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['title']; ?>" class="leaderboardsTopPlayerSwordLeftPhoto">
		                	<?php endif; ?>
		                	<?php if($image_4): ?>
		                		<img src="<?php echo $image_4['url']; ?>" alt="<?php echo $image_4['title']; ?>" class="leaderboardsTopPlayerSwordRightPhoto">
		                	<?php endif; ?>
		                    <div class="leaderboardsTopPlayerProfilePhotoDiv"><img src="https://funded.cbddev.com/wp-content/uploads/2022/11/AppShowcaseCrown.png"></div>
		                    <?php if($text_1 || $text_2): ?>
		                    	<div class="leaderboardsTopPlayerTextDiv">
		                    		<?php if($text_1): ?>
<!-- 		                    			<div class="leaderboardsTopPlayerNameDiv"><?php echo $text_1; ?></div> -->
										<div class="leaderboardsTopPlayerNameDiv"><?php echo $top_trader->username; ?></div>
		                    		<?php endif; ?>
		                    		<?php if($text_2): ?>
		                    			<div class="leaderboardsTopPlayerStreakDiv"><?php echo $text_2; ?></div>
		                    		<?php endif; ?>
		                    	</div>
			                <?php endif; ?>
		                </div>
	                <?php endif; ?>
	            </div>
	        </div>
	    <?php endif; ?>
    </div>
    <?php if($leaderboard || $decor_image || $decor_image_2 || $dark_image || $light_image): ?>
	    <div class="leaderboardsSectionBottomDiv">
	    	<?php if($leaderboard || $link || $decor_image || $decor_image_2): ?>
		        <div class="leaderboardsDiv">
		        	<?php if($leaderboard['title']['text'] || $leaderboard['title']['icon']): ?>
			            <div class="leaderboardsHeaderDiv headerTextResponsive">
			            	<?php if($leaderboard['title']['icon']): ?>
				                <img src="<?php echo $leaderboard['title']['icon']['url']; ?>" alt="<?php echo $leaderboard['title']['icon']['title']; ?>" class="leaderboardsCrownHeaderPhoto">
				            <?php endif; ?>
			                <?php if($leaderboard['title']['text']): ?>
			                	<t class="leaderboardsHeaderText"><?php echo $leaderboard['title']['text']; ?></t>
			                <?php endif; ?>
			            </div>
			        <?php endif; ?>
			        <?php if($leaderboard['table'] || $leaderboard['link']): ?>
			            <div class="leaderboardsActualDiv">
			                <?php if($leaderboard['table']): ?>
							<?php //var_dump($traders_list); ?>
			                	<?php foreach($traders_list as $row): ?>
			                		<div class="leaderboardsActualRowDiv">
			                			<div class="leaderboardsActualRowRankDiv"><?php echo $row->leaderboardRank; ?>.</div>
			                			<div class="leaderboardsActualRowNameDiv">
											<?php if($row->leaderboardRank == 1) { ?>
												<img src="https://funded.cbddev.com/wp-content/uploads/2022/11/LeaderboardsCrown.png" alt="first">
											<?php } else { } ?>
			                				<?php //if($row['icon']): ?>
<!-- 			                					<img src="<?php //echo $row['icon']['url']; ?>" alt="<?php //echo $row['icon']['title']; ?>" class="leaderboardsCrownPhoto"> -->
			                				<?php //endif; ?>
			                				<?php echo $row->username; ?>
			                			</div>
			                			<div class="leaderboardsActualRowReturnDiv"><?php echo number_format($row->returnpercent, 0, '', '.'); ?>%</div>
			                			<div class="leaderboardsActualRowProfitDiv">$<?php echo $row->todatetotalpnl; ?></div>
			                		</div>
			                	<?php endforeach; ?>
				            <?php endif; ?>
			                <?php if($leaderboard['link']): ?>
				                <a href="<?php echo $leaderboard['link']['url']; ?>" target="<?php echo $leaderboard['link']['target']; ?>" class="leaderboardsButton CTAButtonAnimate">
				                    <t class="leaderboardsButtonText noselect"><?php echo $leaderboard['link']['title']; ?></t>
				                    <img src="<?php echo get_template_directory_uri(); ?>/images/LeaderboardsButtonBackground.png" alt="LeaderboardsButtonBackground" class="leaderboardsButtonBackgroundPhoto">
				                </a>
				            <?php endif; ?>
			            </div>
			        <?php endif; ?>
		        </div>
	        <?php endif; ?>
	        <?php if($dark_image || $light_image): ?>
		        <div class="leaderboardsOverlaysDiv">
		            <div class="leaderboardsTorchDiv torch">
		            	<?php if($dark_image): ?>
		                	<img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="leaderboardsTorch night">
		                	<div class="torchGlow night" id="torchGlow4"></div>
		                <?php endif; ?>
		                <?php if($light_image): ?>
						<lottie-player src="<?php echo $light_image; ?>" class="treeBranch2 torch day" background="transparent" speed="1" loop="" autoplay=""></lottie-player>
		                <?php endif; ?>
		            </div>
		        </div>
	        <?php endif; ?>
			<?php if($decor_image): ?>
			            <div class="leaderboardsGreenGem">
			                <img src="<?php echo $decor_image['url']; ?>" alt="<?php echo $decor_image['title']; ?>" class="leaderboardsGreenGemPhoto gem">
			            </div>
			        <?php endif; ?>
			        <?php if($decor_image_2): ?>
			            <div class="leaderboardsYellowGem">
			                <img src="<?php echo $decor_image_2['url']; ?>" alt="<?php echo $decor_image_2['title']; ?>" class="leaderboardsYellowGemPhoto gem">
			            </div>
			        <?php endif; ?>
	    </div>
    <?php endif; ?>
</section>