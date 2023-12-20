<?php
/**
 * Block Name: Payout
 */
?>
<?php $payoutData = get_fields();?>
<?php $title = $payoutData['title']; ?>
<?php $text = $payoutData['text']; ?>
<?php $image = $payoutData['image']; ?>
<?php
    $leaderboard_url = get_field('leaderboard', 'option');
    if($leaderboard_url) {
        $leaderboard_response = file_get_contents($leaderboard_url);
        $leaderboard_response = json_decode($leaderboard_response);
        $top_payout = $leaderboard_response->Data[0]->data[0];
        $top_payout_name = $top_payout->username;
        //var_dump($top_payout);
    }
?>
<section class="content-avatar s-padding bricks-elem relative z-[100] px-[16px] md:px-[40px]" data-scroll-section>
    <div class="max-w-[1300px] w-full mx-auto mt-[25px] lg:mt-0">
        <div class="flex flex-col lg:flex-row justify-between items-center gap-[50px]">
			<div class="w-full lg:w-[60%]">
                <div class="w-full">
                    <?php if($title): ?>
                        <div class="title lg:max-w-[490px] text-center lg:text-left">
                            <h4 class="text-[24px] md:text-[30px] xl:text-[40px] 2xl:text-[40px]"><?php echo $title; ?></h4>
                        </div>
                    <?php endif; ?>
                    <?php if($text): ?>
                        <div class="lg:max-w-[700px] content mt-12 text-[16px] lg:text-[18px] text-center lg:text-left">
                            <?php echo $text; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-full lg:w-[40%]">
                <?php if($image || $top_payout_name): ?>
                    <figure class="w-fit mx-auto" data-scroll>
                        <?php if($image): ?>
                            <img decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                        <?php endif; ?>
                        <?php if($top_payout_name): ?>
                            <div class="top-payout-name">
                                <?php echo $top_payout_name; ?>
                            </div>
                        <?php endif; ?>
                    </figure>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
