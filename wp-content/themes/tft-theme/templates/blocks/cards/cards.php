<?php
/**
 * Block Name: Cards
 */
?>
<?php $cards = get_field('cards'); ?>
<section class="double-boxes s-padding z-10" data-scroll-section>
    <div class="container">
        <?php if($cards): ?>
            <div class="row justify-around">
                <?php $i = 1; foreach($cards as $card): ?>
                    <?php $image = $card['image']; ?>
                    <?php $text = $card['text']; ?>
                    <div class="w-full lg:w-1/3 2xl:w-5/12<?php if($i % 2 == 0) echo ' lg:mt-0'; ?>">
                        <div class="box bg-black relative p-12 lg:p-16">
                            <?php if($image): ?>
                                <img decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                            <?php endif; ?>
                            <?php if($text): ?>
                                <div class="content mt-12">
                                    <?php echo $text; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php $i++; endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>