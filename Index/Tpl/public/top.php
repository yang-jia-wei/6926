<?php require APP_ROOT.'public/head.php';?>

<div id="page" class="hfeed site" style="transform: none;">
    <header id="masthead" class="site-header">
        <nav id="top-header">
            <div class="top-nav">
                <div id="user-profile">
                    <span style="color: red;"><?php echo $site['company_name'];?>   </span>
                </div>
            </div>
        </nav><!-- #top-header -->
        <div id="menu-box">
            <div id="top-menu">
                <hgroup class="logo-site">
                    <h1 class="site-title">
                        <a href="index.php" title="PUA靓男学院 | 倡导正向恋爱撩妹套路与技巧_教你怎么追女生" data-wpel-link="internal">
                            <img src="<?php echo $site['logo_img'];?>" alt="PUA靓男学院 | 倡导正向恋爱撩妹套路与技巧_教你怎么追女生" title="PUA靓男学院 | 倡导正向恋爱撩妹套路与技巧_教你怎么追女生" width="220" height="50">
                            <span>PUA靓男学院</span>
                        </a>
                    </h1>
                </hgroup><!-- .logo-site -->			
                <span class="nav-search  dianjis"><i class="fa fa-search" style="font-size:1.2em;"></i></span>
                <div id="site-nav-wrap">
                    <div id="sidr-close"><a href="" class="toggle-sidr-close" data-wpel-link="internal">X</a>
                    </div>
                    <nav id="site-nav" class="main-nav">
                        <a href="" id="navigation-toggle" class="bars" data-wpel-link="internal"><i class="_mi _before dashicons dashicons-menu" style="font-size:2em;"></i></a>


                        <div class="menu-%e9%a1%b6%e9%83%a8-container">
                            <ul id="menu-%e9%a1%b6%e9%83%a8" class="down-menu nav-menu sf-js-enabled sf-arrows">
                                <?php $list=M('classify')->where(array('classify_pid'=>2))->order('date asc')->select();
                                foreach($list as $k=>$v){
                                ?>

                                <li id="menu-item-30" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30"><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>" data-wpel-link="internal">
                                        <?php if($v['classify_id'] ==211){ ?>
                                            <i class="_mi _before dashicons dashicons-format-video" aria-hidden="true"></i>
                                        <?php }?>
                                        <?php if($v['classify_id'] == 3){ ?>
                                            <i class="_mi _before dashicons dashicons-admin-home" aria-hidden="true"></i>
                                        <?php }?>
                                        <?php echo $v['classify_name'];?></a></li>

                                <?php }?>
                            </ul>
                        </div>


                    </nav>
                </div><!-- #site-nav-wrap -->
            </div><!-- #top-menu -->
        </div><!-- #menu-box -->
    </header><!-- #masthead -->


<div id="main-search">
        
    <div id="searchbartag" class="plxiaoshi">
    <ul id="alert_box_tags">
        <?php $label=M()->table('index_label n,index_relevance r')->where('r.classify_id =217 and r.content_id=n.label_id')->order('date desc')->select();foreach($label as $k=>$v){
            ?>
    <li class="alert_box_tags_item">
        <a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>&label_id=<?php echo $v['label_id']; ?>" title="<?php echo $v['label_title'];?>" rel="tag" target="_blank" data-wpel-link="internal"><?php echo $v['label_title'];?></a>
        <?php }?>
    </li>
        
        <div class="clear"></div>
            </ul>
<!--            <ul id="alert_box_more">-->
<!--                <li class="alert_box_more_left"></li>-->
<!--                <p class="alert_box_more_main"><a href="http://www.puawm.com/6-2" target="_blank" data-wpel-link="internal">查看更多热门标签</a></p>-->
<!--                <li class="alert_box_more_right"></li>-->
<!--                <div class="clear"></div>-->
<!--            </ul>-->
</div>      
    <div class="clear"></div>
</div>
<script type="text/javascript">
$(".dianjis").click(function(){
    $("#main-search").slideToggle(500);
});
</script>