<?php
/**
 * Block Name: Image & Text
 */
?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $image = get_field('image'); ?>
<section class="content-avatar s-padding bricks-elem" data-scroll-section>
    <div class="container">
        <div class="row items-center lg:flex-row-reverse">
            <div class="w-full lg:w-1/2">
                <?php if($image): ?>
                    <figure class="w-fit mx-auto" data-scroll>
                        <img decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                    </figure>
                <?php endif; ?>
            </div>
            <div class="w-full lg:w-1/2 row justify-end mt-12 lg:mt-0 text-center lg:text-left">
                <div class="w-full lg:w-5/6">
                    <?php if($title): ?>
                        <div class="title">
                            <h4><?php echo $title; ?></h4>
                        </div>
                    <?php endif; ?>
                    <?php if($text): ?>
                        <div class="content mt-12">
                            <?php echo $text; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>