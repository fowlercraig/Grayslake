<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<?php $features = get_field('featured'); ?>

<div class="home">
	<div class="fs-row">
		<div class="fs-cell fs-lg-8 fs-md-full fs-sm-full">

<?php if($features): $i = 0; foreach($features as $feature): $i++; if ($i == 1): ?>

			<div class="home__module banner bg__color-bgGray relative">
				<div class="banner__content covered">
					<a href="<?php echo $feature['url']; ?>" class="covered covered__link"></a>
					<div class="wrapper wrapper__extra">
						<h2 class="home__module-title bannter__title"><span><?php echo $feature['title']; ?></span></h2>
						<div class="home__module-desc"><?php echo $feature['desc']; ?></div>
					</div>
				</div>
				<?php if($feature['image']): ?><div class="banner__bg covered" style="background-image:url(<?php echo $feature['image']['sizes']['large']; ?>);"></div><?php endif;?>
			</div>

			<hr class="invisible compact fs-lg-hide fs-md-full fs-sm-full">

<?php endif; endforeach; endif; ?>

		</div>
		<div class="fs-cell fs-lg-4 fs-md-full fs-sm-full">

<?php if($features): $i = 0; foreach($features as $feature): $i++; if ($i != 1): ?>

			<div class="home__module banner banner-small bg__color-bgGray relative">
				<div class="banner__content covered">
					<a href="<?php echo $feature['url']; ?>" class="covered covered__link"></a>
					<div class="wrapper wrapper__extra">
						<h2 class="home__module-title bannter__title"><span><?php echo $feature['title']; ?></span></h2>
						<div class="home__module-desc"><?php echo $feature['desc']; ?></div>
					</div>
				</div>
				<?php if($feature['image']): ?><div class="banner__bg covered" style="background:url(<?php echo $feature['image']['sizes']['large']; ?>);"></div><?php endif;?>
			</div>

			<hr class="invisible compact">

<?php endif; endforeach; endif; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>