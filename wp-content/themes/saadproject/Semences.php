<?php
/**
 * Template Name: Semences in produit
 * Description: This is Semences .
 *
 */

?>
<?php get_header();

$image_semences_about = get_field('image_semences_about');
$icon_semences_about = get_field('icon_semences_about');
$title_semences = get_field('title_semences');
$first_paragraph_semences = get_field('first_paragraph_semences');
$list_paragraph_semences = get_field('list_paragraph_semences');
$explorer_nos_categories_de_semences = get_field('explorer_nos_categories_de_semences');
$text_explorer_nos_categories_de_semences = get_field('text_explorer_nos_categories_de_semences');
$product_explorer_nos_categories_de_semences = get_field('product_explorer_nos_categories_de_semences');
?>
<?php
if ($post->post_parent=='Semences in produits') {
    $page = $post->post_parent;
} else {
    $page = $post->ID;
}
$children = wp_list_pages(array('child_of' => $page, 'echo' => '0', 'title_li' => ''));
if ($children) {
    echo "<ul>\n".$children."</ul>\n";
}
?>

<section class="container my-5 py-5">
    <div class="row justify-content-around my-5">
        <div class="col-xl-5 col-sm-12 p-1 image_semences_about">
            <img class="w-100 bg_in_image z-2" src="<?php echo $image_semences_about; ?>" alt="" srcset="">
        </div>
        <div class="col-xl-5 col-sm-12 p-1 ">
            <img src="<?php echo $icon_semences_about; ?>" alt="" srcset="">
            <h2 class='Title_in_The_Content'>
                <?php echo $title_semences ?>
            </h2>
            <p>
                <?php echo $first_paragraph_semences ?>
            </p>
            <?php
            if ($list_paragraph_semences) {
                foreach ($list_paragraph_semences as $item) {
                    $title = $item['list_semences']; ?>
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
        <?php echo $title_semences; ?>
    </p>
    <div class="row justify-content-between">
        <div class="col-xl-5 col-sm-12">
            <h2 class='Title_in_The_Content'>
                <?php echo $explorer_nos_categories_de_semences; ?>
            </h2>
        </div>
        <div class="col-xl-6 col-sm-12">
            <p class='text_right_in_Content' style="font-size: 16px;">
                <?php echo $text_explorer_nos_categories_de_semences; ?>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <?php
            if ($product_explorer_nos_categories_de_semences) {
                foreach ($product_explorer_nos_categories_de_semences as $item) {
                    $title = $item['name_product'];
                    $background_image_in_product = $item['background_image_in_product']; ?>
                    <div class="col-xl-3 col-md-6 col-sm-12 my-3  image-container px-2">
                        <img src=<?php echo $background_image_in_product; ?>>
                        <p class="text-overlay">
                            <?php echo $title; ?>
                        </p>
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


<?php
get_template_part('template/content', 'contact');
?>

<section class='mt-5 pt-5'>
    <?php get_footer(); ?>
</section>