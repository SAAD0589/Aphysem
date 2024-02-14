<?php
/**
 * Template Name: Home page
 * Description: This is Home page First Page .
 *
 */

?>
<?php

$image = get_field('mainphoto');


// Start A propos de nous
$image_a_propos_de_nous = get_field('image_a_propos_de_nous');
$mini_title_in_icon_a_propos_de_nous = get_field('mini_title_in_icon_a_propos_de_nous');
$title_a_propos_de_nous = get_field('title_a_propos_de_nous');
$mini_title_in_left_a_propos_de_nous = get_field('mini_title_in_left_a_propos_de_nous');
$mini_title_in_right_a_propos_de_nous = get_field('mini_title_in_right_a_propos_de_nous');
$paragraph_a_propos_de_nous = get_field('paragraph_a_propos_de_nous');
$list_a_propos_de_nous = get_field('list_a_propos_de_nous');
$text_button_a_propos_de_nous = get_field('text_button_a_propos_de_nous');
// End A propos de nous

// Start Nos chiffres clés
$chiffres_about = get_field('chiffres_about');
$title_in_image_nos_chiffres_cles=get_field('title_in_image_nos_chiffres_cles');
$items_nos_chiffres_cles = get_field('items_nos_chiffres_cles');
// End Nos chiffres clés

// Start Produits
$mini_title_in_icon_produits = get_field('mini_title_in_icon_produits');
$title_produits = get_field('title_produits');
$paragraph_produits = get_field('paragraph_produits');
$categorie_produits = get_field('categorie_produits');

// End Produits

// Start Nos Catalogues

$title_nos_catalogues = get_field('title_nos_catalogues');
$paragraph_nos_catalogues = get_field('paragraph_nos_catalogues');
$buttom_text_nos_catalogues = get_field('buttom_text_nos_catalogues');

// End Nos Catalogues

// Start Certifications
$mini_title_in_certifications_in_icon = get_field('mini_title_in_certifications_in_icon');
$title_in_certifications = get_field('title_in_certifications');
$paragraph_in_certifications = get_field('paragraph_in_certifications');
$icons_certifications = get_field('icons_certifications');
// End Certifications


// Start Couverture nationale
$mini_title_couverture_nationale_in_icon = get_field('mini_title_couverture_nationale_in_icon');
$title_couverture_nationale = get_field('title_couverture_nationale');
$paragraph_couverture_nationale = get_field('paragraph_couverture_nationale');
// End Couverture nationale

// Start Contact
$mini_title_in_contact_icon = get_field('mini_title_in_contact_icon');
$title_contact = get_field('title_contact');
$text_in_contact = get_field('text_in_contact');
$main_image_in_contact = get_field('main_image_in_contact');

// End Contact

$title_about2 = get_field('title_about2');
$catalogues = get_field('catalogues');

$nos_actualites1 = get_field('nos_actualites1');
$nos_actualites2 = get_field('nos_actualites2');
$nos_actualites3 = get_field('nos_actualites3');

?>
<?php get_header() ?>
<style>
    .jvectormap-container:first-child {
        display: none;
    }
</style>

