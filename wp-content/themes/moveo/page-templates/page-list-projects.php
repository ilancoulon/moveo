<?php
/**
* Template Name: Project List page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header();
the_post();
$post = get_post();
$projects = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
?>
<div class="wrap">
<div class="row">
    <?php
    foreach ($projects as $project) {?>
        <div class="col-xs-12 col-sm-4" style="min-height:450px">
            <div class="text-center"><a href="<?php echo get_permalink($project->ID); ?>"><?php echo get_the_post_thumbnail( $project->ID, 'thumbnail' ); ?></a></div>
            <h4><?php echo $project->post_title; ?></h4>
                <?php echo apply_filters('the_excerpt', get_post_field('post_excerpt', $project->ID)); ?>
            <a href="<?php echo get_permalink($project->ID); ?>" class="more">En savoir plus</a>
        </div>
    <?php } ?>
</div>
</div>
<?php get_footer(); ?>
