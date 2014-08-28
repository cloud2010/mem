 <?php
 get_header('meta');
 get_header(); 
 ?>
 
<!-- Main Container -->
<div id="body-wrapper">

 <!-- Content -->
    <div id="content" class="clearfix">
        <div class="heading-top">
            当前位置：<a href="<?php bloginfo('siteurl'); ?>/" title="返回首页">首页</a> > <?php $categories = get_the_category(); echo(get_category_parents($categories[0]->term_id, TRUE, ' > '));  ?>正文
        </div>
        <!-- Main Content -->
        <div id="main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- Post -->
            <div class="divleft">
                <div class="single_list">
                    <!-- <span class="comment-count"><?php comments_popup_link ('0°','+1°','+%°'); ?></span> -->
                    <h2 class="title"><?php the_title() ?></h2>
                    <ul class="post-meta">
                        <!-- <li class="author">作者：<a href="javascript:void(0)"><?php the_author(); ?></a></li> -->
                        <li class="date"><?php the_time('Y年m月d日') ?></li>
                        <!-- <li class="comments"><a href="javascript:void(0)"><?php if(function_exists('the_views')) { print '被围观 '; the_views();  } ?><?php edit_post_link('编辑', '　|　'); ?></a></li> -->
                    </ul>
                    <div class="post-entry">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            
            <div class="divleft">
                <div class="single_list"><div class="single_listl"><?php  if (get_next_post()) {next_post_link('%link'); } else { echo "已经最新的文章！"; }; ?></div>
                <div class="single_listr"><?php  if (get_previous_post()) {previous_post_link('%link'); } else { echo "后面已经没有文章了"; }; ?></div></div></div>
            <div class="divleft">
                <div class="single_list">
                <h2 class="bdshare-title">分享</h2>
                <!-- Baidu Button BEGIN -->

                 <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
                    <a class="bds_tsina"></a>
                    <a class="bds_qzone"></a>
                    <a class="bds_tqq"></a>
                    <a class="bds_renren"></a>
                    <a class="bds_fbook"></a>
                    <a class="bds_baidu"></a>
                    <span class="bds_more">更多</span>
                    <a class="shareCount"></a>
                </div>
                <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=730973" ></script>
                <script type="text/javascript" id="bdshell_js"></script>
                <script type="text/javascript">
	               document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
                </script>
                <!-- Baidu Button END -->
                 </div> 
                 </div>       

                
                <!-- /Post -->
  <?php //comments_template('', true); ?>
    <?php endwhile; ?>
        <?php endif; ?>	
        </div>
        
        <!-- /Main Content -->
    <?php get_sidebar(); ?> 


<div class="clear"></div>

</div>

<?php get_footer(); ?> 