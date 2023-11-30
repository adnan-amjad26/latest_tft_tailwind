<?php
/**
 * Block Name: Comparison
 */
?>
<?php $title = get_field('title'); ?>
<?php $tabs = get_field('tabs'); ?>

?>
<section class="comparison py-[50px] bricks-elem relative z-[2]" data-scroll-section>
    <div class="container relative z-10">
        <?php if($title): ?>
            <div class="row">
                <div class="w-full title text-center mb-12">
                    <h3><?php echo $title; ?></h3>
                </div>
            </div>
        <?php endif; ?>
        <div class="row comparison-row justify-between gap-6 lg:gap-12">
            <div class="comparison-col order-1 lg:order-none mt-32 lg:mt-0">
                <?php if($tabs): ?>
					<?php $i = 1; foreach($tabs as $tab): ?>
						<div class="comparison-table comparison-firm h-full font-bold text-lg sm:text-xl flex flex-col justify-between<?php if($i == 1) echo ' active'; ?>" data-firm="firm-<?php echo $i; ?>">
							<?php if($tab['title_1']): ?>
								<div class="title text-center">
									<h5><?php echo $tab['title_1']; ?></h5>
								</div>
							<?php endif; ?>
							<?php if($tab['table_1']): ?>
								<ul class="mt-6 sm:mt-12">
									<?php foreach($tab['table_1'] as $row): ?>
										<li>
											<?php if($row['label']): ?>
												<p class="uppercase"><?php echo $row['label']; ?></p>
											<?php endif; ?>
											<?php if($row['value']): ?>
												<p><?php echo $row['value']; ?></p>
											<?php endif; ?>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
							<img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/comparison-1.png" alt="comparison-1">
						</div>
					<?php $i++; endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="w-full lg:w-1/6 flex items-center justify-center">
                <?php if($tabs): ?>
                    <ul class="toggles text-center row justify-center lg:flex-col" data-scroll>
                        <?php $i = 1; foreach($tabs as $tab): ?>
                            <li<?php if($i == 1) echo ' class="active"'; ?> data-firm="firm-<?php echo $i; ?>">
                                <span><?php echo $tab['name']; ?></span>
                                <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-simple.svg" alt="btn-simple">
                            </li>
                        <?php $i++; endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="comparison-col order-1 lg:order-none mt-32 lg:mt-0">
                <?php if($tabs): ?>
                    <?php $i = 1; foreach($tabs as $tab): ?>
                        <div class="comparison-table comparison-firm h-full font-bold text-lg sm:text-xl flex flex-col justify-between<?php if($i == 1) echo ' active'; ?>" data-firm="firm-<?php echo $i; ?>">
                            <?php if($tab['title_2']): ?>
                                <div class="title text-center">
                                    <h5><?php echo $tab['title_2']; ?></h5>
                                </div>
                            <?php endif; ?>
                            <?php if($tab['table_2']): ?>
                                <ul class="mt-6 sm:mt-12">
                                    <?php foreach($tab['table_2'] as $row): ?>
                                        <li>
                                            <?php if($row['label']): ?>
                                                <p class="uppercase"><?php echo $row['label']; ?></p>
                                            <?php endif; ?>
                                            <?php if($row['value']): ?>
                                                <p><?php echo $row['value']; ?></p>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/comparison-2.png" alt="comparison-2">
                        </div>
                    <?php $i++; endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="tree absolute -top-24 left-0 z-0 imgs-day" data-scroll>
        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/tree.svg" alt="tree">
    </div>
</section>
<figure class="bg absolute top-0 left-0 w-full h-full bricks-elem">
    <div class="tree absolute top-24 right-0" data-scroll>
        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/tree.svg" alt="tree">
    </div>
    <img class="imgs-night" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/bricks-bg.png" alt="bricks">
</figure>
<figure class="tower absolute left-0 w-full z-0 bricks-elem">
    <img class="imgs-day" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/day/content-scrolls-bg.svg" alt="content-scrolls-bg">
    <img class="imgs-night" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/content-scrolls-bg.png" alt="content-scrolls-bg">
</figure>