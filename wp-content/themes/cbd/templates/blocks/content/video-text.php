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
<section<?php if($id) echo ' id="'.$id.'"'; ?> class="content-image overflow-visible<?php echo $bg; ?> <?php echo $padding; ?> z-10" data-scroll-section>
    <div class="container">
        <div class="row items-center<?php if($reverse) echo ' lg:flex-row-reverse'; ?>">
            <div class="w-full lg:w-5/12 mx-auto video-col text-center">
                <?php if($video): ?>
                    <figure class="relative s-margin-mobile" data-scroll>
                        <lite-youtube videoid="<?php echo $video_id; ?>" autoload<?php if($poster) echo ' style="background-image: url('.$poster.');"'; ?>>
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
            <div class="w-full lg:w-5/12 relative row items-center">
                <div class="text w-full row text-center lg:text-left">
                    <div class="icon w-full md:w-1/5 z-0">
                        <div class="torch absolute right-0 md:relative md:right-auto">
                            <img class="imgs-day" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/day/knight-day.svg" alt="knight-day">
                            <img class="imgs-night" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch.svg" alt="torch">
                            <div class="glow"></div>
                        </div>
                    </div>
                    <div class="inner flex-1 z-10">
                        <?php if($title): ?>
                            <div class="title w-full lg:w-5/6">
                                <h2><?php echo $title; ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if($text): ?>
                            <div class="content lg:mt-12 w-full">
                                <?php echo $text; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($link): ?>
                            <div class="button mt-16 lg:mt-16">
                                <a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-gold">
                                    <span><?php echo $link['title']; ?></span>
                                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
                                    <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>