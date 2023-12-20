<?php
/**
 * The template for displaying filter
 *
 * @package CBD
 */
?>
<?php $categories = get_categories(); ?>
<?php if($categories): ?>
    <!-- Filter Section -->
    <section class="filterSection">
        <div class="filterSectionTop">
            <div class="filterHeader"><?php esc_html_e('FILTER:', 'cbd'); ?></div>
            <div class="filterButtonContainer">
                <div class="filterDropdownDiv CTAButtonAnimate" data-category>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/news/FilterButton.png" alt="FilterButton" class="filterButtonPhoto">
                    <div class="filterDropdownOverlays">
                        <div class="filterDropdownText noselect"><?php esc_html_e('ALL', 'cbd'); ?></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/news/FilterArrow.png" alt="FilterArrow" class="filterArrowPhoto">
                    </div>
                </div>
            </div>
        </div>
        <div class="filterSectionBottom">
            <?php foreach($categories as $category): ?>
                <div class="filterCategoryDiv CTAButtonAnimate" data-category="<?php echo $category->slug; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ChooseChallengeSwing.png" alt="ChooseChallengeSwing" class="filterButtonPhoto">
                    <div class="filterDropdownOverlays">
                        <div class="filterCategoryText noselect"><?php echo $category->name; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="filterCategoryDiv CTAButtonAnimate" data-category>
                <img src="<?php echo get_template_directory_uri(); ?>/images/ChooseChallengeSwing.png" alt="ChooseChallengeSwing" class="filterButtonPhoto">
                <div class="filterDropdownOverlays">
                    <div class="filterCategoryText noselect"><?php esc_html_e('ALL', 'cbd'); ?></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>