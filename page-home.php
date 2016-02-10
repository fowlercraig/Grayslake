<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<?php $features = get_field('featured'); ?>

<div class="home">
	<div class="fs-row">
		<div class="fs-cell fs-lg-8 fs-md-full fs-sm-full">

<?php if($features): $i = 0; foreach($features as $feature): $i++; if ($i == 1): ?>

			<div class="banner bg__color-bgGray relative">
				<div class="banner__content covered">
					<div class="wrapper wrapper__extra">
						<h2 class="bannter__title"><?php echo $feature['title']; ?></h2>
						<?php echo $feature['desc']; ?>
					</div>
				</div>
				<?php if($feature['image']): ?><div class="banner__bg covered" style="background-image:url(<?php echo $feature['image']['sizes']['large']; ?>);"></div><?php endif;?>
			</div>

<?php endif; endforeach; endif; ?>

		</div>
		<div class="fs-cell fs-lg-4 fs-md-full fs-sm-full">

<?php if($features): $i = 0; foreach($features as $feature): $i++; if ($i != 1): ?>

			<div class="banner banner-small bg__color-bgGray relative">
				<div class="banner__content covered">
					<div class="wrapper wrapper__extra">
						<h2 class="bannter__title"><?php echo $feature['title']; ?></h2>
						<?php echo $feature['desc']; ?>
					</div>
				</div>
				<?php if($feature['image']): ?><div class="banner__bg covered" style="background:url(<?php echo $feature['image']['sizes']['large']; ?>);"></div><?php endif;?>
			</div>

<?php endif; endforeach; endif; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>