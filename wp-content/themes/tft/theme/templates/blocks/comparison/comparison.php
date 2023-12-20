<?php
/**
 * Block Name: Comparison
 */
?>
<?php $title = get_field('title'); ?>
<?php $tabs = get_field('tabs'); ?>

<figure class="bg absolute bottom-0 left-0 w-full h-full bricks-elem dark:!z-[99] pointer-events-none">
    <div class="tree absolute top-[18%] right-0 hidden dark:lg:block z-[22]" data-scroll>
        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/tree.svg" alt="tree">
    </div>
    <img class="imgs-night object-[top_center] 2xl:object-fill h-full dark:h-[calc(100%_-_24%)] dark:lg:h-[calc(100%_-_18%)] dark:top-[24%] dark:lg:top-[18%] dark:relative" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/bricks-bg.png" alt="bricks">
</figure>
