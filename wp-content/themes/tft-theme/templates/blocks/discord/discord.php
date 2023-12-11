<?php
/**
 * Block Name: Discord
 */
?>
<?php $icon = get_field('icon'); ?>
<?php $title = get_field('title'); ?>
<?php $logo = get_field('logo'); ?>
<?php $link = get_field('link'); ?>
<?php $image = get_field('image'); ?>
<?php $lottie = get_field('lottie'); ?>
<?php $background = get_field('background'); ?>

<?php
// Your ACF block data
// $acf_data = '<!-- wp:acf/discord {"name":"acf/discord","data":{"icon":147,"_icon":"field_64271ff579ace","title":"Join Our Discord","_title":"field_64271cf9ebc3e","logo":556,"_logo":"field_642720f37c426","link":{"title":"Join Our Discord","url":"https://discord.com/invite/R5CX3rsPFD","target":"_blank"},"_link":"field_64271cffebc3f","image":1608,"_image":"field_64271e7a45fe9","background":549,"_background":"field_64271f67c07f4","lottie":545,"_lottie":"field_64271ece6f0b8"},"mode":"edit"} /-->';
// // Use regular expressions to extract ACF field values
// preg_match('/"icon":(\d+),/', $acf_data, $icon);
// preg_match('/"title":"(.*?)",/', $acf_data, $title);
// preg_match('/"logo":(\d+),/', $acf_data, $logo);
// preg_match('/"link":{"title":"(.*?)","url":"(.*?)","target":"(.*?)"},/', $acf_data, $link);
// preg_match('/"image":(\d+),/', $acf_data, $image);
// preg_match('/"lottie":(\d+),/', $acf_data, $lottie);
// preg_match('/"background":(\d+),/', $acf_data, $background);
// // Add more regular expressions to extract other fields as needed

// // Define default values in case the ACF fields are not present
// $icon = isset($icon[1]) ? $icon[1] : '';
// $title = isset($title[1]) ? $title[1] : '';
// $logo = isset($logo[1]) ? $logo[1] : '';
// $link_title = isset($link[1]) ? $link[1] : '';
// $link_url = isset($link[2]) ? $link[2] : '';
// $link_target = isset($link[3]) ? $link[3] : '';
// $image = isset($image[1]) ? $image[1] : '';
// $lottie = isset($lottie[1]) ? $lottie[1] : '';
// $background = isset($background[1]) ? $background[1] : '';
// Define default values for other fields as well
?>
<section class="discord text-center bg-lilac pt-0 lg:pt-[300px] relative z-[1]" data-scroll-section>
    <div class="max-w-[1360px] w-full mx-auto relative z-10">
        <div class="flex flex-col items-center px-[16px] md:px-[40px]">
            <?php if($icon || $title || $logo): ?>
                <div class="w-full lg:w-5/6 relative z-0">
                    <?php if($icon || $title): ?>
                        <div class="inner relative z-10">
                            <?php if($title): ?>
                                <div class="title">
                                    <h3><?php echo $title; ?></h3>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($logo): ?>
                        <div class="bg absolute top-0 lg:top-[-100px] left-0 lg:left-[-100px] right-0 lg:right-[-100px] z-0">
                            <img decoding="async" loading="lazy" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>">
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if($image || $link || $lottie): ?>
                <div class="w-full xl:max-w-[769px] relative z-[auto] mockup-col">
                <?php if($lottie): ?>
                        <div class="relative xl:absolute bottom-0 xl:right-[100%] w-[120px] sm:w-[18vmax] h-[fit-content] z-[1]">
                            <lottie-player src="<?php echo $lottie; ?>" background="transparent" speed="0.6" loop autoplay></lottie-player>
                        </div>
                    <?php endif; ?>
                    <div class="mockup-shadow absolute top-[50px] xl:top-auto xl:bottom-[50px] left-0 xl:left-[-300px] right-0 xl:right-[-300px] h-[200px] lg:h-[450px] rounded-[500px_500px_0_0] z-[-1] opacity-[0.8] pointer-events-none"></div>
                   <div class="w-full flex flex-col gap-[50px] mb-[-350px] relative z-[20]">
                   <?php if($image): ?>
                        <figure class="mockup">
                            <img decoding="async" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                        </figure>
                    <?php endif; ?>
                    <?php if($link): ?>
                        <div class="button mt-12 lg:mt-20 text-center">
                            <a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-blue p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
                                <span class="relative z-[1]"><?php echo $link['title']; ?></span>
                                <svg decoding="async"><use xlink:href="#discord"></use></svg>
                                <img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
                                <img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
                            </a>
                        </div>
                    <?php endif; ?>
                   </div>

                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if($background): ?>
        <figure class="bg absolute top-0 left-0 w-full z-0">
            <img decoding="async" loading="lazy" src="<?php echo $background['url']; ?>" alt="<?php echo $background['title']; ?>">
        </figure>
    <?php endif; ?>

    <div class="w-full h-[500px] bg-gradient-to-t from-[#4d466d] to-[#110246]"></div>
</section>
