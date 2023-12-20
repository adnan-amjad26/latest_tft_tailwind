<?php
/**
 * Block Name: Hero Banner
 */
?>
<?php
$teamData = get_fields();
$title = $teamData['our_team_title'];
$text = $teamData['our_team_text'];
$members = $teamData['members'];
?>
<!-- Our Team Section -->
<section class="w-full dark:bg-[#000031] py-[300px] px-[16px] 2xl:px-[85px]">
	<div class="max-w-[1600px] w-full mx-auto">
		<div class="flex flex-col text-center gap-[30px]">
			<h3 class="max-w-[352px] mx-auto md:mx-0 md:max-w-full w-full text-[36px] lg:text-[44px] 2xl:text-[50px] text-white">Meet The Leaders of The Funded Trader</h3>
			<p class="max-w-[334px]  md:max-w-[1316px] w-full mx-auto text-[18px] font-[500]">At TFT, our leadership team is made up of dedicated, ambitious, and experienced individuals who bring a diverse set of experiences, expertise, and perspectives to the table. This unique advantage allows us to build the best product, experience, team, and community in the industry. We encourage our community members to get to know our leadership team, as their commitment to excellence ensures that they are in capable and trustworthy hands.</p>
		</div>

		<div class="w-full flex flex-wrap items-center justify-center mt-[130px]">
			<?php foreach($members as $member)  : ?>
			<!-- Team Card -->
			<div class="w-full sm:w-1/2 lg:w-1/3 p-[20px]">
				<div class="max-w-[470px] w-full flex flex-col gap-[20px] mx-auto">
					<div class="max-w-[383px] mx-auto w-full relative">
						<div class="absolute flex px-[20px] items-center justify-center rounded-[30px] left-[30px] right-[30px] top-[30px] bottom-[25px] overflow-hidden">
							<img class="w-full" src="<?php echo $member['member_image']['url']; ?>" alt="">
		            </div>
						<img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/team-frame.svg" alt="">
		            </div>
					<div class="flex flex-col gap-[10px] text-center">
						<h4 class="text-[24px] lg:text-[28px] 2xl:text-[32px] text-white uppercase"><?php echo $member['member_title']; ?></h4>
						<h5 class="text-[16px] text-white uppercase"><?php echo $member['member_subtitle']; ?></h5>
						<p class="text-[16px] text-white max-w-[433px] w-full mx-auto">“<?php echo $member['member_text']; ?>”</p>
		            </div>
	        </div>
	    </div>
			<?php endforeach; ?>
	        </div>
	    </div>
</section>
