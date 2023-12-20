<?php
/**
 * Block Name: FAQ
 */
?>
<?php $icon = get_field('icon'); ?>
<?php $title = get_field('title'); ?>
<?php $faq = get_field('faq'); ?>
<?php $link = get_field('link'); ?>
<?php $image = get_field('image'); ?>
<?php $image_2 = get_field('image_2'); ?>

<section class="accordion p-[50px_16px] md:p-[50px_40px] bg-green-light" data-scroll-section>
    <div class="max-w-[1308px] w-full mx-auto relative z-10 mt-[370px]">
        <?php if ($icon || $title): ?>
            <div class="flex flex-col">
                <div class="w-full text-center">
                    <?php if ($icon): ?>
                        <div class="icon mb-12 w-28 mx-auto">
                            <img decoding="async" loading="lazy" src="<?php echo $icon['url']; ?>"
                                 alt="<?php echo $icon['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <?php if ($title): ?>
                        <div class="title mx-[-15px] sm:mx-0">
                            <h3 class="text-[36px] xl:text-[40px] 2xl:text-[40px]"><?php echo $title; ?></h3>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="flex flex-col">
            <div class="w-full flex flex-col gap-[20px] md:gap-[50px] xl:gap-[100px] justify-between">
                <?php if ($faq): ?>
            <?php $half = ceil(count($faq) / 2); ?>
            <?php $faq_left = array_slice($faq, 0, $half); ?>
            <?php $faq_right = array_slice($faq, $half); ?>

                    <div class="flex flex lg:hidden items-center justify-center gap-[10px] sm:gap-[20px]">
                        <button class="toggle-button w-[185px] h-[58px] relative wadik text-[12px] sm:text-[14px] text-[#FC991A] flex justify-center items-center text-center" id="button1" data-target="div1">
                            <span class="max-w-[140px] sm:max-w-[169px] mx-auto relative left-[-5px] z-[2]">Getting Started</span>
                            <img class="absolute left-0 top-0 right-0 bottom-0 h-full" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-regular.png" alt="scroll-content">
                        </button>
                        <button class="toggle-button w-[185px] h-[58px] relative wadik text-[12px] sm:text-[14px] text-white" id="button2" data-target="div2"><span class="max-w-[140px] sm:max-w-[169px] mx-auto relative left-[-5px] z-[2]">About our challenges</span>
                        <img class="absolute left-0 top-0 right-0 bottom-0 h-full" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-regular.png" alt="scroll-content">
                        </button>
                </div>
                    <div>
                    </div>

                <div class="flex flex-col lg:flex-row items-center gap-[70px]">
                    <div class="max-w-[480px] w-full hidden md:block">
                        <div class="w-full relative">
                            <h4 class="max-w-[176px] wadik text-[24px] text-black absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-center">
                                getting started</h4>
                            <img decoding="async" loading="lazy"
                                 src="<?php echo get_template_directory_uri(); ?>/img/title-bg-shape.svg"
                                 alt="scroll-content">
                        </div>
                    </div>
                            <div class="w-auto sm:w-full mx-[-16px]" id="div1">
                        <?php if ($faq_left): ?>
                            <ul class="w-full items text-white bg-black text-[14px] p-[0_15px_15px_15px] flex flex-col bg-opacity-[0.7]">
                                <?php foreach ($faq_left as $item): ?>
                                    <li class="border-b border-b-[3px] border-[#90633E]">
                                        <div class="wadik title-wrap flex items-center justify-between p-[25px_10px] mb-[6px]">
                                            <p class="title"><?php echo $item['question']; ?></p>
                                            <div class="toggle min-w-[18px] w-[18px] h-[18px]">
                                                <svg class="fill-white w-full h-full" decoding="async">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="inner pb-[20px] px-[10px] text-[1.5rem] font-[500] leading-[1.47]">
                                                <?php echo $item['answer']; ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="flex flex-col lg:flex-row items-center gap-[70px]">
                    <div class="max-w-[480px] w-full hidden md:block">
                        <div class="w-full relative">
                            <h4 class="max-w-[216px] wadik text-[24px] text-black absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-center">
                                ABOUT OUR CHALLENGES</h4>
                            <img decoding="async" loading="lazy"
                                 src="<?php echo get_template_directory_uri(); ?>/img/title-bg-shape.svg"
                                 alt="scroll-content">
                        </div>
                    </div>
                            <div class="w-auto sm:w-full mx-[-16px]" id="div2">
                        <?php if ($faq_right): ?>
                            <ul class="w-full items text-white bg-black text-[14px] p-[0_15px_15px_15px] flex flex-col bg-opacity-[0.7]">
                                <?php foreach ($faq_right as $item): ?>
                                    <li class="border-b border-b-[3px] border-[#90633E]">
                                        <div class="wadik title-wrap flex items-center justify-between p-[25px_10px] mb-[6px]">
                                            <p class="title"><?php echo $item['question']; ?></p>
                                            <div class="toggle min-w-[18px] w-[18px] h-[18px]">
                                                <svg class="fill-white w-full h-full" decoding="async">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <div class="inner pb-[20px] px-[10px] text-[1.5rem] font-[500] leading-[1.47]">
                                                <?php echo $item['answer']; ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php if ($link): ?>
                    <div class="button mt-12 lg:mt-24 mx-auto">
                        <a href="<?php echo $link['url']; ?>"
                           class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
                            <span class="z-[1]"><?php echo $link['title']; ?></span>
                            <img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy"
                                 src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg"
                                 alt="btn-gold-left">
                            <img class="right-0 translate-x-[58%]" decoding="async" loading="lazy"
                                 src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg"
                                 alt="btn-gold-right">
                        </a>
                    </div>
                <?php endif; ?>
        </div>
    </div>
    <?php if ($image || $image_2): ?>
        <figure class="bg absolute bottom-0 left-0 w-full z-0 after:content-[''] after:absolute after:left-0 after:right-0 after:top-[0] after:h-[50%] after:bg-gradient-to-b dark:after:from-[#2a2344] after:from-50% after:z-[2] after:pointer-events-none  before:content-[''] before:absolute before:left-0 before:right-0 before:bottom-[0] before:h-[50%] before:bg-gradient-to-t dark:before:from-[#2a2344] before:from-50% before:z-[2] before:pointer-events-none">
            <?php if ($image): ?>
                <img class="imgs-day object-contain !object-top opacity-1" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
            <?php endif; ?>
            <?php if ($image_2): ?>
                <img class="imgs-night" src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>">
            <?php endif; ?>
        </figure>
    <?php endif; ?>
</section>
