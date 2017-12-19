<?php /* Template Name: Gallery Page */ get_header(); ?>

  <div class="wpHeaderTitlebar wpAreaColorIndustry">
    <h2><?php the_title(); ?></h2>
  </div>
  <div class="container wpBreadcrumb">
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
  </div>

  <div class="container wpPageMainContainer">
    <div class="row">

      <?php get_sidebar(); ?>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 col-lg-9 wpPageMainContentContainer wpPageMainContentContainerTop wpAreaColorIndustry'); ?>>

          <div class="wpContentElement">
            <h2><?php the_title(); ?></h2>

            <?php $images = get_field('gallery'); if( $images ): ?>
              <ul class="gallery-list">
                  <?php foreach( $images as $image ): ?>
                      <li>
                          <a href="<?php echo $image['url']; ?>" rel="lightbox">
                               <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                          </a>
                          <p><?php echo $image['caption']; ?></p>
                      </li>
                  <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php the_content(); ?>
          </div>

        </div>
      <?php endwhile; endif; ?>

<?php get_footer(); ?>
