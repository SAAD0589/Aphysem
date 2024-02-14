<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo get_the_title(); ?>
    </title>
    <?php
    // Define the $logo variable
    $logo = get_field('logo', 136);

    // Check if the $logo variable is not empty and the file exists
    if (!empty($logo) && file_exists($logo)):
        ?>
        <link rel="icon" type="image" href="<?php echo $logo; ?>">
    <?php else: ?>
        <!-- Handle error: Icon file not found or $logo is empty -->
    <?php endif; ?>


    <!-- Swiper  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font -->
    <link href="https://cdn.jsdelivr.net/npm/gotham-fonts@1.0.3/css/gotham-rounded.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Aclonica&family=Montserrat:ital,wght@0,100;1,100&family=Playball&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@100;400;600&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Aclonica&family=Playball&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@100;400;600&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <?php wp_head(); ?>
</head>
<body>
    <?php
    $fr = get_field('fr');
    $image = get_field('mainphoto1');
    $logo = get_field('logo', 136);
    global $post;
    $title = get_the_title($post->ID);
    // var_dump($title);
    $current_page_url = get_permalink();
    $image_semences_header = get_field('image_semences_header', 252);
    $image_herbes_aromatiques_et_médicinales_header = get_field('image_herbes_aromatiques_et_médicinales_header', 254);
    $image_header_produits_phytosanitaires = get_field('image_header_produits_phytosanitaires', 257);
    $image_header = get_field('image', 437);
    // Custom Field Home
    $logo_aphysem = get_field('logo_aphysem');
    $title_header = get_field('title_header');
    $mini_title = get_field('mini_title');
    $paragraph_header = get_field('paragraph_header');
    $text_button = get_field('text_button');
    ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="mainPhoto h-100 position-relative" style="
                        background-image: url(<?php
                        if (is_front_page()) {
                            // echo $image;
                        } elseif ($title == 'À propos de nous') {
                            echo $image;
                        } elseif ($title == 'Maraîchères') {
                            echo $image_header;
                        } elseif ($title == 'Details' || $title == 'Demande devis' || $title == 'Photothèque' || $title == 'Vidéothèque') {
                            echo $image_header;
                        }else{
                            echo $image_header;
                        }
                        ?>);">
                    <div class="sticky-icon">
                        <a href="" class="Whatsapp">
                            <i class="fab fa-whatsapp"></i> Whatsapp </a>
                    </div>
                    <?php if (!is_front_page()): ?>
                        <section class='py-3 navbar navbar-expand-lg  
                        <?php echo is_front_page() ? 'text-color text-light' : 'bg-light text-dark'; ?>'>
                            <nav class="container " style='background:none'>
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="<?php echo is_front_page() ? $logo_aphysem : $logo; ?>" alt="" srcset=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse mx-5 py-2" id="navbarSupportedContent">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'menu_class' => 'navbar-nav mr-auto ',
                                            'container' => '',
                                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker' => new WP_Bootstrap_Navwalker(),
                                            'theme_location' => 'main-menu',
                                        )
                                    );
                                    ?>
                                </div>
                            </nav>
                        </section>
                    <?php endif;
                    if (is_front_page()) { ?>
                        <!-- Swiper -->
                        <style>
                            .mainPhoto_in_Header {
                                background-repeat: no-repeat;
                                background-size: cover;
                            }
                            .navbar_header{
                                position:absolute;
                                z-index:999;
                                top: 0;
                                background: none !important;
                            }
                        </style>
                          <section class='py-3 navbar navbar-expand-lg  navbar_header w-100'>
                                <nav class="container  <?php echo is_front_page() ? 'text-color text-light' : 'bg-light text-dark'; ?>" style='background:none'>
                                    <a href="<?php echo esc_url(home_url('/')); ?>">
                                        <img src="<?php echo is_front_page() ? $logo_aphysem : $logo; ?>" alt=""
                                            srcset=""></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse mx-5 py-2" id="navbarSupportedContent">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'menu_class' => 'navbar-nav mr-auto ',
                                                'container' => '',
                                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                                'walker' => new WP_Bootstrap_Navwalker(),
                                                'theme_location' => 'main-menu',
                                            )
                                        );
                                        ?>
                                    </div>
                                    <hr class="" style="background-color: #ffffff !important;">
                                </nav>
                            </section>
                        <div class="js-swiper-effect-fade swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide mainPhoto_in_Header"
                                    style="background-image: url(<?php echo $image; ?>">
                                    <div class="my-5 pt-5 d-flex align-items-center ">
                                        <div class="col-xl-7 col-sm-10 my-5  py-5 rounded-5 content">
                                            <div class="content_text_header">
                                                <h2 class="" style='font-size: 3rem;color: #FFF;'>
                                                    <span style='color: var(--Green-3, #C9DC90);'>
                                                        <?php echo substr($title_header, 0, 11); ?>
                                                    </span>
                                                    <span style='color:  #fff;'>
                                                        <?php echo substr($title_header, 11); ?>
                                                    </span>
                                                </h2>
                                                <div class="d-flex  border_left_in_header">
                                                    <div class="col-xl-10 col-sm-12 mx-4">
                                                        <p class="fw-bold" style="color: #FFF;font-size: 20px;">
                                                            <?php echo $mini_title ?>
                                                        </p>
                                                        <p class="" style="color: #FFF; font-size: 16px;">
                                                            <?php echo $paragraph_header ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <button class='Borem_ipsum mx-5 p-2'>
                                                    <?php echo $text_button ?>
                                                    <img src="wp-content/themes/saadproject/custom/assets/Header/Borem.svg"
                                                        alt="" srcset="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide mainPhoto_in_Header" style="background-image: url(<?php echo $image; ?>">
                                    <div class="my-5 pt-5 d-flex align-items-center ">
                                        <div class="col-xl-7 col-sm-10 my-5  py-5 rounded-5 content">
                                            <div class="content_text_header">
                                                <h2 class="" style='font-size: 3rem;color: #FFF;'>
                                                    <span style='color: var(--Green-3, #C9DC90);'>
                                                        <?php echo substr($title_header, 0, 11); ?>
                                                    </span>
                                                    <span style='color:  #fff;'>
                                                        <?php echo substr($title_header, 11); ?>
                                                    </span>
                                                </h2>
                                                <div class="d-flex  border_left_in_header">
                                                    <div class="col-xl-10 col-sm-12 mx-4">
                                                        <p class="fw-bold" style="color: #FFF;font-size: 20px;">
                                                            <?php echo $mini_title ?>
                                                        </p>
                                                        <p class="" style="color: #FFF; font-size: 16px;">
                                                            <?php echo $paragraph_header ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <button class='Borem_ipsum mx-5 p-2'>
                                                    <?php echo $text_button ?>
                                                    <img src="wp-content/themes/saadproject/custom/assets/Header/Borem.svg"
                                                        alt="" srcset="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Arrows -->
                            <div class="js-swiper-effect-fade-button-next"></div>
                            <div class="js-swiper-effect-fade-button-prev"></div>
                        </div>
                        <!-- End Swiper -->

                        <!-- Swiper Pagination -->
                        <div class="js-swiper-effect-fade-pagination swiper-pagination"></div>


                        <?php
                    } else { ?>
                        <section>
                            <div class='d-flex flex-column  justify-content-end align-items-center ' style='height:360px;'>
                                <h2 class='text-light' style='text-transform: uppercase;'>À propos de nous</h2>
                                <div class='text_blur_in_header'>
                                    <label class="px-2">Home</label>
                                    <label class="px-2" style=''>
                                        <?php
                                        if ($title == 'À propos de nous') {
                                            ?>
                                            <p>produits À propos de nous</p>
                                            <?php
                                        } elseif ($title == 'Semences in produits') {
                                            ?>
                                            <p>produits Semences</p>
                                            <?php

                                        } elseif ($title == 'Herbes aromatiques et médicinales') {
                                            ?>
                                            <p>produits Herbes aromatiques et médicinales</p>
                                            <?php
                                        } else { ?>
                                            <p>produits Produits phytosanitaires</p>
                                            <?php
                                        }

                                        ?>

                                    </label>
                                </div>
                            </div>
                        </section>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@6.11.5/swiper-bundle.min.js"></script>
    <!-- Bootsrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {

                // close all inner dropdowns when parent is closed
                document.querySelectorAll('.navbar .dropdown').forEach(function (everydropdown) {
                    everydropdown.addEventListener('hidden.bs.dropdown', function () {
                        // after dropdown is hidden, then find all submenus
                        this.querySelectorAll('.submenu').forEach(function (everysubmenu) {
                            // hide every submenu as well
                            everysubmenu.style.display = 'none';
                        });
                    })
                });

                document.querySelectorAll('.dropdown-menu a').forEach(function (element) {
                    element.addEventListener('click', function (e) {
                        let nextEl = this.nextElementSibling;
                        if (nextEl && nextEl.classList.contains('submenu')) {
                            // prevent opening link if link needs to open dropdown
                            e.preventDefault();
                            if (nextEl.style.display == 'block') {
                                nextEl.style.display = 'none';
                            } else {
                                nextEl.style.display = 'block';
                            }

                        }
                    });
                })
            }
            // end if innerWidth
        }); 
    </script>

    <!-- JS Plugins Init. -->
    <!-- JS Plugins Init. -->
<!-- JS Plugins Init. -->
<script>
  (function() {
    // INITIALIZATION OF SWIPER
    // =======================================================
    var effectFade = new Swiper('.js-swiper-effect-fade', {
      spaceBetween: 30,
      effect: 'fade',
      pagination: {
        el: '.js-swiper-effect-fade-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.js-swiper-effect-fade-button-next',
        prevEl: '.js-swiper-effect-fade-button-prev',
      },
    });
  })()
</script>

</body>

</html>