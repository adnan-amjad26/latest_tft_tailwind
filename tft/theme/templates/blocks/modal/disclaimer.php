<?php
/**
 * Modal Disclaimer
 * @package CBD
 */
?>
<?php $disclaimer = get_field('disclaimer', 'option'); ?>
<?php if($disclaimer): ?>
	<div class="disclaimer" role="dialog" aria-modal>
		<div class="disclaimer-inner" style="background-image: url(<?php echo get_theme_file_uri('/img/disclaimer-bg.png'); ?>)">
			<div class="content">
				<?php echo $disclaimer; ?>
			</div>
		</div>
	</div>
<?php endif; ?>