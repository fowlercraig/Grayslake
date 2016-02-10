<?php Themewrangler::setup_page();get_header(/***Template Name: About */); ?>

<div <?php post_class('about bg__color-darkBlue');?>>
	<div class="page__content">
		<div class="fs-row">
			<div class="page__header text-center">
				<h1 class="page__title color__white">

<?php the_title(); ?>

				</h1>
			</div>
		</div>
		<div class="fs-row">
			<div class="fs-cell fs-lg-half fs-md-full fs-sm-full color__white">

<?php the_post(); the_content(); ?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>