<?php /* Template Name: Widget #5 Propitki Page */ get_header(); ?>

  <div class="wpHeaderTitlebar wpAreaColorIndustry">
    <h2><?php the_title(); ?></h2>
  </div>
  <div class="container wpBreadcrumb">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
  </div>

  <div class="container wpPageMainContainer">
    <div class="row">

      <?php get_sidebar('five'); ?>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 col-lg-9 wpPageMainContentContainer wpPageMainContentContainerTop wpAreaColorIndustry'); ?>>

          <div class="wpContentElement">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>

        </div>
      <?php endwhile; endif; ?>

<?php get_footer(); ?>
