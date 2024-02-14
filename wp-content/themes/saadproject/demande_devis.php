<?php
/**
 * Template Name: demander_devis 
 * Description: This is demander_devis .
 *
 */

?>
<?php get_header();

?>
<?php
$Emballage = isset($_GET['Emballage']) ? $_GET['Emballage'] : ''; // Set $Emballage to $_GET['Emballage'] if it exists, otherwise set it to an empty string
$Quantite = isset($_GET['Quantite']) ? $_GET['Quantite'] : '';
$post_id = isset($_GET['post_id']) ? $_GET['post_id'] : ''; // Set $Quantite to $_GET['Quantite'] if it exists, otherwise set it to an empty string
$post = get_post($post_id);
$image_product = get_field('image_product', $post_id);
$name_product = get_field('name_product', $post_id);
$description_product = get_field('description_product', $post_id);
?>
<section class="background_demander_devis">
    <section class="conatiner py-5">

        <div class="row justify-content-center mt-5">
            <div class="col-10 content_in_demander_devis">
                <a href="javascript:history.back()">
                    <div class='back_on_products mx-5'></div>
                </a>
                <div class='text-center'>
                    <h2 class='title_in_content'>Demander un devis</h2>
                    <p class='paragraph_in_content'>Veuillez remplir le formulaire ci-dessous pour Demander un devis</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="container my-5">
                            <section class='content_in_post row justify-content-between'>
                                <div class="col-xl-6 col-sm-12">
                                    <div class="row py-4">
                                        <div class="col-xl-4 col-sm-12">
                                            <div class="row justify-content-center my-1">
                                                <div class="col-10 image_product_in_demande_devis">
                                                    <img style="width: 100%;height: 100%;" class=""
                                                    src="<?php echo $image_product ?>" alt="" srcset="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-sm-12 align-self-center">
                                            <h2 class='title_in_content text-start'><?php echo $name_product ?></h2>
                                            <p class='paragraph_product'><?php echo $description_product ?></p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-5 col-sm-12">
                                    <div class="row align-items-center justify-content-end" style='height:150px;'>
                                        <div class="col-xl-6 col-sm-12">


                                            <select class="form-select select_in_details"
                                                aria-label="Default select example">
                                                <?php if (!empty($Emballage)): ?>
                                                    <option value="<?php echo $Emballage ?>" selected>
                                                        <?php echo $Emballage ?>
                                                    </option>
                                                <?php endif; ?>
                                                <option disabled>Emballage</option>
                                                <option value="10" <?php if ($Emballage == "10Kg")
                                                    echo "hidden"; ?>>10Kg
                                                </option>
                                                <option value="15" <?php if ($Emballage == "15Kg")
                                                    echo "hidden"; ?>>15Kg
                                                </option>
                                                <option value="20" <?php if ($Emballage == "20Kg")
                                                    echo "hidden"; ?>>20Kg
                                                </option>
                                                <option value="25" <?php if ($Emballage == "25Kg")
                                                    echo "hidden"; ?>>25Kg
                                                </option>

                                            </select>
                                        </div>
                                        <div class="col-xl-6 col-sm-12">
                                            <input type="text" class='form-control' value='<?php if (!empty($Quantite)) {
                                                echo $Quantite;
                                            } ?>'>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <section class='my-5'>
                                <?php echo do_shortcode('[contact-form-7 id="71d6b1a" title="Demander un devis"]') ?>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class='mt-5 pt-5'>
        <?php get_footer(); ?>
    </section>
</section>