<?php
/**
 * Block Name: Process
 */
?>
<?php $processData = get_fields();
$phases = $processData['process'];
?>

<div class="w-full custom-gradient pt-[50px] pb-[150px] lg:pb-[400px] px-[16px] md:px-[40px] 2xl:px-[85px]">
    <div class="max-w-[1750px] w-full mx-auto">
        <!-- Box -->
        <div class="flex flex-col mt-[100px]">
            <div class="w-full">
                <div class="flex flex-col items-center gap-[20px]">
                    <h3 class="sm:max-w-[358px] lg:max-w-full sm:mx-auto text-[36px] sm:text-[36px] text-center sm:text-center md:text-center lg:text-left lg:text-[30px] xl:text-[40px] 2xl:text-[50px]"><?php echo $processData['title']; ?></h3>
                    <div class="w-full hr">
                        <img decoding="async" loading="lazy"
                             src="<?php echo get_template_directory_uri(); ?>/img/hr.svg" alt="hr">
                    </div>
                </div>
            </div>

            <div class="w-full">
                <div class="flex flex-col lg:flex-row gap-[80px] lg:gap-[30px] xl:gap-[50px] 2xl:gap-[80px] text-center mt-12 lg:mt-16 scrolls justify-center">
                    <?php foreach ($phases as $index => $phase): ?>
                        <!-- Box -->
                        <div class="w-full lg:w-1/3 max-w-[400px] lg:max-w-[495px] mx-auto">
                            <div class="w-full flex flex-col gap-[10px] items-center mb-[25px]">
                                <div class="w-[70px] 2xl:w-[85px] h-[70px] 2xl:h-[85px] mx-auto rounded-full relative flex items-center justify-center">
                                    <h6 class="text-[#F7971E] text-[26px] 2xl:text-[32px] relative z-[20]"><?php echo $index + 1; ?></h6>
                                    <img class="absolute left-0 right-0 top-0 bottom-0" decoding="async" loading="lazy"
                                         src="<?php echo get_template_directory_uri(); ?>/img/number-shape.svg"
                                         alt="scroll-content">
                                </div>
                                <h4 class="text-[18px] 2xl:text-[20px] text-white pointer-events-none"><?php echo $phase['process_title']; ?></h4>
                            </div>
                            <div class="inner">
                                <div class="title font-headers text-black relative z-[2]">
                                    <h4 class="relative z-[1]"><?php echo $phase['subtitle']; ?></h4>
                                    <img class="w-full left-[50%] top-[50%] absolute -translate-x-1/2 -translate-y-1/2 z-[0]"
                                         decoding="async" loading="lazy"
                                         src="<?php echo get_template_directory_uri(); ?>/img/scroll-title.svg"
                                         alt="scroll-title">
                                </div>

                                <div class="content w-[265px] sm:w-[295px] lg:w-[230px] xl:w-[275px] 2xl:w-2/3 mx-auto pt-8 relative h-[226px] sm:h-[282px] text-black font-[500] text-[12px] pr-[15px]">
                                    <div class="inner h-full lg:h-[75%] xl:h-[90%] p-[15px] 2xl:p-[30px] overflow-y-auto relative z-[2]">
                                       <?php echo $phase['phase_text']; ?>
                                    </div>
                                    <img class="w-[134%] max-w-[inherit] h-auto z-[1] absolute top-0 left-[50%] object-cover translate-x-[-50%]"
                                         decoding="async" loading="lazy"
                                         src="<?php echo get_template_directory_uri(); ?>/img/scroll-content.svg"
                                         alt="scroll-content">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>