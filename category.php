<?php Themewrangler::setup_page();get_header(); ?>

<?php 
  $url = '/';
  wp_redirect( $url );
  exit;
?>

<?php get_footer(); ?>