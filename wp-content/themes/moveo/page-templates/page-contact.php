<?php
/**
* Template Name: Contact
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header();

the_post();
$post = get_post();
?>
<div class="wrap">
    <h1>Contact</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm contact-form">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col-md-4">
            <legend>Nous</legend>
            <address class="row">
                <div class="col-xs-2">
                    <span class="glyphicon glyphicon-home"></span><br>
                    <br>
                    <br>
                    <br>
                    <span class="glyphicon glyphicon-earphone"></span><br>
                    <br>
                    <span class="glyphicon glyphicon-envelope"></span>
                </div>
                <div class="col-xs-10">
                    <strong>M. Baldacci</strong><br>
                    43 avenue Marceau<br>
                    75116 Paris<br>
                    <br>
                    +33 7 86 07 73 00<br>
                    <br>
                    <a href="mailto:contact@fondation-moveo.com">contact@fondation-moveo.com</a>
                </div>
            </address>
        </div>
    </div>
</div>
</div>


<?php get_footer(); ?>
