<?php get_header(); ?>

<?php the_post(); $post = get_post(); $imgUrl = get_post_meta($post->ID, 'image_bordure_url', true); ?>
<div class="page <?php echo $post->post_name; ?>" <?php post_class(); ?>>
    <div class="wrap main<?php if ($imgUrl != "") { echo " containsBorderImage"; } ?>">
        <?php if ($imgUrl != "") { ?><img src="<?php echo $imgUrl ?>" class="projet" /><?php } ?>
        <div class="description">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
