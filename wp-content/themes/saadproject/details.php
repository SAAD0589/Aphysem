<?php
/**
 * Template Name: Details 
 * Description: This is Details .
 *
 */

?>
<?php get_header();?>
<section class='background_content'>
    <div class="container py-5">
        <a href="javascript:history.back()">
            <div class='back_on_products'></div>
        </a>
        <?php
        // Get the post ID from the URL
        $post_id = $_GET['post_id'];
        $category = $_GET['category'];
        // Use the get_post function to retrieve the post
        $post = get_post($post_id);
        $image_product = get_field('image_product', $post_id);
        $name_product = get_field('name_product', $post_id);
        $description_product = get_field('description_product', $post_id);
        $other_information = get_field('other_information', $post_id);
        if ($post) {
            ?>
            <section class="row my-5 py-5 justify-content-center">
                <div class="col-xl-6 col-sm-12 text-center">
                    <div class="row justify-content-center">
                        <div class="col-8 rounded-5" style="background-color:#fff;">
                            <img class="" src="<?php echo $image_product ?>" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-12">
                    <h2 class='title_product'>
                        <?php echo $name_product ?>
                    </h2>
                    <p class='paragraph_product'>
                        <?php echo $description_product ?>
                    </p>
                    <button class='button_Prospectus px-5 py-2 '>Prospectus</button>
                    <ul class='my-2 p-2 auther_information_list'>
                        <?php
                        if ($other_information) {
                            foreach ($other_information as $item) {
                                $inforamtion = $item['inforamtion']; ?>
                                <li class='item_information_list'>
                                    <?php echo $inforamtion ?>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                    <form action="/demander_devis" method="get">
                        <div class="row my-5 justify-content-center">
                            <div class="col-xl-4 col-md-6 col-sm-10 my-3">
                                <select class="form-select select_in_details" name="Emballage"
                                    aria-label="Default select example">
                                    <option selected disabled>Emballage</option>
                                    <option value="10Kg">10Kg</option>
                                    <option value="15Kg">15Kg</option>
                                    <option value="20Kg">20Kg</option>
                                    <option value="25Kg">25Kg</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-10 my-3">
                                <input type="hidden" value='<?php echo $post_id; ?>' name='post_id'>
                                <div class='quantite_in_details'>
                                    <i class="fa-solid fa-minus" onclick="decrementValue()"></i>
                                    <p class='py-1 px-2 placeholde_Quantite'>Quantite</p>
                                    <input type="number" class='form-control input_quantite_in_details' required placeholder="Quantite"
                                        name='Quantite' value="0">
                                    <i class="fa-solid fa-plus" onclick="incrementValue()"></i>
                                </div>


                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-10 my-3">
                                <button type="submit" class='Demander_devis'>Demander un devis</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
        } else {
            echo "No post found with ID: " . $post_id;
        }
        ?>
        </section>
        <section class='text-center'>
            <p class='Min_icon_Aphysemin_green'>Lorem ipsum</p>
            <div class="text-center">
                <h1 class='title_inBlack m-auto d-inline-block'>Produit similaire</h1>
            </div>
            <div class="js-swiper-slides-per-view_detail swiper mt-5  pt-5">
                <div class="swiper-wrapper ">
                    <?php
                    $args = array(
                        'post_type' => 'my_products', // Retrieve regular posts
                        'posts_per_page' => -1, // Retrieve all posts
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categorie', // Replace 'categorie' with your actual taxonomy slug
                                'field' => 'slug',
                                'terms' => $category, // Replace 'your-term-slug' with the actual term slug you want to query
                            ),
                        ),
                    );
                    $products_query = new WP_Query($args);

                    if ($products_query->have_posts()):
                        while ($products_query->have_posts()):
                            $products_query->the_post();
                            $post_id = get_the_ID();
                            // var_dump($post_id);
                            $image_product = get_field('image_product');
                            $name_product = get_field('name_product');
                            $description_product = get_field('description_product'); ?>

                            <div class="swiper-slide my-5">
                                <div class="products_cards_in_swiper_inDetails">
                                    <div class="position-relative content_text_card_products" style="max-width: 22rem;">
                                        <img class="img_product_cards_in_swiper" src="<?php echo $image_product ?>" alt=""
                                            srcset="">
                                        <div class="content_text_card_products_in_swiper text-center py-3 h-100">
                                            <h5 class=" title_products_cards">
                                                <?php echo $name_product ?>
                                            </h5>
                                            <p class=" paragraph_products_cards w-100 mb-0">
                                                <?php echo $description_product ?>
                                            </p>
                                        </div>
                                        <div class='row align-items-center py-2'>
                                            <a class="En_savoir_plus "
                                                href="/details?post_id=<?php echo $post_id; ?>&category=<?php echo $category; ?>">En
                                                savoir plus
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8"
                                                    fill="none">
                                                    <path
                                                        d="M14.2466 4.35331C14.4418 4.15805 14.4418 3.84146 14.2466 3.6462L11.0646 0.464221C10.8693 0.268959 10.5527 0.268959 10.3575 0.464221C10.1622 0.659484 10.1622 0.976066 10.3575 1.17133L13.1859 3.99975L10.3575 6.82818C10.1622 7.02344 10.1622 7.34003 10.3575 7.53529C10.5527 7.73055 10.8693 7.73055 11.0646 7.53529L14.2466 4.35331ZM0.893005 4.49976L13.893 4.49975L13.893 3.49975L0.893005 3.49976L0.893005 4.49976Z"
                                                        fill="black" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </div>

                <div
                    class="d-flex justify-content-center align-items-end my-5 pagination position-relative swipe_in_details">
                    <div class="position-absolute js-swiper-slides-per-view-button-next swiper-button-next"></div>
                    <div class="position-absolute js-swiper-slides-per-view-button-prev swiper-button-prev"></div>
                    <div style='height:50px;'></div>
                    <div class="js-swiper-slides-per-view-pagination swiper-pagination "></div>
                </div>
        </section>
    </div>



    <section class='mt-5 pt-5'>
        <?php get_footer(); ?>
    </section>
</section>
<script>
 var input_quantite_in_details = document.getElementsByClassName('input_quantite_in_details')[0];

function incrementValue() {
    input_quantite_in_details.value = parseInt(input_quantite_in_details.value) + 1;
}

function decrementValue() {
    if (parseInt(input_quantite_in_details.value) > 0) {
        input_quantite_in_details.value = parseInt(input_quantite_in_details.value) - 1;
    }
}


    (function () {
        // INITIALIZATION OF SWIPER
        // =======================================================
        var slidesPerView = new Swiper('.js-swiper-slides-per-view_detail', {
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
                280: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                540: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 8,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1223: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1496: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                // you can add more breakpoints as needed
            },
        });
    })()
</script>