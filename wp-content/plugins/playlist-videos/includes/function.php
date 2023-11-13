<?php
//include css and js


//Custom Post type of playlist video
add_action( 'init', 'playlist_videos_func' );
function playlist_videos_func() {
  $args = array(
    'public' => true,
    'labels'  => array('name'=>'Playlist  Video'),
    'description'        => __( '' ),
    'publicly_queryable' => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'map_meta_cap'       => true,
    'rewrite'            => array( 'slug' => 'playlist_videos', 'with_front' => true ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
    );
    register_post_type( 'playlist_videos', $args );
}

add_action( 'init', 'playlist_video_taxonmoy' );
function playlist_video_taxonmoy() {
  register_taxonomy(
    'playlist_tabs',
    'playlist_videos',
    array(
      'label' => __( 'Tabs' ), 
      'rewrite' => array( 'slug' => 'playlist_tabs' ),
      'hierarchical' => true,

    )
  );
}


//Custom Fields for playlist vidoes
//Register Meta Box 
add_action( 'add_meta_boxes', 'register_meta_box_playlist_videos');
function register_meta_box_playlist_videos() {
    add_meta_box( 'fill_blankss', esc_html__( '-- Information --', 'text-domain' ), 'meta_box_callback_playlist_videos', 'playlist_videos', 'advanced', 'high' );
}

//Add meta box
function meta_box_callback_playlist_videos() {
  global $post;
    echo '<input type="hidden" name="playlist_videos_meta_noncename" id="playlist_videos_meta_noncename" value="' . wp_create_nonce( plugin_basename(__FILE__) ) . '" />'; 
  echo '<style>input[type="text"], textarea { width:100%; border-radius:3px; border:1px solid #eee; padding:10px; }</style>';

  //youtube video id
  $video_id = get_post_meta($post->ID, "video_id", true);
  echo "<p><input type='text' value='".$video_id."' name='video_id' placeholder='Youtube Video ID' /></p>";
	
	 //youtube video Duration
  $video_duration = get_post_meta($post->ID, "video_duration", true);
  echo "<p><input type='text' value='".$video_duration."' name='video_duration' placeholder='Youtube Video Duration' /></p>";


}

//save meta box
add_action('save_post', 'save_meta_playlist_videos', 1, 2); // save the custom fields
function save_meta_playlist_videos( $post_id, $post ) {
	if(!empty($_POST['playlist_videos_meta_noncename'])){
    if (  !wp_verify_nonce( $_POST['playlist_videos_meta_noncename'], plugin_basename(__FILE__) )) {
    return $post->ID; }
  }
  if ( !current_user_can( 'edit_post', $post->ID ))
    return $post->ID;

  $playlist_videos_meta_noncename['video_id'] = $_POST['video_id'];
  $playlist_videos_meta_noncename['video_duration'] = $_POST['video_duration'];
 
  foreach ($playlist_videos_meta_noncename as $key => $value) { 
    if( $post->post_type == 'revision' ) return; 
    $value = implode(',', (array)$value); 
    if(get_post_meta($post->ID, $key, FALSE)) { 
      update_post_meta($post->ID, $key, $value);
    } else { 
      add_post_meta($post->ID, $key, $value);
    }
    if(!$value) delete_post_meta($post->ID, $key); 
  }

}

//Shortcode playlist videos
//Shortcode playlist videos
add_shortcode('playlist_videos','playlist_videos_shortcode');
function playlist_videos_shortcode(){
 
 $playlistvideos = '';
$playlistvideos .='<div class="container_video">
       <div class="playlisttab">';
        $taxonomies = get_terms(array(
              'taxonomy' => 'playlist_tabs',
              'hide_empty' => false,
          ));
        foreach($taxonomies as $term){
       $playlistvideos .=' <button class="tablinks " onclick="playVideo(event, \''.$term->slug.'\')">'.$term->name.'</button>';
      }
      $taxonomies = get_terms(array(
              'taxonomy' => 'playlist_tabs',
              'hide_empty' => false,
          ));
        foreach($taxonomies as $term){
         $termname = $term->name;
         $termslug = $term->slug;
      $playlistvideos .='</div>
      <div id="'.$termslug.'" class="tabcontent">
        <div class="video_row">';
         $args = array(
          'post_type' => 'playlist_videos',
          'posts_per_page' =>1,
          'tax_query' => array(
                      array(
                          'taxonomy' => 'playlist_tabs',
                          'field' => 'term_id',
                          'terms' => $term->term_id
                      )
                  )
          );
         $playlist_query = new WP_Query( $args );
         $count = $playlist_query->found_posts;
         $newClass = '';
         $hideheader ='';
         if(empty($count)){
          $newClass = 'style="overflow: hidden;"';
          $hideheader = 'style="display: none;"';
         }
       if($playlist_query->have_posts()) :
           while ($playlist_query->have_posts()) : $playlist_query->the_post();
              $count = $playlist_query->found_posts;
               $postid = get_the_ID();
               $videoid = get_post_meta($postid,'video_id', true);
			  $video_durations = get_post_meta($postid, "video_duration", true);
        $playlistvideos .='<div class="main-video-container_video">
           <iframe class="main-video '.$termslug.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="712" height="400" type="text/html" src="https://www.youtube.com/embed/'.$videoid.'"></iframe>
        </div>';
        endwhile;
			wp_reset_postdata();
      else:
        $playlistvideos .='';
        endif;
        $playlistvideos .='<div class="video-list-container_video">
         <div class="plylist_head" '.$hideheader.'>
           <div class="rowss">
             <div class="col6"><span class="othvide">'.$term->name.'</span></div>
             <div class="col6" style="text-align: right;"><span class="videcount">'.$count.' Video</span></div>
           </div>
         </div>
           <div class="videolistconaitner" '.$newClass.'>';
             $args = array(
          'post_type' => 'playlist_videos',
			'posts_per_page' =>-1,	 
          'tax_query' => array(
                      array(
                          'taxonomy' => 'playlist_tabs',
                          'field' => 'term_id',
                          'terms' => $term->term_id
                      )
                  )
          );

       $playlist_query = new WP_Query( $args );
       if($playlist_query->have_posts()) :
           while ($playlist_query->have_posts()) : $playlist_query->the_post();
              
               $postid = get_the_ID();
               $title = get_the_title($postid);
               $playlistimage = wp_get_attachment_url( get_post_thumbnail_id( $postid ), 'thumbnail' );
               
               $videoid = get_post_meta($postid,'video_id', true);
			$videoduration = get_post_meta($postid,'video_duration', true);
              
           $playlistvideos .=' <div class="lists cust_list_title'.$postid.'">
              <img src="https://img.youtube.com/vi/'.$videoid.'/hqdefault.jpg" class="playlist_thumbnial">
              <span style="display:none;" class="list-video" src="https://www.youtube.com/embed/'.$videoid.'?autoplay=1" videoid='.$termslug.'></span>
              <div class="divinfo">
              <h3 class="list-title">'.$title.'</h3>
              <span class="spctime">'.$videoduration.'</span>
              </div>
           </div>';
              endwhile;
			wp_reset_postdata();
              else:
              $playlistvideos .='<span class="novideo">No Video Playlist Found</span>';
              ?>
              <style type="text/css">
                .novideo{
                  display: flex;
                  justify-content: center;
                  align-items: center;
                      height: 100%;
                }
              </style>
              <?php
            endif;
            $playlistvideos .='</div>
          
        </div>
      </div>';
      }
     $playlistvideos .='</div>
     </div></div>'; 
return $playlistvideos;

}