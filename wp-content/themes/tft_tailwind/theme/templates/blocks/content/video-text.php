<?php
/**
 * Block Name: Video & Text
 */
?>
<?php
    $video = get_field('video');
    if($video) {
        parse_str(parse_url($video, PHP_URL_QUERY), $video_array);
        $video_id = $video_array['v'];
    }
?>
<?php $poster = get_field('poster') ?: 'https://i.ytimg.com/vi/'. $video_id .'/maxresdefault.jpg'; ?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $link = get_field('link'); ?>
<?php $id = get_field('id'); ?>
<?php $gems = get_field('gems'); ?>
<?php $gems = ($gems) ? $gems : 'border-gems-purple-pink'; ?>
<?php $reverse = get_field('reverse'); ?>
<?php $padding = get_field('padding'); ?>
<?php $padding = ($padding) ? $padding : 's-padding'; ?>
<?php $bg = get_field('bg'); ?>
<?php $bg = ($bg) ? ' '.$bg : ''; ?>
<section<?php if($id) echo ' id="'.$id.'"'; ?> class="video-text-content py-[60px] px-[16px] 2xl:px-[85px] content-image overflow-visible<?php echo $bg; ?> <?php echo $padding; ?> z-10" data-scroll-section>
    <div class="max-w-[1750px] w-full mx-auto py-[50px] relative z-[10]">
        <div class="flex gap-[100px] sm:gap-[100px] lg:gap-[50px] flex-col-reverse lg:pr-[50px] justify-between items-center<?php if($reverse) echo ' lg:flex-row-reverse'; ?>">
            <div class="max-w-[720px] lg:max-w-[450px] 2xl:max-w-[542px] w-full lg:w-1/2 video-col">
                <?php if($video): ?>
                    <figure class="relative s-margin-mobile" data-scroll>
                        <lite-youtube class="!w-full" videoid="<?php echo $video_id; ?>" autoload<?php if($poster) echo ' style="background-image: url('.$poster.');"'; ?>>
                            <a href="<?php echo $video; ?>" class="lty-playbtn">
                                <span class="lyt-visually-hidden"></span>
                            </a>
                        </lite-youtube>
                        <div class="background absolute top-1/2 left-1/2 z-0">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri().'/img/'.$gems.'.png'; ?>" alt="content-image-border">
                        </div>
                    </figure>
                <?php endif; ?>
            </div>
            <div class="max-w-[720px] lg:max-w-full w-full lg:w-1/2 relative row items-center">
                <div class="w-full flex items-center gap-[50px] xl:gap-[100px] lg:pl-[50px]">
                    <div class="table-tabs relative hidden lg:block">
                        <div class="w-[63px] h-[230px]">
                            <img class="h-full relative z-[2]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch.svg" alt="torch">
                            <div class="absolute z-[1] w-full pb-[80%] rounded-full glow bg-[#ff4202] top-[35%] left-[50%] opacity-[0.7] translate-x-[-50%]"></div>
                        </div>
                    </div>
                    <div class="inner flex-1 z-10">
                        <?php if($title): ?>
                            <div class="title mb-[45px] sm:max-w-[358px] lg:max-w-full sm:mx-auto">
                                <h2 class="text-[36px] sm:text-[36px] text-center lg:text-left lg:text-[30px] xl:text-[40px] 2xl:text-[50px]"><?php echo $title; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if($text): ?>
                            <div class="content text-[15px] sm:text-[15px] lg:text-[18px] text-center lg:text-left">
                                <?php echo $text; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($link): ?>
                            <div class="button mt-16 lg:mt-16 text-center lg:text-left">
                                <a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
                                    <span><?php echo $link['title']; ?></span>
                                    <img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
                                    <img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
