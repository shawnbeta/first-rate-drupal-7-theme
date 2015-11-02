<div class="mask swMenuToggler"></div>
<div id="swContentWrapper" class="swContainer clearfix">

<?php include DRUPAL_ROOT . '/sites/all/themes/sw_theme/includes/header.tpl.php'; ?>


<div class="navWrapper clearfix">
    <a class="swMenuToggler hideOverXS"><i class="fa fa-close"></i></a>
    <?php   print render($main_menu); ?>
</div>

    <?php if(drupal_is_front_page()): ?>
        <div class="marquee">
            <img src="<?php print base_path() . '/sites/default/files/yard1.jpg'; ?>">
        </div>
    <?php endif; ?>


    <div class="swContent clearfix">
	  <div class="mainRegion col-md-9">
          <a id="main-content"></a>
          <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>

          <?php if(!drupal_is_front_page()): ?>
                  <header class="clearfix">
                    <h1><?php print $title ?></h1>
                    <?php print render($page['header_details']); ?>
                  </header>
          <?php endif; ?>  <!-- End of !drupal_is_front_page() -->

          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
              <ul class="action-links">
              <?php print render($action_links); ?>
              </ul>
          <?php endif; ?>
          <div class="clearfix">
              <?php print render($page['content_top']); ?>
          </div>
          <div class="clearfix">
              <?php print render($page['content']); ?>
          </div>
          <div class="clearfix">
              <?php print render($page['content_bottom']); ?>
          </div>
      </div>

        <div class="col-md-3 swSidebar">
                <?php print render($page['sidebar']); ?>
        </div>

</div>





<footer class="clearfix pageFooter">
    <?php   print render($main_menu); ?>

</footer>

</div>
