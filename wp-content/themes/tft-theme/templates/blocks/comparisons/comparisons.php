<?php
/**
 * Block Name: Comparisons
 */
?>
<?php
	$comparisonsData = get_fields();
	$title = $comparisonsData['title'];
	$table_1 = $comparisonsData['table_1'];
	$table_2 = $comparisonsData['table_2'];
	$links = $comparisonsData['links'];
	$light_image = $comparisonsData['light_image'];
	$dark_image = $comparisonsData['dark_image'];
	$dark_image_2 = $comparisonsData['dark_image_2'];
	$dark_image_3 = $comparisonsData['dark_image_3'];
	$light_lottie = $comparisonsData['light_lottie'];
?>

<!-- Comparisons Section -->
<section class="comparisonsSection">
	<?php if($light_image || $light_lottie): ?>
	    <!-- Day -->
	    <div class="comparisonsDayDiv day">
	    	<?php if($light_image): ?>
		        <div class="comparisonsDayGradient"></div>
		        <img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="comparisonsBackgroundPhoto">
		    <?php endif; ?>
	        <?php if($light_lottie): ?>
	        	<lottie-player src="<?php echo $light_lottie; ?>" class="comparisonsKnightLottie lottieResponsive" background="transparent" speed="1" loop autoplay></lottie-player>
	        <?php endif; ?>
	    </div>
	<?php endif; ?>
	<?php if($dark_image || $dark_image_2 || $dark_image_3): ?>
    	<!-- Night -->
	    <?php if($dark_image): ?>
	    	<img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="comparisonsBackgroundPhoto night">
	    <?php endif; ?>
	    <?php if($dark_image_2): ?>
	    	<img src="<?php echo $dark_image_2['url']; ?>" alt="<?php echo $dark_image_2['title']; ?>" class="spearGlowPhoto night">
	    <?php endif; ?>
	    <?php if($dark_image_3): ?>
	    	<img src="<?php echo $dark_image_3['url']; ?>" alt="<?php echo $dark_image_3['title']; ?>" class="doorGlowPhoto night">
	    <?php endif; ?>
    <?php endif; ?>
    <div class="comparisonsContainerDiv">
    	<?php if($title): ?>
        	<div class="comparisonsHeader headerTextResponsive"><?php echo $title; ?></div>
        <?php endif; ?>
        <?php if($table_1 || $links || $table_2): ?>
	        <div class="comparisonsActualContainerDiv">
	        	<?php if($table_1['title'] || $table_1['table']): ?>
		            <div class="comparisonsAnimateDiv1">
		                <div class="comparisonsTFTDiv">
							<div class="crystals"></div>
								<div class="comparisonsTFTActualDiv comp1background">
									<?php if($table_1['title']): ?>
										<div class="comparisonsTFTHeader alwaysShow"><?php echo $table_1['title']; ?></div>
									<?php endif; ?>
									<?php if($table_1['table']): ?>
										<?php $i = 1; foreach($table_1['table'] as $row): ?>
											<div class="comparisonsTFTActualRowDiv<?php if($i == count($table_1['table'])) echo ' borderNone'; ?>">
												<div class="comparisonsTFTActualRowLabel"><?php echo $row['label']; ?></div>
												<div class="comparisonsTFTActualRowValue"><?php echo $row['value']; ?></div>
											</div>
										<?php $i++; endforeach; ?>
									<?php endif; ?>
								</div>
							</div>
		                </div>
	            <?php endif; ?>
					<div class="comparisonsCompetitorButtonsDiv">
						<?php if( have_rows('table') ):
							while ( have_rows('table') ) : the_row(); ?>
								<button onclick="comparisons(this.id)" id="<?php echo get_sub_field('title_label');?>" data-name="<?php echo get_sub_field('title_label');?>" target="<?php echo $link['target']; ?>" class="loadedShow comparisonsCompetitorButton CTAButtonAnimate">
									<t class="comparisonsCompetitorButtonText noselect"><?php echo get_sub_field('title_label');?></t>
									<img src="<?php echo get_template_directory_uri(); ?>/images/ComparisonsButtonBackground.png" alt="ComparisonsButtonBackground" class="comparisonsButtonPhoto">
								</button>
							<?php endwhile;
						else :
						endif; ?>
					</div>
		            <div class="comparisonsAnimateDiv2">
		                <div class="comparisonsCompetitorDiv">
							<div class="crystals"></div>
		                    <div class="comparisonsTFTActualDiv comp2background">
								<?php if( have_rows('table') ):
									while ( have_rows('table') ) : the_row(); ?>
										<div data-name="<?php echo get_sub_field('title_label');?>" id="<?php echo get_sub_field('title_label');?>" class="comparisonsTFTHeader loadedShow"><?php echo get_sub_field('title_label');?></div>
									<?php endwhile;
									else :
								endif;
								if( have_rows('table') ):
									while ( have_rows('table') ) : the_row(); 
										$dataNameID = get_sub_field('title_label'); ?>
										<div class="comp-outer-content loadedShow" data-name="<?php echo $dataNameID;?>" id="<?php echo $dataNameID;?>">
										<?php if( have_rows('content') ):
											while ( have_rows('content') ) : the_row(); ?>
											<div class="comparisonsTFTActualRowDiv">
												<div class="comparisonsTFTActualRowLabel"><?php echo get_sub_field('label');?></div>
												<div class="comparisonsTFTActualRowValue"><?php echo get_sub_field('value');?></div>	
											</div>
											<?php endwhile;
											else :
										endif; ?>
										</div>
									<?php endwhile;
									else :
								endif; ?>
							</div>
		                </div>
		            </div>
	        </div>
	    <?php endif; ?>
    </div>
</section>