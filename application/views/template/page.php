<?php defined('SYSPATH') or die('No direct script access.');?>
<div id="page">
          <div id="screen_body">
            <!-- page header -->
            <div id="page_header_wrapper">
              <div id="page_header">
                  <?php if (isset($page_header)) : ?>
                <div class="page_header">
                    <h1><?php echo $page_header?></h1>
                </div>
                  <?php endif?>
              </div>
            </div>
            <!--// page header -->
<!-- Highslide modal html window -->
<?php if (isset($modal_window_content)) : ?>
<div class="modal_window_content">
    <?php echo $modal_window_content; ?>
</div>
<?php endif; ?>
<!-- //Highslide modal html window -->
            <!-- page contents -->
            <div id="page_contents_wrapper" class="clearfix">
                <div id="page_toolbar">
                    <?php if (isset($page_toolbar)) : ?>
                        <?php echo $page_toolbar?>
                    <?php endif?>
                </div>
              <!-- main column -->
              <div id="page_main_column" class="column">
                  <div class="liner">
<?php if (isset($start_bar)) : ?>
                    <div class="start_bar">
    <?php echo $start_bar ?>
                    </div>
<?php endif?>
<?php if (isset($content)) : ?>
                    <div class="blank_slate">
    <?php echo $content ?>
                    </div>
<?php endif?>
                  </div>
              </div>
              <!--// main column -->
              <!-- page sidebar -->
    <div id="page_sidebar" class="Right column">
        <div class="liner">
<?php if (isset($sidebox)) : ?>
            <div class="sidebox closedbox">
    <?php echo $sidebox ?>
            </div>
<?php endif?>
        </div>
    </div>
              <!--// page sidebar -->
              
            </div>
            <!--// page contents -->
          </div>
        </div>
