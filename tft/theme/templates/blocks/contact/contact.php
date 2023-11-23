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
<section class="contact-details large py-[115px] <?php if(is_front_page()) echo ' bg-blue-dark'; ?>" data-scroll-section>

<div class="max-w-[1683px] w-full mx-auto px-[40px] 2xl:px-[85px] relative z-[10]">
<div class="max-w-[724px] mx-auto relative z-10 text-center">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="icon mb-12 w-28 mx-auto">
                    <svg decoding="async"><use xlink:href="#sword"></use></svg>
                </div>
                <?php if($title): ?>
                    <div class="title">
                        <h2 class="text-[50px]"><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if($address['title']): ?>
                    <div class="subtitle mt-12 lg:mt-16">
                        <h4 class="text-[24px]"><?php echo $address['title']; ?></h4>
                    </div>
                <?php endif; ?>
                <?php if($address['address']): ?>
                    <div class="content mt-6 text-[18px] inter text-white">
                        <?php echo $address['address']; ?>
                    </div>
                <?php endif; ?>
                <?php if($email['title']): ?>
                    <div class="subtitle mt-12 lg:mt-16">
                        <h4 class="text-[24px]"><?php echo $email['title']; ?></h4>
                    </div>
                <?php endif; ?>
                <?php if($email['email']): ?>
                    <div class="content text-[18px] inter mt-6 text-white">
                        <p><a href="mailto:<?php echo $email['email']; ?>"><?php echo $email['email']; ?></a></p>
                    </div>
                <?php endif; ?>
                <?php if($phone['title']): ?>
                    <div class="subtitle mt-12 lg:mt-16">
                        <h4 class="text-[24px]"><?php echo $phone['title']; ?></h4>
                    </div>
                <?php endif; ?>
                <?php if($phone['phone']): ?>
                    <div class="content text-[18px] inter mt-6 text-white">
                        <p><a href="tel:<?php echo $tel; ?>"><?php echo $phone['phone']; ?></a></p>
                    </div>
                <?php endif; ?>
                <?php if($link_social): ?>
                    <div class="button mt-12 lg:mt-16 text-center">
                        <a href="<?php echo $link_social['url']; ?>"<?php if($link_social['target']) echo ' target="'.$link_social['target'].'"'; ?> class="btn btn-blue p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
                            <span class="z-[1]"><?php echo $link_social['title']; ?></span>
                            <svg decoding="async"><use xlink:href="#discord"></use></svg>
                            <img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
                            <img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
                        </a>
                    </div>
                <?php endif; ?>
            </div>
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
