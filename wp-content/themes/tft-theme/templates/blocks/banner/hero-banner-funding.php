<?php
/**
 * Block Name: Hero Banner
 */
?>
<?php
	$light_image = get_field('light_image');
	$light_image_2 = get_field('light_image_2');
	$light_image_3 = get_field('light_image_3');
	$light_lottie = get_field('light_lottie');
	$light_lottie_2 = get_field('light_lottie_2');
	$light_lottie_3 = get_field('light_lottie_3');
	$dark_image = get_field('dark_image');
	$dark_image_2 = get_field('dark_image_2');
	$dark_image_3 = get_field('dark_image_3');
	$dark_image_4 = get_field('dark_image_4');
	$dark_image_5 = get_field('dark_image_5');
	$dark_image_6 = get_field('dark_image_6');
	$dark_image_7 = get_field('dark_image_7');
	$dark_image_8 = get_field('dark_image_8');
	$dark_image_9 = get_field('dark_image_9');
	$dark_image_10 = get_field('dark_image_10');
	$dark_image_11 = get_field('dark_image_11');
	$dark_image_12 = get_field('dark_image_12');
	$dark_lottie = get_field('dark_lottie');
	$dark_lottie_2 = get_field('dark_lottie_2');
	$dark_lottie_3 = get_field('dark_lottie_3');
	$title = get_field('title');
	$text = get_field('text');
	$button = get_field('button');
	$button_2 = get_field('button_2');
	$button_3 = get_field('button_3');
	$scoll_down = get_field('scroll_down');
	$type = (get_field('type')) ? get_field('type') : 'home';
?>
<?php if($scoll_down): ?>
	<!-- Scroll Down Div -->
	<div class="scrollDownDiv">
	    <div class="scrollDownScreenDiv">
	         <div class="scrollDownContainerDiv">
	             <div class="scrollDownTextDiv"><?php esc_html_e('SCROLL', 'cbd'); ?></div>
	             <div class="scrollDownSwordDiv">
	                 <img src="<?php echo get_template_directory_uri(); ?>/images/index/HeroScrollSword.png" alt="ScrollSword" class="heroScrollSwordPhoto">
	             </div>
	         </div>
	    </div>
	</div>
<?php endif; ?>

