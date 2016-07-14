</div>
<!-- Content Wrapper -->

<hr class="invisible">

<div class="footer-clients fs-row">
  <div class="fs-cell fs-all-full">
    <div class="footer-clients__carousel carousel" data-carousel-options='{"show": 4, "pagination": false, "controls":true, "autoAdvance": true, "autoTime": 5000}'>
<?php the_field('client_list',18); ?>
<?php $images = get_field('client_gallery'); ?>
<?php foreach($images as $image): ?>
      <div class="wrapper bg__color-white rounded">
        <img src="<?php echo $image['url']; ?>" class="img-responsive" />
      </div>
<?php endforeach; ?>
    </div>
  </div>
</div>

<hr class="invisible compact">

<div id="footer__misc" class="equalize" data-equalize-options='{"target":".equalize-target", "minWidth":"980px"}'>
  <div class="fs-row">
    <div class="fs-cell fs-lg-6 fs-md-full fs-sm-3">

<?php include locate_template('parts/blog.php'); ?>

    </div>
    <hr class="invisible compact fs-cell fs-lg-hide fs-md-full fs-sm-3">
    <div class="fs-cell fs-lg-6 fs-md-full fs-sm-3">

<?php include locate_template('parts/contact.php'); ?>

    </div>
  </div>
</div>

<hr class="invisible compact">

<footer id="footer">
  <div class="fs-row">
    <div class='fs-cell fs-lg-11 fs-md-6 fs-sm-3'>
      <div class="text-center">

<?php the_field('footer',6); ?>

      </div>
    </div>
  </div>
</footer>


</div><!--Wrapper-->

<?php wp_footer(); ?>
<?php include locate_template('parts/mobile-menu.php' ); ?>

</body>
</html>
