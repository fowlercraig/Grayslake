<?php 

Themewrangler::setup_page();get_header(/***Template Name: About */); 
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
				<nav>
					<a href="#about" class="btn btn--tab color__white accent tab js-tabs" data-tabs-group="tab-1">About the Firm</a>
					<a href="#meet-the-principal" class="btn btn--tab color__white accent tab js-tabs" data-tabs-group="tab-1">Meet Our Principal</a>
					<a href="#client-list" class="btn btn--tab color__white accent tab js-tabs" data-tabs-group="tab-1">Client List</a>
				</nav>
				<div class="fs-row">
					<div id="about" class="fs-cell fs-lg-10 fs-md-full fs-sm-3 fs-centered">
						<hr class="divider bg__color-white--50">
						<?php the_field('about_the_firm'); ?>
					</div>
					<div id="meet-the-principal" class="fs-cell fs-lg-10 fs-md-full fs-sm-3 fs-centered">
						<hr class="divider bg__color-white--50">
						<?php the_field('meet_principal'); ?>
					</div>
					<div id="client-list" class="fs-cell fs-lg-10 fs-md-full fs-sm-3 fs-centered">
						<hr class="divider bg__color-white--50">
						<?php the_field('client_list'); ?>
						<?php $images = get_field('client_gallery'); ?>
						<div class="fs-row">
						<?php foreach($images as $image): ?>
							<div class="fs-cell fs-lg-third fs-md-third fs-sm-half bg--white">
								<div class="wrapper bg__color-white rounded">
									<img src="<?php echo $image['url']; ?>" class="img-responsive" />
								</div>
								<hr class="invisible compact">
							</div>
						<?php endforeach; ?>
						</div>
					</div>
				</div><!-- Row -->
			</div>
		</div>
	</div>
</article>

<?php get_footer(); ?>