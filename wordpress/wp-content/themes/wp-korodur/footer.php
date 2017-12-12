        </div>
      </div>
      <!--TYPO3SEARCH_end-->
    </main>
    <footer>
      <div class="wpPageFooterContainerTop">
        <ul class="nav nav-inline wpPageFooterNav">
          <li class="nav-item"><a href="http://www.korodur.de/en/imprint.html" class="nav-link">Imprint</a></li>
          <li class="nav-item"><a href="http://www.korodur.de/en/terms-and-conditions.html" class="nav-link">Terms and Conditions</a></li>
          <li class="nav-item"><a href="http://www.korodur.de/en/privacy-statement.html" class="nav-link">Privacy Statement</a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="container-fluid wpPageFooterContainer">
        <div class="wpPageFooterImprint">
          &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>.
        </div>
      </div>
    </footer>
  </div>
  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/tether.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.offcanvas.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/photoswipe.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/photoswipe-ui-default.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/init.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js" type="text/javascript"></script>
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>
        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"> </button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"> </button>
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
