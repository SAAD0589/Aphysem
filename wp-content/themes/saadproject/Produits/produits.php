<?php
/**
 * Template Name: Produits 
 * Description: This is Produits .
 *
 */
?>
<?php get_header();
$image_produits = get_field('image_produits');
$image_product_2 = get_field('image_product_2');
$image_product_3 = get_field('image_product_3');
?>
<section class='background_content'>
    <div class="mx-5  py-5 ">
        <div class="row justify-content-around py-5">
            <div class="col-xl-3 col-md-6 col-sm-12">
                <div class="cards_filtrage 2 ">
                    <div class='px-2 pt-3'>
                        <p class='title_filtrage '>Rechercher un produit</p>
                        <input type="text" id="ajax-search" class="py-2 search_post"
                            placeholder="Rechercher un produit" value=''>
                    </div>
                    <!-- Categorie -->
                    <p class='title_filtrage px-2 pt-3'>Catégories</p>
                    <?php
                    $args = array(
                        'post_type' => 'my_products',
                        'taxonomy' => 'categorie',
                        'hide_empty' => 0,
                        'parent' => 0
                    );
                    $categories = get_categories($args);
                    ?>
                    <div class='px-2 pt-1'>
                        <button class="parent_category collapsed " type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse" aria-expanded="false" aria-controls="flush-collapse">
                            All
                        </button>
                        <?php

                        echo '<div id="accordion" class="item_parent_category ">'; // Opening accordion container
                        $index = 0;
                        // Loop through each FAQ
                        foreach ($categories as $category) { ?>
                            <div class="accordion-item  <?php if ($index >= 4)
                                echo 'extra-faq'; ?>">
                                <div id="flush-collapse" class="accordion-collapse collapse" aria-labelledby="flush-heading"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body Gotham_Book" id="<?php echo $category->term_id; ?>"
                                        value="<?php echo $category->name; ?>">
                                        <?php echo $category->name ?>
                                    </div>
                                    <div class='line_in_parent_categorie'></div>

                                </div>
                            </div>
                            <?php
                            $index++;
                        }

                        echo '</div>'; // Closing accordion container
                        ?>
                    </div>
                    <!-- Type de produit  -->
                    <p class='title_filtrage px-2 pt-3'>Type de produit</p>

                    <!-- <select name="child_category" id="child-category" class="form-select">
            </select> -->

                    <div class='px-2 pt-1'>
                        <button class="parent_category collapsed " type="button" data-bs-toggle="collapse"
                            data-bs-target="#Type_produit" aria-expanded="false" aria-controls="flush-collapse">
                            All Type de produit
                        </button>
                        <div class="item_parent_category" id="child-category"></div>
                    </div>
                    <!-- Problème phytosanitaire -->
                    <p class='title_filtrage px-2 pt-3'>Problème phytosanitaire</p>
                    <div class='px-2 pt-1 pb-3'>
                        <select name="" id="" class="form-select pb-2">
                            <option value="">Choisir</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="app col-xl-8 col-md-12 col-sm-12">
            <div class="row justify-content-center gap-5  posts-container">
                <?php
                for ($i = 0; $i < 6; $i++) {
                    ?>
                            <div class="card col-xl-3 col-sm-5">
                                <div class="card__image"></div>
                                <div class="card__content">
                                    <h2 class="h2_in_loading"></h2>
                                    <p class="paragraph_in_loadin"></p>
                                </div>
                            </div>                       
                    <?php
                }
                ?>
            </div>
            </div>
            <!-- Affichage Des Produits -->
            <div class="col-xl-8 col-md-12 col-sm-12 ">
                <div class="row justify-content-center gap-5  posts-container mt-5">
                    <?php
                    // Get the current page number
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    // Get the category from the URL
                    $url = $_SERVER['REQUEST_URI'];
                    $urlParts = explode('/', $url);
                    $urlParts = array_filter($urlParts);
                    // Extract the category from the URL
                    $categoryIndex = array_search('produits', $urlParts); // Find the index of 'produits'
                    if ($categoryIndex !== false && isset($urlParts[$categoryIndex + 2])) {
                        // If 'produits' is found and there is a category after it
                        $categorie = $urlParts[$categoryIndex + 2];
                    } else {
                        // Default category if not found in URL
                        $categorie = 'default_category'; // Change this to your default category slug
                    }
                    // Output the category (for testing)
                    ?>
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page number     
                    $args = array(
                        'post_type' => 'my_products', // Retrieve regular posts
                        'posts_per_page' => 4, // Number of posts per page
                        'paged' => $paged, // Current page number
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categorie', // Replace 'categorie' with your actual taxonomy slug
                                'field' => 'slug',
                                'terms' => $categorie, // Replace 'your-term-slug' with the actual term slug you want to query
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
                            $description_product = get_field('description_product');
                            ?>
                            <div class="col-xl-3 col-sm-5 col-11  products_cards h-100 ">
                                <div class="position-relative content_text_card_products" style="max-width: 22rem;">
                                    <img class="img_product_cards " src="<?php echo $image_product ?>" alt="" srcset="">
                                    <div class="content_text_card_products text-center">
                                        <h5 class=" title_products_cards">
                                            <?php echo $name_product ?>
                                        </h5>
                                        <p class=" paragraph_products_cards">
                                            <?php echo $description_product ?>
                                        </p>
                                        <div>
                                            <a class="En_savoir_plus py-3"
                                                href="/details?post_id=<?php echo $post_id; ?>&category=<?php echo $categorie; ?>">En
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
                        <?php endwhile; ?>
                        <div class="pagination">
                            <?php
                            $big = 999999999; // need an unlikely integer

                            echo paginate_links(
                                array(
                                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                    'format' => '?paged=%#%',
                                    'total' => $products_query->max_num_pages,
                                    'current' => max(1, get_query_var('paged')),
                                    'prev_text' => '<span class="text_prev mx-2"> Précédente </span> <span class="arrow"> < </span> ', // Change this line
                                    'next_text' => '<span class="arrow"> > </span> <span class="text_next"> Suivante </span>', // Change this line
                    
                                )
                            );
                            ?>
                        </div>
                    <?php else:
                        echo 'No posts found';
                    endif;
                    wp_reset_postdata(); // Restore global post data stomped by the_post().
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section class='mt-5 pt-5'>
        <?php get_footer(); ?>
    </section>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // jQuery(document).ready(function ($) {
    //     // Modify text for "Next" and "Previous" links
    //     $('.pagination .next').text('Suivante');
    //     $('.pagination .prev').text('Précédente');
    // });
</script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.Gotham_Book').click(function () {
            // Reset background color for all categories
            $('.Gotham_Book').css('background-color', '#F8F8F8');
            $('.Gotham_Book').css('color', '#009640');
            var parentCategoryId = $(this).attr('id');
            var parentCategoryName = $(this).attr('value');
            parentCategoryName = parentCategoryName.toLowerCase().replace(/\s+/g, '-').normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            localStorage.clear('parentCategoryName');

            localStorage.setItem('parentCategoryName', parentCategoryName);

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'get_child_categories',
                    parent_category_id: parentCategoryId
                },
                success: function (response) {
                    $('#child-category').html(response);
                    // history.pushState(null, '', '/details');
                    // history.pushState(null, '', '/' + parentCategoryId);
                }
            });
            // Change background color to #009640 when clicked
            $(this).css('background-color', '#009640');
            // Change  color to white when clicked
            $(this).css('color', '#ffffff');
        });
    });
