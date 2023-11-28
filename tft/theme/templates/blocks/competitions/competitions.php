<?php
/**
 * Block Name: Competitions
 */
?>
<?php $competitions = get_field('competitions'); ?>
<section class="competitions p-[80px_16px] md:p-[80px_40px] text-center bg-lilac" data-scroll-section>
    <div class="max-w-[1360px] w-full mx-auto">
        <?php if($competitions): ?>
            <script>
                function countDownTimer(end, d, h, m, s) {
                    var end = new Date(end);
                    var _second = 1000;
                    var _minute = _second * 60;
                    var _hour = _minute * 60;
                    var _day = _hour * 24;
                    setInterval(function() {
                        var now = new Date();
                        var distance = end - now;
                        if(distance < 0) { clearInterval(); return; }
                        var days = Math.floor(distance / _day);
                        var hours = Math.floor((distance % _day) / _hour);
                        var minutes = Math.floor((distance % _hour) / _minute);
                        var seconds = Math.floor((distance % _minute) / _second);
                        document.getElementById(d).innerHTML = days;
                        document.getElementById(h).innerHTML = hours;
                        document.getElementById(m).innerHTML = minutes;
                        document.getElementById(s).innerHTML = seconds;
                    }, 1000);
                }
            </script>
            <div class="flex justify-between flex-col lg:flex-row gap-[20px] lg:gap-0">
                <?php $i = 1; foreach($competitions as $competition): ?>
                    <div class="max-w-[550px] w-full mx-auto mt-24 lg:mt-0">
                        <?php if($competition['title']): ?>
                            <div class="title w-full mb-12 lg:mb-24">
                                <h4 class="text-[24px] lg:text-[28px] xl:text-[40px] 2xl:text-[40px]"><?php echo $competition['title']; ?></h4>
                            </div>
                        <?php endif; ?>
                        <div class="w-full mx-auto">
                            <div class="w-full max-w-[250px] sm:max-w-[305px] xl:max-w-[345px] mx-auto competition text-black p-[50px_30px] sm:p-[60px_30px] xl:p-[100px_30px] relative">
                                <?php if($competition['subtitle']): ?>
                                    <div class="title mt-6 text-[17px] sm:text-[20px] xl:text-[26px]">
                                        <h5><?php echo $competition['subtitle']; ?></h5>
                                    </div>
                                <?php endif; ?>
                                <div class="hr">
                                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hr.svg" alt="hr">
                                </div>
                                <?php if($competition['subtitle_2']): ?>
                                    <div class="text-[12px] sm:text-[15px] xl:text-[18px] text-black wadik">
                                        <h4><?php echo $competition['subtitle_2']; ?></h4>
                                    </div>
                                <?php endif; ?>
                                <?php if($competition['description']): ?>
                                    <div class="content font-bold my-6 border-b border-black pb-[15px] text-[9px] sm:text-[12px] xl:text-[15px]">
                                        <?php echo $competition['description']; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if($competition['title_date']): ?>
                                    <div class="content font-bold uppercase mt-6 text-[9px] sm:text-[12px] xl:text-[15px]">
                                        <p><?php echo $competition['title_date']; ?></p>
                                    </div>
                                <?php endif; ?>
                                <?php if($competition['date']): ?>
                                    <?php $date_now = date('Y-m-d H:i:s'); ?>
                                    <div class="time flex justify-between my-6 text-[20px] sm:text-[24px] xl:text-[30px] leading-1 wadik border-b border-black pb-[15px]">
                                        <div>
                                            <p id="competitionTimerDay<?php echo $i; ?>">00</p>
                                            <p class="text-[10px]"><?php _e('Day', 'cbd'); ?></p>
                                        </div>
                                        <div>
                                            <p id="competitionTimerHour<?php echo $i; ?>">00</p>
                                            <p class="text-[10px]"><?php _e('Hr', 'cbd'); ?></p>
                                        </div>
                                        <div>
                                            <p id="competitionTimerMin<?php echo $i; ?>">00</p>
                                            <p class="text-[10px]"><?php _e('Min', 'cbd'); ?></p>
                                        </div>
                                        <div>
                                            <p id="competitionTimerSec<?php echo $i; ?>">00</p>
                                            <p class="text-[10px]"><?php _e('Sec', 'cbd'); ?></p>
                                        </div>
                                    </div>
                                    <script>
                                        countDownTimer('<?php echo $competition['date']; ?>', '<?php echo 'competitionTimerDay'.$i; ?>', '<?php echo 'competitionTimerHour'.$i; ?>', '<?php echo 'competitionTimerMin'.$i; ?>', '<?php echo 'competitionTimerSec'.$i; ?>');
                                    </script>

                                <?php endif; ?>
                                <?php if($competition['subtitle_3']): ?>
                                    <div class="mt-[15px] sm:mt-[25px]">
                                        <h4 class="text-[12px] sm:text-[18px]"><?php echo $competition['subtitle_3']; ?></h4>
                                    </div>
                                <?php endif; ?>
                                <?php if($competition['text']): ?>
                                    <div class="content font-medium my-6 text-[9px] sm:text-[12px] xl:text-[14px]">
                                        <?php echo $competition['text']; ?>
                                    </div>
                                <?php endif; ?>
                                <?php $link = $competition['link']; ?>
                                <?php $link_2 = $competition['link_2']; ?>
                                <?php $link_3 = $competition['link_3']; ?>
                                <?php if($link || $link_2 || $link_3): ?>

                                    <div class="links flex flex-col items-center justify-center text-[10px] sm:text-[15px]">
                                        <!-- <?php if($link): ?>
                                            <a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-text"><span><?php echo $link['title']; ?></span></a>
                                        <?php endif; ?> -->
                                        <!-- <?php if($link_2): ?>
                                            <a href="<?php echo $link_2['url']; ?>"<?php if($link_2['target']) echo ' target="'.$link_2['target'].'"'; ?> class="btn btn-text"><?php echo $link_2['title']; ?></a>
                                        <?php endif; ?> -->
                                        <?php if($link_3): ?>
                                            <a href="<?php echo $link_3['url']; ?>"<?php if($link_3['target']) echo ' target="'.$link_3['target'].'"'; ?> class="text-[10px] sm:text-[15px] text-black wadik my-[20px] xl:my-[35px]">
                                                <span class="relative z-[1]"><?php echo $link_3['title']; ?></span>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if($i % 2 == 0): ?>
                                    <img class="absolute z-[-1] top-1/2 left-1/2 h-[calc(100%_+_-1rem)] sm:h-[calc(100%_+_-5rem)] xl:h-[calc(100%_+_3rem)] w-auto max-w-none -translate-x-1/2 -translate-y-1/2" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/competition-2.png" alt="competition-2">
                                <?php else: ?>
                                    <img class="absolute z-[-1] top-1/2 left-1/2 h-[calc(100%_+_-1rem)] sm:h-[calc(100%_+_-5rem)] xl:h-[calc(100%_+_3rem)] w-auto max-w-none -translate-x-1/2 -translate-y-1/2" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/competition-1.png" alt="competition-1">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php $i++; endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
