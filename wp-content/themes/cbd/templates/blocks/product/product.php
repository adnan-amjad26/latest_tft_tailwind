<?php
/**
 * Block Name: Product
 */
?>
<?php $id = get_field('id'); ?>
<?php $title = get_field('title'); ?>
<?php
    global $woocommerce;
    $product = get_field('product');
    $tables = get_field('product_tables', $product);
    $quick_comparison = get_field('quick_comparison', $product);
    $challenge_type = wp_get_post_terms($product, 'pa_challenge_type');
    $account_type = wp_get_post_terms($product, 'pa_account_type');
    $account_size = wp_get_post_terms($product, 'pa_account_size');
    $platform = wp_get_post_terms($product, 'pa_platform');
    $broker = wp_get_post_terms($product, 'pa_broker');
?>
<section<?php if($id) echo ' id="'.$id.'"'; ?> class="table-tabs s-padding bricks-elem">
    <div class="container">
        <?php if($title): ?>
            <div class="row">
                <div class="w-full text-center">
                    <div class="title relative">
                        <h3><?php echo $title; ?></h3>
                        <div class="torch absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch.svg" alt="torch">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($product): ?>
            <div class="row justify-center mt-12 lg:mt-24">
                <div class="w-full row justify-center">
                    <?php if($challenge_type): ?>
                        <ul class="toggles w-full first row gap-6 lg:gap-12 justify-center font-headers text-lg">
                            <?php foreach($challenge_type as $attr): ?>
                                <?php $image = get_field('image', $attr); ?>
                                <li<?php if($image['url']) echo ' style="background-image: url('.$image['url'].');"'; ?> challenge_type="<?php echo $attr->slug; ?>"<?php if($challenge_type[0]->slug == $attr->slug) echo ' class="active"'; ?>>
                                    <span><?php echo $attr->name; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <?php if($account_type): ?>
                        <ul class="toggles w-full second row gap-6 lg:gap-12 justify-center font-headers text-lg mt-12 lg:mt-16">
                            <?php foreach($account_type as $attr): ?>
                                <?php $image = get_field('image', $attr); ?>
                                <li<?php if($image['url']) echo ' style="background-image: url('.$image['url'].');"'; ?> account_type="<?php echo $attr->slug; ?>">
                                    <span><?php echo $attr->name; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <?php if($account_size): ?>
                        <ul class="toggles w-full third row gap-6 lg:gap-12 justify-center font-headers text-lg mt-12 lg:mt-16">
                            <?php foreach($account_size as $attr): ?>
                                <li account_size="<?php echo $attr->slug; ?>">
                                    <span><?php echo $attr->name; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <?php if($tables): ?>
                    <?php $i = 1; foreach($tables as $table): ?>
                        <?php $challange_type = $table['challange_type']->slug; ?>
                        <?php $account_type = $table['account_type']->slug; ?>
                        <?php $account_size = $table['account_size']->slug; ?>
                        <div class="product-table" challenge_type="<?php echo $challange_type; ?>" account_type="<?php echo $account_type; ?>" account_size="<?php echo $account_size; ?>">
                            <?php $table = $table['table']; ?>
                            <?php if($quick_comparison): ?>
                                <div class="table__header">
                                    <div class="table__tab" quick_comparison><?php _e('Quick Comparison', 'cbd'); ?></div>
                                </div>
                            <?php endif; ?>
                            <div class="table__wrapper__block">
                                <div class="table__wrapper">
                                    <div>
                                        <div class="table">
                                            <div class="product-table-desktop">
                                                <?php if($table['header']): ?>
                                                    <div class="table__head">
                                                        <div class="row">
                                                            <?php foreach($table['header'] as $row): ?>
                                                                <div class="col-xxs-3">
                                                                    <?php echo preg_replace("/<span\s(.+?)>(.+?)<\/span>/is", "<b>$2</b>", $row['c']); ?>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($table['body']): ?>
                                                    <div class="table__body">
                                                        <?php $n = 0; foreach($table['body'] as $row): ?>
                                                            <?php echo ($n % 2 == 0) ? '<div class="row" data-spoiler>' : '<div class="table__expand" hidden><div class="row">'; ?>
                                                            <?php foreach($row as $cell): ?>
                                                                <div class="col-xxs-3<?php if(!$cell['c']) echo ' empty'; ?>"><?php echo $cell['c']; ?></div>
                                                            <?php endforeach; ?>
                                                            <?php echo ($n % 2 == 0) ? '</div>' : '</div></div>'; ?>
                                                        <?php $n++; endforeach; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="product-table-mobile">
                                                <div class="row">
                                                    <div class="col-xxs-6">
                                                        <?php if($table['header']): ?>
                                                            <div class="table__head">
                                                                <div class="row">
                                                                    <div><?php echo $table['header'][0]['c']; ?></div>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                         <?php if($table['body']): ?>
                                                            <div class="table__body">
                                                                <?php $n = 0; foreach($table['body'] as $row): ?>
                                                                    <?php if($n % 2 == 0): ?>
                                                                        <div class="row" data-spoiler>
                                                                            <div><?php echo $row[0]['c']; ?></div>
                                                                        </div>
                                                                    <?php else: ?>
                                                                        <div class="table__expand" hidden>
                                                                            <div class="row">
                                                                                <div<?php if(!$row[1]['c']) echo ' class="empty"'; ?>><?php echo $row[1]['c']; ?></div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                <?php $n++; endforeach; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-xxs-6">
                                                        <div class="swiper product-table-mobile-swiper">
                                                            <div class="swiper-wrapper">
                                                                <?php for($i = 1; $i < count($table['header']); $i++): ?>
                                                                    <div class="swiper-slide">
                                                                        <?php if($table['header']): ?>
                                                                            <div class="table__head">
                                                                                <div class="row">
                                                                                    <div><?php echo $table['header'][$i]['c']; ?></div>
                                                                                </div>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        <div class="table__body">
                                                                            <?php $n = 0; foreach($table['body'] as $row): ?>
                                                                                <?php if($n % 2 == 0): ?>
                                                                                    <div class="row">
                                                                                        <div><?php echo $row[$i]['c']; ?></div>
                                                                                    </div>
                                                                                <?php else: ?>
                                                                                    <div class="table__expand" hidden>
                                                                                        <div class="row">
                                                                                            <div></div>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php endif; ?>
                                                                            <?php $n++; endforeach; ?>
                                                                        </div>
                                                                    </div>
                                                                <?php endfor; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-button-prev product-table-mobile-prev"></div>
                                                <div class="swiper-button-next product-table-mobile-next"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $attributes = array(
                                    'attribute_pa_challenge_type' => $challange_type,
                                    'attribute_pa_account_type' => $account_type,
                                    'attribute_pa_account_size' => $account_size,
                                    'attribute_pa_platform' => $platform[0]->slug,
                                    'attribute_pa_broker' => $broker[0]->slug,
                                );
                                if($product && $attributes) $variation_id = find_matching_product_variation_id($product, $attributes);
                            ?>
                            <?php if($variation_id): ?>
                                <?php $_product = wc_get_product($variation_id); ?>
                                <div class="button mt-12 lg:mt-16 text-center">
