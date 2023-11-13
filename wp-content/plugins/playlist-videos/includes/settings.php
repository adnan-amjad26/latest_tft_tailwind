<?php
/**
 * Register a custom menu page.
 */
function playlist_register_custom_menu_page(){
    add_menu_page( 
        __( 'Playlist Videos Setting', 'textdomain' ),
        'Playlist Videos Setting',
        'manage_options',
        'playlist_shortcode',
        'playlist_shortcode_page',
    ); 
}
add_action( 'admin_menu', 'playlist_register_custom_menu_page' );
 
/**
 * Display a custom menu page 
 */
function playlist_shortcode_page(){
      if (isset($_GET['saveapi']) && $_GET['saveapi'] == 'true') {
        if(!empty($_POST['youtubeapis'])){
          $curl = curl_init();

          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.googleapis.com/youtube/v3/videos?part=snippet&key='.$_POST['youtubeapis'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
          ));

          $response = curl_exec($curl); //AIzaSyBjLRqea21maXAfzmHU29EE-a7ZSNYFg98

          curl_close($curl);
          $decode_response = json_decode($response);
        $message =  $decode_response->error->message;
        if($message == 'API key not valid. Please pass a valid API key.'){
          echo '<span style="color:red; font-size: 15px;">'.$message.'</span>';
          update_site_option( 'youtubeapis', '' );
        }else{
       update_site_option( 'youtubeapis', $_POST['youtubeapis'] );
        $url = $_SERVER['REQUEST_URI'];

        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
      }
      }
      }
    ?>
    <h2>Youtube Api</h2>
    <?php 
   
     $apival = get_option('youtubeapis');
     
      if(empty($apival)){
        $apival = '';
        ?>
        <style type="text/css">
          .shortcodetable{
            display:none;
          }
        </style>
        <?php
      }
 
    ?>
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>&saveapi=true" method="post" style="margin-bottom: 30px;">
      <input type="text" name="youtubeapis" placeholder="Enter Youtube Api" value="<?php echo $apival; ?>" required>
      <button type="submit" class="button button-primary">Active</button>
    </form>
    <div class="shortcodetable">
    <h2>Playlist Videos Shortcode</h2>

    <table cellpadding="10" cellspacing="0" border="1">
      <tr>
        <?php //Pet Insurance Calculator ?>
        <td><strong>Playlist Videos:</strong></td>
        <td>[playlist_videos]</td>
      </tr>
    </table>
  </div>
    <?php

}