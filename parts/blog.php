<?php

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$current_args = array(
  'posts_per_page' => 5,
  'post_type'      => 'post',
  'order'          => 'ASC',
);
$current_posts = get_posts( $current_args );
?>

<div class="footer-block wrapper wrapper-extra equalize-target bg__color-bgGray">
  <header class="footer-header text-center">
    <h3><?php the_field('footer_blog', 6); ?></h3>
  </header>
  <?php foreach( $current_posts as $post ): setup_postdata( $post );  ?>
  <div <?php post_class('footer-post text-center'); ?>><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
  <?php endforeach; wp_reset_postdata(); ?>
</div>
