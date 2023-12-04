<?php
/**
 * Block Name: Media
 */
?>
<?php $title = get_field('title'); ?>
<?php $media = get_field('media'); ?>
<?php $img_day = get_field('img_day'); ?>
<?php $img_night = get_field('img_night'); ?>
<?php

// $acf_data = '<!-- wp:acf/media {"name":"acf/media","data":{"title":"The Funding Kingdom Awaits You","_title":"field_64280d28fe32f","media_0_icon":698,"_media_0_icon":"field_64280d52fe332","media_0_title":"Payout System","_media_0_title":"field_64280d68fe333","media_0_video":"https://www.youtube.com/watch?v=OqQ4eIaWiho","_media_0_video":"field_64280d70fe334","media_0_poster":"","_media_0_poster":"field_64280d80fe335","media_0_text":"Receive your payouts through Deel or Crypto. Once you click submit withdrawal on the Trade Hub, our goal is to make the payout process smooth and efficient.","_media_0_text":"field_64280d97fe336","media_1_icon":699,"_media_1_icon":"field_64280d52fe332","media_1_title":"Trade Hub","_media_1_title":"field_64280d68fe333","media_1_video":"https://www.youtube.com/watch?v=UP-MPtCcA7I","_media_1_video":"field_64280d70fe334","media_1_poster":"","_media_1_poster":"field_64280d80fe335","media_1_text":"Experience our unified, fast, and secure system which all traders get access to. Inside you will be able to start challenges, monitor your dashboard and participate in one of our many free competitions!","_media_1_text":"field_64280d97fe336","media_2_icon":699,"_media_2_icon":"field_64280d52fe332","media_2_title":"Scaling Plan","_media_2_title":"field_64280d68fe333","media_2_video":"https://www.youtube.com/watch?v=N3r9q3UsFTs","_media_2_video":"field_64280d70fe334","media_2_poster":"","_media_2_poster":"field_64280d80fe335","media_2_text":"Once you prove your skills, you will be rewarded with more capital. If you successfully perform on your funded account you will qualify for one of our two scaling plans that are available. The maximum amount of capital you can manage is $1.5 million usd.","_media_2_text":"field_64280d97fe336","media":3,"_media":"field_64280d2ffe330","img_day":692,"_img_day":"field_64280dcafe339","img_night":691,"_img_night":"field_64280de6fe33a"},"mode":"edit"} /-->';
// // Use regular expressions to extract ACF field values
// preg_match('/"title":"(.*?)",/', $acf_data, $title);
// preg_match('/"media_0_icon":(\d+),/', $acf_data, $media_0_icon);
// preg_match('/"media_0_title":"(.*?)",/', $acf_data, $media_0_title);
// preg_match('/"media_0_video":"(.*?)",/', $acf_data, $media_0_video);
// preg_match('/"media_0_poster":"(.*?)",/', $acf_data, $media_0_poster);
// preg_match('/"media_0_text":"(.*?)",/', $acf_data, $media_0_text);
// preg_match('/"img_day":(\d+),/', $acf_data, $img_day);
// preg_match('/"img_night":(\d+),/', $acf_data, $img_night);
// // Add more regular expressions to extract other fields as needed

