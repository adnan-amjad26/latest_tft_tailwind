<?php
/**
 * Block Name: Payout
 */
?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $image = get_field('image'); ?>
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
<section class="content-avatar s-padding bricks-elem" data-scroll-section>
    <div class="max-w-[1750px] w-full mx-auto px-[40px] 2xl:px-[85px] pt-[28%]">
        <div class="flex justify-between items-center gap-[50px]">
			<div class="w-[50%]">
                <div class="w-full lg:w-5/6">
                    <?php if($title): ?>
                        <div class="title">
                            <h4><?php echo $title; ?></h4>
                        </div>
                    <?php endif; ?>
                    <?php if($text): ?>
                        <div class="content mt-12 text-3xl">
                            <?php echo $text; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-[40%]">
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