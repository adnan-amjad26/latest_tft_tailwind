<?php
/**
 * Block Name: Process
 */
?>
<?php

?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $process = get_field('process'); ?>
<?php $link = get_field('link'); ?>
<section class="bricks-elem content-scrolls no-transparent py-[115px] relative z-[2] px-[16px] md:px-[40px] 2xl:px-[85px]" data-scroll-section>
    <div class="max-w-[1460px] w-full mx-auto">
        <?php if($title || $subtitle): ?>
            <div class="flex justify-center text-center">
                <div class="w-full">
                    <?php if($title): ?>
                        <div class="title">
                            <h3 class="text-[36px] lg:text-[36px] xl:text-[40px] 2xl:text-[50px]"><?php echo $title; ?></h3>
                        </div>
                        <div class="hr">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hr.svg" alt="hr">
                        </div>
                    <?php endif; ?>
                    <?php if($text): ?>
                        <div class="content mt-6 w-full text-3xl">
                            <?php echo $text; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($process): ?>
            <div class="flex mt-12 lg:mt-16 table-tabs">
                <ul class="wadik top-tabs toggles w-full first flex flex-col items-center lg:flex-row gap-[20px] lg:gap-12 justify-center font-headers text-[10px] lg:text-[15px]">
                    <?php $i = 1; foreach($process as $type): ?>
                        <?php $button =  $type['button']; ?>
                        <li<?php if($i == 1) echo ' class="active"'; ?> data-type="type-<?php echo $i; ?>"<?php if($button) echo ' style="background-image: url('.$button.');"'; ?>><span><?php echo $type['title']; ?></span></li>
                    <?php $i++; endforeach;; ?>
                </ul>
            </div>
            <?php $i = 1; foreach($process as $type): ?>
                <?php $phases = $type['phases']; ?>
                <?php if($phases): ?>
                    <div class="scrolls-box"<?php if($i > 1) echo ' style="display: none;"'; ?> data-type="type-<?php echo $i; ?>">
                    <div class="steps flex lg:hidden gap-[16px] items-center justify-center mt-[25px]">
                                <?php foreach($phases as $index => $phase): ?>
                                            <button class="w-[66px] h-[66px] flex justify-center items-center step relative text-[#F7971E] text-[26px] 2xl:text-[32px] relative z-[20] wadik"  data-count = "<?php echo $index+1;?>"  data-type="type-<?php echo $i; ?>" >
                                            <span class="relative z-[2]"><?php echo $index+1;?></span>
                                            <img class="absolute left-0 right-0 top-0 bottom-0" decoding="async" loading="lazy"
                                         src="<?php echo get_template_directory_uri(); ?>/img/number-shape.svg"
                                         alt="scroll-content">
                                        </button>
                                <?php endforeach; ?>
                            </div>
                        <div class="flex flex-col lg:flex-row gap-[80px] lg:gap-[30px] xl:gap-[50px] 2xl:gap-[80px] text-center mt-12 lg:mt-16 scrolls justify-center">
                            <?php foreach($phases as $phase): ?>
                                <div class="w-full lg:w-1/3 max-w-[400px] lg:max-w-[495px] mx-auto">

                                    <div class="inner">
                                        <div class="title font-headers text-black relative z-[2]">
                                            <h4 class="relative z-[1]"><?php echo $phase['title']; ?></h4>
                                            <img class="w-full left-[50%] !h-auto top-[50%] absolute -translate-x-1/2 -translate-y-1/2 z-[0]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/scroll-title.svg" alt="scroll-title">
                                        </div>

                                        <div class="content w-[265px] sm:w-[295px] lg:w-[230px] xl:w-[275px] 2xl:w-2/3 mx-auto pt-8 relative h-[226px] sm:h-[282px] text-black font-[500] text-[12px] pr-[15px]">
                                            <div class="inner h-full lg:h-[75%] xl:h-[90%] p-[15px] 2xl:p-[30px] overflow-y-auto relative z-[2]">
                                                    <?php echo $phase['text']; ?>
                                                </div>
                                                <img class="w-[134%] max-w-[inherit] h-auto z-[1] absolute top-0 left-[50%] object-cover translate-x-[-50%] !block" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/scroll-content.svg" alt="scroll-content">
                                            </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php $i++; endforeach; ?>
        <?php endif; ?>
        <?php if($link): ?>
            <div class="row justify-center mt-[100px]">
                <div class="w-auto">
                    <div class="button">
                        <a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
                            <span class="z-[1]"><?php echo $link['title']; ?></span>
                            <img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
                            <img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
