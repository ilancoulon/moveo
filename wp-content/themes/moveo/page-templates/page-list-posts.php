<?php
/**
* Template Name: Posts List page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header();
the_post();
$post2 = get_post();
$posts = get_posts();
?>
<div class="wrap">
  <h2>Espace<br />
  Presse</h2>
  <p>Notre équipe se tient à votre disposition pour toute information :</p>
  <p class="text-center"><strong> contact@Fondation-moveo.com<br />
  +33 7 86 07 73 00</strong></p>
  <?php
  foreach ($posts as $post) {
    $link = get_post_meta($post->ID, 'lien', true);
    $label = get_post_meta($post->ID, 'label', true);
      ?>
      <p><?php echo apply_filters( 'get_the_date', $post->post_date ); ?></p>
      <h3><?php echo apply_filters( 'the_title', $post->post_title ); ?></h3>
      <p><?php echo apply_filters( 'the_content', $post->post_content ); ?></h3>
      <a href="<?php echo $link; ?>" class="more"><?php echo $label; ?></a>
      <br/><br/>
  <?php } ?>
  </div>
<?php get_footer(); ?>
