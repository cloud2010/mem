    </div>
    <!-- /Main Container -->
    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="footer-content">
                <!-- About -->
                <div class="one-fourth link-path">
                    <h5>学校地址</h5>
                    <p>联系地址：上海海事大学（临港校区）泰山科研楼</p>
                    <p>邮编：201306</p>
                </div>
                <!-- /About -->
                
                <!-- Tags -->
                <!-- <div class="one-fourth tags" style="padding-right: 25px;">
                    <h5>云标签</h5>
                    <?php wp_tag_cloud('smallest=12&largest=16&unit=px&number=65&orderby=count&order=RAND');?>
                </div> -->
                <!-- /Tags -->

                <!-- Contacts -->
                <div class="one-fourth link-path">
                    <h5>联系方式</h5>
                    <p><?php echo get_option("Dchaser_aboutus"); ?></p>
                </div>
                <!-- /Contacts -->

                <!-- Links -->
                <div class="one-fourth link-path">
                    <h5>友情链接</h5>
                    <!-- <p class="friend-links"><a href="<?php echo get_option("Dchaser_links"); ?>">更多友链 »</a></p> -->
                    <ul class="friends-ul">
                    <?php wp_list_bookmarks('orderby=link_id&categorize=0&title_li='); ?>
                   </ul>
                </div>
                <!-- /Links -->

                <!-- my_entry_published -->
                <!-- <div class="one-fourth last link-path">
                    <h5>网站管理</h5>
                    <ul style="list-style-type: disc;margin-left: 25px;">
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php echo esc_attr(__('Syndicate this site using RSS 2.0')); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
                    <?php wp_meta(); ?>
                    </ul>
                </div> -->
                <!-- /my_entry_published -->

                <!-- Search form -->
                <!-- <div class="one-fourth last link-path">
                    <h5>内容检索</h5>
                    <ul style="list-style-type: disc;margin-left: 25px;">
                    <?php //get_search_form();?>
                    </ul>
                </div> -->
                <!-- /Search form -->
                
            </div>

            <div class="info clearfix link-path">
                <!-- Copyright -->
                <ul class="copyright">
                    <li>Copyright &copy; 2014 <strong><a href="<?php bloginfo('siteurl'); ?>/"><?php bloginfo('name');?></a></strong> . All rights reserved</li>
                    
                    <li>&nbsp;Designed by <a href="http://cie.shmtu.edu.cn">CIE</a></li>
                    <li></li>
                    <!-- <li><a href="http://www.miibeian.gov.cn/" target="_blank" title="备案信息"><?php echo get_option("Dchaser_beian"); ?></a></li> -->
                    <li><?php echo get_option("Dchaser_stat"); ?></li>
                </ul>
                <!-- /Copyright -->
            </div>
        </div>

    </div>
    <!-- /Footer -->

</body>
</html>