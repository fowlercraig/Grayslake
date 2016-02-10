</div>
<!-- Content Wrapper -->

<hr class="invisible compact">

<div id="footer__misc">
  <div class="fs-row">
    <div class="fs-cell fs-lg-5 fs-md-half fs-sm-3">

<?php include locate_template('parts/blog.php'); ?>

    </div>
    <div class="fs-cell fs-lg-7 fs-md-half fs-sm-3">

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
