<?php
/**
 * Template Name: Categorie
 * Description: This is Categorie .
 *
 */

?>
<?php get_header();
$category_id = get_queried_object_id(); // Get the ID of the current category
$image_categorie_header= get_field('image_categorie_header', 'categorie_' . $category_id);
$image_categorie_about = get_field('image_categorie_about', 'categorie_' . $category_id);
$icon_categorie_about = get_field('icon_categorie_about', 'categorie_' . $category_id);
$title_categorie = get_field('title_categorie', 'categorie_' . $category_id);
$first_paragraph_categorie = get_field('first_paragraph_categorie', 'categorie_' . $category_id);
$list_paragraph_categorie = get_field('list_paragraph_categorie', 'categorie_' . $category_id);
$explorer_nos_categories_de_categorie = get_field('explorer_nos_categories_de_categorie', 'categorie_' . $category_id);
$text_explorer_nos_categories_de_categorie = get_field('text_explorer_nos_categories_de_categorie', 'categorie_' . $category_id);
$explorer_nos_categories_de_categorie = get_field('explorer_nos_categories_de_categorie', 'categorie_' . $category_id);
$product_explorer_nos_categories_de_categorie = get_field('product_explorer_nos_categories_de_categorie', 'categorie_' . $category_id);
?>

 <style>
    .mainPhoto{
        background-image: url('<?php echo $image_categorie_header; ?>' )!important;
        background-repeat: no-repeat;
        background-size: cover;
        }
        .sub_categorie {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(247px, 1fr));
            gap:1rem;

        }

        .card-cat {
            padding: 2.5rem 2rem;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: .5rem;
        }
        .card-cat:hover {
            background-color: rgba(0, 99, 69, 1);
            transition: all 0.5s ease;
            border-radius: 8px;
            background-image: none !important;
        }
    </style>
<section class="container my-5 py-5">
    <div class="row justify-content-around my-5">
        <div class="col-xl-5 col-sm-12 p-1 image_semences_about">
            <img class="w-100 bg_in_image z-2" src="<?php echo $image_categorie_about; ?>" alt="" srcset="">
        </div>
        <div class="col-xl-5 col-sm-12 p-1 ">
            <img src="<?php echo $icon_categorie_about; ?>" alt="" srcset="">
            <h2 class='Title_in_The_Content'>
                <?php echo $title_categorie ?>
            </h2>
            <p>
                <?php echo $first_paragraph_categorie ?>
            </p>
            <?php
            if ($list_paragraph_categorie) {
                foreach ($list_paragraph_categorie as $item) {
                    $title = $item['list_categorie']; ?>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="8" fill="#01853E" />
                            <path d="M5 8L7 10L11 6" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <?php echo $title ?>
                    </p>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>


<section class="container my-5 py-5">
    <p class='Semences'>
        <?php echo $title_categorie; ?>
    </p>
    <div class="row justify-content-between">
        <div class="col-xl-5 col-sm-12">
            <h2 class='Title_in_The_Content'>
                <?php echo $explorer_nos_categories_de_categorie; ?>
            </h2>
        </div>
        <div class="col-xl-6 col-sm-12">
            <p class='text_right_in_Content' style="font-size: 16px;">
                <?php echo $text_explorer_nos_categories_de_categorie; ?>
            </p>
        </div>
    </div>
   
    <div class="container my-5">
            <div class="sub_categorie">
                <?php
                if ($product_explorer_nos_categories_de_categorie) {
                    foreach ($product_explorer_nos_categories_de_categorie as $item) {
                        $title = $item['name_product'];
                        $background_image_in_product = $item['background_image_in_product']; ?>
                        <div class="card-cat image-container" style="background-image:url('<?php echo $background_image_in_product;?>')" >
                            <a href="<?php echo $title['url']; ?>" class="text-overlay">
                                <?php echo $title['title']; ?>
                            </a>
                            <div class="svg-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="8" viewBox="0 0 17 8" fill="none">
                                    <path
                                        d="M16.0197 4.35355C16.215 4.15829 16.215 3.84171 16.0197 3.64645L12.8378 0.464465C12.6425 0.269203 12.3259 0.269203 12.1307 0.464465C11.9354 0.659727 11.9354 0.97631 12.1307 1.17157L14.9591 4L12.1307 6.82843C11.9354 7.02369 11.9354 7.34027 12.1307 7.53553C12.3259 7.7308 12.6425 7.7308 12.8378 7.53553L16.0197 4.35355ZM0.812531 4.5L15.6662 4.5L15.6662 3.5L0.81253 3.5L0.812531 4.5Z"
                                        fill="white" />
                                </svg>

                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
    </div>
</section>

<section class='mt-5 pt-5'>
    <?php get_footer(); ?>
</section>