</script>



<script type="text/javascript">
    jQuery(document).ready(function ($) {

        $('#ajax-search').on('input', function () {
            let category = '<?php echo $categorie; ?>';
            console.log(category);
            var searchValue = $(this).val();
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'ajax_search',
                    search_value: searchValue,
                    // category: category
                },
                success: function (response) {
                    if (searchValue === '') {
                        // If search input is empty, restore .products_cards
                        $('.products_cards').show();
                    } else {
                        // If search input is not empty, update content with response
                        $('.posts-container').html(response);
                        $('.products_cards').hide();
                    }
                }
            });
        });
    });
</script>




<script>
    jQuery(document).ready(function ($) {
        $(document).on('click', '.Type_produit', function (e) {
            e.preventDefault();

            var category = $(this).attr('value');
            console.log(category);
            $('.Type_produit').css('background-color', '#F8F8F8');
            $('.Type_produit').css('color', '#009640');
            var categoryLowercase = category.toLowerCase();
            categoryLowercase = categoryLowercase.normalize("NFD").replace(/[\u0300-\u036f]/g, ""); // remove accents
            history.pushState(null, '', '/produits/' + encodeURI(categoryLowercase));
            const parentCategoryName = localStorage.getItem("parentCategoryName");
            $('.app').show();

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'fetch_products',
                    category: category,
                    page: 1, // Set the initial page number,
                    categoryLowercase: categoryLowercase,
                    parentCategoryName: parentCategoryName


                },
                success: function (data) {
                    // data contains the HTML for the posts returned by the server
                    var categoryLowercase = category.toLowerCase();

                    var categoryLowercase = category.toLowerCase();
                    categoryLowercase = categoryLowercase.normalize("NFD").replace(/[\u0300-\u036f]/g, ""); // remove accents
                    history.pushState(null, '', '/produits/' + encodeURI(categoryLowercase));

                    $('.posts-container').html(data);
                    $('.products_cards').remove();
                    console.log(data);
                    $('.app').hide();

                }
            });
            // Change background color to #009640 when clicked
            $(this).css('background-color', '#009640');
            // Change  color to white when clicked
            $(this).css('color', '#ffffff');

        });
    });

</script>