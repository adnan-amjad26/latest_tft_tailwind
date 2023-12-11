<?php
/**
 * Block Name: Hero
 */
?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $image = get_field('image'); ?>
<?php $link = get_field('link'); ?>
<?php $link_social = get_field('link_social'); ?>
<?php $buttons = get_field('buttons'); ?>
<?php $img_d_1 = get_field('img_d_1'); ?>
<?php $img_d_2 = get_field('img_d_2'); ?>
<?php $image_2 = get_field('image_2'); ?>
<?php $img_n_1 = get_field('img_n_1'); ?>
<?php $img_n_2 = get_field('img_n_2'); ?>
<?php $lottie = get_field('lottie'); ?>
<?php $lottie_2 = get_field('lottie_2'); ?>

<?php $type = get_field('type'); ?>
<?php ($type == 'large') ? $width = ' lg:w-1/2 2xl:w-5/12' : ' lg:w-3/5'; ?>

<?php $class = get_field('class'); ?>
<?php if($class == 'title-contact') $after = ' indigo-after'; ?>
<?php if($class == 'title-process') { $after = ' lilac-after'; $width = ''; } ?>
<?php $class = ($class) ? ' '.$class : ' title-news'; ?>

<?php $bg = get_field('bg'); ?>
<?php $bg = ($bg) ? ' '.$bg : ''; ?>

<?php $overflow = get_field('overflow'); ?>
<?php $overflow = ($overflow) ? ' overflow-visible' : ''; ?>

<section class="title-bar<?php echo $class.$bg.$overflow; ?> z-10 pt-[192px]" data-scroll-section>
    <div class="max-w-[1700px] mx-auto relative z-30 px-[16px] md:px-[40px] 2xl:px-[85px]">
        <div class="flex relative">
            <div class="w-full<?php echo $width; ?> hero-col">
            	<?php if(!$width) echo '<div class="text w-full lg:w-1/2 2xl:w-5/12">'; ?>
	            	<?php if($title): ?>
		                <div class="max-w-[424px] mx-auto lg:mx-0">
		                    <h1 class="text-center lg:text-left text-[48px] lg:text-[64px] mb-[20px]"><?php echo $title; ?></h1>
		                </div>
		            <?php endif; ?>
		            <?php if($text): ?>
		                <div class="text-center lg:text-left text-[16px] lg:text-[18px] wadik mb-[20px]">
		                    <?php echo $text; ?>
		                </div>
	                <?php endif; ?>
	            <?php if(!$width) echo '</div>'; ?>
                <?php if($link || $link_social || $buttons): ?>
	                <div class="buttons flex w-[270px] lg:w-auto mx-auto lg:mx-0 lg:inline-flex flex-wrap justify-center lg:justify-start mt-12 lg:gap-x-[70px] lg:gap-y-[15px]">
						<?php if($link): ?>
		                	<a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem] mb-[30px] lg:mb-0">
		                		<span class="z-[1] relative"><?php echo $link['title']; ?></span>
		                		<img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
		                		<img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
		                	</a>
		                <?php endif; ?>
		                <?php if($link_social): ?>
		                	<a href="<?php echo $link_social['url']; ?>"<?php if($link_social['target']) echo ' target="'.$link_social['target'].'"'; ?> class="btn btn-blue p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem] mb-[30px] lg:mb-0">
								<span class="relative z-[1] whitespace-nowrap"><?php echo $link_social['title']; ?></span>
		                		<svg decoding="async"><use xlink:href="#discord"></use></svg>
		                		<img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
		                		<img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
		                	</a>
		                <?php endif; ?>

						<?php if($buttons): ?>
		                	<?php $i = 0; foreach($buttons as $button): if ($i === 2): echo '<hr>'; endif; ?>
		                		<?php $link = $button['button']; ?>
		                		<a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem] mb-[30px] lg:mb-0">
		                			<span class="relative z-[1] whitespace-nowrap"><?php echo $link['title']; ?></span>
		                			<img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
		                			<img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
		                		</a>
		                	<?php $i++; endforeach; ?>
		                <?php endif; ?>
						</div>
	            <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if($image || $img_d_1 || $img_d_2 || $lottie || $image_2 || $img_n_1 || $img_n_2 || $lottie_2): ?>
	    <figure class="bg absolute top-0 left-0 w-full z-0<?php echo $after; ?>">
	        <?php if($image || $img_d_1 || $img_d_2): ?>
	        	<div class="imgs-day">
	        		<?php if($img_d_1): ?>
		        		<div class="overlay">
		        			<img class="h-[800px] lg:h-auto object-center-top" src="<?php echo $img_d_1['url']; ?>" alt="<?php echo $img_d_1['title']; ?>">
		        		</div>
		        	<?php endif; ?>
		        	<?php if($lottie): ?>
		        		<div class="tower">
		        			<img class="h-[800px] lg:h-auto object-center-top" src="<?php echo $lottie['url']; ?>" alt="<?php echo $lottie['title']; ?>">
		        		</div>
		        	<?php endif; ?>
	        		<?php if($image): ?>
	        			<img class="h-[800px] lg:h-auto object-center-top" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
	        		<?php endif; ?>
	        		<?php if($img_d_2): ?>
		        		<div class="underlay">
		        			<img src="<?php echo $img_d_2['url']; ?>" alt="<?php echo $img_d_2['title']; ?>">
		        		</div>
		        	<?php endif; ?>
	        	</div>
	        <?php endif; ?>
	        <?php if($image_2|| $img_n_1 || $img_n_2): ?>
	        	<div class="imgs-night">
	        		<?php if($img_n_1): ?>
		        		<div class="moon absolute w-52" data-scroll>
		        			<img class="h-[800px] lg:h-auto object-center-top" src="<?php echo $img_n_1['url']; ?>" alt="<?php echo $img_n_1['title']; ?>">
		        		</div>
		        	<?php endif; ?>
	        		<?php if($img_n_2): ?>
	        			<img  class="h-[800px] lg:h-auto object-center-top" src="<?php echo $img_n_2['url']; ?>" alt="<?php echo $img_n_2['title']; ?>">
	        		<?php endif; ?>
	        		<?php if($image_2): ?>
	        			<img  class="h-[800px] lg:h-auto object-center-top" src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>">
	        			<?php if($type != 'large') echo '<div class="underlay"></div>'; ?>
	        		<?php endif; ?>
	        		<?php if($lottie_2): ?>
	        			<lottie-player src="<?php echo $lottie_2; ?>" class="dragon" background="transparent" speed="0.6" loop autoplay></lottie-player>
	        		<?php endif; ?>
	        	</div>
	        <?php endif; ?>
	    </figure>
	<?php endif; ?>
</section>