<!--                                    <a href="--><?php //echo $_product->add_to_cart_url(); ?><!--" class="btn btn-gold">-->
                                    <a href="<?php echo 'https://dashboard.thefundedtraderprogram.com/purchasechallenge-n/?planid=1190'; ?>" class="btn btn-gold">
                                        <span><?php _e('Buy Challenge', 'cbd'); ?></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php $i++; endforeach; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if($quick_comparison): ?>
            <?php foreach($quick_comparison as $table): ?>
                <?php $challange_type = $table['challange_type']->slug; ?>
                <?php $table = $table['table']; ?>
                <div class="table comparison-table" challenge_type="<?php echo $challange_type; ?>">
                    <div class="comparison-table-desktop">
                        <?php if($table['header']): ?>
                            <div class="table__head">
                                <div class="row">
                                    <?php foreach($table['header'] as $row): ?>
                                        <div style="min-width: <?php echo 100 / count($table['header']); ?>%;">
                                            <?php echo preg_replace("/<span\s(.+?)>(.+?)<\/span>/is", "<b>$2</b>", $row['c']); ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($table['body']): ?>
                            <div class="table__body">
                                <?php foreach($table['body'] as $row): ?>
                                    <div class="row">
                                        <?php foreach($row as $cell): ?>
                                            <div style="min-width: <?php echo 100 / count($row); ?>%;"><?php echo $cell['c']; ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="comparison-table-mobile">
                        <?php if($table['header']): ?>
                            <div class="table__head">
                                <div class="row">
                                    <div class="col-xxs-6"><?php echo $table['header'][0]['c']; ?></div>
                                    <?php array_shift($table['header']); ?>
                                    <?php foreach($table['header'] as $row): ?>
                                        <?php if(!empty($row['c'])) echo '<div class="col-xxs-6">'.$row['c'].'</div>'; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($table['body']): ?>
                            <div class="row">
                                <div class="col-xxs-6">
                                    <div class="table__body">
                                        <?php foreach($table['body'] as $row): ?>
                                            <div class="row">
                                                <div><?php echo $row[0]['c']; ?></div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="col-xxs-6">
                                    <div class="swiper comparison-table-mobile-swiper">
                                        <div class="swiper-wrapper">
                                            <?php for($i = 1; $i < count($table['header']); $i++): ?>
                                                <div class="swiper-slide">
                                                    <div class="table__body">
                                                        <?php foreach($table['body'] as $row): ?>
                                                            <div class="row">
                                                                <div><?php echo $row[$i]['c']; ?></div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev comparison-table-mobile-prev"></div>
                            <div class="swiper-button-next comparison-table-mobile-next"></div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>