<?php /* Template Name: Contacts Page */ get_header(); ?>

  <div class="wpHeaderTitlebar wpAreaColorIndustry">
    <h2><?php the_title(); ?></h2>
  </div>
  <div class="container wpBreadcrumb">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
  </div>

  <div class="container wpPageMainContainer">
    <div class="row">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 col-lg-12 wpPageMainContentContainer wpPageMainContentContainerTop wpAreaColorIndustry'); ?>>

          <div class="wpContentElement">
            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>
          </div>

        </div>
      <?php endwhile; endif; ?>

<?php get_footer(); ?>
