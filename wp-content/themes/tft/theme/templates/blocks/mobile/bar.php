<?php
/**
 * Mobile Bar
 * @package CBD
 */
?>
<?php $mobile_bar = get_field('mobile_bar', 'option'); ?>
<?php if($mobile_bar): ?>
    <div class="mobile-bar text-center font-headers hidden">
        <div class="row">
            <?php foreach($mobile_bar as $item): ?>
				<?php $link = $item['link']; ?>
				<a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="flex-1 flex items-center justify-center relative">
					<img decoding="async" loading="lazy" src="<?php echo get_theme_file_uri('/img/hr.svg'); ?>">
					<p><?php echo $link['title']; ?></p>
				</a>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
