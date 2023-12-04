<?php
/**
 * Block Name: Contact Info
 */
?>
<?php $contact_info = get_field('contact_info'); ?>
<section class="contact-box s-padding z-10" data-scroll-section>
    <div class="container">
        <div class="row justify-center">
            <div class="w-full lg:w-5/6">
                <div class="box row font-headers text-xl text-center bg-black">
                    <?php if($contact_info): ?>
                        <?php foreach($contact_info as $item): ?>
                            <?php $image = $item['image']; ?>
                            <?php $link = $item['link']; ?>
                            <div class="w-full lg:w-1/3 p-12">
                                <?php if($link): ?>
                                    <a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="single">
                                        <?php if($image): ?>
                                            <div class="icon h-40">
                                                <img decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                                            </div>
                                        <?php endif; ?>
                                        <div class="content mt-12 lg:mt-20 break-words">
                                            <p><?php echo $link['title']; ?></p>
                                        </div>
                                    </a>
                                    <div class="glow"></div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <div class="frame absolute top-0 left-0 w-full h-full pointer-events-none">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/contact-box-top.png" alt="contact-box-top">
                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/contact-box-bottom.png" alt="contact-box-bottom">
                        <div class="torch absolute top-1/2 right-0 hidden lg:block">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch.svg" alt="torch">
                            <div class="glow"></div>
                        </div>
                        <div class="torch absolute top-1/2 left-0 hidden lg:block">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/torch.svg" alt="torch">
                            <div class="glow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>