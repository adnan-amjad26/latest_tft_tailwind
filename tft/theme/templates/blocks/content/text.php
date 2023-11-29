<?php
/**
 * Block Name: Text
 */

$fields              = get_fields();
$bottom_overlay      = '';
$dark_bottom_overlay = '';

if ( isset( $fields['backgrounds'] ) ) {
	switch ( $fields['backgrounds']['light_theme'] ) {
		case 'red':
			$bottom_overlay = 'bg-[linear-gradient(0deg,_rgba(87,17,20,0.00)_0%,_#571114_65%)]';
			break;
		case 'green':
			$bottom_overlay = 'bg-[linear-gradient(0deg,_rgba(21,84,62,0.00)_0%,_#15543E_65%)]';
			break;
		case 'green-light':
			$bottom_overlay = 'bg-[linear-gradient(0deg,_rgba(129,131,20,0.00)_0%,_#818314_65%)]';
			break;
		case 'indigo':
			$bottom_overlay = 'bg-[linear-gradient(0deg,_rgba(51,54,87,0.00)_0%,_#333657_65%)]';
			break;
		case 'lilac':
			$bottom_overlay = 'bg-[linear-gradient(0deg,_rgba(154,153,175,0.00)_0%,_#a49db9_65%)]';
			break;
		case 'lilac-dark':
			$bottom_overlay = 'bg-[linear-gradient(0deg,_rgba(68,31,87,0.00)_0%,_#441F57_65%)]';
			break;
	}

	switch ( $fields['backgrounds']['dark_theme'] ) {
		case 'indigo':
			$dark_bottom_overlay = 'bg-[linear-gradient(0deg,_rgba(31,30,44,0.00)_0%,_#1F1E2C_65%)]';
			break;
		case 'navy':
			$dark_bottom_overlay = 'dark:bg-[linear-gradient(0deg,_rgba(0,0,50,0.00)_0%,_#000032_65%)]';
			break;
		case 'lilac':
			$dark_bottom_overlay = 'dark:bg-[linear-gradient(0deg,_rgba(83,13,54,0.00)_0%,_#530D36_65%)]';
			break;
		case 'lilac-dark':
			$dark_bottom_overlay = 'dark:bg-[linear-gradient(0deg,_rgba(41,16,73,0.00)_0%,_#291049_65%)]';
			break;
	}
}

$table_classes  = '[&_table]:text-left [&_table]:mb-[100px] [&_table_ol]:my-0 [&_table_ul]:my-0';
$td_classes     = '[&_td]:align-middle [&_td]:font-medium [&_td]:text-[10px] [&_td]:px-[10px] [&_td]:py-[12px] [&_td]:border-2 [&_td]:border-white [&_td]:border-b-4 [&_tr:last-of-type_td]:border-b-2 xl:[&_td]:text-[20px]';
$th_classes     = '[&_th]:align-middle [&_th]:font-bold   [&_th]:text-[14px] [&_th]:px-[10px] [&_th]:py-[12px] [&_th]:border-2 [&_th]:border-white [&_th]:border-b-4 xl:[&_th]:text-[20px]';
$link_classes   = '[&_a]:text-white [&_a]:underline';
$list_classes   = '[&_ul]:list-disc [&_ul]:pl-[16px] [&_ul]:my-[20px] xl:[&_ul]:pl-[35px] xl:[&_ul]:my-[30px] xl:[&_ul_ul]:pl-[60px]';
$ol_classes     = '[&_ol]:list-decimal [&_ol]:pl-[16px] [&_ol]:my-[20px] xl:[&_ol]:pl-[35px] xl:[&_ol]:my-[30px]';
$strong_classes = '[&_strong]:font-bold';
$p_classes      = '[&_p]:mt-0 [&_p]:mb-[20px] [&_p:last-child]:mb-0 xl:[&_p]:mb-[30px]';
$h2_classes     = '[&_h2]:font-wadik [&_h2]:text-[24px] [&_h2]:mb-[25px] [&_h2]:mt-[100px] [&_h2:first-child]:mt-0 xl:[&_h2]:text-[48px]';
$h3_classes     = '[&_h3]:font-wadik [&_h3]:text-[24px] [&_h3]:mb-[25px] [&_h3]:mt-[100px] [&_h3:first-child]:mt-0 xl:[&_h3]:text-[32px]';
?>
<section
		class="z-20 pb-[100px] overflow-visible text-white font-body font-medium leading-tight text-[16px] xl:text-[24px] xl:pb-[200px] <?= $table_classes; ?> <?= $td_classes; ?> <?= $th_classes; ?> <?= $link_classes; ?> <?= $list_classes; ?> <?= $strong_classes; ?> <?= $p_classes; ?> <?= $h2_classes; ?> <?= $h3_classes; ?> <?= $ol_classes; ?>">
	<div class="max-w-[1920px] mx-auto px-[10px] text-center md:text-left md:px-[30px] lg:px-[50px] xl:px-[110px]">
		<?= $fields ['text']; ?>
	</div>
	<div class="absolute w-full top-[calc(100%-100px)] h-[300px] <?= $bottom_overlay; ?> <?= $dark_bottom_overlay; ?>"></div>
</section>
