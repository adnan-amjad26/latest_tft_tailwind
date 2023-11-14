<?php
/**
 * Filter posts
 * @package CBD
 */
?>
<?php $categories = get_categories(); ?>
<?php if($categories): ?>
    <?php $term_id = get_queried_object()->term_id; ?>
    <div class="row">
        <div class="w-full text-center">
            <div class="filter filter-box font-headers">
                <p><?php _e('Filter: ', 'cbd'); ?></p>
                <a class="btn-filter<?php if(is_home()) echo ' active'; ?>" href="<?php echo get_the_permalink(get_option('page_for_posts')); ?>"><?php _e('All', 'cbd'); ?></a>
                <?php foreach($categories as $category): ?>
                    <a class="btn-filter<?php if($category->term_id == $term_id) echo ' active'; ?>" href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>