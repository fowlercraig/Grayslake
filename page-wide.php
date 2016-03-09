<?php 

Themewrangler::setup_page();get_header(/***Template Name: Wide */); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

?>

<article <?php post_class(); ?> style="background-image:url(<?php echo $thumb_url ; ?>);">
<div class="fs-row">
<div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
<header class="hentry__header">
<h2 class="hentry__title text-center color__white"><span><?php the_title(); ?></span></h2>
</header>
<div class="hentry__content">
<?php the_post(); the_content(); ?>
</div>
</div>
</div>
</article>

<?php get_footer(); ?>