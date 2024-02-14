<?php
/**
 * Template Name: À propos de nous
 * Description: This is Home page First Page .
 *
 */


 
?>
<?php
$logo = get_field('logo');
$president_directeur_general_equipe = get_field('president_directeur_general_equipe');
$directeur_general_equipe = get_field('directeur_general_equipe');

// Start Mot Du Directeur 
$title_mot_du_directeur = get_field('title_mot_du_directeur');
$mini_title_in_icon_mot_du_directeur = get_field('mini_title_in_icon_mot_du_directeur');
$paragraph_1_in_mot_du_directeur = get_field('paragraph_1_in_mot_du_directeur');
$paragraph_2_mot_du_directeur = get_field('paragraph_2_mot_du_directeur');
$text_button_in_mot_du_directeur = get_field('text_button_in_mot_du_directeur');
// End Mot Du Directeur 

// Start Notre histoire 
$mini_title_notre_histoire_in_icon = get_field('mini_title_notre_histoire_in_icon');
$title_notre_histoire = get_field('title_notre_histoire');
$paragraph_notre_histoire_in_left = get_field('paragraph_notre_histoire_in_left');
$paragraph_notre_histoire_in_right = get_field('paragraph_notre_histoire_in_right');
$text_button_in_mot_du_directeur = get_field('text_button_in_mot_du_directeur');
// End Notre histoire 


// Start Vision 
$mini_title_in_icon_vision = get_field('mini_title_in_icon_vision');
$title_vision = get_field('title_vision');
$description_vision = get_field('description_vision');
// End Vision 

// Start Mission 
$mini_title_in_icon_mission = get_field('mini_title_in_icon_mission');
$title_mission = get_field('title_mission');

$first_icon_mission = get_field('first_icon_mission');
$first_title_in_the_icon_mission = get_field('first_title_in_the_icon_mission');
$first_paragraph_in_the_icon_mission = get_field('first_paragraph_in_the_icon_mission');

$second_icon_mission = get_field('second_icon_mission');
$second_title_in_the_icon_mission = get_field('second_title_in_the_icon_mission');
$second_paragraph_in_the_icon_mission = get_field('second_paragraph_in_the_icon_mission');

$last_icon_mission = get_field('last_icon_mission');
$last_title_in_the_icon_mission = get_field('last_title_in_the_icon_mission');
$last_paragraph_in_the_icon_mission = get_field('last_paragraph_in_the_icon_mission');
// End Mission 



?>
<?php get_header() ?>

<div style='height:50px;'></div>

<div class="my-5 container d-flex row justify-content-center m-0">
    <div class="col-xl-6 col-sm-12 mx-auto" style='border-radius: 20px;background: #D9D9D9;width: 518px;height: 390px;'>

    </div>
    <div class="col-xl-5 col-sm-12 mx-auto text_Mot_Directeur">
        <img class="mb-3 mx-1" src="wp-content/themes/saadproject/custom/assets/iconAphysem.svg" alt="" srcset="">
        <p class='Min_icon_Aphysem'><?php echo $mini_title_in_icon_mot_du_directeur?></p>
        <h2 class='Title_in_The_Content'><?php echo $title_mot_du_directeur?></h2>
        <p><?php echo $paragraph_1_in_mot_du_directeur?></p>
        <p><?php echo $paragraph_2_mot_du_directeur?></p>
        <a href="" class='link_Borem_ipsum'><?php echo $text_button_in_mot_du_directeur?></a>
    </div>
</div>
<div style='height:100px;'></div>
<div class="container ">
    <p class='Min_icon_Aphysem'><?php echo $mini_title_notre_histoire_in_icon?></p>
    <h2 class='title_NotreHistoire'><?php echo $title_notre_histoire?></h2>
    <div class="row justify-content-between">
        <div class="col-sm-5 col-12 ">
            <p class='text_left_NotreHistoire'><?php echo $paragraph_notre_histoire_in_left?></p>
        </div>
        <div class="col-sm-6 col-12  ">
            <p class='text_right_in_Content'><?php echo $paragraph_notre_histoire_in_right?></p>
        </div>
    </div>
    <!-- Swiper -->
    <div class="js-swiper-slides-per-view3 swiper mt-2  pt-5">
        <div class="swiper-wrapper ">
            <?php if (have_rows('notre_histoire')): ?>
                <?php while (have_rows('notre_histoire')):
                    the_row(); ?>
                    <?php $annee = get_sub_field('annee'); ?>
                    <?php $firsttext = get_sub_field('firsttext'); ?>
                    <?php $all_text = get_sub_field('all_text'); ?>

                    <div class="swiper-slide swiper-slideNotreHistoire ">
                        <div class="annee z-1 mb-5">
                            <p class='annee_NotreHistoire p-2'>
                                <?php echo $annee ?>
                            </p>
                        </div>
                        <div>
                            <p class='my-5 p-2'>
                                <?php echo $firsttext ?>
                                <span>
                                    <?php echo $all_text ?>
                                </span>
                            </p>
                        </div>

                    </div>
                    <?php
                endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
        </div>
        <div style='height:20px;'></div>
        <!-- Arrows -->
        <div class="d-flex justify-content-center align-items-end my-5 pagination position-relative">
            <div class="position-absolute js-swiper-slides-per-view-button-next swiper-button-next"></div>
            <div class="position-absolute js-swiper-slides-per-view-button-prev swiper-button-prev"></div>
            <div style='height:50px;'></div>
            <div class="js-swiper-slides-per-view-pagination swiper-pagination "></div>
        </div>
    </div>
