<?php
/**
 * Contact Banner
 * @package CBD
 */
?>
<?php $contact = get_field('contact', 'option'); ?>
<?php $text = $contact['text']; ?>
<?php $link = $contact['link']; ?>
<?php $image = $contact['image']; ?>
<?php $image_2 = $contact['image_2']; ?>
<?php $lottie = $contact['lottie']; ?>
<?php $social = get_field('social', 'option'); ?>
<?php $large = get_field('large'); ?>
<section class="contact-details bg-indigo s-padding text-center slim" data-scroll-section>
    <div class="container relative z-10">
        <div class="row">
            <div class="w-full">
                <?php if($text): ?>
                    <div class="content mt-6 max-w-7xl mx-auto h5">
                        <?php echo $text; ?>
                    </div>
                <?php endif; ?>
                <?php if($link): ?>
                    <div class="button mt-12 lg:mt-16 text-center">
                        <a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
                            <span class="z-[1]"><?php echo $link['title']; ?></span>
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
                            <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
                        </a>
                    </div>
                <?php endif; ?>
                <?php if($social): ?>
                    <ul class="socials mt-24 row gap-8 items-center justify-center">
                        <?php foreach($social as $network): ?>
                            <li>
                                <a href="<?php echo $network['url']; ?>" target="_blank">
                                    <?php echo file_get_contents($network['icon']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if($image || $image_2 || $lottie): ?>
        <figure class="bg absolute bottom-0 left-0 w-full z-0 bg-purple-dark">
            <?php if($lottie): ?>
                <lottie-player src="<?php echo $lottie; ?>" background="transparent" speed="1" loop autoplay></lottie-player>
            <?php endif; ?>
            <?php if($large): ?>
                <div class="fixer bg-blue-dark"></div>
            <?php endif; ?>
            <?php if($image): ?>
                <img class="imgs-day" decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
            <?php endif; ?>
            <?php if($image_2): ?>
                <img class="imgs-night" decoding="async" loading="lazy" src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>">
            <?php endif; ?>
        </figure>
    <?php endif; ?>
</section>