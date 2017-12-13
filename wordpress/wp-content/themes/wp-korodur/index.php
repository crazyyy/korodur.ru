<?php get_header(); ?>

  <div class="wpHeaderTitlebar wpAreaColorIndustry">
    <h2><?php _e( 'Latest Posts', 'wpeasy' ); ?></h2>
  </div>
  <div class="container wpBreadcrumb">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
  </div>

  <div class="container wpPageMainContainer">
    <div class="row">

      <?php get_sidebar(); ?>

      <div class="col-md-8 col-lg-9 wpPageMainContentContainer wpPageMainContentContainerTop wpAreaColorIndustry">

        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div>

<?php get_footer(); ?>