</div>
</div>


<div class="d-none d-xl-block  container mb-5">
    <div class="row  justify-content-center mx-3 ">
        <div class="col-xl-8 col-sm-12 content_Vision  ">
            <p class='Min_icon_Aphysem p-2' style='color:#C9DC90;'><?php echo $mini_title_in_icon_vision?></p>
            <h2 class='Title_Vision px-2'><?php echo $title_vision?></h2>
            <div class="d-flex flex-row m-0">
                <div class="col-11  py-3 px-3">
                    <p class='paragraph_Vision w-100'><?php echo $description_vision?>
                    </p>
                </div>
            </div>
        </div>
        <div class='col-xl-4 col-sm-12 content_imges_responsive'>
            <div class=" MaxImgVision position-relative">
                <div class="z-1">
                    <img class="" src="/wp-content/themes/saadproject/custom/assets/Apropos_de_nous/max_img_Vision.png"
                        alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 py-5">
    <p class='Min_icon_Aphysem'>Adipiscing elit.</p>
    <div class="row">
        <div class="image_mission col-xl-6 col-md-12 col-sm-12 position-relative">
            <h2 class='title_NotreHistoire'>Nos valeurs</h2>
            <img class="image_nos_valeur"
                src="/wp-content/themes/saadproject/custom/assets/Apropos_de_nous/img_mission1.png" alt="" srcset="">
        </div>
        <div class="col-xl-6 col-md-12 col-sm-12  collapse_mission">
            <section id='faqs' class="container text-center my-5 faqs">
                <div class="faqs">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php
                        $faqs = get_field('nos_valeurs');
                        if ($faqs) {
                            echo '<div id="accordion">'; // Opening accordion container
                            $index = 0;
                            // Loop through each FAQ
                            foreach ($faqs as $index => $faq) {
                                $title_nos_valeurs = esc_html($faq['title_nos_valeurs']);
                                $paragraph_nos_valeurs = esc_html($faq['paragraph_nos_valeurs']);
                                $icon = esc_url($faq['icon_nos_valeurs']); ?>

                                <div class="accordion-item mb-3 <?php if ($index >= 4)
                                    echo 'extra-faq'; ?>" style="">
                                    <h2 class="accordion-header" id="flush-heading<?php echo $index; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse<?php echo $index; ?>" aria-expanded="false"
                                            aria-controls="flush-collapse<?php echo $index; ?>">
                                            <h5 class='Gotham_Bold'>
                                                <?php
                                                // Check if the image field exists
                                                if ($icon) {
                                                    // Display the image using the image URL
                                                    echo '<img src="' . $icon . '" alt="Icon" class="img-fluid"  />'; // 'img-fluid' for responsive images
                                                }
                                                ?>
                                                <?php echo $title_nos_valeurs; ?>
                                            </h5>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse<?php echo $index; ?>" class="accordion-collapse collapse"
                                        aria-labelledby="flush-heading<?php echo $index; ?>o"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body Gotham_Book">
                                            <?php echo str_replace(' ', ' ', $paragraph_nos_valeurs); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $index++;
                            }
                            echo '</div>'; // Closing accordion container
                        } ?>
                    </div>
            </section>

        </div>
    </div>
</div>


