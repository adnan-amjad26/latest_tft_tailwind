<?php $missionData = get_fields();
?>
<section class="w-full bg-[#3E093D] relative w-full py-[100px] md:py-[150px] px-[16px] 2xl:px-[85px]">
    <div class="max-w-[1680px] w-full mx-auto">
        <div class="flex flex-col text-center gap-[30px]">
            <h3 class="text-[36px] lg:text-[44px] 2xl:text-[50px] text-white"> <?php if($missionData['our_mission_title']) {echo $missionData['our_mission_title'];} ?>
			</h3>
        </div>

        <div class="w-full relative mt-[30px] lg:mt-0">
            <div class="static lg:absolute lg:max-h-[calc(100%_-_475px)] text-center flex flex-col font-[500] gap-[20px] lg:px-[100px] left-[6%] right-[6%] top-1/2  lg:-translate-y-1/2 overflow-auto text-[24px] lg:text-black">
               <?php if($missionData['our_mission_statement']) {echo $missionData['our_mission_statement'];} ?>
            </div>
            <img class="w-full hidden lg:block" src="<?php echo get_template_directory_uri(); ?>/img/tablecomparative.svg" alt="">
        </div>
    </div>
</section>
