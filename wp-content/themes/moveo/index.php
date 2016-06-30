<?php
/**
* Template Name: Home Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<?php
get_header();
?>
<div class="wrap">
    <section class="manifeste">
        <p>
            <p>
                La prochaine révolution médicale sera numérique. Il s’agit d’un enjeu médical mais également

économique puisque la santé représente 10% du PIB des pays industrialisés. La <strong>Fondation MOVEO</strong> a

pour objectif d’accélérer la révolution numérique en chirurgie, et souhaite pour cela créer un institut

public de recherche et de formation en chirurgie unique au monde : l’Institut MOVEO se veut être un

carrefour entre le monde du soin, de la recherche et de l’industrie.
                
                
            </p>

        <p><a class="more" href="/fondation/missions">En savoir plus</a></p>
    </section>
    <?php
    the_post();
    $post = get_post();
    $imgUrl = get_post_meta($post->ID, 'image_miniature_url', true);
    $link = get_post_meta($post->ID, 'lien', true);
    $label = get_post_meta($post->ID, 'label', true);
    ?>
    <section class="actus">
        <img src="<?php echo $imgUrl; ?>" class="pull-left" />
        <div>
            <h2>Actualités</h2>
            <p>
                <strong><?php the_title(); ?></strong>
            </p>
            <p>
                <?php the_content( __( 'En savoir plus', 'hbd-theme' )  ); ?>
            </p>
            <p>
                <a href="<?php echo $link; ?>" class="more"><?php echo $label; ?></a>
            </p>
        </div>
    </section>
    <section class="projets">
        <h2>Nos projets</h2>

            <div class="row">
                <div class="col-sm-4 col-xs-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gopro.png" alt="Dr. Gregory équipé d'une GoPro" />
                    <p>
                        Diminuer le risque d&#039;erreur humaine en chirurgie
                    </p>
                    <a href="/projets/realite-augmentee" class="more">En savoir plus</a>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bulle-institut.png" alt="Base de données" />
                    <p>
                       Créer l'Institut de recherche Moveo
                    </p>
                    <a href="/projets/institut-moveo/" class="more">En savoir plus</a>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/formation.png" alt="Formation" />
                    <p>
                        Améliorer la formation et le training des chirurgiens
                    </p>
                    <a href="/projets/realite-virtuelle" class="more">En savoir plus</a>
                </div>
            </div>
    </section>
    <section class="partenaires">
        <h2 class="pull-right">Ils nous soutiennent </h2>

        <p class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/partenaires.png" alt="Partenaires" />
        </p>
    </section>
</div>
<?php get_footer(); ?>
