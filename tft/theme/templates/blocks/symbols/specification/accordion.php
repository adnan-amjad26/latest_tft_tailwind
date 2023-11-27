<div id="<?= $name; ?>" data-accordion="collapse">
	<h3 class="font-wadik text-[14px] text-white uppercase px-[15px] py-5 md:text-[16px] xl:text-[20px] xl:px-[50px] xl:py-8">
		<button type="button"
		        class="flex items-center gap-x-[25px]"
		        data-accordion-target="#<?= $slug; ?>"
		        aria-controls="<?= $slug; ?>"
		        aria-expanded="false"
		>
			<svg width="17"
			     height="9"
			     viewBox="0 0 17 9"
			     fill="none"
			     xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd"
				      d="M15.9593 0.418941C15.5715 0.0740575 14.9431 0.0740575 14.5554 0.418941L8.25007 6.02822L1.94465 0.418941C1.55697 0.0740575 0.928439 0.0740575 0.54076 0.418941C0.15308 0.763814 0.15308 1.32297 0.54076 1.66786L7.54806 7.90158C7.9358 8.24651 8.56424 8.24651 8.95197 7.90158L15.9593 1.66786C16.3469 1.32297 16.3469 0.763814 15.9593 0.418941Z"
				      fill="white"/>
			</svg>
			<span class="block w-full text-left"><?= $spec['name']; ?></span>
		</button>
	</h3>
	<div class="my-[25px] relative before:block before:absolute before:bottom-0 before:left-0 before:w-full before:h-px before:bg-white xl:w-[82%] xl:left-2/4 xl:-translate-x-1/2">
		<div id="<?= $slug; ?>"
		     class="hidden pb-[25px]">
			<div class="text-white font-montserrat md:flex md:gap-x-[25px] xl:gap-x-[75px]">

				<div class="md:basis-2/4">
					<h4 class="text-[18px] font-semibold mb-2"><?= $information_table_caption; ?></h4>
					<table class="text-[16px] w-full">
						<?php
						foreach ( $information_table_labels as $name => $label ) {
							?>
							<tr class="font-medium border-b border-b-[#3f3f3f] last:border-none">
								<td class="px-2 py-4 text-center bg-[#262626] border-r border-r-[#3f3f3f]"><?= $label; ?></td>
								<td class="px-2 py-4 text-center bg-[#323232]"><?= $information_values[ $name ]; ?></td>
							</tr>
							<?php
						}
						?>
					</table>
				</div>

				<div class="mt-5 md:basis-2/4 md:mt-0">
					<h4 class="text-[18px] font-semibold mb-2"><?= $hours_table_caption; ?></h4>
					<table class="text-[16px] w-full">
						<?php
						foreach ( $hours_table_labels as $name => $label ) {
							?>
							<tr class="font-medium border-b border-b-[#3f3f3f] last:border-none">
								<td class="px-2 py-4 text-center bg-[#262626] border-r border-r-[#3f3f3f]"><?= $label; ?></td>
								<td class="px-2 py-4 text-center bg-[#323232]"><?= $hours_values[ $name ]; ?></td>
							</tr>
							<?php
						}
						?>
					</table>
				</div>

			</div>
		</div>
	</div>

</div>