<!-- Hero Section -->
<section class="heroSection">
	<?php if($type == 'home'): ?>
	    <?php if($light_image || $light_image_2 || $light_image_3 || $light_lottie || $light_lottie_2 || $light_lottie_3): ?>
		    <!-- Day -->
		    <div class="heroImageLayersDiv day">
		    	<?php if($light_image): ?>
		        	<img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="heroLayerPhotos heroBackgroundLayerPhoto heroBackgroundPhotoDay">
		        <?php endif; ?>
		        <?php if($light_image_2): ?>
			        <div class="heroHandPhotoDiv">
			            <img src="<?php echo $light_image_2['url']; ?>" alt="<?php echo $light_image_2['title']; ?>" class="heroHandPhoto">
			        </div>
			    <?php endif; ?>
			    <?php if($light_image_3): ?>
			        <div class="heroSunPhotoDiv">
			            <img src="<?php echo $light_image_3['url']; ?>" alt="<?php echo $light_image_3['title']; ?>" class="heroLayerPhotos heroSunPhoto">
			        </div>
			    <?php endif; ?>
			    <?php if($light_lottie || $light_lottie_2 || $light_lottie_3): ?>
			        <div class="lottieDiv">
			        	<?php if($light_lottie): ?>
				            <div class="HeroKnight1LottieDiv">
				                <lottie-player src="<?php echo $light_lottie; ?>" class="heroKnight1LottieDay lottieResponsive" background="transparent" speed="1" loop autoplay></lottie-player>
				            </div>
				        <?php endif; ?>
				        <?php if($light_lottie_2): ?>
				            <div class="HeroDragon1LottieDiv">
				                <lottie-player src="<?php echo $light_lottie_2; ?>" class="heroDragon1LottieDay lottieResponsive" background="transparent" speed="0.6" loop autoplay></lottie-player>
				            </div>
			            <?php endif; ?>
			            <?php if($light_lottie_3): ?>
				            <div class="HeroKnight2LottieDiv">
				                <lottie-player src="<?php echo $light_lottie_3; ?>" class="heroKnight2LottieDay lottieResponsive" background="transparent" speed="1" loop autoplay></lottie-player>
				            </div>
			            <?php endif; ?>
			        </div>
			    <?php endif; ?>
		    </div>
		<?php endif; ?>
		<?php if($dark_image || $dark_image_2 || $dark_image_3 || $dark_image_4 || $dark_image_5 || $dark_image_6 || $dark_lottie || $dark_lottie_2 || $dark_lottie_3): ?>
		    <!-- Night -->
		    <div class="heroImageLayersDiv night">
		    	<?php if($dark_image): ?>
		        	<img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="heroLayerPhotos heroBackgroundLayerPhoto">
		        <?php endif; ?>
		        <?php if($dark_image_2): ?>
		        	<img src="<?php echo $dark_image_2['url']; ?>" alt="<?php echo $dark_image_2['title']; ?>" class="heroLayerPhotos heroMountainLayerPhoto">
		        <?php endif; ?>
		        <?php if($dark_image_3): ?>
		        	<img src="<?php echo $dark_image_3['url']; ?>" alt="<?php echo $dark_image_3['title']; ?>" class="heroLayerPhotos heroCastleLayerPhoto">
		        <?php endif; ?>
		        <?php if($dark_image_4): ?>
		        	<img src="<?php echo $dark_image_4['url']; ?>" alt="<?php echo $dark_image_4['title']; ?>" class="heroLayerPhotos heroFrontLayerPhoto">
		        <?php endif; ?>
		        <?php if($dark_image_5): ?>
			        <div class="heroFilterLayer"></div>
			        <div class="heroMoonDiv">
			            <img src="<?php echo $dark_image_5['url']; ?>" alt="<?php echo $dark_image_5['title']; ?>" class="heroLayerPhotos heroMoonPhoto">
			        </div>
		        <?php endif; ?>
		        <?php if($dark_image_6): ?>
			        <div class="heroHandPhotoDiv">
			            <img src="<?php echo $dark_image_6['url']; ?>" alt="<?php echo $dark_image_6['title']; ?>" class="heroHandPhoto">
			        </div>
		        <?php endif; ?>
		        <?php if($dark_lottie || $dark_lottie_2 || $dark_lottie_3): ?>
			        <div class="lottieDiv">
			        	<?php if($dark_lottie): ?>
				            <div class="HeroDragon1LottieDiv">
				                <lottie-player src="<?php echo $dark_lottie; ?>" class="heroDragon1Lottie lottieResponsive" background="transparent" speed="0.6" loop autoplay></lottie-player>
				            </div>
				        <?php endif; ?>
				        <?php if($dark_lottie_2): ?>
				            <div class="HeroKnight1LottieDiv">
				                <lottie-player src="<?php echo $dark_lottie_2; ?>" class="heroKnight1Lottie lottieResponsive" background="transparent" speed="1" loop autoplay></lottie-player>
				            </div>
				        <?php endif; ?>
			            <?php if($dark_lottie_3): ?>
				            <div class="HeroKnight2LottieDiv">
				                <lottie-player src="<?php echo $dark_lottie_3; ?>" class="heroKnight2Lottie lottieResponsive" background="transparent" speed="1" loop autoplay></lottie-player>
				            </div>
				        <?php endif; ?>
			        </div>
			    <?php endif; ?>
		    </div>
		<?php endif; ?>
	<?php elseif($type == 'about'): ?>
		<?php if($light_image): ?>
			<!-- Day -->
	        <img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="aboutUsHeroBackgroundPhoto day">
	        <div class="sunsetLayerDiv day">
	            <div class="sun"></div>
	        </div>
	    <?php endif; ?>
        <?php if($dark_image): ?>
        	<!-- Night -->
        	<img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="aboutUsHeroBackgroundPhoto night">
        <?php endif; ?>
        <?php if($dark_image_2 || $dark_image_3 || $dark_image_4 || $dark_image_5): ?>
	        <div class="heroRockDivs night">
	        	<?php if($dark_image_2): ?>
	            	<img src="<?php echo $dark_image_2['url']; ?>" alt="<?php echo $dark_image_2['title']; ?>" class="dr1Photo">
	            <?php endif; ?>
	            <?php if($dark_image_3): ?>
	            	<img src="<?php echo $dark_image_3['url']; ?>" alt="<?php echo $dark_image_3['title']; ?>" class="br1Photo">
	            <?php endif; ?>
	            <?php if($dark_image_4): ?>
	            	<img src="<?php echo $dark_image_4['url']; ?>" alt="<?php echo $dark_image_4['title']; ?>" class="mr1Photo">
	            <?php endif; ?>
	            <?php if($dark_image_5): ?>
		            <img src="<?php echo $dark_image_5['url']; ?>" alt="<?php echo $dark_image_5['title']; ?>" class="fr1Photo">
		        <?php endif; ?>
	        </div>
	    <?php endif; ?>
	    <?php if($dark_image_6 || $dark_image_7 || $dark_image_8 || $dark_image_9 || $dark_image_10): ?>
	        <div class="doorGlowDivs night">
	        	<?php if($dark_image_6 || $dark_image_7): ?>
		            <div class="aboutUsHeroDoorGlowPhoto1Div">
		            	<?php if($dark_image_6): ?>
		                	<img src="<?php echo $dark_image_6['url']; ?>" alt="<?php echo $dark_image_6['title']; ?>" class="doorGlow1LogoPhoto">
		                <?php endif; ?>
		                <?php if($dark_image_7): ?>
		                	<img src="<?php echo $dark_image_7['url']; ?>" alt="<?php echo $dark_image_7['title']; ?>" class="aboutUsHeroDoorGlowPhoto1">
		                <?php endif; ?>
		            </div>
	            <?php endif; ?>
	            <?php if($dark_image_8): ?>
		            <div class="aboutUsHeroDoorGlowPhoto2Div">
		                <img src="<?php echo $dark_image_8['url']; ?>" alt="<?php echo $dark_image_8['title']; ?>" class="aboutUsHeroDoorGlowPhoto2">
		            </div>
		        <?php endif; ?>
	            <?php if($dark_image_9): ?>
		            <div class="aboutUsHeroDoorGlowPhoto3Div">
		                <img src="<?php echo $dark_image_9['url']; ?>" alt="<?php echo $dark_image_9['title']; ?>" class="aboutUsHeroDoorGlowPhoto3">
		            </div>
		        <?php endif; ?>
	            <?php if($dark_image_10): ?>
		            <div class="aboutUsHeroDoorGlowPhoto4Div">
		                <img src="<?php echo $dark_image_10['url']; ?>" alt="<?php echo $dark_image_10['title']; ?>" class="aboutUsHeroDoorGlowPhoto4">
		            </div>
		        <?php endif; ?>
	        </div>
	    <?php endif; ?>
	    <?php if($dark_image_11 || $dark_image_12): ?>
	        <div class="spearGlowDivs night">
	        	<?php if($dark_image_11): ?>
		            <div class="aboutUsHeroSpearGlowPhoto1Div">
		                <img src="<?php echo $dark_image_11['url']; ?>" alt="<?php echo $dark_image_11['title']; ?>" class="aboutUsHeroSpearGlowPhoto1">
		            </div>
	            <?php endif; ?>
	            <?php if($dark_image_12): ?>
		            <div class="aboutUsHeroSpearGlowPhoto2Div">
		                <img src="<?php echo $dark_image_12['url']; ?>" alt="<?php echo $dark_image_12['title']; ?>" class="aboutUsHeroSpearGlowPhoto2">
		            </div>
	            <?php endif; ?>
	        </div>
	        <div class="heroFilterLayer"></div>
	    <?php endif; ?>
	<?php elseif($type == 'contact'): ?>
		<?php if($light_image): ?>
			<!-- Day -->
        	<img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="heroBackgroundPhotoDay day">
        <?php endif; ?>
        <?php if($light_lottie): ?>
        	<lottie-player src="<?php echo $light_lottie; ?>" class="heroKnightLottie lottieResponsive day" background="transparent" speed="1" loop autoplay></lottie-player>
        <?php endif; ?>
        <?php if($light_image_2): ?>
        	<img src="<?php echo $light_image_2['url']; ?>" alt="<?php echo $light_image_2['title']; ?>" class="heroCastlePhotoDay day">
        <?php endif; ?>
        <?php if($light_lottie_2): ?>
        	<lottie-player src="<?php echo $light_lottie_2; ?>" class="heroDragonLottie lottieResponsive day" background="transparent" speed="1" loop autoplay></lottie-player>
        <?php endif; ?>
        <?php if($dark_image): ?>
        	<!-- Night -->
        	<img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="heroBackgroundPhoto night">
        <?php endif; ?>
        <?php if($dark_image_2 || $dark_image_3 || $dark_image_4): ?>
        	<div class="heroVolcanoDiv night">
        		<?php if($dark_image_2): ?>
        			<img src="<?php echo $dark_image_2['url']; ?>" alt="<?php echo $dark_image_2['title']; ?>" class="heroVolcanoPhoto">
        		<?php endif; ?>
        		<?php if($dark_image_3): ?>
        			<img src="<?php echo $dark_image_3['url']; ?>" alt="<?php echo $dark_image_3['title']; ?>" class="heroVolcanoGlowPhoto">
        		<?php endif; ?>
        		<?php if($dark_image_4): ?>
        			<img src="<?php echo $dark_image_4['url']; ?>" alt="<?php echo $dark_image_4['title']; ?>" class="heroVolcanoGlowTopPhoto">
        		<?php endif; ?>
        	</div>
        <?php endif; ?>
        <?php if($dark_image_5): ?>
        	<img src="<?php echo $dark_image_5['url']; ?>" alt="<?php echo $dark_image_5['title']; ?>" class="heroMidRocksPhoto night">
        <?php endif; ?>
        <?php if($dark_image_6): ?>
        	<img src="<?php echo $dark_image_6['url']; ?>" alt="<?php echo $dark_image_6['title']; ?>" class="heroLeftRocksPhoto night">
        <?php endif; ?>
        <?php if($dark_image_7): ?>
        	<img src="<?php echo $dark_image_7['url']; ?>" alt="<?php echo $dark_image_7['title']; ?>" class="heroRightRocksPhoto night">
        <?php endif; ?>
        <?php if($dark_image_8): ?>
	        <div class="heroMoonDiv night">
	            <img src="<?php echo $dark_image_8['url']; ?>" alt="<?php echo $dark_image_8['title']; ?>" class="heroMoonPhoto">
	        </div>
        <?php endif; ?>
        <?php if($dark_image_9): ?>
	        <img src="<?php echo $dark_image_9['url']; ?>" alt="<?php echo $dark_image_9['title']; ?>" class="heroFogPhoto night">
	        <div class="heroFilterLayer"></div>
	    <?php endif; ?>
	<?php elseif($type == 'funding'): ?>
		<?php if($light_image || $light_lottie): ?>
			<!-- Day -->
	        <div class="heroImageLayer day">
	        	<?php if($light_image): ?>
	            	<img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="heroBackgroundPhotoDay">
	            <?php endif; ?>
	            <?php if($light_lottie): ?>
	            	<lottie-player src="<?php echo $light_lottie; ?>" class="heroDragonLottie lottieResponsive" background="transparent" speed="1" loop autoplay></lottie-player>
	            <?php endif; ?>
	        </div>
	    <?php endif; ?>
	    <?php if($dark_image || $dark_image_2 || $dark_image_3 || $dark_image_4 || $dark_image_5): ?>
	        <!-- Night -->
	        <div class="heroImageLayer night">
	        	<?php if($dark_image): ?>
	            	<img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="heroBackgroundPhoto">
	            <?php endif; ?>
	            <?php if($dark_image_2): ?>
	            	<img src="<?php echo $dark_image_2['url']; ?>" alt="<?php echo $dark_image_2['title']; ?>" class="heroBackgroundFullPhoto heroCastleLayerPhoto">
	            <?php endif; ?>
	            <?php if($dark_image_3): ?>
		            <div class="heroLayer3Div">
		                <div class="heroLayer3ParallaxDiv">
		                    <img src="<?php echo $dark_image_3['url']; ?>" alt="<?php echo $dark_image_3['title']; ?>" class="heroBackgroundFullPhoto heroLayer3Photo">
		                </div>
		            </div>
		        <?php endif; ?>
		        <?php if($dark_image_4): ?>
		            <div class="heroLayer2Div">
		                <div class="heroLayer2ParallaxDiv">
		                    <img src="<?php echo $dark_image_4['url']; ?>" alt="<?php echo $dark_image_4['title']; ?>" class="heroBackgroundFullPhoto heroLayer2Photo">
		                </div>
		            </div>
		        <?php endif; ?>
		        <?php if($dark_image_5): ?>
	            	<img src="<?php echo $dark_image_5['url']; ?>" alt="<?php echo $dark_image_5['title']; ?>" class="heroBackgroundFullPhoto heroFrontLayerPhoto">
	            <?php endif; ?>
	        </div>
	        <div class="heroFilterLayer night">
	            <div class="heroLightFilterDiv">
	                <div class="heroLightFilter"></div>
	            </div>
	        </div>
	    <?php endif; ?>
	<?php elseif($type == 'security'): ?>
		<?php if($light_image || $light_image_2 || $dark_image || $dark_image_2 || $dark_image_3 || $dark_lottie): ?>
			<div class="heroImageLayer">
				<?php if($light_image): ?>
		            <!-- Day -->
		            <img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="heroBackgroundPhotoDay day">
		        <?php endif; ?>
		        <?php if($light_image_2): ?>
		            <div class="heroDragonDiv day">
		                <img src="<?php echo $light_image_2['url']; ?>" alt="<?php echo $light_image_2['title']; ?>" class="heroDragonPhotoDay">
		            </div>
		        <?php endif; ?>
		        <?php if($dark_image): ?>
		            <!-- Night -->
		            <img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="heroBackgroundParallaxPhoto night">
		        <?php endif; ?>
		        <?php if($dark_image_2): ?>
	            	<img src="<?php echo $dark_image_2['url']; ?>" alt="<?php echo $dark_image_2['title']; ?>" class="heroBackgroundPhoto night">
	            <?php endif; ?>
	            <?php if($dark_image_3): ?>
	            	<img src="<?php echo $dark_image_3['url']; ?>" alt="<?php echo $dark_image_3['title']; ?>" class="heroBackgroundPhoto heroFirePhoto night">
	            <?php endif; ?>
	            <?php if($dark_lottie): ?>
		            <div class="heroDragon1LottieDiv night">
		                <lottie-player src="<?php echo $dark_lottie; ?>" class="heroDragon1Lottie lottieResponsive" background="transparent" speed="0.6" loop autoplay></lottie-player>
		            </div>
	            <?php endif; ?>
	        </div>
	        <div class="heroFilterLayer"></div>
	    <?php endif; ?>
	<?php endif; ?>

    <div class="heroOverlaysDiv">
        <div class="heroOverlaysContainerDiv heroOverlaysContainerDivResponsive">
        	<?php if($title): ?>
	            <div class="heroHeaderDiv headerTextResponsive"><?php echo $title; ?></div>
	        <?php endif; ?>
	        <?php if($text): ?>
	            <div class="heroSubHeaderDiv"><?php echo $text; ?></div>
	        <?php endif; ?>
				
	        <?php if($button['link'] || $button_2['link']): ?>
	            <div class="heroCTADiv">
	            	<?php if($button['link']): ?>
		                <a href="<?php echo $button['link']['url']; ?>" target="<?php echo $button['link']['target']; ?>" class="CTAButton CTAButtonAnimate" id="heroButton1">
		                    <div class="CTAButtonText noselect"><?php echo $button['link']['title']; ?></div>
		                    <img src="<?php echo get_template_directory_uri(); ?>/images/CTAButtonBackground.png" alt="CTAButtonBackground" class="CTABackgroundPhoto">
		                </a>
		            <?php endif; ?>
		            <?php if($button_2['link']): ?>
		                <a href="<?php echo $button_2['link']['url']; ?>" target="<?php echo $button_2['link']['target']; ?>" class="CTAButton CTAButtonAnimate" id="heroButton2">
		                    <div class="CTAButtonText noselect">
		                        <t class="DiscordButtonText"><?php echo $button_2['link']['title']; ?></t>
		                        <?php if($button_2['icon']): ?>
		                        	<img src="<?php echo $button_2['icon']['url']; ?>" alt="<?php echo $button_2['icon']['title']; ?>" class="discordButtonLogoPhoto">
		                        <?php endif; ?>
		                    </div>
		                    <img src="<?php echo get_template_directory_uri(); ?>/images/CTAButtonBackground.png" alt="CTAButtonBackground" class="CTABackgroundPhoto">
		                </a>
		            <?php endif; ?>
		            <?php if($button_3['link']): ?>
		                <a href="<?php echo $button_3['link']['url']; ?>" target="<?php echo $button_3['link']['target']; ?>" class="CTAButton CTAButtonAnimate" id="heroButton1">
		                    <div class="CTAButtonText noselect"><?php echo $button_3['link']['title']; ?></div>
		                    <img src="<?php echo get_template_directory_uri(); ?>/images/CTAButtonBackground.png" alt="CTAButtonBackground" class="CTABackgroundPhoto">
		                </a>
		            <?php endif; ?>
	            </div>
            <?php endif; ?>
			
        </div>
    </div>
</section>