<section class='py-5 container Mission'>
    <div class="text-center">
        <div class='Min_icon_Aphysem'><?php echo $mini_title_in_icon_mission?></div>
        <h2 class='title_NotreHistoire'><?php echo $title_mission?></h2>
    </div>
    <div class="my-3">
        <div class="row justify-content-center  text-center align-items-center">
            <div class="col-6 col-xl-3 col-sm-6">
                <img src="<?php echo $first_icon_mission?>" alt="" srcset="">
                <div class="col-12">
                    <h3><?php echo $first_title_in_the_icon_mission?></h3>
                    <p class=""><?php echo $first_paragraph_in_the_icon_mission?></p>
                </div>
            </div>
            <div class="col-6 col-xl-1 col-sm-6">
                <svg class="myarrow_top" xmlns="http://www.w3.org/2000/svg" width="194" height="34" viewBox="0 0 194 34"
                    fill="none">
                    <path
                        d="M0.374241 30.22C-0.0565504 30.5656 -0.125614 31.195 0.219984 31.6258C0.565581 32.0566 1.19497 32.1256 1.62576 31.78L0.374241 30.22ZM193.219 31.9756C193.758 31.8544 194.097 31.3193 193.976 30.7805L192 22C191.879 21.4611 191.344 21.1226 190.805 21.2438C190.266 21.365 189.928 21.9001 190.049 22.4389L191.805 30.2439L184 31.9996C183.461 32.1209 183.123 32.6559 183.244 33.1947C183.365 33.7336 183.9 34.0721 184.439 33.9509L193.219 31.9756ZM7.43238 27.4946C7.8885 27.1832 8.0058 26.561 7.69439 26.1049C7.38297 25.6487 6.76077 25.5314 6.30466 25.8429L7.43238 27.4946ZM18.9032 18.3173C18.4141 18.5738 18.2256 19.1782 18.4821 19.6673C18.7386 20.1564 19.343 20.345 19.8321 20.0885L18.9032 18.3173ZM32.9836 14.0001C33.4953 13.7922 33.7416 13.2089 33.5337 12.6972C33.3258 12.1855 32.7425 11.9393 32.2308 12.1471L32.9836 14.0001ZM46.0803 7.24195C45.5519 7.40279 45.254 7.96148 45.4149 8.48983C45.5757 9.01817 46.1344 9.3161 46.6627 9.15526L46.0803 7.24195ZM60.6928 5.55139C61.2333 5.4376 61.5791 4.90724 61.4653 4.36681C61.3515 3.82637 60.8212 3.48051 60.2808 3.59431L60.6928 5.55139ZM74.7718 1.2009C74.2235 1.26693 73.8325 1.76496 73.8985 2.31329C73.9646 2.86161 74.4626 3.25259 75.0109 3.18656L74.7718 1.2009ZM89.4637 2.0857C90.0157 2.06793 90.4487 1.60603 90.431 1.05403C90.4132 0.502035 89.9513 0.0689611 89.3993 0.0867357L89.4637 2.0857ZM104.067 0.256794C103.515 0.226266 103.043 0.648548 103.013 1.19999C102.982 1.75143 103.405 2.22321 103.956 2.25374L104.067 0.256794ZM118.383 3.68306C118.93 3.76121 119.437 3.38135 119.515 2.83463C119.593 2.2879 119.213 1.78134 118.666 1.70319L118.383 3.68306ZM133.089 4.39661C132.551 4.27238 132.014 4.6079 131.889 5.14603C131.765 5.68416 132.101 6.22112 132.639 6.34535L133.089 4.39661ZM146.631 10.1916C147.157 10.3596 147.72 10.0693 147.888 9.54321C148.056 9.0171 147.766 8.45441 147.24 8.28641L146.631 10.1916ZM161.028 13.2992C160.517 13.0904 159.933 13.3357 159.725 13.847C159.516 14.3583 159.761 14.9421 160.272 15.1508L161.028 13.2992ZM173.474 21.1265C173.969 21.3725 174.569 21.1711 174.815 20.6766C175.061 20.1822 174.86 19.5819 174.365 19.3359L173.474 21.1265ZM187.256 26.3252C186.78 26.0454 186.167 26.2047 185.888 26.6809C185.608 27.1571 185.767 27.7699 186.243 28.0496L187.256 26.3252ZM1.62576 31.78C3.36952 30.3811 5.30832 28.9448 7.43238 27.4946L6.30466 25.8429C4.14116 27.32 2.16081 28.7867 0.374241 30.22L1.62576 31.78ZM19.8321 20.0885C23.8621 17.9751 28.2569 15.9204 32.9836 14.0001L32.2308 12.1471C27.444 14.0919 22.9904 16.1738 18.9032 18.3173L19.8321 20.0885ZM46.6627 9.15526C51.1322 7.79468 55.8155 6.57838 60.6928 5.55139L60.2808 3.59431C55.3445 4.6337 50.6044 5.86474 46.0803 7.24195L46.6627 9.15526ZM75.0109 3.18656C79.6926 2.62278 84.5149 2.24505 89.4637 2.0857L89.3993 0.0867357C84.3907 0.248016 79.51 0.630316 74.7718 1.2009L75.0109 3.18656ZM103.956 2.25374C108.675 2.51497 113.487 2.98323 118.383 3.68306L118.666 1.70319C113.712 0.995054 108.842 0.521169 104.067 0.256794L103.956 2.25374ZM132.639 6.34535C137.244 7.40865 141.911 8.68451 146.631 10.1916L147.24 8.28641C142.467 6.76255 137.748 5.47219 133.089 4.39661L132.639 6.34535ZM160.272 15.1508C164.638 16.933 169.04 18.9202 173.474 21.1265L174.365 19.3359C169.887 17.1078 165.44 15.1002 161.028 13.2992L160.272 15.1508ZM186.243 28.0496C188.312 29.2649 190.386 30.5296 192.465 31.8451L193.535 30.1549C191.437 28.8278 189.344 27.5517 187.256 26.3252L186.243 28.0496Z"
                        fill="#006345" />
                </svg>
            </div>
            <div class="col-6 col-xl-3 col-sm-6">
                <img src="<?php echo $second_icon_mission?>" alt="" srcset="">
                <h3><?php echo $second_title_in_the_icon_mission?></h3>
                <p class=""><?php echo $second_paragraph_in_the_icon_mission?></p>
            </div>

            <div class="col-6 col-xl-1 col-sm-6">
                <svg class="arrow_bottom my-5" xmlns="http://www.w3.org/2000/svg" width="194" height="34"
                    viewBox="0 0 194 34" fill="none">
                    <path
                        d="M0.374241 3.78002C-0.0565504 3.43442 -0.125614 2.80503 0.219984 2.37424C0.565581 1.94345 1.19497 1.87439 1.62576 2.21998L0.374241 3.78002ZM193.219 2.02438C193.758 2.14559 194.097 2.68065 193.976 3.21947L192 12C191.879 12.5389 191.344 12.8774 190.805 12.7562C190.266 12.635 189.928 12.0999 190.049 11.5611L191.805 3.75614L184 2.00036C183.461 1.87915 183.123 1.34409 183.244 0.805267C183.365 0.266449 183.9 -0.0720901 184.439 0.0491219L193.219 2.02438ZM7.43238 6.50541C7.8885 6.81682 8.0058 7.43902 7.69439 7.89514C7.38297 8.35125 6.76077 8.46855 6.30466 8.15714L7.43238 6.50541ZM18.9032 15.6827C18.4141 15.4262 18.2256 14.8218 18.4821 14.3327C18.7386 13.8436 19.343 13.655 19.8321 13.9115L18.9032 15.6827ZM32.9836 19.9999C33.4953 20.2078 33.7416 20.7911 33.5337 21.3028C33.3258 21.8145 32.7425 22.0607 32.2308 21.8529L32.9836 19.9999ZM46.0803 26.7581C45.5519 26.5972 45.254 26.0385 45.4149 25.5102C45.5757 24.9818 46.1344 24.6839 46.6627 24.8447L46.0803 26.7581ZM60.6928 28.4486C61.2333 28.5624 61.5791 29.0928 61.4653 29.6332C61.3515 30.1736 60.8212 30.5195 60.2808 30.4057L60.6928 28.4486ZM74.7718 32.7991C74.2235 32.7331 73.8325 32.235 73.8985 31.6867C73.9646 31.1384 74.4626 30.7474 75.0109 30.8134L74.7718 32.7991ZM89.4637 31.9143C90.0157 31.9321 90.4487 32.394 90.431 32.946C90.4132 33.498 89.9513 33.931 89.3993 33.9133L89.4637 31.9143ZM104.067 33.7432C103.515 33.7737 103.043 33.3515 103.013 32.8C102.982 32.2486 103.405 31.7768 103.956 31.7463L104.067 33.7432ZM118.383 30.3169C118.93 30.2388 119.437 30.6186 119.515 31.1654C119.593 31.7121 119.213 32.2187 118.666 32.2968L118.383 30.3169ZM133.089 29.6034C132.551 29.7276 132.014 29.3921 131.889 28.854C131.765 28.3158 132.101 27.7789 132.639 27.6546L133.089 29.6034ZM146.631 23.8084C147.157 23.6404 147.72 23.9307 147.888 24.4568C148.056 24.9829 147.766 25.5456 147.24 25.7136L146.631 23.8084ZM161.028 20.7008C160.517 20.9096 159.933 20.6643 159.725 20.153C159.516 19.6417 159.761 19.0579 160.272 18.8492L161.028 20.7008ZM173.474 12.8735C173.969 12.6275 174.569 12.8289 174.815 13.3234C175.061 13.8178 174.86 14.4181 174.365 14.6641L173.474 12.8735ZM187.256 7.67481C186.78 7.95455 186.167 7.7953 185.888 7.31911C185.608 6.84291 185.767 6.2301 186.243 5.95036L187.256 7.67481ZM1.62576 2.21998C3.36952 3.6189 5.30832 5.05519 7.43238 6.50541L6.30466 8.15714C4.14116 6.68001 2.16081 5.21327 0.374241 3.78002L1.62576 2.21998ZM19.8321 13.9115C23.8621 16.0249 28.2569 18.0796 32.9836 19.9999L32.2308 21.8529C27.444 19.9081 22.9904 17.8262 18.9032 15.6827L19.8321 13.9115ZM46.6627 24.8447C51.1322 26.2053 55.8155 27.4216 60.6928 28.4486L60.2808 30.4057C55.3445 29.3663 50.6044 28.1353 46.0803 26.7581L46.6627 24.8447ZM75.0109 30.8134C79.6926 31.3772 84.5149 31.7549 89.4637 31.9143L89.3993 33.9133C84.3907 33.752 79.51 33.3697 74.7718 32.7991L75.0109 30.8134ZM103.956 31.7463C108.675 31.485 113.487 31.0168 118.383 30.3169L118.666 32.2968C113.712 33.0049 108.842 33.4788 104.067 33.7432L103.956 31.7463ZM132.639 27.6546C137.244 26.5913 141.911 25.3155 146.631 23.8084L147.24 25.7136C142.467 27.2375 137.748 28.5278 133.089 29.6034L132.639 27.6546ZM160.272 18.8492C164.638 17.067 169.04 15.0798 173.474 12.8735L174.365 14.6641C169.887 16.8922 165.44 18.8998 161.028 20.7008L160.272 18.8492ZM186.243 5.95036C188.312 4.73506 190.386 3.47038 192.465 2.15494L193.535 3.84506C191.437 5.17217 189.344 6.44831 187.256 7.67481L186.243 5.95036Z"
                        fill="#006345" />
                </svg>
            </div>
            <div class="col-6 col-xl-3 col-sm-6">
                <img src="<?php echo $last_icon_mission?>" alt="" srcset="">
                <h3><?php echo $last_title_in_the_icon_mission?></h3>
                <p class=""><?php echo $last_paragraph_in_the_icon_mission?></p>
            </div>
            <div class="col-6 col-xl-0 col-sm-0"></div>



        </div>
