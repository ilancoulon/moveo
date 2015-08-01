<?php
/**
* Template Name: Project Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header();

the_post();
$post = get_post();
?>
<div class="page <?php echo $post->post_name; ?>" <?php post_class(); ?>>
    <div class="wrap main">
        <img src="<?php echo get_post_meta($post->ID, 'image_bordure_url', true); ?>" class="projet" />
        <div class="description">
            <?php the_content(); ?>
        </div>
    </div>
    <?php
    $chercheur = array();
    $chercheur["nom"] = get_post_meta($post->ID, 'chercheur_nom', true);
    $chercheur["attribut"] = get_post_meta($post->ID, 'chercheur_attribut', true);
    $chercheur["photo_url"] = get_post_meta($post->ID, 'chercheur_photo_url', true);
    $chercheur["description"] = get_post_meta($post->ID, 'chercheur_description', true);
    if ($chercheur["nom"] != "" && $chercheur["photo_url"] != "" && $chercheur["description"] != "") {
    ?>
        <div class="rencontre">
            <div class="wrap">
                <div class="portrait">
                    <img src="<?php echo $chercheur["photo_url"]; ?>" alt="<?php echo $chercheur["nom"]; ?>" /><br>
                    <span class="chercheur"><?php echo $chercheur["nom"]; ?></span><br>
                    <span class="attribut"><?php echo $chercheur["attribut"] ?></span>
                </div>
                <h2>Rencontre avec le chercheur</h2>
                <div class="chercheur"><?php echo $chercheur["nom"]; ?></div>
                <p>
                    <?php echo $chercheur["description"]; ?>
                </p>
            </div>
        </div>
    <?php } ?>
<?php get_footer(); ?>
