<?php get_header();?>

<style>

.social{
  padding: 1px 40%;
}

.social i{
  font-size: 20px;
  background-color: black;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  color: white;
  border-radius: 50px;
}

/*  SECTIONS  */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("http://localhost/wordpress/wp-content/uploads/2019/04/57333538_863070140696882_3214594961617977344_o.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("http://localhost/wordpress/wp-content/uploads/2019/04/Webp.net-compress-image.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("http://localhost/wordpress/wp-content/uploads/2019/04/Webp.net-compress-image-1.jpg");
  min-height: 400px;
}

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<div class="bgimg-1">
  <div id="song" style="text-align: center; width:100%; height:100%;">
      <div class="video-container">
            <br>
            <br>
            <?php
            $post_id = 85;
            $queried_post = get_post($post_id);
            ?>
            <br>
            <?php
            $content = $queried_post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo $content;
            ?>
      </div>


      <div class="Spotify-play-list" style="padding: 10px 0%;">
        <?php
        $post_id = 171;
        $queried_post = get_post($post_id);
        ?>
        <?php
        $content = $queried_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
        ?>
      </div>

  </div>

            <div class="social">
                <div class="facebook-link">
                      <?php $post_id = 178;
                            $queried_post = get_post($post_id);
                      ?>

                      <?php
                            $content = $queried_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                      ?>
                </div>

                <div class="twitter-link">
                      <?php $post_id = 183;
                            $queried_post = get_post($post_id);
                      ?>

                      <?php
                            $content = $queried_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                      ?>
                </div>

                <div class="youtube-link">
                      <?php $post_id = 185;
                            $queried_post = get_post($post_id);
                      ?>

                      <?php
                            $content = $queried_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                      ?>
                </div>

             </div>

        </div>
</div>

<div id="band-info" style="background-color:black; width:100%; height:100%;">

      <div class="band-members-section-title"style="text-align: center; padding-top:50px;">

            <h2 style="color:grey;">Band Members</h2>

      </div>

      <div class="band-members-container" style="width:100%; height:100%;">

            <div class="band-members" style="width:25%; height:480px; float:left; background-color:black;">

                    <div class="band-photo-container" style="background-color:black; height:300px;">

                            <?php
                            $post_id = 78;
                            $queried_post = get_post($post_id);
                            ?>
                            <?php
                            $content = $queried_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                            ?>
                    </div>

            </div>

            <div class="band-members" style="width:25%; height:480px; float: left; background-color:black;">

                    <div class="band-photo-container" style="background-color:red; height:300px;">

                            <?php
                            $post_id = 160;
                            $queried_post = get_post($post_id);
                            ?>
                            <?php
                            $content = $queried_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                            ?>
                    </div>

            </div>

            <div class="band-members" style="width:25%; height:480px; float: left; background-color:black;">

                    <div class="band-photo-container" style="background-color:blue; height:300px;">

                            <?php
                            $post_id = 162;
                            $queried_post = get_post($post_id);
                            ?>
                            <?php
                            $content = $queried_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                            ?>
                    </div>

            </div>

            <div class="band-members" style="width:25%; height:480px; float: left; background-color:black;">

                    <div class="band-photo-container" style="background-color:pink; height:300px;">

                            <?php
                            $post_id = 164;
                            $queried_post = get_post($post_id);
                            ?>
                            <?php
                            $content = $queried_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                            ?>
                    </div>

            </div>

      </div>

      <div id="band-info" style="background-color:lightblue; height:480px;">

</div>

</div>

<div class="bgimg-2">
      <div id="event" class="container pt-5 pb-5">


                <?php if (have_posts()) :while(have_posts()) : the_post();?>

                          <?php the_content();?>


                <?php endwhile; endif;?>
      </div>
</div>

<div id="gallery" style="width:100%; height:100%; background-color:black;">
      <br>
      <br>
      <?php
      $post_id = 25;
      $queried_post = get_post($post_id);
      ?>
      <h1 style="text-align: center;"><?php
      $title = $queried_post->post_title;
      echo $title;
      ?></h1>
      <?php
      $content = $queried_post->post_content;
      $content = apply_filters('the_content', $content);
      $content = str_replace(']]>', ']]&gt;', $content);
      echo $content;
      ?>

</div>

<div class="bgimg-3">
      <div id="shop" style="width:100%; height:100%;">
      <br>
        <?php
        $post_id = 21;
        $queried_post = get_post($post_id);
        ?>
        <h1 style="text-align: center; color:white;"><?php
        $title = $queried_post->post_title;
        echo $title;
        ?></h1>
        <br>
        <?php
        $content = $queried_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
        ?>
      </div>
</div>

<div id="media" style="width:100%; height:100%; background-color:black;">
<br>
  <?php
  $post_id = 79;
  $queried_post = get_post($post_id);
  ?>
  <h1 style="text-align: center; color:white;"><?php
  $title = $queried_post->post_title;
  echo $title;
  ?></h1>
  <br>
  <?php
  $content = $queried_post->post_content;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  echo $content;
  ?>
  <br>
</div>


<?php get_footer();?>
