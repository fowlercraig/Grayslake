<?php
	$current_posts = get_field('testimonials',686);
?>

<div class="footer-block wrapper wrapper-extra equalize-target bg__color-bgGray">
  <header class="footer-header text-center">
    <h3><?php the_field('footer_blog', 6); ?></h3>
  </header>
  <div class="carousel" data-carousel-options='{"autoHeight":true,"controls":false, "autoAdvance": true, "autoTime": 10000}'>
  <?php foreach( $current_posts as $post ):  ?>
  	<div class="footer-post text-center">
  		<div class="footer-post__content"><?php echo $post['quote']; ?></div>
      <small><?php echo $post['attribution'] ?></small>
  		<!--<a class="footer-post__name" href="<?php echo $post['link'] ?><"><?php echo $post['attribution'] ?></a>-->
  	</div>
  <?php endforeach;  ?>
  </div>
</div>
