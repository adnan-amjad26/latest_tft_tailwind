<?php
/**
 * Block Name: Phases
 */
?>
<?php $id = get_field('id'); ?>
<?php $phases = get_field('phases'); ?>
<?php if($phases): ?>
    <?php $i = 1; $j = 1;foreach($phases as $phase): ?>
        <?php $reverse = $phase['reverse']; ?>
        <?php $title = $phase['title']; ?>
        <?php $text = $phase['text']; ?>
        <?php $video = $phase['video']; ?>
        <?php $image = $phase['image']; ?>
        <?php $image_2 = $phase['image_2']; ?>
        <?php $light_image = $phase['light_image']; ?>
        <?php $dark_image = $phase['dark_image']; ?>
        <!-- Phase <?php echo $i; ?> Section -->
        <section<?php if($i == 1 && $id) echo ' id="'.$id.'"'; ?> class="phase<?php echo $i; ?>Section <?php echo ($reverse) ? 'reverseSection' : 'questIntroSection'; ?>">
            <?php if($title || $text): ?>
                <div class="<?php echo ($reverse) ? 'reverseTextDiv' : 'questIntroTextDiv'; ?>">
                    <?php if($title): ?>
                        <div id="<?php echo $j++;?>" class="<?php echo ($reverse) ? 'ourTeamHeaderDiv' : 'questIntroHeaderDiv'; ?> phaseHeaderTextDiv headerTextResponsive"><?php echo $title; ?></div>
                    <?php endif; ?>
                    <?php if($text): ?>
                        <div class="<?php echo ($reverse) ? 'ourTeamBodyDiv' : 'questIntroBodyDiv'; ?>"><?php echo $text; ?></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="<?php echo ($reverse) ? 'reverseVideoContainerDiv' : 'questVideoContainerDiv'; ?>">
                <div class="questIntroVideoDiv">
                    <?php if($video['url']): ?>
                        <div class="testVideoDiv">
                            <iframe class="videoIframe" src="<?php echo $video['url']; ?>"<?php if($video['url']) echo ' title="'.$video['url'].'"'; ?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/QuestIntroVideoBackground.png" alt="QuestIntroVideoBackground" class="questIntroVideoBackgroundPhoto">
                    <?php endif; ?>
                    <?php if($image): ?>
                        <div class="questIntroPurpleGemDiv">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="phase<?php echo $i; ?>PurpleGemPhoto gem">
                        </div>
                    <?php endif; ?>
                    <?php if($image_2): ?>
                        <div class="questIntroPinkGemDiv">
                            <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>" class="phase<?php echo $i; ?>PinkGemPhoto gem">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($light_image || $dark_image): ?>
                <div class="<?php echo ($reverse) ? 'reverseOverlaysDiv' : 'questIntroOverlaysDiv'; ?>">
                    <div class="<?php echo ($reverse) ? 'ourTeamTorchDiv' : 'questIntroTorchDiv'; ?> torch">
                        <?php if($dark_image): ?>
                            <img src="<?php echo $dark_image['url']; ?>" alt="<?php echo $dark_image['title']; ?>" class="<?php echo ($reverse) ? 'ourTeamTorch' : 'questIntroTorch'; ?> night">
                            <div class="torchGlow night" id="torchGlow<?php echo $i; ?>"></div>
                        <?php endif; ?>
                        <?php if($light_image): ?>
                            <img src="<?php echo $light_image['url']; ?>" alt="<?php echo $light_image['title']; ?>" class="questIntroTorch day">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </section>
    <?php $i++; endforeach; ?>
<?php endif; ?>