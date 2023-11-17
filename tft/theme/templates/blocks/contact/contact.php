<?php
/**
 * Contact
 * @package CBD
 */
?>
<?php $contact = get_field('contact', 'option'); ?>
<?php $title = $contact['title']; ?>
<?php $address = $contact['address']; ?>
<?php $email = $contact['email']; ?>
<?php $phone = $contact['phone']; ?>
<?php $tel = preg_replace('/[^0-9]/', '', $phone['phone']); ?>
<?php $link_social = $contact['link_social']; ?>
<?php $image = $contact['image']; ?>
<?php $image_2 = $contact['image_2']; ?>
<?php $lottie = $contact['lottie']; ?>
<?php $social = get_field('social', 'option'); ?>
<section class="contact-details relative large s-padding text-center<?php if(is_front_page()) echo ' bg-blue-dark'; ?>" data-scroll-section>
    <div class="contact-details-overly absolute top-0 left-0 w-full h-[120px] z-10"></div>
    <div class="container relative z-50">
        <div class="row">
            <div class="w-full">
                <div class="icon mb-12 w-28 mx-auto">
                    <svg decoding="async"><use xlink:href="#sword"></use></svg>
                </div>
                <?php if($title): ?>
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if($address['title']): ?>
                    <div class="subtitle mt-12 lg:mt-16">
                        <h4><?php echo $address['title']; ?></h4>
                    </div>
                <?php endif; ?>
                <?php if($address['address']): ?>
                    <div class="content mt-6">
                        <?php echo $address['address']; ?>
                    </div>
                <?php endif; ?>
                <?php if($email['title']): ?>
                    <div class="subtitle mt-12 lg:mt-16">
                        <h4><?php echo $email['title']; ?></h4>
                    </div>
                <?php endif; ?>
                <?php if($email['email']): ?>
                    <div class="content mt-6">
                        <p><a href="mailto:<?php echo $email['email']; ?>"><?php echo $email['email']; ?></a></p>
                    </div>
                <?php endif; ?>
                <?php if($phone['title']): ?>
                    <div class="subtitle mt-12 lg:mt-16">
                        <h4><?php echo $phone['title']; ?></h4>
                    </div>
                <?php endif; ?>
                <?php if($phone['phone']): ?>
                    <div class="content mt-6">
                        <p><a href="tel:<?php echo $tel; ?>"><?php echo $phone['phone']; ?></a></p>
                    </div>
                <?php endif; ?>
                <?php if($link_social): ?>
                    <div class="button mt-12 lg:mt-16 text-center">
                        <a href="<?php echo $link_social['url']; ?>"<?php if($link_social['target']) echo ' target="'.$link_social['target'].'"'; ?> class="btn btn-blue">
                            <span><?php echo $link_social['title']; ?></span>
                            <svg decoding="async"><use xlink:href="#discord"></use></svg>
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
                                    <svg decoding="async"><use xlink:href="#<?php echo $network['icon']; ?>"></use></svg>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if($image || $image_2 || $lottie): ?>
        <figure class="bg absolute top-0 left-0 w-full h-full z-0<?php if(!is_singular('post') && !is_checkout()) echo ' opacity-80'; ?>">
            <?php if($lottie): ?>
                <lottie-player src="<?php echo $lottie; ?>" background="transparent" speed="1" loop autoplay></lottie-player>
            <?php endif; ?>
            <?php if($image): ?>
                <img class="imgs-day" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
            <?php endif; ?>
            <?php if($image_2): ?>
                <img class="imgs-night" src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>">
            <?php endif; ?>
        </figure>
    <?php endif; ?>
</section>