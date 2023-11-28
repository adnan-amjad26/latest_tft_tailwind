<?php
/**
 * Block Name: Comparison
 */
?>
<?php $title = get_field('title'); ?>
<?php $tabs = get_field('tabs'); ?>

<figure class="bg absolute bottom-0 left-0 w-full h-full bricks-elem">
    <div class="tree absolute top-24 right-0 z-[2] hidden lg:block" data-scroll>
        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/tree.svg" alt="tree">
    </div>
    <img class="imgs-night object-[top_center] 2xl:object-fill h-full" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/bricks-bg.png" alt="bricks">
</figure>
