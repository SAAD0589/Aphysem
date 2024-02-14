<?php
/**
 * Template Name: Vidéothèque 
 * Description: This is Vidéothèque .
 *
 */
?>
<?php get_header();
$title_videotheque = get_field('title_videotheque');
$title_phototheque = get_field('title_phototheque', 477);

$text_right_videotheque = get_field('text_right_videotheque');
$adipiscing = get_field('adipiscing', 477);

?>

<div class="row justify-content-center text-center switchMediatheque ">
    <div class='col-xl-3 col-md-4 col-sm-5 col-5 in_Videotheque py-3'>
        <a class="textswitchMediatheque " href="mediatheque-2/videotheque">
            <?php echo $title_videotheque ?>
        </a>
    </div>
    <div class='col-xl-3 col-md-4 col-sm-5 col-5 not_in_Phototheque py-3'>
        <a class="textswitchMediatheque " href="mediatheque-2/phototheque/">
            <?php echo $title_phototheque ?>
        </a>
    </div>
</div>

<div class="container">
    <!-- Video -->
    <div id="video-player" class='my-5'>
        <!-- The YouTube video will be loaded here -->
    </div>
    <div class="row justify-content-between">
        <p class='Min_icon_Aphysem'>
            <?php echo $adipiscing ?>
        </p>
        <div class="col-xl-6 col-sm-12">
            <h2 class='title_NotreHistoire'>
                <?php echo $title_videotheque ?>
            </h2>
        </div>


        <div class="col-xl-6 col-sm-12">
            <p class='text_right_in_Content'>
                <?php echo $text_right_videotheque ?>
            </p>
        </div>
    </div>
    <div class="row justify-content-around py-5 w-100">
        <?php
        // The Query
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type' => 'videotheque',
            'posts_per_page' => 3,
            'paged' => $paged,

        );
        $the_query = new WP_Query($args);
        $first_post_video = array();

        // The Loop
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                // Get the YouTube link and description
                $youtube_link = get_field('videotheque_video');
                $description = get_field('videotheque_description');

                // Extract the video id from the YouTube link
                preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i', $youtube_link, $matches);
                if (!empty($matches)) {
                    $video_id = $matches[1];
                } else {
                    // Handle the case where no match was found
                    echo 'No valid YouTube ID found in: ' . $youtube_link;
                }
                if (empty($first_post_video)) {
                    $first_post_video = $video_id;
                }
                ?>

                <div class="col-xl-4 col-md-6 col-sm-12 my-3">
                    <div class="video-thumbnail" onclick="playVideo('<?php echo $video_id; ?>')">
                        <img class="miniature_video" src="https://img.youtube.com/vi/<?php echo $video_id; ?>/0.jpg"
                            alt="<?php echo $description; ?>">
                        <div class="container">
                            <div class='row information_Phototheque justify-content-between w-100 align-items-center mb-1'>
                                <div class="col-xl-9 col-sm-9 col-8">
                                    <p>
                                        <?php echo $description; ?>
                                    </p>
                                </div>
                                <div class="col-xl-2 col-sm-2 col-3 align-self-center mb-4">
                                    <svg class="start" xmlns="http://www.w3.org/2000/svg" height="24" width="18"
                                        viewBox="0 0 320 512">
                                        <path fill='#ffffff'
                                            d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z" />
                                    </svg>
                                    <svg class="pause" xmlns="http://www.w3.org/2000/svg" height="24" width="18"
                                        viewBox="0 0 384 512">
                                        <path fill='#ffffff'
                                            d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                                    </svg>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <?php

            }
            ?>
            <div class="pagination mt-5">
                <?php
                $big = 999999999; // need an unlikely integer
                echo paginate_links(
                    array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $the_query->max_num_pages,
                        'prev_text' => '<span class="text_prev mx-2"> Précédente </span> <span class="arrow"> < </span> ', // Change this line
                        'next_text' => '<span class="arrow"> > </span> <span class="text_next"> Suivante </span>', // Change this line
                    )
                );
                ?>
            </div>
            <?php
        } else {
            // No posts found
            echo '<p>No posts found.</p>';
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>

    </div>
</div>

<section class='mt-5 pt-5'>
    <?php get_footer(); ?>
</section>
<script>
    function playVideo(videoId) {
        // Create an iframe with the YouTube video
        var iframe = document.createElement('iframe');
        iframe.src = 'https://www.youtube.com/embed/' + videoId;
        iframe.width = 560;
        iframe.height = 315;
        iframe.allowFullscreen = true;

        // Replace the existing video player with the new iframe
        var videoPlayer = document.getElementById('video-player');
        videoPlayer.innerHTML = '';
        videoPlayer.appendChild(iframe);
    }
    window.onload = function () {
        playVideo(<?php echo json_encode($first_post_video, JSON_HEX_TAG); ?>);
    }

    var thumbnails = document.querySelectorAll('.video-thumbnail');
    var container_icon_pause = document.querySelectorAll('.container_icon_pause');
    // Select the SVG elements
    var pauseIcon = document.querySelector('.pause');
    var startIcon = document.querySelector('.start');
    // Add the event listener to each thumbnail
    for (var i = 0; i < thumbnails.length; i++) {
        thumbnails[i].addEventListener('click', function () {
            // Remove the 'clicked' class from all thumbnails

            for (var j = 0; j < thumbnails.length; j++) {

                thumbnails[j].classList.remove('clicked');
                var pauseIcons = document.querySelectorAll('.pause');
                var startIcons = document.querySelectorAll('.start');
                for (var k = 0; k < pauseIcons.length; k++) {
                    pauseIcons[k].style.display = 'block';
                    startIcons[k].style.display = 'none';
                }
            }

            // Add the 'clicked' class to the clicked thumbnail
            this.classList.add('clicked');
            var pauseIcon = this.querySelector('.pause');
            var startIcon = this.querySelector('.start');
            pauseIcon.style.display = 'none';
            startIcon.style.display = 'block';

        });
    }





</script>