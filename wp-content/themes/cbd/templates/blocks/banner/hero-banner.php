<?php
/**
 * Block Name: Hero Banner
 */
?>
<?php
//	$light_image = get_field('light_image');
//	$light_image_2 = get_field('light_image_2');
//	$light_image_3 = get_field('light_image_3');
//	$light_lottie = get_field('light_lottie');
//	$light_lottie_2 = get_field('light_lottie_2');
//	$light_lottie_3 = get_field('light_lottie_3');
//	$dark_image = get_field('dark_image');
//	$dark_image_2 = get_field('dark_image_2');
//	$dark_image_3 = get_field('dark_image_3');
//	$dark_image_4 = get_field('dark_image_4');
//	$dark_image_5 = get_field('dark_image_5');
//	$dark_image_6 = get_field('dark_image_6');
//	$dark_image_7 = get_field('dark_image_7');
//	$dark_image_8 = get_field('dark_image_8');
//	$dark_image_9 = get_field('dark_image_9');
//	$dark_image_10 = get_field('dark_image_10');
//	$dark_image_11 = get_field('dark_image_11');
//	$dark_image_12 = get_field('dark_image_12');
//	$dark_lottie = get_field('dark_lottie');
//	$dark_lottie_2 = get_field('dark_lottie_2');
//	$dark_lottie_3 = get_field('dark_lottie_3');
//	$title = get_field('title');
//	$text = get_field('text');
//	$button = get_field('button');
//	$button_2 = get_field('button_2');
//	$scoll_down = get_field('scroll_down');
//	$type = (get_field('type')) ? get_field('type') : 'home';

$acf_data = '<!-- wp:acf/hero-home {"name":"acf/hero-home",...} /-->';

// Use regular expressions to extract ACF field values
preg_match('/"light_image":(\d+),/', $acf_data, $light_image);
preg_match('/"light_image_2":(\d+),/', $acf_data, $light_image_2);
preg_match('/"light_image_3":(\d+),/', $acf_data, $light_image_3);
preg_match('/"light_lottie":(\d+),/', $acf_data, $light_lottie);
preg_match('/"light_lottie_2":(\d+),/', $acf_data, $light_lottie_2);
preg_match('/"light_lottie_3":(\d+),/', $acf_data, $light_lottie_3);
preg_match('/"dark_image":(\d+),/', $acf_data, $dark_image);
preg_match('/"dark_image_2":(\d+),/', $acf_data, $dark_image_2);
preg_match('/"dark_image_3":(\d+),/', $acf_data, $dark_image_3);
preg_match('/"dark_image_4":(\d+),/', $acf_data, $dark_image_4);
preg_match('/"dark_image_5":(\d+),/', $acf_data, $dark_image_5);
preg_match('/"dark_image_6":(\d+),/', $acf_data, $dark_image_6);
preg_match('/"dark_image_7":(\d+),/', $acf_data, $dark_image_7);
preg_match('/"dark_image_8":(\d+),/', $acf_data, $dark_image_8);
preg_match('/"dark_image_9":(\d+),/', $acf_data, $dark_image_9);
preg_match('/"dark_image_10":(\d+),/', $acf_data, $dark_image_10);
preg_match('/"dark_image_11":(\d+),/', $acf_data, $dark_image_11);
preg_match('/"dark_image_12":(\d+),/', $acf_data, $dark_image_12);
preg_match('/"dark_lottie":(\d+),/', $acf_data, $dark_lottie);
preg_match('/"dark_lottie_2":(\d+),/', $acf_data, $dark_lottie_2);
preg_match('/"dark_lottie_3":(\d+),/', $acf_data, $dark_lottie_3);
preg_match('/"title":"(.*?)",/', $acf_data, $title);
preg_match('/"text":"(.*?)",/', $acf_data, $text);
preg_match('/"scroll_down":(\d+),/', $acf_data, $scroll_down);
preg_match('/"type":"(.*?)",/', $acf_data, $type);

// Define default values in case the ACF fields are not present
$light_image = isset($light_image[1]) ? $light_image[1] : '';
$light_image_2 = isset($light_image_2[1]) ? $light_image_2[1] : '';
$light_image_3 = isset($light_image_3[1]) ? $light_image_3[1] : '';
$light_lottie = isset($light_lottie[1]) ? $light_lottie[1] : '';
$light_lottie_2 = isset($light_lottie_2[1]) ? $light_lottie_2[1] : '';
$light_lottie_3 = isset($light_lottie_3[1]) ? $light_lottie_3[1] : '';
$dark_image = isset($dark_image[1]) ? $dark_image[1] : '';
$dark_image_2 = isset($dark_image_2[1]) ? $dark_image_2[1] : '';
$dark_image_3 = isset($dark_image_3[1]) ? $dark_image_3[1] : '';
$dark_image_4 = isset($dark_image_4[1]) ? $dark_image_4[1] : '';
$dark_image_5 = isset($dark_image_5[1]) ? $dark_image_5[1] : '';
$dark_image_6 = isset($dark_image_6[1]) ? $dark_image_6[1] : '';
$dark_image_7 = isset($dark_image_7[1]) ? $dark_image_7[1] : '';
$dark_image_8 = isset($dark_image_8[1]) ? $dark_image_8[1] : '';
$dark_image_9 = isset($dark_image_9[1]) ? $dark_image_9[1] : '';
$dark_image_10 = isset($dark_image_10[1]) ? $dark_image_10[1] : '';
$dark_image_11 = isset($dark_image_11[1]) ? $dark_image_11[1] : '';
$dark_image_12 = isset($dark_image_12[1]) ? $dark_image_12[1] : '';
$dark_lottie = isset($dark_lottie[1]) ? $dark_lottie[1] : '';
$dark_lottie_2 = isset($dark_lottie_2[1]) ? $dark_lottie_2[1] : '';
$dark_lottie_3 = isset($dark_lottie_3[1]) ? $dark_lottie_3[1] : '';
$title = isset($title[1]) ? $title[1] : '';
$text = isset($text[1]) ? $text[1] : '';
$scroll_down = isset($scroll_down[1]) ? $scroll_down[1] : '';
$type = isset($type[1]) ? $type[1] : 'home';

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
	            <div class="heroHeaderDiv headerTextResponsive"><h1><?php echo $title; ?></h1></div>
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
		                    <img src="<?php echo get_template_directory_uri(); ?>/images/DiscordButton.png" alt="DiscordButton" class="discordButtonPhoto">
		                </a>
		            <?php endif; ?>
	            </div>
            <?php endif; ?>
            <?php if (is_home() || is_front_page()): ?>
                <!-- TrustBox widget - Micro Combo -->
                <div class="trustpilot-widget heroSubHeaderDiv" data-locale="en-US" data-template-id="5419b6ffb0d04a076446a9af" data-businessunit-id="60ae286334523f0001ff6ef4" data-style-height="60px" data-style-width="100%" data-theme="dark">
                  <a href="https://www.trustpilot.com/review/thefundedtraderprogram.com" target="_blank" rel="noopener noreferrer">Trustpilot</a>
                </div>
                <!-- End TrustBox widget -->
            <?php endif; ?>
        </div>
    </div>
</section>