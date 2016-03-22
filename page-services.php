<?php 

Themewrangler::setup_page();get_header(/***Template Name: Services */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

?>

<article <?php post_class(); ?> style="background-image:url(<?php echo $thumb_url ; ?>);">
<div class="fs-row">
<div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3 fs-centered">

<header class="hentry__header">
<h2 class="hentry__title text-center color__white"><span><?php the_title(); ?></span></h2>
</header>

<div class="hentry__content hentry__content--md">

<div class="fs-row">

<?php $services = get_field('services'); ?>
<?php $i = 0; foreach ($services as $service): ?>

<?php if($i == 0): ?><div class="fs-cell fs-lg-half fs-md-full fs-sm-3"><?php endif; ?>
<?php if($i == 2): ?><div class="fs-cell fs-lg-half fs-md-full fs-sm-3"><?php endif; ?>

<div class="text-left">
<hr class="divider bg__color-white--50">
<h4 class="text-left color__white"><?php echo $service['title']; ?></h4>
<?php echo $service['description']; ?>
</div>

<?php if($i == 1): ?></div><?php endif; ?>
<?php if($i == 4): ?></div><?php endif; ?>

<?php $i++; endforeach; ?>
</div>

</div>
</div>
</div>
</div>
</div>
</article>

<?php get_footer(); ?>