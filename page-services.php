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

<?php $services = get_field('services'); ?>
<nav>
<?php foreach ($services as $service): ?>
<a href="#<?php echo seoUrl($service['title']); ?>" class="btn btn--tab color__white accent tab js-tabs" data-tabs-group="tab-1"><?php echo $service['title']; ?></a>
<?php endforeach; ?>
</nav>

<div class="fs-row">

<?php $services = get_field('services'); ?>
<?php $i = 0; foreach ($services as $service): ?>

<div id="<?php echo seoUrl($service['title']); ?>" class="fs-cell fs-lg-10 fs-md-full fs-sm-3 fs-centered">
<hr class="divider bg__color-white--50">
<!--<h4 class="text-left color__white"><?php echo $service['title']; ?></h4>-->
<?php echo $service['description']; ?>
</div>

<?php $i++; endforeach; ?>
</div>

</div>
</div>
</div>
</div>
</div>
</article>

<?php get_footer(); ?>