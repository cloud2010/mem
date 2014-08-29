<?php

get_header('meta');
get_header();
?>

<!-- Main Container -->
<div id="body-wrapper">
 <!-- Content -->
    <div id="content_main">

        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
            <?php echo get_banner_slide(); ?>
            </ul>

        </div>
        <!-- <div class="has-line"></div> -->
        <!-- /Slider -->

        <!-- main-services -->
        <div class="main-services">
            <div id="list-main-services">
                <dl>
                    <?php echo get_main_servives_list(); ?>
                </dl>
            </div>
        
            
            <div id="right-content">
                <ul>
                  <?php echo get_main_services_post(); ?>
                </ul>
            </div>
            <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
    <!-- /Content -->
<?php
get_footer();
?>