// // Define default values in case the ACF fields are not present
// $title = isset($title[1]) ? $title[1] : '';
// $media_0_icon = isset($media_0_icon[1]) ? $media_0_icon[1] : '';
// $media_0_title = isset($media_0_title[1]) ? $media_0_title[1] : '';
// $media_0_video = isset($media_0_video[1]) ? $media_0_video[1] : '';
// $media_0_poster = isset($media_0_poster[1]) ? $media_0_poster[1] : '';
// $media_0_text = isset($media_0_text[1]) ? $media_0_text[1] : '';
// $img_day = isset($img_day[1]) ? $img_day[1] : '';
// $img_night = isset($img_night[1]) ? $img_night[1] : '';
?>
<section class="media-boxes p-[100px_16px] md:p-[150px_40px] text-center bg-blue-dark" data-scroll-section>
    <div class="max-w-[1720px] w-full mx-auto relative z-10">
        <?php if($title): ?>
            <div class="flex">
                <div class="w-full">
                    <h3 class="text-[36px] xl:text-[40px] 2xl:text-[40px]"><?php echo $title; ?></h3>
                </div>
            </div>
        <?php endif; ?>
        <?php /* if($media): ?>
            <div class="row gap-12 lg:gap-24 mt-12 lg:mt-16">
                <?php foreach($media as $item): ?>
                    <?php $icon = $item['icon']; ?>
                    <?php $title = $item['title']; ?>
                    <?php $video = $item['video']; ?>
                    <?php
                        if($video) {
                            parse_str(parse_url($video, PHP_URL_QUERY), $video_array);
                            $video_id = $video_array['v'];
                        }
                    ?>
                    <?php $text = $item['text']; ?>
				    <?php $poster = $item['poster'] ?: 'https://i.ytimg.com/vi/'. $video_id .'/maxresdefault.jpg'; ?>
                    <div class="w-full lg:flex-1">
                        <?php if($icon): ?>
                            <div class="icon h-28 flex justify-center">
                                <img decoding="async" loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['title']; ?>">
                            </div>
                        <?php endif; ?>
                        <?php if($title): ?>
                            <div class="title mt-8">
                                <h4><?php echo $title; ?></h4>
                            </div>
                        <?php endif; ?>
                        <?php if($video || $poster): ?>
                            <figure class="w-full relative mt-12 lg:mt-16">
                                <lite-youtube videoid="<?php echo $video_id; ?>" autoload<?php if($poster) echo ' style="background-image: url('.$poster.');"'; ?>>
                                    <a href="<?php echo $video; ?>" class="lty-playbtn" title="Play Video">
                                        <span class="lyt-visually-hidden"></span>
                                    </a>
                                </lite-youtube>
                                <img class="bg" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/video-border.svg" alt="video-border">
                            </figure>
                        <?php endif; ?>
                        <?php if($text): ?>
                            <div class="content mt-12 font-medium">
                                <?php echo $text; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; */ ?>
		
		
		<?php if($media): ?>
            <div class="row mt-12 lg:mt-16">
				<div class="w-full">
					<div class="swiper overflow-visible">
						<div class="swiper-nav absolute z-10">
							<div class="prev">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M496.3-.0002c-1 0-2.053.165-3.053.29l-128.6 25.75c-12.25 2.5-16.88 17.59-8 26.47l40.12 40.12L144.3 345l-53.62-24.08c-7.33-2.42-15.45-.52-20.95 4.98L5.98 389.72c-10.75 10.75-6.376 29.12 8.126 33.1l55.62 18.5L88.22 497.9c2.998 9 11.28 14.12 19.65 14.12 5.125 0 10.35-1.874 14.47-5.997l63.62-63.74c5.502-5.5 7.376-13.62 5.001-20.1l-23.1-53.62 252.4-252.4 40.13 40.09c3.125 3.125 7.129 4.639 11.01 4.639 6.998 0 13.87-4.764 15.49-12.64l25.72-128.6C513.6 8.913 505.9-.0002 496.3-.0002zM112.7 470.3 94.97 417l-53.25-17.75 44.87-45 49.13 22 21.1 48.1-44.12 45.95zm347.9-359-59.9-59.8 74.75-15-14.85 74.8zm-311.9 156c3.1 3.1 7.2 4.7 11.3 4.7s8.188-1.562 11.31-4.688c6.25-6.25 6.25-16.38 0-22.62L63.58 136.1c73.23-51.43 171.8-54.54 247.9-6.502 7.375 4.688 17.38 2.516 22.06-4.984C338.3 118 336 108.1 328.5 103.4 240 47.51 124.6 51.86 40.4 113.86L27.25 100.7c-6.25-6.25-16.31-6.302-22.56-.0524S-1.542 117 4.708 123.3l143.992 144zm259.9-83.8c-4.781-7.5-14.75-9.672-22.06-4.984-7.5 4.719-9.719 14.61-5 22.08 48.06 76.04 44.97 174.6-6.494 247.9l-107.7-107.7c-6.25-6.25-16.38-6.25-22.62 0s-6.25 16.38 0 22.62l144 144C391.8 510.4 395.9 512 400 512s8.188-1.562 11.31-4.688c6.25-6.25 6.25-16.38 0-22.62l-13.17-13.17C460.1 387.3 464.5 271.1 408.6 183.5z"/></svg>
							</div>
							<div class="next">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M496.3-.0002c-1 0-2.053.165-3.053.29l-128.6 25.75c-12.25 2.5-16.88 17.59-8 26.47l40.12 40.12L144.3 345l-53.62-24.08c-7.33-2.42-15.45-.52-20.95 4.98L5.98 389.72c-10.75 10.75-6.376 29.12 8.126 33.1l55.62 18.5L88.22 497.9c2.998 9 11.28 14.12 19.65 14.12 5.125 0 10.35-1.874 14.47-5.997l63.62-63.74c5.502-5.5 7.376-13.62 5.001-20.1l-23.1-53.62 252.4-252.4 40.13 40.09c3.125 3.125 7.129 4.639 11.01 4.639 6.998 0 13.87-4.764 15.49-12.64l25.72-128.6C513.6 8.913 505.9-.0002 496.3-.0002zM112.7 470.3 94.97 417l-53.25-17.75 44.87-45 49.13 22 21.1 48.1-44.12 45.95zm347.9-359-59.9-59.8 74.75-15-14.85 74.8zm-311.9 156c3.1 3.1 7.2 4.7 11.3 4.7s8.188-1.562 11.31-4.688c6.25-6.25 6.25-16.38 0-22.62L63.58 136.1c73.23-51.43 171.8-54.54 247.9-6.502 7.375 4.688 17.38 2.516 22.06-4.984C338.3 118 336 108.1 328.5 103.4 240 47.51 124.6 51.86 40.4 113.86L27.25 100.7c-6.25-6.25-16.31-6.302-22.56-.0524S-1.542 117 4.708 123.3l143.992 144zm259.9-83.8c-4.781-7.5-14.75-9.672-22.06-4.984-7.5 4.719-9.719 14.61-5 22.08 48.06 76.04 44.97 174.6-6.494 247.9l-107.7-107.7c-6.25-6.25-16.38-6.25-22.62 0s-6.25 16.38 0 22.62l144 144C391.8 510.4 395.9 512 400 512s8.188-1.562 11.31-4.688c6.25-6.25 6.25-16.38 0-22.62l-13.17-13.17C460.1 387.3 464.5 271.1 408.6 183.5z"/></svg>
							</div>
						</div>
						<div class="swiper-wrapper">
							
							<?php foreach($media as $item): ?>
								<?php $icon = $item['icon']; ?>
								<?php $title = $item['title']; ?>
								<?php $video = $item['video']; ?>
								<?php
									if($video) {
										parse_str(parse_url($video, PHP_URL_QUERY), $video_array);
										$video_id = $video_array['v'];
									}
								?>
								<?php $text = $item['text']; ?>
								<?php $poster = $item['poster'] ?: 'https://i.ytimg.com/vi/'. $video_id .'/maxresdefault.jpg'; ?>
								<div class="swiper-slide">
									<?php if($icon): ?>
										<div class="icon h-28 flex justify-center">
											<img decoding="async" loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['title']; ?>">
										</div>
									<?php endif; ?>
									<?php if($title): ?>
										<div class="title mt-8">
											<h4><?php echo $title; ?></h4>
										</div>
									<?php endif; ?>
									<?php if($video || $poster): ?>
										<figure class="w-full relative mt-12 lg:mt-16">
											<lite-youtube videoid="<?php echo $video_id; ?>" autoload<?php if($poster) echo ' style="background-image: url('.$poster.');"'; ?>>
												<a href="<?php echo $video; ?>" class="lty-playbtn" title="Play Video">
													<span class="lyt-visually-hidden"></span>
												</a>
											</lite-youtube>
											<img class="bg" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/video-border.svg" alt="video-border">
										</figure>
									<?php endif; ?>
									<?php if($text): ?>
										<div class="content mt-12 font-medium text-[16px] md:text-[18px]">
											<?php echo $text; ?>
										</div>
									<?php endif; ?>
								</div>
							<?php endforeach; ?>
							
						</div>
					</div>
				</div>
            </div>
        <?php endif; ?>
       
    </div>
    <?php if($img_day || $img_night): ?>
        <figure class="bg absolute bottom-0 left-0 w-full h-full z-0">
            <?php if($img_day): ?>
                <img class="imgs-day" src="<?php echo $img_day['url']; ?>" alt="<?php echo $img_day['title']; ?>">
            <?php endif; ?>
            <?php if($img_night): ?>
                <img class="imgs-night" src="<?php echo $img_night['url']; ?>" alt="<?php echo $img_night['title']; ?>">
            <?php endif; ?>
        </figure>
    <?php endif; ?>
</section>