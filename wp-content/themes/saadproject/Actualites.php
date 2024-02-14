<?php
/**
 * Template Name: Actualités 
 * Description: This is Actualités .
 *
 */
?>
<?php get_header();
$contacts_information = get_field('contacts_information');
$items_icons = get_field('items_icons');
?>
<section class='background_content'>
    <div class="mx-3 mx-lg-4  py-2 ">
        <div class="row justify-content-around  py-5">
            <div class="col-xl-3 col-md-12 col-sm-12">
                <div class="cards_filtrage 2 ">
                    <div class='px-2 pt-3'>
                        <p class='p-2 all_Actualites Filtra_Categorie' value='all'>Voir tous</p>
                        <p class='p-2 Filtra_Categorie' value='Actualites'>Actualités</p>
                        <p class='p-2 Filtra_Categorie' value='Evenements'>Évènements</p>
                        <p class='p-2 Filtra_Categorie' value='Activites'>Activités</p>
                        <div class='px-2 pt-1 pb-3'>
                            <strong class='p-2 my-3'>Filtre par date</strong>
                            <input type="date" class='form-control my-2'>
                        </div>
                        <div class='px-2 pt-1 pb-3'>
                            <strong class='p-2 my-3'>Contact</strong>
                            <div class="my-2">
                                <?php
                                if ($contacts_information) {
                                    foreach ($contacts_information as $item) {
                                        $icon_contact = $item['icon_contact'];
                                        $title_contact = $item['title_contact'];
                                        $info_contact = $item['info_contact']; ?>
                                        <div class="info_contact mb-2">
                                            <img class="icon_contact" src="<?php echo $icon_contact['url'] ?>"
                                                alt="<?php echo $icon_contact['title'] ?>" srcset="">
                                            <div>
                                                <?php echo $title_contact ?>
                                                <br>
                                                <?php echo $info_contact ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class='px-2 pt-1 pb-3'>
                            <strong class='p-2 my-3'>Trouvez-nous</strong>
                            <div class="row my-2">
                                <?php
                                if ($items_icons) {
                                    foreach ($items_icons as $item) {
                                        $Social_icon = $item['icon']; ?>
                                        <div class="col-2 mb-2">
                                            <img class="" src="<?php echo $Social_icon['url'] ?>"
                                                alt="<?php echo $Social_icon['title'] ?>">
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-12 col-sm-12">
                <div class="row justify-content-center All_card_actualite">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page number     
                    $args = array(
                        'post_type' => 'actualite', // Retrieve regular posts
                        'posts_per_page' => 6, // Number of posts per page
                        'paged' => $paged, // Current page number
                    );

                    $products_query = new WP_Query($args);
                    if ($products_query->have_posts()):
                        while ($products_query->have_posts()):
                            $products_query->the_post();
                            $post_id = get_the_ID();
                            
                            $terms = get_the_terms($post_id, 'categories_actualite');
                            $term_name = !empty($terms) && !is_wp_error($terms) ? esc_html($terms[0]->name) : '';
                            $image_actualite = get_field('image_actualite');
                            $title_actualite = get_field('title_actualite');
                            $description_actualite = get_field('description_actualite');
                            $date_actualite = get_field('date_actualite');
                            $current_date = date('Y-m-d');

                            ?>
                            
                            <div class="col-xl-4 col-md-6 col-sm-12 my-2">
                                <div class="Nosactualites_Cards card position-relative w-100 h-100 " style="max-width: 24rem;">
                                    <img class="card-img-top img_card_actualite" src='<?php echo $image_actualite['url'] ?>'
                                        alt='<?php echo $image_actualite['title'] ?>'>
                                    <button class='btn_Nos_actualites1 mt-2'>NOUVELLES</button>
                                    <button class='btn_Nos_actualites2 mt-2'><?php echo $term_name; ?></button>
                                    <div class=" card-body card-Actualites" style=''>
                                        <h5 class="card-title">
                                            <?php echo $title_actualite ?>
                                        </h5>
                                        <p class="card-text">
                                            <?php echo $description_actualite ?>
                                        </p>
                                        <div class="row justify-content-between">
                                            <div class="col-xl-6 col-sm-6 col-6" style='cursor:pointer'>
                                                <a href="" class='lire_plue'>Lire plus
                                                    <div class='arrow_Actualite d-inline px-2'>
                                                        <svg class="" xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512">
                                                            <path fill="#ffffff" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xl-5 col-sm-6 col-6">
                                                <p>
                                                    <?php echo $date_actualite ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <div class="pagination my-4">
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

    <section class='mt-5 pt-5'>
        <?php get_footer(); ?>
    </section>
</section>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.Filtra_Categorie').click(function () {
            // Reset background color for all categories
            $('.Filtra_Categorie').css('background-color', '#f8f8f8');
            $('.Filtra_Categorie').css('color', '#000');
            var Filtra_Categorie = $(this).attr('value');

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'get_actualite',
                    Filtra_Categorie: Filtra_Categorie
                },
                success: function (response) {
                    $('.All_card_actualite').html(response);
                }
            });
            // Change background color to #009640 when clicked
            $(this).css('background-color', '#009640');
            // Change  color to white when clicked
            $(this).css('color', '#ffffff');
        });
    });
</script>