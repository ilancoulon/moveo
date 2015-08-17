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
            <p>Convaincue de l'impact des pathologies ostéo-articulaires sur l'individu et la société, <strong>la Fondation MOVEO a pour vocation de moderniser leur traitement en y intégrant les nouvelles technologies</strong> afin de diminuer le risque d'erreur humaine et d'améliorer la performance médicale à chaque étape de la prise en charge du patient.</p>

        <p><a class="more" href="/fondation/missions">En savoir plus</a></p>
    </section>
    <?php
    the_post();
    $post = get_post();
    ?>
    <section class="actus">
        <img src="<?php echo get_template_directory_uri(); ?>/img/actu2.png" alt="Occulus Rift" class="pull-left" />
        <div>
            <h2>Actualités</h2>
            <p>
                <strong><?php the_title(); ?></strong>
            </p>
            <p>
                <?php the_content( __( 'En savoir plus', 'hbd-theme' )  ); ?>
            </p>
            <p>
                <a href="http://youtu.be/VU_L6x1eIzY" class="more">Voir le reportage</a>
                <a href="/projets/realite-virtuelle" class="more">Voir la page projet (nouvelle vidéo à télécharger)</a>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bdd.png" alt="Base de données" />
                    <p>
                       Améliorer le diagnostic et le suivi des patients
                    </p>
                    <a href="/projets/base-de-donnees" class="more">En savoir plus</a>
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
