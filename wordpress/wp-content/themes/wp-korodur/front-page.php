<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class('wpHeaderTitlebar wpAreaColorDefault'); ?>>
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="wpPageMainContentContainer wpPageBoxesContainer wpPageMainContentContainerFullWidth">

        <?php if( have_rows('top_blocks_1') ): ?>
          <div class="wpSquareteaser">

            <?php while ( have_rows('top_blocks_1') ) : the_row(); ?>

              <?php $image = get_sub_field('image'); ?>

              <?php if( get_sub_field('imageornot') ) { ?>

                <div class="col-xs-6 col-md-3 col-xl-2 wpSquareteaserBox">
                  <img src="<?php echo $image['url']; ?>" width="350" height="350" alt="<?php echo $image['alt']; ?>">
                </div>

              <?php } else { ?>

                <div class="col-xs-6 col-md-3 col-xl-2 wpSquareteaserBox">
                  <a href="<?php the_sub_field('link'); ?>">
                    <img src="<?php echo $image['url']; ?>" width="350" height="350" alt="<?php the_sub_field('sub_field_name'); ?>">
                    <div class="wpAreaColorDesign" style="background-color: <?php the_sub_field('color'); ?>"></div>
                    <span><?php the_sub_field('title'); ?></span>
                  </a>
                </div>

              <?php } ?>

            <?php  endwhile; ?>

          </div>
        <?php endif; ?>

        <?php if( have_rows('top_blocks_2') ): ?>
          <div class="wpSquareteaser">

            <?php while ( have_rows('top_blocks_2') ) : the_row(); ?>

              <?php $image = get_sub_field('image'); ?>

              <?php if( get_sub_field('imageornot') ) { ?>

                <div class="col-xs-6 col-md-3 col-xl-2 wpSquareteaserBox">
                  <img src="<?php echo $image['url']; ?>" width="350" height="350" alt="<?php echo $image['alt']; ?>">
                </div>

              <?php } else { ?>

                <div class="col-xs-6 col-md-3 col-xl-2 wpSquareteaserBox">
                  <a href="<?php the_sub_field('link'); ?>">
                    <img src="<?php echo $image['url']; ?>" width="350" height="350" alt="<?php the_sub_field('sub_field_name'); ?>">
                    <div class="wpAreaColorDesign" style="background-color: <?php the_sub_field('color'); ?>"></div>
                    <span><?php the_sub_field('title'); ?></span>
                  </a>
                </div>

              <?php } ?>

            <?php endwhile; ?>

          </div>
        <?php endif; ?>

      </div>

      <div class="container wpPageMainContainer">
        <div class="row">
          <div class="col-md-12">
            <div class="wpPageMainContentContainer wpPageMainContentContainerFullWidth">
              <div class="wpContentElement">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php if( have_rows('bottom_block') ): ?>
        <div class="wpPageMainContainer">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="wpPageMainContentContainer wpPageMainContentContainerFullWidth">
                  <h3 class="csc-firstHeader"><?php the_field('bottom_block_title'); ?></h3>
                  <div class="wpContentElement wpReferenceList">
                    <ul>

                      <?php while ( have_rows('bottom_block') ) : the_row(); ?>
                        <?php $image = get_sub_field('image'); ?>
                        <li class="col-xs-12 col-sm-6 col-lg-3 col-xl-3">
                          <a href="<?php the_sub_field('link'); ?>">
                            <div><?php the_sub_field('title'); ?></div>
                            <img src="<?php echo $image['url']; ?>" width="850" height="850" alt="<?php the_sub_field('title'); ?>"></a>
                        </li>
                      <?php endwhile; ?>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
