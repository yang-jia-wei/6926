<?php require APP_ROOT.'public/head.php';?>

<div id="page" class="hfeed site" style="transform: none;">
    <header id="masthead" class="site-header">
        <nav id="top-header">
            <div class="top-nav">
                <div id="user-profile">
                    您好，欢迎访问靓男学院
                </div>
            </div>
        </nav><!-- #top-header -->
        <div id="menu-box">
            <div id="top-menu">
                <hgroup class="logo-site">
                    <h1 class="site-title">
                        <a href="http://www.puawm.com/" title="PUA靓男学院 | 倡导正向恋爱撩妹套路与技巧_教你怎么追女生" data-wpel-link="internal">
                            <img src="images/logo.png" alt="PUA靓男学院 | 倡导正向恋爱撩妹套路与技巧_教你怎么追女生" title="PUA靓男学院 | 倡导正向恋爱撩妹套路与技巧_教你怎么追女生" width="220" height="50">
                            <span>PUA靓男学院</span>
                        </a>
                    </h1>
                </hgroup><!-- .logo-site -->			<span class="nav-search"><i class="fa fa-search" style="font-size:1.2em;"></i></span>
                <div id="site-nav-wrap">
                    <div id="sidr-close"><a href="http://www.puawm.com/#sidr-close" class="toggle-sidr-close" data-wpel-link="internal">X</a>
                    </div>

                    <nav id="site-nav" class="main-nav">
                        <a href="#sidr-main" id="navigation-toggle" class="bars" data-wpel-link="internal"><i class="_mi _before dashicons dashicons-menu" style="font-size:2em;"></i></a>

                        <div class="menu-%e9%a1%b6%e9%83%a8-container">
                            <ul id="menu-%e9%a1%b6%e9%83%a8" class="down-menu nav-menu sf-js-enabled sf-arrows">

<!--                                <li id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-32"><a href="http://www.puawm.com/" data-wpel-link="internal"><i class="_mi _before dashicons dashicons-admin-home" aria-hidden="true"></i><span>首页</span></a></li>-->
                                <?php $list=M('classify')->where(array('classify_pid'=>2))->order('date asc')->select();
                                foreach($list as $k=>$v){
                                    ?>
                                <li id="menu-item-30" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30"><a href="<?php echo classify_url($v['type_id'],$v['classify_id']);?>" data-wpel-link="internal"><?php echo $v['classify_name'];?></a></li>
                                <?php }?>
<!--                                <li id="menu-item-31" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31"><a href="http://www.puawm.com/category/%e5%9d%8f%e7%94%b7%e5%ad%a9%e9%97%ae%e7%ad%94" data-wpel-link="internal">坏男孩问答</a></li>-->
<!--                                <li id="menu-item-58" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-58"><a href="http://www.puawm.com/category/%e6%8a%8a%e5%a6%b9%e6%9d%82%e8%b0%88" data-wpel-link="internal">把妹杂谈</a></li>-->
<!--                                <li id="menu-item-2118" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2118"><a href="http://www.puawm.com/category/%e5%9e%8b%e7%94%b7%e8%ae%a1%e5%88%92" data-wpel-link="internal">型男计划</a></li>-->
<!--                                <li id="menu-item-37466" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37466"><a href="http://www.puawm.com/1741" data-wpel-link="internal"><i class="_mi _before dashicons dashicons-format-video" aria-hidden="true"></i><span>靓男学院把妹课程</span></a></li>-->
                            </ul>
                        </div>

                    </nav>
                </div><!-- #site-nav-wrap -->
            </div><!-- #top-menu -->
        </div><!-- #menu-box -->
    </header><!-- #masthead -->

