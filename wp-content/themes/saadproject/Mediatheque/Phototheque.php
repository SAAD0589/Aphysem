<?php
/**
 * Template Name: Photothèque 
 * Description: This is Photothèque .
 *
 */
?>
<?php get_header();
$title_phototheque = get_field('title_phototheque');
$title_videotheque = get_field('title_videotheque', 475);
$text_right_phototheque = get_field('text_right_phototheque');
$adipiscing = get_field('adipiscing');
?>

<div class="row justify-content-center text-center switchMediatheque">
    <div class='col-xl-3 col-md-4 col-sm-5 col-5 Videotheque py-3'>
        <a class="textswitchMediatheque" href="mediatheque-2/videotheque">
            <?php echo $title_videotheque ?>
        </a>
    </div>
    <div class='col-xl-3 col-md-4 col-sm-5 col-5 Phototheque py-3'>
        <a class="textswitchMediatheque" href="mediatheque-2/phototheque/">
            <?php echo $title_phototheque ?>
        </a>
    </div>
</div>
<div class="container">
    <!-- Swiper -->
    <div class="swiper mySwiper my-5" style='height:620px '>
        <div class="swiper-wrapper"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div>
        <p class='text_left_NotreHistoire'>Amet’ minim mollit non deserunt ullamco est.</p>
    </div>
    <div class="row justify-content-between">
        <p class='Min_icon_Aphysem'>
            <?php echo $adipiscing ?>
        </p>
        <div class="col-xl-6 col-sm-12">
            <h2 class='title_NotreHistoire'>
                <?php echo $title_phototheque ?>
            </h2>
        </div>
        <div class="col-xl-6 col-sm-12">
            <p class='text_right_in_Content'>
                <?php echo $text_right_phototheque ?>
            </p>
        </div>
    </div>
    <div class="row justify-content-center py-5">
        <?php
        // The Query
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type' => 'phototheque',
            'posts_per_page' => 3,
            'paged' => $paged,

        );
        $the_query = new WP_Query($args);
        $first_post_images = array();

        // The Loop
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                // Check if the repeater field has rows of data
                if (have_rows('phototheque_items')):
                    // Loop through the rows of data
                    $images = array();
                    while (have_rows('phototheque_items')):
                        the_row();
                        $phototheque_image = get_sub_field('phototheque_image');
                        $phototheque_description = get_sub_field('phototheque_description');
                        $images[] = array('image' => $phototheque_image, 'description' => $phototheque_description);
                    endwhile;
                    if (empty($first_post_images)) {
                        $first_post_images = $images;
                    }
                    // Display the first image
                    ?>
                    <div class="col-xl-4 col-md-6 col-sm-12 my-3">
                        <div class="Phototheque_image m-0 p-0 "
                            onclick="showImages(<?php echo htmlspecialchars(json_encode($images), ENT_QUOTES, 'UTF-8') ?>)">
                            <img src="<?php echo $images[0]['image'] ?>" alt="" srcset="">
                            <div class="container">
                                <div class='row information_Phototheque justify-content-between w-100'>
                                    <div class="col-xl-8 col-sm-9 col-8">
                                        <p>
                                            <?php echo $images[0]['description'] ?>
                                        </p>
                                    </div>
                                    <div class="col-xl-3 col-sm-2 col-3 align-self-start text-center">
                                        <svg class="mb-3" width="42" height="37" viewBox="0 0 42 37" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_481_1375)">
                                                <path
                                                    d="M0 33.5068C0 26.1937 0 18.8795 0 11.5652C0.0244278 11.4755 0.0598482 11.3859 0.0720621 11.295C0.312676 9.52382 1.72461 8.0364 3.46509 7.8104C4.1222 7.72565 4.79885 7.79689 5.47428 7.79689C5.51092 7.62739 5.54512 7.51071 5.55978 7.39034C5.70512 6.19033 5.86146 4.99278 5.98726 3.79032C6.2462 1.32029 8.2505 -0.271526 10.7031 0.0379948C12.5046 0.266451 14.311 0.462972 16.1163 0.66809C19.6033 1.06482 23.0916 1.45663 26.5799 1.85336C30.3931 2.28693 34.2051 2.7377 38.0195 3.15408C40.4977 3.42553 42.2296 5.39565 41.9768 7.76127C41.6385 10.9289 41.2696 14.0942 40.913 17.2594C40.5062 20.8754 40.0922 24.4914 39.694 28.1086C39.4827 30.0332 38.6656 31.49 36.7028 32.039C36.279 32.1581 36.1825 32.3399 36.2045 32.7428C36.2607 33.7745 35.9443 34.6896 35.2579 35.4683C34.2955 36.559 33.0704 36.9999 31.6438 36.9975C27.2834 36.9889 22.9243 36.995 18.5639 36.995C13.7394 36.995 8.91494 36.9913 4.09044 36.9975C2.6834 36.9987 1.50109 36.5062 0.724285 35.3123C0.376189 34.7805 0.234507 34.1135 0 33.5068ZM2.05927 26.6064C2.23637 26.486 2.37072 26.4013 2.49775 26.3079C4.53136 24.8218 6.56254 23.3319 8.5986 21.8494C10.6066 20.3865 12.8148 20.4922 14.6677 22.1331C16.3911 23.6586 18.112 25.1878 19.8366 26.712C20.9224 27.6713 21.9948 27.7745 23.2565 27.0363C26.7729 24.979 30.2869 22.9143 33.8093 20.8668C34.1037 20.696 34.1843 20.5044 34.1831 20.1826C34.1721 17.6119 34.177 15.0424 34.177 12.4716C34.177 10.7656 33.2402 9.82597 31.5363 9.82597C22.4602 9.82597 13.3852 9.82597 4.30907 9.82597C4.15884 9.82597 3.99273 9.78912 3.86082 9.83948C3.47486 9.98687 3.04737 10.0999 2.73836 10.3529C2.21316 10.7828 2.04583 11.4178 2.04583 12.0921C2.04583 16.8209 2.04583 21.5485 2.04583 26.2772C2.04583 26.3681 2.05316 26.4578 2.06049 26.6076L2.05927 26.6064ZM34.155 23.0703C33.9755 23.171 33.8484 23.2398 33.7226 23.3122C30.6032 25.1276 27.4838 26.9442 24.3619 28.7559C24.0675 28.9266 23.7671 29.0998 23.4507 29.2189C21.5954 29.9153 19.9294 29.5297 18.4601 28.2486C16.705 26.7182 14.9755 25.1571 13.2277 23.6193C12.1663 22.6846 11.0475 22.5716 9.97755 23.3515C7.3882 25.2369 4.81961 27.1505 2.2498 29.0617C2.14843 29.1366 2.0556 29.3012 2.05438 29.4253C2.04217 30.6891 2.0324 31.9542 2.05682 33.2181C2.0727 34.0251 2.67851 34.7338 3.45287 34.891C3.73135 34.9475 4.02326 34.9475 4.31029 34.9475C13.3852 34.95 22.4602 34.95 31.5351 34.9487C31.7122 34.9487 31.8905 34.945 32.0676 34.9291C33.4234 34.8136 34.177 33.9981 34.177 32.6433C34.177 29.6193 34.177 26.5954 34.177 23.5726C34.177 23.4277 34.1648 23.2815 34.1562 23.0703H34.155ZM7.55064 7.76987H8.08073C15.9404 7.76987 23.8 7.77233 31.6597 7.76741C32.4121 7.76741 33.129 7.90129 33.791 8.25626C35.4118 9.12709 36.2057 10.5077 36.2082 12.3439C36.2143 18.0762 36.2106 23.8072 36.2106 29.5395V30.0689C36.9483 29.7802 37.4112 29.3356 37.4992 28.5962C37.8644 25.4998 38.2137 22.4021 38.5716 19.3044C39.0235 15.4023 39.4803 11.5013 39.9285 7.59914C40.0616 6.43475 39.3569 5.45583 38.2002 5.29248C36.5514 5.05911 34.8927 4.89084 33.2377 4.69677C29.5748 4.26688 25.9118 3.83576 22.2489 3.40956C18.3282 2.95388 14.4051 2.50802 10.4844 2.04865C9.1641 1.89389 8.1821 2.59031 7.99767 3.90455C7.82057 5.16842 7.7021 6.4409 7.55187 7.7711L7.55064 7.76987Z"
                                                    fill="white" />
                                                <path
                                                    d="M25.5435 17.4203C25.4935 19.8044 23.5454 21.7082 21.2064 21.659C18.8271 21.6099 16.9376 19.6385 16.9853 17.257C17.0317 14.9184 19.0262 13.006 21.3688 13.0539C23.6846 13.1005 25.5936 15.0965 25.5448 17.4203H25.5435ZM19.0299 17.3638C19.0323 18.6007 20.0448 19.6152 21.2723 19.6115C22.4962 19.6078 23.5173 18.5798 23.5112 17.354C23.505 16.1196 22.4913 15.1063 21.2626 15.1087C20.0326 15.1112 19.0262 16.1257 19.0286 17.3626L19.0299 17.3638Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_481_1375">
                                                    <rect width="42" height="37" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                <?php else:
                    // No rows found
                    echo '<p>No additional content found.</p>';
                endif;
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
    function showImages(images) {
        console.log('showImages function called');
        console.log(images);

        // Get the swiper wrapper
        var swiperWrapper = document.querySelector('.swiper-wrapper');

        // Clear the swiper wrapper
        swiperWrapper.innerHTML = '';
        console.log(images.length);
        // Add each image to the swiper
        for (var i = 0; i < images.length; i++) {
            var slide = document.createElement('div');
            slide.className = 'swiper-slide image_phototheque';

            var img = document.createElement('img');
            img.src = images[i].image;
            img.alt = images[i].description;

            slide.appendChild(img);
            swiperWrapper.appendChild(slide);
        }

        // Initialize the swiper
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }
    window.onload = function () {
        showImages(<?php echo json_encode($first_post_images, JSON_HEX_TAG); ?>);
    };
    // Get all the images
    var images = document.querySelectorAll('.Phototheque_image');

    // Add the event listener to each image
    for (var i = 0; i < images.length; i++) {
        images[i].addEventListener('click', function () {
            // Remove the 'transparent' class from all images
            for (var j = 0; j < images.length; j++) {
                images[j].classList.remove('transparent');
            }
            // Add the 'transparent' class to the clicked image
            this.classList.add('transparent');
        });
    }
</script>