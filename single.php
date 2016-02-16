<?php Themewrangler::setup_page();get_header(); ?>

<div class="fs-row">
<div class="fs-cell fs-all-full">
<article <?php post_class('bg__color-bgGray'); ?>>
<div class="fs-row">
<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered">

<header class="text-center"><h1 class="hentry__title"><?php the_title(); ?></h1></header>

<?php the_post(); the_content(); ?>
<hr class="invisible">

</div>
</div>
</article>
</div>
</div>

<?php get_footer(); ?>