</section>

<section class='py-5 container Equipe'>
    <div class="row justify-content-between">
        <div class="col-xl-6 col-sm-12">
            <p class='Min_icon_Aphysem'>Adipiscing elit.</p>
            <h2 class='title_NotreHistoire'>équipe</h2>
        </div>
        <div class="col-xl-6 col-sm-12">
            <p class='text_in_border_left'>Porem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis
                molestie, dictum est a,
                mattis tellus. Sed dig.
            </p>
        </div>
    </div>
    <div class="my-5 row justify-content-center">
        <div class='col-xl-4 col-11 content_in_equipe text-center position-relative'>
            <div class="row justify-content-center">
                <p class='col-8 col-xl-6 titre_nom_equipe my-2 py-1'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_172_470)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.9299 10.0942C13.4335 5.2834 2.54699 2.27664 2.45557 2.12799C2.56006 2.66853 2.83434 3.35096 3.23924 4.08745C3.76169 4.20231 4.28414 4.32394 4.80006 4.45907C5.97557 4.76313 7.13802 5.1415 8.27434 5.60096C9.40414 6.06718 10.5143 6.61448 11.507 7.35772C11.9968 7.72934 12.467 8.14826 12.8588 8.63475C13.1984 9.06718 13.4792 9.56042 13.6294 10.0874C13.6882 10.1145 13.7405 10.1415 13.7992 10.1685C13.9299 10.2293 13.9429 10.2293 13.9299 10.0942Z"
                                fill="#009640" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.3879 10.1413C13.401 10.1278 13.3749 10.1211 13.3618 10.1211C13.3488 10.1143 13.3422 10.1143 13.3292 10.1075C13.3226 10.1075 13.3161 10.1075 13.3096 10.1075L13.3161 10.1143C13.3226 10.1143 13.3226 10.1075 13.3292 10.1075C13.3161 10.1211 13.3357 10.1346 13.3488 10.1413C13.3683 10.1346 13.3814 10.1548 13.3879 10.1413Z"
                                fill="#009640" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.1526 10.378C13.1591 10.3645 13.1395 10.3645 13.1199 10.3577C13.1069 10.3577 13.1003 10.351 13.0873 10.3442C13.0807 10.3442 13.0742 10.3442 13.0742 10.3442L13.0807 10.351C13.0873 10.3442 13.0873 10.3442 13.0938 10.3375C13.0873 10.3577 13.1003 10.3577 13.1134 10.3712C13.133 10.378 13.1461 10.3983 13.1526 10.378Z"
                                fill="#6FB63F" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6817 10.3037C13.6751 10.2767 13.6621 10.2429 13.6555 10.2159C13.6621 10.2429 13.6686 10.2767 13.6817 10.3037C13.4988 9.70234 13.1723 9.1618 12.7674 8.7091C12.369 8.24964 11.8988 7.85099 11.4025 7.50639C10.4033 6.8172 9.30615 6.28342 8.18941 5.82396C7.06615 5.3645 5.91676 4.98612 4.75431 4.63477C3.67676 4.30369 2.58615 4.05369 1.50207 3.74964C1.3584 3.71585 1.26697 3.69558 1.25391 3.68207C1.46942 4.29018 1.9135 5.04693 2.54044 5.85099C2.91268 5.88477 3.28493 5.91855 3.65717 5.95909C4.87186 6.09423 6.08003 6.29693 7.27513 6.59423C7.86941 6.74288 8.45717 6.91855 9.03839 7.12801C9.61962 7.33747 10.1878 7.58072 10.7298 7.88477C11.2719 8.18207 11.7943 8.53342 12.2515 8.9591C12.6564 9.34423 13.0155 9.79693 13.2572 10.3037C13.3617 10.3375 13.4662 10.3713 13.5641 10.405C13.7013 10.4456 13.7143 10.4388 13.6817 10.3037Z"
                                fill="#6FB63F" />
                            <path
                                d="M8.73793 0.486023C7.19018 0.486023 5.71426 0.986023 4.46691 1.92521C4.34936 2.01305 4.23181 2.10764 4.11426 2.209C4.35589 2.29683 4.61712 2.39143 4.89793 2.49954C6.0212 1.6617 7.34691 1.21575 8.7314 1.21575C12.3428 1.21575 15.2816 4.25629 15.2816 7.99278C15.2816 11.7293 12.3428 14.7698 8.7314 14.7698C5.42691 14.7698 2.62528 12.1752 2.22691 8.81035C1.96569 8.60089 1.71752 8.39143 1.48242 8.17521C1.48895 8.3171 1.48895 8.46575 1.50201 8.60089C1.64569 10.4725 2.46201 12.209 3.80079 13.4928C5.1461 14.7833 6.8963 15.4928 8.7314 15.4928C12.7281 15.4928 15.9804 12.1279 15.9804 7.99278C15.9869 3.85089 12.7347 0.486023 8.73793 0.486023Z"
                                fill="#006241" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.0153 11.4185C12.6691 11.1955 12.323 10.9793 11.9573 10.7833C11.3891 10.4658 10.8079 10.1617 10.2071 9.89145C9.61282 9.61443 9.00547 9.35767 8.38506 9.11443C8.11731 9.01308 7.84955 8.91172 7.5818 8.81713C7.42506 8.76308 7.38588 8.70226 7.60792 8.76307C7.88221 8.84416 8.15649 8.932 8.42425 9.01983C9.05772 9.22929 9.68465 9.45902 10.3051 9.70227C10.9255 9.94551 11.5328 10.2158 12.1336 10.5063C12.6104 10.736 13.0675 10.986 13.5181 11.2563C13.5312 11.2563 13.5442 11.2631 13.5638 11.2698C13.6553 11.3306 13.7532 11.3915 13.8447 11.4455C13.8577 11.4523 13.8708 11.459 13.8838 11.4658C13.9296 11.4996 13.9753 11.5266 14.0275 11.5604C14.0993 11.4455 14.1712 11.3306 14.2365 11.209C14.0471 11.0671 13.8708 10.932 13.7336 10.8239C13.5116 10.6482 13.3614 10.5198 13.3483 10.4793C13.3353 10.4455 13.3157 10.4117 13.3026 10.3847C13.3157 10.4117 13.3287 10.4455 13.3418 10.4725C13.061 9.91173 12.6561 9.43199 12.1859 9.0401C11.7222 8.64145 11.1998 8.31713 10.6577 8.04686C10.1157 7.77659 9.55404 7.5401 8.97935 7.34416C8.40465 7.14821 7.82343 6.97254 7.22915 6.83064C6.05364 6.53335 4.852 6.32389 3.64384 6.14821C2.59241 5.98605 1.53445 5.89821 0.476491 5.76983C0.202205 5.74956 0.0389401 5.73605 0.0258789 5.72253C1.42343 8.2428 7.78425 13.0671 13.0153 11.4185Z"
                                fill="#C9DC90" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.9865 12.459C15.7449 12.2969 15.4706 12.1077 15.1898 11.905C15.118 12.0333 15.0461 12.155 14.9678 12.2766C15.0853 12.3847 15.1963 12.4996 15.3074 12.6279C15.34 12.6685 15.3727 12.709 15.3923 12.7563C15.4184 12.8036 15.4445 12.8036 15.4902 12.7833C15.6535 12.7023 15.8233 12.6279 15.9865 12.5536C16.0519 12.5198 16.0388 12.4928 15.9865 12.459Z"
                                fill="#C9DC90" />
                        </g>
                        <defs>
                            <clipPath id="clip0_172_470">
                                <rect width="16" height="15" fill="white" transform="translate(0 0.499512)" />
                            </clipPath>
                        </defs>
                    </svg>
                    Président directeur général
                </p>
            </div>

            <p class='nom_personne_in_equipe'>
                <?php echo $president_directeur_general_equipe ?>
            </p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="2" height="56" viewBox="0 0 2 56" fill="none">
            <path d="M1 1L0.999998 55" stroke="black" stroke-opacity="0.19" stroke-linecap="round"
                stroke-dasharray="4 4" />
        </svg>
        <div class='col-xl-4 col-11 content_in_equipe2 text-center position-relative'>
            <div class="row justify-content-center">
                <p class='col-8 col-xl-6 titre_nom_equipe my-2 py-1'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_172_470)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.9299 10.0942C13.4335 5.2834 2.54699 2.27664 2.45557 2.12799C2.56006 2.66853 2.83434 3.35096 3.23924 4.08745C3.76169 4.20231 4.28414 4.32394 4.80006 4.45907C5.97557 4.76313 7.13802 5.1415 8.27434 5.60096C9.40414 6.06718 10.5143 6.61448 11.507 7.35772C11.9968 7.72934 12.467 8.14826 12.8588 8.63475C13.1984 9.06718 13.4792 9.56042 13.6294 10.0874C13.6882 10.1145 13.7405 10.1415 13.7992 10.1685C13.9299 10.2293 13.9429 10.2293 13.9299 10.0942Z"
                                fill="#009640" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.3879 10.1413C13.401 10.1278 13.3749 10.1211 13.3618 10.1211C13.3488 10.1143 13.3422 10.1143 13.3292 10.1075C13.3226 10.1075 13.3161 10.1075 13.3096 10.1075L13.3161 10.1143C13.3226 10.1143 13.3226 10.1075 13.3292 10.1075C13.3161 10.1211 13.3357 10.1346 13.3488 10.1413C13.3683 10.1346 13.3814 10.1548 13.3879 10.1413Z"
                                fill="#009640" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.1526 10.378C13.1591 10.3645 13.1395 10.3645 13.1199 10.3577C13.1069 10.3577 13.1003 10.351 13.0873 10.3442C13.0807 10.3442 13.0742 10.3442 13.0742 10.3442L13.0807 10.351C13.0873 10.3442 13.0873 10.3442 13.0938 10.3375C13.0873 10.3577 13.1003 10.3577 13.1134 10.3712C13.133 10.378 13.1461 10.3983 13.1526 10.378Z"
                                fill="#6FB63F" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6817 10.3037C13.6751 10.2767 13.6621 10.2429 13.6555 10.2159C13.6621 10.2429 13.6686 10.2767 13.6817 10.3037C13.4988 9.70234 13.1723 9.1618 12.7674 8.7091C12.369 8.24964 11.8988 7.85099 11.4025 7.50639C10.4033 6.8172 9.30615 6.28342 8.18941 5.82396C7.06615 5.3645 5.91676 4.98612 4.75431 4.63477C3.67676 4.30369 2.58615 4.05369 1.50207 3.74964C1.3584 3.71585 1.26697 3.69558 1.25391 3.68207C1.46942 4.29018 1.9135 5.04693 2.54044 5.85099C2.91268 5.88477 3.28493 5.91855 3.65717 5.95909C4.87186 6.09423 6.08003 6.29693 7.27513 6.59423C7.86941 6.74288 8.45717 6.91855 9.03839 7.12801C9.61962 7.33747 10.1878 7.58072 10.7298 7.88477C11.2719 8.18207 11.7943 8.53342 12.2515 8.9591C12.6564 9.34423 13.0155 9.79693 13.2572 10.3037C13.3617 10.3375 13.4662 10.3713 13.5641 10.405C13.7013 10.4456 13.7143 10.4388 13.6817 10.3037Z"
                                fill="#6FB63F" />
                            <path
                                d="M8.73793 0.486023C7.19018 0.486023 5.71426 0.986023 4.46691 1.92521C4.34936 2.01305 4.23181 2.10764 4.11426 2.209C4.35589 2.29683 4.61712 2.39143 4.89793 2.49954C6.0212 1.6617 7.34691 1.21575 8.7314 1.21575C12.3428 1.21575 15.2816 4.25629 15.2816 7.99278C15.2816 11.7293 12.3428 14.7698 8.7314 14.7698C5.42691 14.7698 2.62528 12.1752 2.22691 8.81035C1.96569 8.60089 1.71752 8.39143 1.48242 8.17521C1.48895 8.3171 1.48895 8.46575 1.50201 8.60089C1.64569 10.4725 2.46201 12.209 3.80079 13.4928C5.1461 14.7833 6.8963 15.4928 8.7314 15.4928C12.7281 15.4928 15.9804 12.1279 15.9804 7.99278C15.9869 3.85089 12.7347 0.486023 8.73793 0.486023Z"
                                fill="#006241" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.0153 11.4185C12.6691 11.1955 12.323 10.9793 11.9573 10.7833C11.3891 10.4658 10.8079 10.1617 10.2071 9.89145C9.61282 9.61443 9.00547 9.35767 8.38506 9.11443C8.11731 9.01308 7.84955 8.91172 7.5818 8.81713C7.42506 8.76308 7.38588 8.70226 7.60792 8.76307C7.88221 8.84416 8.15649 8.932 8.42425 9.01983C9.05772 9.22929 9.68465 9.45902 10.3051 9.70227C10.9255 9.94551 11.5328 10.2158 12.1336 10.5063C12.6104 10.736 13.0675 10.986 13.5181 11.2563C13.5312 11.2563 13.5442 11.2631 13.5638 11.2698C13.6553 11.3306 13.7532 11.3915 13.8447 11.4455C13.8577 11.4523 13.8708 11.459 13.8838 11.4658C13.9296 11.4996 13.9753 11.5266 14.0275 11.5604C14.0993 11.4455 14.1712 11.3306 14.2365 11.209C14.0471 11.0671 13.8708 10.932 13.7336 10.8239C13.5116 10.6482 13.3614 10.5198 13.3483 10.4793C13.3353 10.4455 13.3157 10.4117 13.3026 10.3847C13.3157 10.4117 13.3287 10.4455 13.3418 10.4725C13.061 9.91173 12.6561 9.43199 12.1859 9.0401C11.7222 8.64145 11.1998 8.31713 10.6577 8.04686C10.1157 7.77659 9.55404 7.5401 8.97935 7.34416C8.40465 7.14821 7.82343 6.97254 7.22915 6.83064C6.05364 6.53335 4.852 6.32389 3.64384 6.14821C2.59241 5.98605 1.53445 5.89821 0.476491 5.76983C0.202205 5.74956 0.0389401 5.73605 0.0258789 5.72253C1.42343 8.2428 7.78425 13.0671 13.0153 11.4185Z"
                                fill="#C9DC90" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.9865 12.459C15.7449 12.2969 15.4706 12.1077 15.1898 11.905C15.118 12.0333 15.0461 12.155 14.9678 12.2766C15.0853 12.3847 15.1963 12.4996 15.3074 12.6279C15.34 12.6685 15.3727 12.709 15.3923 12.7563C15.4184 12.8036 15.4445 12.8036 15.4902 12.7833C15.6535 12.7023 15.8233 12.6279 15.9865 12.5536C16.0519 12.5198 16.0388 12.4928 15.9865 12.459Z"
                                fill="#C9DC90" />
                        </g>
                        <defs>
                            <clipPath id="clip0_172_470">
                                <rect width="16" height="15" fill="white" transform="translate(0 0.499512)" />
                            </clipPath>
                        </defs>
                    </svg>
                    Directeur général
                </p>
            </div>

            <p class='nom_personne_in_equipe'>
                <?php echo $directeur_general_equipe ?>
            </p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="2" height="56" viewBox="0 0 2 56" fill="none">
            <path d="M1 1L0.999998 55" stroke="black" stroke-opacity="0.19" stroke-linecap="round"
                stroke-dasharray="4 4" />
        </svg>
        <svg style="width:70%;" xmlns="http://www.w3.org/2000/svg" width="806" height="3" viewBox="0 0 806 2"
            fill="none">
            <path d="M805 1L1.00001 1" stroke="black" stroke-opacity="0.19" stroke-linecap="round"
                stroke-dasharray="4 4" />
        </svg>
        <div class="col-11">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-6 col-xl-3 text-center">
                    <svg class="text-center" xmlns="http://www.w3.org/2000/svg" width="2" height="56" viewBox="0 0 2 56"
                        fill="none">
                        <path d="M1 1L0.999998 55" stroke="black" stroke-opacity="0.19" stroke-linecap="round"
                            stroke-dasharray="4 4" />
                    </svg>
                    <div class='content_type_equipe  p-3 d-flex flex-row align-items-center my-2 w-100 text-center'>
                        <p class='titre_type_equipe'>Directeur technique et RD</p>
                        <?php
                        // Get the repeater field values
                        $directeur_technique_et_rd_equipes = get_field('directeur_technique_et_rd_equipe');

                        // Check if there are rows in the repeater
                        if ($directeur_technique_et_rd_equipes) {
                            $row_count = count($directeur_technique_et_rd_equipes);
                            // Loop through each row
                            foreach ($directeur_technique_et_rd_equipes as $item) {
                                $field1_value = $item['nom_directeur_technique_et_rd'];
                                ?>
                                <p class='LesNom__equipe d-block m-auto'>
                                    <?php echo $field1_value; ?>
                                </p>
                                <?php
                                if ($index < $row_count - 1) {
                                    ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="196" height="2" viewBox="0 0 196 2" fill="none">
                                        <path d="M1 1L195 1.00002" stroke="black" stroke-opacity="0.15" stroke-width="0.5"
                                            stroke-linecap="round" />
                                    </svg>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 text-center">
                    <svg class="text-center" xmlns="http://www.w3.org/2000/svg" width="2" height="56" viewBox="0 0 2 56"
                        fill="none">
                        <path d="M1 1L0.999998 55" stroke="black" stroke-opacity="0.19" stroke-linecap="round"
                            stroke-dasharray="4 4" />
                    </svg>
                    <div class='content_type_equipe  p-3 d-flex flex-row align-items-center my-2 w-100 text-center'>
                        <p class='titre_type_equipe'>Directeur commercial</p>
                        <?php
                        // Get the repeater field values
                        $directeur_commercial_equipes = get_field('directeur_commercial_equipe');

                        // Check if there are rows in the repeater
                        if ($directeur_commercial_equipes) {
                            $row_count = count($directeur_commercial_equipes);
                            // Loop through each row
                            foreach ($directeur_commercial_equipes as $item) {
                                $field1_value = $item['nom_directeur_commercial'];
                                ?>
                                <p class='LesNom__equipe d-block m-auto'>
                                    <?php echo $field1_value; ?>
                                </p>
                                <?php
                                if ($index < $row_count - 1) {
                                    ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="196" height="2" viewBox="0 0 196 2" fill="none">
                                        <path d="M1 1L195 1.00002" stroke="black" stroke-opacity="0.15" stroke-width="0.5"
                                            stroke-linecap="round" />
                                    </svg>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 text-center">
                    <svg class="text-center" xmlns="http://www.w3.org/2000/svg" width="2" height="56" viewBox="0 0 2 56"
                        fill="none">
                        <path d="M1 1L0.999998 55" stroke="black" stroke-opacity="0.19" stroke-linecap="round"
                            stroke-dasharray="4 4" />
                    </svg>
                    <div class='content_type_equipe  p-3 d-flex flex-row align-items-center my-2 w-100 text-center'>
                        <p class='titre_type_equipe'>Responsable qualité</p>
                        <?php
                        // Get the repeater field values
                        $directeur_technique_et_rd_equipes = get_field('directeur_technique_et_rd_equipe');
                        // Check if there are rows in the repeater
                        if ($directeur_technique_et_rd_equipes) {
                            // Get the count of rows
                            $row_count = count($directeur_technique_et_rd_equipes);
                            // Loop through each row
                            foreach ($directeur_technique_et_rd_equipes as $index => $item) {
                                $field1_value = $item['nom_directeur_technique_et_rd'];?>
                                <p class='LesNom__equipe d-block m-auto'><?php echo $field1_value; ?></p>
                                <?php if ($index < $row_count - 1) {?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="196" height="2" viewBox="0 0 196 2" fill="none">
                                        <path d="M1 1L195 1.00002" stroke="black" stroke-opacity="0.15" stroke-width="0.5"
                                            stroke-linecap="round" />
                                    </svg>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 text-center">
                    <svg class="text-center" xmlns="http://www.w3.org/2000/svg" width="2" height="56" viewBox="0 0 2 56"
                        fill="none">
                        <path d="M1 1L0.999998 55" stroke="black" stroke-opacity="0.19" stroke-linecap="round"
                            stroke-dasharray="4 4" />
                    </svg>
                    <div class='content_type_equipe  p-3 d-flex flex-row align-items-center my-2 w-100 text-center'>
                        <p class='titre_type_equipe'>Responsable supply chain</p>
                        <div class="row align-itens-center ">
                            <?php
                            // Get the repeater field values
                            $responsable_supply_chain_equipes = get_field('responsable_supply_chain_equipe');

                            // Check if there are rows in the repeater
                            if ($responsable_supply_chain_equipes) {
                                $row_count = count($responsable_supply_chain_equipes);

                                // Loop through each row
                                foreach ($responsable_supply_chain_equipes as $index => $item) {
                                    $field1_value = $item['nom_responsable_supply_chain'];
                                    ?>
                                    <p class='LesNom__equipe d-block m-auto'>
                                        <?php echo $field1_value; ?>
                                    </p>
                                    <?php
                                    if ($index < $row_count - 1) {
                                        ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="196" height="2" viewBox="0 0 196 2"
                                            fill="none">
                                            <path d="M1 1L195 1.00002" stroke="black" stroke-opacity="0.15" stroke-width="0.5"
                                                stroke-linecap="round" />
                                        </svg>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php
get_template_part('template/content', 'contact');
?>
<div style='height:200px;'></div>
<?php get_footer(); ?>
<!-- JS Plugins Init. -->
<script>
    (function () {
        // INITIALIZATION OF SWIPER
        // =======================================================
        var slidesPerView = new Swiper('.js-swiper-slides-per-view3', {
            slidesPerView: 2,
            spaceBetween: 30,
            pagination: {
                el: '.js-swiper-slides-per-view-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.js-swiper-slides-per-view-button-next',
                prevEl: '.js-swiper-slides-per-view-button-prev',
            },
            autoplay: {
                delay: 1500, // Set the delay in milliseconds (e.g., 3000 for 3 seconds)
                disableOnInteraction: true, // Set to false if you want autoplay to continue even when the user interacts with the swiper
            },
            speed: 800,
            breakpoints: {
                // when window width is <= 768px

                320: {
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
    })()




</script>