<?php
/**
 * Block Name: Form
 */
?>
<?php $title = get_field('title'); ?>
<?php $form = get_field('form'); ?>
<section class="contact-form form py-12 z-10" data-scroll-section>
    <div class="container">
        <div class="row justify-center">
            <div class="w-full lg:w-5/6">
                <div class="frame bg-black">
                    <div class="inner w-full lg:w-3/4 2xl:w-3/5 mx-auto s-padding !px-12">
                        <?php if($title): ?>
                            <div class="title text-center font-headers mb-12 lg:mb-20">
                                <h5><?php echo $title; ?></h5>
                            </div>
                        <?php endif; ?>
                        <?php if($form) echo do_shortcode($form); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>