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
