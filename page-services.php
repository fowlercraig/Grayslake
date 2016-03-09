<?php 

Themewrangler::setup_page();get_header(/***Template Name: Services */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

?>

<article <?php post_class(); ?> style="background-image:url(<?php echo $thumb_url ; ?>);">
<div class="fs-row">
<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">
<header class="hentry__header">
<h2 class="hentry__title text-center color__white"><span><?php the_title(); ?></span></h2>
</header>
<div class="hentry__content">
<?php $services = get_field('services'); ?>
<div class="fs-row">
<?php foreach ($services as $service): ?>

<div class="fs-cell fs-lg-half fs-md-half fs-sm-3">
<h4 class="text-center color__white"><?php echo $service['title']; ?></h4>
<?php echo $service['description']; ?>
</div>

<?php endforeach; ?>
</div>
</div>
</div>
</div>
</article>

<?php get_footer(); ?>

<?php Themewrangler::setup_page();get_header(/***Template Name: About */); ?>

<div <?php post_class('services bg__color-bgGray');?>>
	<div class="page__content">
		<div class="fs-row">
			<div class="page__header text-center">
				<h1 class="page__title"><?php the_title(); ?></h1>
			</div>
		</div><!-- fs-row -->
		<div class="fs-row">
			<div class="fs-cell fs-lg-half fs-md-full fs-sm-full">

<?php $services = get_field('services'); ?>
<?php foreach ($services as $service): ?>

					<a data-tabs-group="tab-1" class="btn btn__tab tab accordion__title" href="#<?php echo seoUrl($service['title']); ?>"><?php echo $service['title']; ?></a></li>

<?php endforeach; ?>

			</div>
			<div class="fs-cell fs-lg-half fs-md-full fs-sm-full">		

<?php foreach ($services as $service): ?>

				<div id="<?php echo seoUrl($service['title']); ?>"><?php echo $service['description']; ?></div>

<?php endforeach; ?>
			</div>
		</div><!-- fs-row -->
	</div><!-- page-content -->
</div><!-- services -->

<?php get_footer(); ?>