<!-- À propos de nous -->
<section class="container my-5 py-5 reveal">
    <div class="d-flex row justify-content-center my-5">
        <div class="mainphoto2 col-xl-4 col-sm-12 text-center">
            <img class="w-100" src='<?php echo $image_a_propos_de_nous ?>' />
            <div>
                <div class='card_in_Image1 d-flex flex-column justify-content-center '>
                    <label class="">Depuis</label>
                    <span class='fw-bold'>1988</span>
                </div>
                <div class='card_in_Image2 mx-3'></div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-12 align-self-center">
            <div class='d-flex  sm:justify-content-center'>
                <p class='Min_icon_Aphysemin_green'>
                    <?php echo $mini_title_in_icon_a_propos_de_nous ?>
                </p>
            </div>
            <h1 class='title_inBlack'>
                <?php echo $title_a_propos_de_nous ?>
            </h1>
            <div class="d-flex row">
                <div class="col-xl-6 col-sm-12 my-2">
                    <p class='fw-bold'>
                        <?php echo $mini_title_in_left_a_propos_de_nous ?>
                    </p>
                    <p class='text_about'>
                        <?php echo $paragraph_a_propos_de_nous ?>
                    </p>
                    <button class='Borem_ipsum_about px-3 py-2'>
                        <?php echo $text_button_a_propos_de_nous ?>
                        <img src="wp-content/themes/saadproject/custom/assets/Apropos_de_nous/Borem.svg" alt=""
                            srcset="">
                    </button>
                </div>
                <div class="col-xl-6 col-sm-12 my-2">
                    <p class='mx-4 text_about'>
                        <?php echo $mini_title_in_right_a_propos_de_nous ?>
                    </p>
                    <ul class='text_about'>
                        <?php
                        if ($list_a_propos_de_nous) {
                            foreach ($list_a_propos_de_nous as $item) {
                                $item = $item['item_list_propos_de_nous']; ?>
                                <li class="list-group-item my-2">
                                    <img src="wp-content/themes/saadproject/custom/assets/Apropos_de_nous/paragraphe_icon_Valide.svg"
                                        alt="" srcset="">
                                    <label class="mx-1">
                                        <?php echo $item ?>
                                    </label>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- nos_chiffres_cles  -->
<section style='position-relative my-5'>
    <div class="about2  text-center "
        style='width:80%;height:500px;background-image: url(<?php echo $chiffres_about; ?>);'>
        <div class="row justify-content-center m-0" style='height:230px'>
            <div class="js-swiper-preloader2 swiper ">
                <div class="d-flex  swiper-wrapper ">
                    <?php
                    if ($items_nos_chiffres_cles) {
                        foreach ($items_nos_chiffres_cles as $item) {
                            $icon_nos_chiffres_cles = $item['icon_nos_chiffres_cles'];
                            $title_nos_chiffres_cles = $item['title_nos_chiffres_cles'];
                            $description_nos_chiffres_cles = $item['description_nos_chiffres_cles']; ?>
                            <div class="col-xl-3 col-sm-12 icons swiper-slide">
                                <img src="<?php echo $icon_nos_chiffres_cles ?>" alt="" srcset="">
                                <div class="d-flex  justify-content-center ">
                                    <div class="col-xl-12 col-sm-12  ">
                                        <div style='color:#ffffff' class='fw-bold number '>
                                            <?php echo $title_nos_chiffres_cles ?>
                                        </div>
                                        <div class='text_Noschiffres' style='color:#ffffff'>
                                            <?php echo $description_nos_chiffres_cles ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class='position-absolute title_about2' style='background-image: url(<?php echo $title_about2; ?>);'>
                <h2 class='text-start mx-2  '>
                    <strong style='font-size: 32px;font-weight: 700;'><?php echo $title_in_image_nos_chiffres_cles?> </strong>
                </h2>
            </div>
        </div>
    </div>
</section>




<div style='height:450px'></div>
<!-- Produits -->
<section class="container">
    <div class=" d-flex row">
        <div class="col-xl-6 col-sm-12 ">
            <div class='d-flex  my-3  '>
                <p class='Min_icon_Aphysemin_green'>
                    <?php echo $mini_title_in_icon_produits ?>
                </p>
            </div>
            <h2 class='title_inBlack'>
                <?php echo $title_produits ?>
            </h2>
            <p class='fw-bold w-75' style='font-family: Montserrat;'>
                <?php echo $paragraph_produits ?>
            </p>
        </div>
        <div class="col-xl-6 col-sm-12">
            <div class="d-flex row justify-content-start align-items-center">
                <?php
                if ($categorie_produits) {
                    foreach ($categorie_produits as $item) {
                        $background_produits = $item['background_produits'];
                        $type_categoriproduits = $item['type_categoriproduits']; ?>
                        <div class="col-xl-5 col-sm-10 my-3  image-container px-2">
                            <img src=<?php echo $background_produits; ?>>
                            <p class="text-overlay">
                                <?php echo $type_categoriproduits ?>
                            </p>
                            <div class="svg-container"></div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<div class='' style='height:80px'></div>

<!-- Nos Catalogues -->
<section class="d-flex  justify-content-center">
    <div class="col-10">
        <div class='catalogues' style="background-image: url(<?php echo $catalogues; ?>);">
            <div class="d-flex row justify-content-center align-items-center">
                <div class="col-xl-5  col-sm-8  px-5 my-5">
                    <h2 class='title_catalogues'>
                        <?php echo $title_nos_catalogues ?>
                    </h2>
                    <p class='paragraph_catalogues'>
                        <?php echo $paragraph_nos_catalogues ?>
                    </p>
                    <button class='botton_catalogues px-3 py-2 m-2'>
                        <?php echo $buttom_text_nos_catalogues ?>
                        <img src="wp-content/themes/saadproject/custom/assets/Apropos_de_nous/Borem.svg" alt=""
                            srcset="">
                    </button>
                </div>
                <div class="col-xl-3 col-sm-6 px-3 my-5">
                    <div class=" cards_nos_Catalogues m-0"
                        style='height: 213px;background-image: url(wp-content/themes/saadproject/custom/assets/cards.png);border-radius: 10px;'>
                        <div class="d-flex flex-column justify-content-between h-100 p-3 position-relative m-0">
                            <button class='button_cards_catalogues w-50 p-2'>Catalogue 1</button>
                            <div class="d-flex flex-row align-items-end  justify-content-between" style="height:150px">
                                <a href="" class='link_catalogues '>Télécharger</a>
                                <img class="img_telecharger"
                                    src="wp-content/themes/saadproject/custom/assets/telecharger.svg" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 px-3 my-5">
                    <div class=" cards_nos_Catalogues m-0"
                        style='height: 213px;background-image: url(wp-content/themes/saadproject/custom/assets/cards.png);border-radius: 10px;'>
                        <div class="d-flex flex-column justify-content-between h-100 p-3 position-relative m-0">
                            <button class='button_cards_catalogues w-50 p-2'>Catalogue 2</button>
                            <div class="d-flex flex-row align-items-end  justify-content-between" style="height:150px">
                                <a href="" class='link_catalogues '>Télécharger</a>
                                <img class="img_telecharger"
                                    src="wp-content/themes/saadproject/custom/assets/telecharger.svg" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class='' style='height:80px'></div>
<!-- Certifications -->
<section class="container my-5">
    <div class="d-flex row justify-content-between ">
        <div class="col-12 ">
            <div class='d-flex  my-3  sm:justify-content-center'>
                <p class='Min_icon_Aphysemin_green'>
                    <?php echo $mini_title_in_certifications_in_icon ?>
                </p>
            </div>
            <h2 class='title_inBlack'>
                <?php echo $title_in_certifications ?>
            </h2>
            <div class="d-flex row justify-content-between">
                <div class="col-xl-10 col-sm-12">
                    <p class='text_Certifications'>
                        <?php echo $paragraph_in_certifications ?>
                    </p>
                </div>
                <div class="col-xl-2 col-sm-12 mx-auto my-3 my-sm-0">
                    <div class="position-relative">
                        <div
                            class="d-sm-none d-xl-inline Next_in_Small  js-swiper-preloader-button-next swiper-button-next">
                        </div>
                        <div
                            class="d-sm-none d-xl-inline Prev_in_Small  js-swiper-preloader-button-prev swiper-button-prev">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Swiper Certifications -->

<section>
    <div class="position-relative">
        <div class="d-xl-none d-sm-block mx-3 Next_in_Small js-swiper-preloader-button-next swiper-button-next"></div>
        <div class="d-xl-none d-sm-block mx-3 Prev_in_Small js-swiper-preloader-button-prev swiper-button-prev"></div>
    </div>
    <div class="container"
        style='border-radius: 100px;background: rgba(255, 255, 255, 0.08);padding: 8px 60px;box-shadow: 0px 0px 70px 0px rgba(0, 0, 0, 0.05)'>
        <div class="js-swiper-preloader swiper ">
            <div class="d-flex  swiper-wrapper ">
                <?php
                if ($icons_certifications) {
                    foreach ($icons_certifications as $item) {
                        $icon_certifications = $item['icon_certifications']; ?>
                        <div class='mt-2 swiper-slide text-center'>
                            <img class=' ' src='<?php echo $icon_certifications ?>' alt="">
                        </div>
                        <div class='mt-4 swiper-slide text-center'>
                            <svg class=' d-none d-md-inline' xmlns="http://www.w3.org/2000/svg" width="2" height="33"
                                viewBox="0 0 2 33" fill="none">
                                <path d="M1 1L0.999998 32" stroke="#E0E0E0" stroke-linecap="round" />
                            </svg>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>


<div class='' style='height:80px'></div>
<!-- Couverture nationale -->
<section class="d-flex row align-items-center  justify-content-around m-0" style='background:#eff5e3'>
    <div class="col-xl-6 col-sm-12 ">
        <div class="d-flex row justify-content-center">
            <div id="morocco"></div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-12 justify-content-center my-5">
        <div class='d-flex sm:justify-content-center'>
            <p class='Min_icon_Aphysemin_green'>
                <?php echo $mini_title_couverture_nationale_in_icon ?>
            </p>
        </div>
        <h2 class='title_Couverture_nationale'>
            <?php echo $title_couverture_nationale ?>
        </h2>
        <p class='text_Couverture_nationale'>
            <?php echo $paragraph_couverture_nationale ?>
        </p>
        <div class="d-flex row mx-2 content_cards_Couverture_nationale">
            <div class="col-12"
                style='border-radius: 15px;background: #FFF;box-shadow: 0px 0px 24px 0px rgba(93, 57, 134, 0.28);'>
                <p class='p-3 content_title_cards_Couverture_nationale'>
                    FES, siege sociale
                </p>
                <div class="d-flex row">
                    <div class="col-xl-6 col-sm-12">
                        <p class='content_information_cards_Couverture_nationale'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="14" viewBox="0 0 12 14"
                                fill="none">
                                <path
                                    d="M5.99881 0C4.4083 0.00185282 2.88349 0.621104 1.75889 1.7219C0.634289 2.8227 0.00173506 4.31515 0 5.87183C0 8.94833 4.86699 13.0638 5.42366 13.5234L6 14L6.57634 13.5234C7.13182 13.0638 12 8.94833 12 5.87183C11.9983 4.31474 11.3654 2.82194 10.2403 1.72108C9.11515 0.620214 7.58973 0.00123523 5.99881 0ZM5.99881 11.6917C4.17205 10.0631 1.78683 7.41708 1.78683 5.87183C1.78683 4.7785 2.23059 3.72995 3.02049 2.95684C3.81039 2.18374 4.88172 1.74942 5.99881 1.74942C7.11589 1.74942 8.18723 2.18374 8.97713 2.95684C9.76703 3.72995 10.2108 4.7785 10.2108 5.87183C10.2108 7.41417 7.82497 10.0613 5.99881 11.6917Z"
                                    fill="black" />
                                <path
                                    d="M6 8C7.10457 8 8 7.10457 8 6C8 4.89543 7.10457 4 6 4C4.89543 4 4 4.89543 4 6C4 7.10457 4.89543 8 6 8Z"
                                    fill="black" />
                            </svg>
                            17 Rue Al Hoceima, Bloc C. Atlas Fès Maroc
                        </p>
                        <p class='content_information_cards_Couverture_nationale'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                                fill="none">
                                <g clip-path="url(#clip0_172_1253)">
                                    <path
                                        d="M9.25 0.5H2.75C2.0209 0.500794 1.32189 0.79078 0.806333 1.30633C0.29078 1.82189 0.000794085 2.5209 0 3.25L0 8.75C0.000794085 9.4791 0.29078 10.1781 0.806333 10.6937C1.32189 11.2092 2.0209 11.4992 2.75 11.5H9.25C9.9791 11.4992 10.6781 11.2092 11.1937 10.6937C11.7092 10.1781 11.9992 9.4791 12 8.75V3.25C11.9992 2.5209 11.7092 1.82189 11.1937 1.30633C10.6781 0.79078 9.9791 0.500794 9.25 0.5ZM9.25 2C9.55323 2.00101 9.84555 2.11327 10.0715 2.3155L6.8215 5.5655C6.60076 5.77633 6.30725 5.89398 6.002 5.89398C5.69675 5.89398 5.40324 5.77633 5.1825 5.5655L1.9325 2.3155C2.15742 2.11419 2.44815 2.00199 2.75 2H9.25ZM9.25 10H2.75C2.41848 10 2.10054 9.8683 1.86612 9.63388C1.6317 9.39946 1.5 9.08152 1.5 8.75V4.0085L4.1195 6.628C4.36638 6.87499 4.6595 7.07091 4.98212 7.20459C5.30474 7.33826 5.65053 7.40706 5.99975 7.40706C6.34897 7.40706 6.69476 7.33826 7.01738 7.20459C7.34 7.07091 7.63312 6.87499 7.88 6.628L10.5 4.0085V8.75C10.5 9.08152 10.3683 9.39946 10.1339 9.63388C9.89946 9.8683 9.58152 10 9.25 10Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_172_1253">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            info@aphysem.ma
                        </p>
                    </div>
                    <div class='col-xl-1 col-sm-12'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="2" height="44" viewBox="0 0 2 44" fill="none">
                            <path d="M1 1L0.999998 43" stroke="black" stroke-width="0.5" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="col-xl-5 col-sm-12">
                        <p class='content_information_cards_Couverture_nationale'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <g clip-path="url(#clip0_172_1259)">
                                    <path
                                        d="M5.25 13.9987H0.583333C0.428624 13.9987 0.280251 13.9372 0.170854 13.8278C0.0614582 13.7184 0 13.5701 0 13.4154C0 13.2607 0.0614582 13.1123 0.170854 13.0029C0.280251 12.8935 0.428624 12.832 0.583333 12.832H5.25C5.40471 12.832 5.55308 12.8935 5.66248 13.0029C5.77188 13.1123 5.83333 13.2607 5.83333 13.4154C5.83333 13.5701 5.77188 13.7184 5.66248 13.8278C5.55308 13.9372 5.40471 13.9987 5.25 13.9987Z"
                                        fill="black" />
                                    <path
                                        d="M4.08333 11.6667H0.583333C0.428624 11.6667 0.280251 11.6052 0.170854 11.4958C0.0614582 11.3864 0 11.238 0 11.0833C0 10.9286 0.0614582 10.7803 0.170854 10.6709C0.280251 10.5615 0.428624 10.5 0.583333 10.5H4.08333C4.23804 10.5 4.38642 10.5615 4.49581 10.6709C4.60521 10.7803 4.66667 10.9286 4.66667 11.0833C4.66667 11.238 4.60521 11.3864 4.49581 11.4958C4.38642 11.6052 4.23804 11.6667 4.08333 11.6667Z"
                                        fill="black" />
                                    <path
                                        d="M2.91667 9.33464H0.583333C0.428624 9.33464 0.280251 9.27318 0.170854 9.16378C0.0614582 9.05438 0 8.90601 0 8.7513C0 8.59659 0.0614582 8.44822 0.170854 8.33882C0.280251 8.22943 0.428624 8.16797 0.583333 8.16797H2.91667C3.07138 8.16797 3.21975 8.22943 3.32915 8.33882C3.43854 8.44822 3.5 8.59659 3.5 8.7513C3.5 8.90601 3.43854 9.05438 3.32915 9.16378C3.21975 9.27318 3.07138 9.33464 2.91667 9.33464Z"
                                        fill="black" />
                                    <path
                                        d="M7.58349 13.9738C7.42878 13.9806 7.27767 13.9258 7.16341 13.8213C7.04914 13.7167 6.98108 13.5711 6.9742 13.4164C6.96731 13.2617 7.02217 13.1106 7.12669 12.9963C7.23122 12.882 7.37686 12.814 7.53157 12.8071C8.6355 12.7061 9.6878 12.2926 10.5652 11.6151C11.4426 10.9376 12.1088 10.0241 12.4858 8.9816C12.8627 7.93911 12.9348 6.8108 12.6936 5.72881C12.4524 4.64682 11.9079 3.65596 11.1239 2.87228C10.3398 2.0886 9.34874 1.54455 8.26664 1.30385C7.18454 1.06316 6.05626 1.13578 5.01395 1.51321C3.97163 1.89064 3.05844 2.55726 2.38133 3.43498C1.70423 4.3127 1.29124 5.36519 1.19074 6.46917C1.17681 6.62326 1.10225 6.76551 0.983442 6.86462C0.864638 6.96374 0.711327 7.0116 0.557236 6.99767C0.403145 6.98375 0.260897 6.90918 0.161784 6.79038C0.0626709 6.67157 0.0148121 6.51826 0.028736 6.36417C0.191421 4.56943 1.04001 2.90658 2.39784 1.72175C3.75568 0.536924 5.51816 -0.0785899 7.31839 0.00333791C9.11862 0.0852657 10.8179 0.858322 12.0625 2.16159C13.3071 3.46485 14.0012 5.19791 14.0002 7.00001C14.0091 8.74904 13.3593 10.4373 12.1801 11.7291C11.0009 13.0208 9.37859 13.8214 7.63599 13.9714C7.61849 13.9732 7.6004 13.9738 7.58349 13.9738Z"
                                        fill="black" />
                                    <path
                                        d="M6.99984 3.5C6.84513 3.5 6.69675 3.56146 6.58736 3.67085C6.47796 3.78025 6.4165 3.92862 6.4165 4.08333V7C6.41654 7.1547 6.47802 7.30305 6.58742 7.41242L8.33742 9.16242C8.44744 9.26868 8.59479 9.32747 8.74774 9.32614C8.90069 9.32481 9.04699 9.26347 9.15515 9.15531C9.2633 9.04716 9.32465 8.90085 9.32598 8.7479C9.32731 8.59495 9.26851 8.4476 9.16225 8.33758L7.58317 6.7585V4.08333C7.58317 3.92862 7.52171 3.78025 7.41232 3.67085C7.30292 3.56146 7.15455 3.5 6.99984 3.5Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_172_1259">
                                        <rect width="14" height="14" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Ouvert
                        </p>
                        <p class='content_information_cards_Couverture_nationale'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <g clip-path="url(#clip0_172_1265)">
                                    <path
                                        d="M13.4168 6.41769C13.2621 6.41769 13.1138 6.35623 13.0044 6.24684C12.895 6.13744 12.8335 5.98907 12.8335 5.83436C12.8323 4.59706 12.3402 3.41079 11.4653 2.53589C10.5904 1.66099 9.40414 1.16893 8.16684 1.16769C8.01213 1.16769 7.86376 1.10623 7.75436 0.996839C7.64496 0.887443 7.58351 0.739069 7.58351 0.58436C7.58351 0.42965 7.64496 0.281277 7.75436 0.171881C7.86376 0.0624846 8.01213 0.00102647 8.16684 0.00102647C9.71341 0.0027249 11.1962 0.617852 12.2898 1.71145C13.3833 2.80504 13.9985 4.28778 14.0002 5.83436C14.0002 5.98907 13.9387 6.13744 13.8293 6.24684C13.7199 6.35623 13.5715 6.41769 13.4168 6.41769ZM11.6668 5.83436C11.6668 4.9061 11.2981 4.01586 10.6417 3.35949C9.98534 2.70311 9.0951 2.33436 8.16684 2.33436C8.01213 2.33436 7.86376 2.39582 7.75436 2.50521C7.64496 2.61461 7.58351 2.76298 7.58351 2.91769C7.58351 3.0724 7.64496 3.22078 7.75436 3.33017C7.86376 3.43957 8.01213 3.50103 8.16684 3.50103C8.78568 3.50103 9.37917 3.74686 9.81675 4.18444C10.2543 4.62203 10.5002 5.21552 10.5002 5.83436C10.5002 5.98907 10.5616 6.13744 10.671 6.24684C10.7804 6.35623 10.9288 6.41769 11.0835 6.41769C11.2382 6.41769 11.3866 6.35623 11.496 6.24684C11.6054 6.13744 11.6668 5.98907 11.6668 5.83436ZM12.9403 12.93L13.4711 12.3181C13.809 11.9792 13.9987 11.5201 13.9987 11.0415C13.9987 10.5629 13.809 10.1038 13.4711 9.76486C13.453 9.74678 12.0495 8.66703 12.0495 8.66703C11.7127 8.34639 11.2652 8.16784 10.8002 8.1685C10.3351 8.16915 9.8882 8.34894 9.55226 8.67053L8.44042 9.60736C7.53286 9.23175 6.70844 8.68055 6.0145 7.98541C5.32057 7.29028 4.7708 6.4649 4.39676 5.55669L5.33009 4.44836C5.65192 4.11246 5.83193 3.66545 5.83269 3.20026C5.83345 2.73507 5.65491 2.28748 5.33417 1.95053C5.33417 1.95053 4.25326 0.548776 4.23517 0.530693C3.90235 0.195713 3.4511 0.00512265 2.97892 0.000101762C2.50674 -0.00491912 2.05154 0.176033 1.71167 0.50386L1.04084 1.08719C-2.92233 5.68503 5.61184 14.1533 10.3613 14.001C10.8409 14.0038 11.3162 13.9105 11.7592 13.7265C12.2021 13.5426 12.6037 13.2717 12.9403 12.93Z"
                                        fill="black" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_172_1265">
                                        <rect width="14" height="14" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            +212 (0) 5 35 73 19 60
                        </p>
                    </div>
                    <div class="col-12 text-center p-2"
                        style='background: var(--Green-1, #009640);border-radius: 0px 0px 15px 15px;'>
                        <p class='mt-2 button_information_cards_Couverture_nationale'>
                            Voir Sur Le Plan
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
                                fill="none">
                                <g clip-path="url(#clip0_172_1269)">
                                    <path
                                        d="M10.4998 0.015625C8.27597 0.0182719 6.14399 0.902917 4.57158 2.47548C2.99916 4.04805 2.11473 6.18012 2.1123 8.40396C2.1123 12.799 8.9173 18.6781 9.69564 19.3348L10.5015 20.0156L11.3073 19.3348C12.084 18.6781 18.8906 12.799 18.8906 8.40396C18.8882 6.17955 18.0033 4.04697 16.4302 2.47431C14.8571 0.901645 12.7242 0.0173896 10.4998 0.015625ZM10.4998 16.7181C7.94564 14.3915 4.61064 10.6115 4.61064 8.40396C4.61064 6.84205 5.2311 5.34412 6.33554 4.23969C7.43997 3.13526 8.9379 2.51479 10.4998 2.51479C12.0617 2.51479 13.5596 3.13526 14.6641 4.23969C15.7685 5.34412 16.389 6.84205 16.389 8.40396C16.389 10.6073 13.0531 14.389 10.4998 16.7181Z"
                                        fill="white" />
                                    <path
                                        d="M10.4999 10.8309C11.8793 10.8309 12.9974 9.71277 12.9974 8.33344C12.9974 6.95411 11.8793 5.83594 10.4999 5.83594C9.12061 5.83594 8.00244 6.95411 8.00244 8.33344C8.00244 9.71277 9.12061 10.8309 10.4999 10.8309Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_172_1269">
                                        <rect width="20" height="20" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class='' style='height:80px'></div>
<!-- Nos actualités -->
<section class='container'>
    <div class='d-flex  my-3  sm:justify-content-center'>
        <p class='Min_icon_Aphysemin_green'>Lorem ipsum.</p>
    </div>
    <div class="d-flex justify-content-between ">
        <h2 class='title_inBlack'>Nos actualités</h2>
        <div class='voir_plus'>
            <p>Voir Tout
                <img src="wp-content/themes/saadproject/custom/assets/NosActualités/IconVoirPlus.svg" alt="" srcset="">

            </p>
        </div>
    </div>
    <div class="d-flex row jsutify-content-center">
        <div class="col-xl-4 col-md-6 col-sm-12 my-2 reveal">
            <div class="card Nosactualites_Cards position-relative w-100 h-100" style="max-width: 24rem;">
                <img class="card-img-top" src='<?php echo $nos_actualites1 ?>'>
                <button class='btn_Nos_actualites1 m-2 '>NOUVELLES</button>
                <button class='btn_Nos_actualites2 m-2'>Actualités</button>
                <div class="card-body">
                    <h5 class="card-title">Norem ipsum dolor sit am et</h5>
                    <p class="card-text">Norem ipsum dolor sit amet, consectet adipiscing elit.
                        Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                    <div class="d-flex row justify-content-between">
                        <div class="col-6">
                            <p>Lire plus
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8"
                                    fill="none">
                                    <path
                                        d="M14.2466 4.35331C14.4418 4.15805 14.4418 3.84146 14.2466 3.6462L11.0646 0.464221C10.8693 0.268959 10.5527 0.268959 10.3575 0.464221C10.1622 0.659484 10.1622 0.976066 10.3575 1.17133L13.1859 3.99975L10.3575 6.82818C10.1622 7.02344 10.1622 7.34003 10.3575 7.53529C10.5527 7.73055 10.8693 7.73055 11.0646 7.53529L14.2466 4.35331ZM0.893005 4.49976L13.893 4.49975L13.893 3.49975L0.893005 3.49976L0.893005 4.49976Z"
                                        fill="black" />
                                </svg>
                            </p>
                        </div>
                        <div class="col-4">
                            <p>12.12.2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12 my-2 reveal">
            <div class="card Nosactualites_Cards position-relative w-100 h-100" style="max-width: 24rem;">
                <img class="card-img-top" src='<?php echo $nos_actualites2 ?>'>
                <button class='btn_Nos_actualites1 m-2 '>NOUVELLES</button>
                <button class='btn_Nos_actualites2 m-2'>Actualités</button>
                <div class="card-body">
                    <h5 class="card-title">Norem ipsum dolor sit am et</h5>
                    <p class="card-text">Norem ipsum dolor sit amet, consectet adipiscing elit.
                        Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                    <div class="d-flex row justify-content-between">
                        <div class="col-6">
                            <p>Lire plus
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8"
                                    fill="none">
                                    <path
                                        d="M14.2466 4.35331C14.4418 4.15805 14.4418 3.84146 14.2466 3.6462L11.0646 0.464221C10.8693 0.268959 10.5527 0.268959 10.3575 0.464221C10.1622 0.659484 10.1622 0.976066 10.3575 1.17133L13.1859 3.99975L10.3575 6.82818C10.1622 7.02344 10.1622 7.34003 10.3575 7.53529C10.5527 7.73055 10.8693 7.73055 11.0646 7.53529L14.2466 4.35331ZM0.893005 4.49976L13.893 4.49975L13.893 3.49975L0.893005 3.49976L0.893005 4.49976Z"
                                        fill="black" />
                                </svg>
                            </p>
                        </div>
                        <div class="col-4">
                            <p>12.12.2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 col-sm-12 my-2 reveal">
            <div class="Nosactualites_Cards3 card position-relative w-100 h-100" style="max-width: 24rem;">
                <img class="card-img-top" src='<?php echo $nos_actualites3 ?>'>
                <button class='btn_Nos_actualites1 m-2 '>NOUVELLES</button>
                <button class='btn_Nos_actualites2 m-2'>Actualités</button>
                <div class=" card-body " style=''>
                    <h5 class="card-title">Norem ipsum dolor sit am et</h5>
                    <p class="card-text">Norem ipsum dolor sit amet, consectet adipiscing elit.
                        Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                    <div class="d-flex row justify-content-between">
                        <div class="col-6" style='cursor:pointer'>
                            <p onclick='check_Cards_Nos_actualites()'>Lire plus
                                <img class="arrow-icon"
                                    src="wp-content/themes/saadproject/custom/assets/NosActualités/ArrowBlack.svg"
                                    alt="" srcset="">
                            </p>
                        </div>
                        <div class="col-4">
                            <p>12.12.2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class='' style='height:100px'></div>

<!-- Contact -->
<section class="container">
    <div class="d-flex row justify-content-center">
        <div class="col-xl-8 ">
            <div class="d-flex row contentcontact justify-content-between">
                <div class="col-xl-6  col-sm-6 m-0 px-0  d-none d-md-inline">
                    <img class='mainphotocontact ' src="<?php echo $main_image_in_contact ?>" alt="" srcset="">
                </div>
                <div class="col-xl-6 col-md-6  col-sm-12 text-center Contact">
                    <img src="wp-content/themes/saadproject/custom/assets/iconAphysem.svg" alt="" srcset="">
                    <p class='LoremContact'>
                        <?php echo $mini_title_in_contact_icon ?>
                    </p>
                    <div class="d-flex row justofy-content-center ">
                        <div class="col-4"></div>
                        <div class="col-3">
                            <h2 class='title_inBlack'>
                                <label class="">
                                    <?php echo $title_contact ?>
                                </label>
                            </h2>
                        </div>

                    </div>
                    <p class='text-truncate paragraphContact my-1'>
                        <?php echo $text_in_contact ?>
                    </p>
                    <?php echo do_shortcode('[contact-form-7 id="e7794de" title="Contact form 1"]') ?>
                </div>
            </div>
        </div>
    </div>

</section>


<div class='' style='height:150px'></div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


<?php

$CouvertureData = array();

if (have_rows('couverture')) {
    // Loop through the rows
    while (have_rows('couverture')) {
        the_row();

        $CouvertureName = get_sub_field('name');
        $mapsUrl = get_sub_field('url_name');
        $telephone = get_sub_field('telephone');

        $matches = array(); // Initialize $matches array

        // Check if preg_match is successful
        if (preg_match('/@([-0-9.]+),([-0-9.]+)/', $mapsUrl, $matches)) {
            $latitude = $matches[1];
            $longitude = $matches[2];

            $CouvertureData[] = array(
                'id' => $CouvertureName,
                'lat' => $latitude,
                'lon' => $longitude
            );
        } else {
            // Handle the case where the regex does not match
            // You might want to log an error or handle it differently
            // depending on your application requirements.
        }
    }
}

$couvertureDataJson = json_encode($CouvertureData);

?>



<?php get_footer(); ?>
<script>
    var clickedCircleRadius = 6;
    var Nosactualites_Cards = document.getElementsByClassName('Nosactualites_Cards3');

    function check_Cards_Nos_actualites() {
        for (var i = 0; i < Nosactualites_Cards.length; i++) {
            // Check the current styles and toggle accordingly
            var images = Nosactualites_Cards[i].getElementsByClassName("arrow-icon");

            if (Nosactualites_Cards[i].style.backgroundColor === "rgb(1, 133, 62)") {
                // If current background color is green, switch to white
                Nosactualites_Cards[i].style.backgroundColor = "#ffffff";
                Nosactualites_Cards[i].style.color = "black";

                for (var j = 0; j < images.length; j++) {
                    // Set the src attribute to an SVG file with the desired color
                    images[j].src = "wp-content/themes/saadproject/custom/assets/NosActualités/ArrowBlack.svg";

                    // Move the card to the right using jQuery
                    $(card).css('transform', 'translateX(50px)');

                }
            } else {
                // If current background color is white (or other), switch to green
                Nosactualites_Cards[i].style.backgroundColor = "#01853E";
                Nosactualites_Cards[i].style.color = "#ffffff";

                for (var j = 0; j < images.length; j++) {
                    // Set the src attribute to an SVG file with the desired color
                    images[j].src = "wp-content/themes/saadproject/custom/assets/NosActualités/ArrowWhite.svg";

                    // Reset the card position using jQuery
                    $(card).css('transform', 'translateX(0)');
                }
            }

            // Apply common style
            Nosactualites_Cards[i].style.borderRadius = "0px 0px 10px 10px";
            Nosactualites_Cards[i].style.border = "1px solid #d2d2d2";
        }

        // Move the arrow-icon element
        var textElement = document.querySelector('.arrow-icon');
        if (textElement) {
            var currentPosition = textElement.getBoundingClientRect().left;
            var moveDistance = 10; // Adjust the distance you want the text to move
            var speed = 0.5; // Adjust the speed of the animation (higher value = faster)

            // Move to the right
            textElement.style.transition = 'transform ' + speed + 's ease-in-out';
            textElement.style.transform = 'translateX(' + (currentPosition + moveDistance) + 'px)';

            // Return to the original position after a short delay
            setTimeout(function () {
                textElement.style.transition = 'transform ' + speed + 's ease-in-out';
                textElement.style.transform = 'translateX(' + currentPosition + 'px)';
            }, speed * 1000);
        }
    }


    document.addEventListener("DOMContentLoaded", function () {

        var mySwiper = new Swiper('.swiper-container1', {
            slidesPerView: 4,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
            mousewheel: true,
            keyboard: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            speed: 800,
            breakpoints: {
                // when window width is <= 768px
                375: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                789: {
                    slidesPerView: 1.5,
                    spaceBetween: 8,
                },
                1024: {
                    slidesPerView: 1.8,
                    spaceBetween: 10,
                },
                1223: {
                    slidesPerView: 2.5,
                    spaceBetween: 10,
                },
                1496: {
                    slidesPerView: 2.8,
                    spaceBetween: 10,
                },
                // you can add more breakpoints as needed
            },

        });
    })
    window.addEventListener('scroll', reveal)

    function reveal() {
        var reveals = document.querySelectorAll('.reveal');

        for (var i = 0; i < reveals.length; i++) {

            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealtoppoint = 150;
            if (revealtop < windowheight - revealtoppoint) {
                reveals[i].classList.add('active')
            } else {
                reveals[i].classList.remove('active')

            }
        }
    }

    (function () {
        // INITIALIZATION OF SWIPER
        // =======================================================
        var preloader = new Swiper('.js-swiper-preloader', {
            slidesPerView: 10,
            spaceBetween: 0,

            pagination: {
                el: '.js-swiper-preloader-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.js-swiper-preloader-button-next',
                prevEl: '.js-swiper-preloader-button-prev',
            },
            on: {
                'imagesReady': function (swiper) {
                    const preloader = swiper.el.querySelector('.js-swiper-preloader');
                    preloader.parentNode.removeChild(preloader);
                }
            },
            autoplay: {

                delay: 2000, // Set the delay in milliseconds (e.g., 3000 for 3 seconds)
                disableOnInteraction: false, // Set to false if you want autoplay to continue even when the user interacts with the swiper
            },
            speed: 800, // Set the speed of the transition in milliseconds (e.g., 800 for 0.8 seconds)

            breakpoints: {
                // when window width is <= 768px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                375: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1280: {
                    slidesPerView: 8,
                    spaceBetween: 10,
                },
                // you can add more breakpoints as needed
            },
        });
    })();
    (function () {
        // INITIALIZATION OF SWIPER
        // =======================================================
        var preloader = new Swiper('.js-swiper-preloader2', {
            slidesPerView: 1,
            spaceBetween: 0,

            pagination: {
                el: '.js-swiper-preloader-pagination',
                clickable: true,
            },
            on: {
                'imagesReady': function (swiper) {
                    const preloader = swiper.el.querySelector('.js-swiper-preloader2');
                    preloader.parentNode.removeChild(preloader);
                }
            },
            autoplay: {
                delay: 1500, // Set the delay in milliseconds (e.g., 3000 for 3 seconds)
                disableOnInteraction: true, // Set to false if you want autoplay to continue even when the user interacts with the swiper
            },
            speed: 800, // Set the speed of the transition in milliseconds (e.g., 800 for 0.8 seconds)
            breakpoints: {
                // when window width is <= 768px
                375: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                870: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1280: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
                // you can add more breakpoints as needed
            },

        });
    })();
    var couvertures = <?php echo $couvertureDataJson; ?>

    function initializeMoroccoMapWithCouverture(containerId) {
        console.log('simooo');

        // Define your custom marker icons
        var markerIcons = {
            default: {
                markup: '<g transform="scale(0.5)"><path d="M10 20 Q 15 10 20 20 Q 15 30 10 20 Z" fill="#ff0000" stroke="#000000" stroke-width="1"></path></g>',
                width: 20,
                height: 20,
            },
            orange: {
                markup: '<g transform="scale(0.5)"><path d="M10 20 Q 15 10 20 20 Q 15 30 10 20 Z" fill="orange" stroke="orange" stroke-width="1"></path></g>',
                width: 20,
                height: 20,
            },
        };

        $('#' + containerId).vectorMap({
            map: 'morocco_map',
            zoomOnScroll: false,
            regionLabelStyle: false,
            regionStyle: {
                initial: {
                    fill: '#006345',
                    "fill-opacity": 1,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": 1,
                }
            },
            backgroundColor: "",
            markers: couvertures.map(couverture => ({
                latLng: [couverture.lat, couverture.lon],
                name: couverture.id,
                style: {
                    initial: {
                        fill: 'grey',
                        stroke: '#505050',
                        "fill-opacity": 1,
                        "stroke-width": 1,
                        "stroke-opacity": 1,
                        r: couverture.radius
                    },
                    hover: {
                        stroke: 'black',
                        "stroke-width": 2,
                    }
                },
                marker: markerIcons.default, // Use the default marker icon
                couverture: couverture
            })),

            onMarkerClick: function (event, index) {
                // Reset styles for all circles
                circles = document.getElementsByTagName('circle');
                for (var i = 0; i < circles.length; i++) {
                    var currentCircle = circles[i];
                    currentCircle.style.fill = '#6FB63F';
                    currentCircle.style.stroke = 'black';
                    currentCircle.style.r = '#6FB63F';
                }

                // Access the style property of the clicked circle
                var clickedCircleStyle = circles[index].style;

                // Set the new style properties
                clickedCircleStyle.fill = 'orange';
                clickedCircleStyle.stroke = 'orange';
                clickedCircleStyle.r = clickedCircleRadius;

                // Change the marker icon to the orange one
                $('#' + containerId).vectorMap('get', 'mapObject').markers[index].element.attr('d', markerIcons.orange.markup);
            },

            onRegionOver: function (event, code) {
                // Do nothing or add custom behavior when hovering over a region/state
            },
            onRegionOut: function (event, code) {
                // Hide the tooltip when moving the mouse away from a region/state
                // $('#' + containerId).vectorMap('get', 'mapObject').tip.hide();
            },
        });
    }


    jQuery(document).ready(function () {
        console.log('yddd');

        initializeMoroccoMapWithCouverture('morocco');
        var firstMarkerIndex = 0;
        applyMarkerStyles(firstMarkerIndex);

    });


    function applyMarkerStyles(index) {
        var markerName = couvertures[index].id;

        // Reset styles for all circles
        circles = document.getElementsByTagName('circle');
        for (var i = 0; i < circles.length; i++) {
            var currentCircle = circles[i];
            console.log(currentCircle);
            currentCircle.style.fill = '#6FB63F';
            currentCircle.style.stroke = 'black';
            currentCircle.style.r = 5;

        }

        // Set styles for the clicked circle
        var clickedCircleStyle = circles[index].style;
        clickedCircleStyle.fill = '#006345';
        clickedCircleStyle.stroke = '#006345';
        clickedCircleStyle.r = clickedCircleRadius;

    }
</script>
<!-- <div id="movingText" onclick="moveText()">Click me to move right!</div>
<script>
  function moveText() {

  }
</script> -->