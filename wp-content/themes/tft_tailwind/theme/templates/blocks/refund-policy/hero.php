<?php

/**
 * Block Name: Refund Policy Hero
 */

$title = get_field('title');
?>

<section class="relative overflow-hidden pt-[60px] pb-[400px] mb-[-400px] dark:pb-[600px] dark:mb-[-600px] md:pt-0 md:pb-[100px] md:mb-[-200px] md:dark:pb-[300px] md:dark:mb-[-375px]">
    <div class="dark:hidden">
        <img class="min-w-[2180px] max-w-none w-full absolute h-auto top-0 left-2/4 -translate-x-1/2 z-20 opacity-80" src="<?= get_template_directory_uri(); ?>/img/refund-hero-light.png" alt="castle" />

        <div class="absolute w-full left-0 z-30 bottom-[-150px] h-[500px] bg-[linear-gradient(180deg,_rgba(51,54,87,0.00)_0%,_#333657_42.01%)]"></div>
    </div>

    <div class="hidden dark:block">
        <img class="min-w-[2180px] max-w-none w-full absolute h-auto top-0 z-10 left-[-200px] xl:left-2/4 xl:-translate-x-1/2" src="<?= get_template_directory_uri(); ?>/img/refund-hero-dark.png" alt="castle with dragon" />

        <div class="absolute w-full left-0 z-30 bottom-0 h-[500px] bg-[linear-gradient(180deg,_rgba(31,30,44,0.00)_0%,_rgba(0,0,50,0.00)_0.01%,_#1F1E2C_42.01%)]"></div>
    </div>

    <div class="relative z-30 max-w-[1920px] mx-auto py-[170px] md:pt-[200px] md:pb-[250px] md:px-[30px] lg:px-[50px] xl:pt-[275px] xl:pb-[450px]  xl:px-[110px]">
        <h1 class="font-wadik text-white text-center text-[40px] md:text-left md:text-[64px]"><?= $title; ?></h1>
    </div>
</section>