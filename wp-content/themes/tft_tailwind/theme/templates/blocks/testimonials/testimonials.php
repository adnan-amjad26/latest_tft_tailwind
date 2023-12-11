<?php
/**
 * Block Name: Testimonials
 */
?>
<?php
	$image = get_field('image');
	$title = get_field('title');
	$testimonials = get_field('testimonials');
?>
<!-- Testimonials Sections -->
<section class="testimonialsSection">
	<?php if($image): ?>
    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="testimonialsLogoPhoto">
    <?php endif; ?>
    <?php if($title): ?>
    	<div class="testimonialsHeader headerTextResponsive"><?php echo $title; ?></div>
    <?php endif; ?>
    <?php if($testimonials): ?>
	    <div class="testimonialsSliderContainerDiv">
	        <div class="testimonialsSliderDiv">
	        	<?php foreach($testimonials as $testimonial): ?>
		            <div class="testimonialsCardDiv">
		                <img src="<?php echo get_template_directory_uri(); ?>/images/TestimonialsCard.png" alt="TestimonialsCard" class="testimonialsCardPhoto">
		                <div class="testimonialsCardTextDiv">
		                    <div class="testimonialsCardTextHeader"><?php echo $testimonial['title']; ?></div>
		                    <div class="testimonialsCardTextBody"><?php echo $testimonial['text']; ?></div>
		                    <?php if($testimonial['rating']): ?>
			                    <div class="testimonialsCardTextRating">
			                    	<?php for($i = 1; $i <= $testimonial['rating']; $i++): ?>
			                        	<img src="<?php echo get_template_directory_uri(); ?>/images/TestimonialsStar.png" alt="TestimonialsStar" class="testimonialsStarPhoto">
			                        <?php endfor; ?>
			                    </div>
			                <?php endif; ?>
		                </div>
		            </div>
		        <?php endforeach; ?>
	        </div>
	    </div>
	    <?php if(count($testimonials) > 3): ?>
		    <div class="testimonialsSliderIndicatorsContainerDiv">
		    	<?php for($i = 0; $i < floor(count($testimonials) / 2); $i++): ?>
			        <div class="testimonialsIndicatorDiv">
			            <img src="<?php echo get_template_directory_uri(); ?>/images/TestimonialsIndicator.png" alt="TestimonialsIndicator" class="testimonialsIndicatorPhoto">
			            <div class="testimonialsIndicator"></div>
			        </div>
			   <?php endfor; ?>
		    </div>
		<?php endif; ?>
	    <?php if(count($testimonials) > 1): ?>
		    <!-- Mobile Only -->
		    <div class="testimonialsButtonsMobileDiv">
		        <div class="testimonialsBackButton">
		            <img src="<?php echo get_template_directory_uri(); ?>/images/CompetitionCountdownSword4.png" alt="CompetitionCountdownSword4" class="testimonialsBackButtonPhoto">
		        </div>
		        <div class="testimonialsNextButton">
		            <img src="<?php echo get_template_directory_uri(); ?>/images/CompetitionCountdownSword4.png" alt="CompetitionCountdownSword4" class="testimonialsNextButtonPhoto">
		        </div>
		    </div>
		<?php endif; ?>
    <?php endif; ?>
</section>