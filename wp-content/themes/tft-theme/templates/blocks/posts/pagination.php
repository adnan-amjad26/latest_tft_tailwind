<?php
/**
 * Posts pagination
 *
 * @package CBD
 */
?>
<?php
    $left_arrow = get_template_directory_uri().'/img/left-arrow.png';
    $right_arrow = get_template_directory_uri().'/img/right-arrow.png';
    $args = array(
        'prev_text' => __('<img src="'.$left_arrow.'" alt="left-arrow">'),
        'next_text' => __('<img src="'.$right_arrow.'" alt="right-arrow">'),
        'screen_reader_text' => __(' '),
    );
?>
<?php the_posts_pagination($args); ?>