<?php
/**
 * Block Name: Leaderboard
 */
?>
<?php $title = get_field('title'); ?>
<?php $type = get_field('type'); ?>
<?php
$leaderboard_url = get_field('leaderboard', 'option');
$standings_url = get_field('standings', 'option');
$url = false;
$type == 'standings' ? $url = $standings_url : $url = $leaderboard_url;
if ($url) {
    $response = file_get_contents($url);
    $response = json_decode($response);
    $leaderboard = $response->Data[0]->data;
    $leaderboard = array_slice($leaderboard, 0, 5);
}
?>
<?php $link = get_field('link'); ?>
<?php $decor = get_field('decor'); ?>
<section class="leaderboard pt-[100px] overflow-visible bricks-elem relative z-[100] px-[16px] md:px-[40px] 2xl:px-[85px]" data-scroll-section>
    <div class="max-w-[996px] w-full mx-auto relative z-10">
        <?php if(!$decor): ?>
            <div class="torch absolute top-0 right-0 hidden lg:block">
                <img class="imgs-day" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/day/knight-day.svg" alt="knight-day">
                <img class="imgs-night" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch.svg" alt="torch">
                <div class="glow"></div>
            </div>
        <?php endif; ?>
        <div class="flex justify-center">
            <div class="w-full">
                <div class="leaderboard-frame font-headers bg-black pb-12 relative rounded-[50px] mb-[-100px]">
                    <?php if($title): ?>
                        <div class="top w-full row items-center gap-8 py-12 px-12 lg:px-16">
                            <svg decoding="async"><use xlink:href="#crown"></use></svg>
                            <h4 class="text-[24px] lg:text-[30px]"><?php echo $title; ?></h4>
                        </div>
                    <?php endif; ?>
                    <?php if($leaderboard): ?>
                        <div class="leaderboard-rankings wadik text-[20px]  grid px-12 py-12 lg:px-16 relative z-10">

                            <?php $i = 1; foreach($leaderboard as $row): ?>
                                <?php
                                $rank = $type === 'standings' ? $row->standing : $row->leaderboardRank;
                                $name = $type === 'standings' ? $row->name : $row->firstname . " " . $row->lastname;
                                $return = $type === 'standings' ? '' : $row->returnpercent;
                                $profit = $type === 'standings' ? $row->value1 : $row->todatetotalpnl;
                                ?>
                                <div class="ranking flex justify-between mt-[40px]">
                                    <div class="rank">
                                        <?php if($rank) echo $rank.'<sub>st</sub>'; ?>
                                    </div>
                                    <div class="name flex gap-[10px] items-center w-[300px]">
                                        <?php if($name): ?>
                                            <svg class="fill-[#F7971E] max-w-[20px] w-full h-[20px]" decoding="async">
                                                <use xlink:href="<?php echo ($i == 1) ? '#crown' : '#user-crown'; ?>"></use>
                                            </svg>
                                            <?php echo $name; ?>
                                        <?php endif; ?>
                                    </div>
									<?php if(!empty($return)):?>
                                    <div class="return hidden md:block w-[150px]">
                                        <?php if($return) echo $return; ?>
                                    </div>
									<?php endif; ?>
                                    <div class="profit hidden md:block w-[150px]">
                                        <?php if($profit) echo $profit; ?>
                                    </div>
                                </div>
                            <?php $i++; endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($link): ?>
                        <div class="button text-center my-12 lg:my-6 relative z-10">
                            <a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
                                <span class="relative z-[1]"><?php echo $link['title']; ?></span>
                                <img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
                                <img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
                            </a>
                        </div>
                    <?php endif; ?>
                    <svg decoding="async"><use xlink:href="#sword"></use></svg>
                    <div class="gems absolute top-0 left-0 w-full h-full pointer-events-none">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/leaderboard-gem-1.png" alt="leaderboard-gem-1">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/leaderboard-gem-2.png" alt="leaderboard-gem-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($decor == 'tree'): ?>
        <div class="tree absolute -top-24 right-0 z-0" data-scroll>
            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/tree.svg" alt="tree">
        </div>
    <?php endif; ?>
</section>
