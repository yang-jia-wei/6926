<!DOCTYPE html>
<html style="transform: none;" lang="zh-CN"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="shenma-site-verification" content="ae67cf207fda765144ce7ab3527b202f_1533972023">
    <?php
    // $site = get_site();
    //
    $site =get_site();

    $p=pg('p')==''?1:pg('p');
    $classify_id=get_classify_id();
    $content_id=pg('content_id');
    $type_id=get_type_id();
    $search=pg('search');
    $member=session('member');
    $member_id=$member['member_id'];
    $recursive_classify_id=recursive_classify_id($classify_id,3)==''?3:recursive_classify_id($classify_id,3);
    $cart_num=M('cart')->where(array('member_id'=>$member['member_id']))->count();
    if($cart_num=='')$cart_num=0;
    $balance=M('account')->where(array('member_id'=>$member_id))->order('account_id desc')->getfield('balance');
    if($balance=='')$balance=0.00;
    $mobile_url='mobile.php?'.$_SERVER["QUERY_STRING"];
    ?>
    <title><?php echo $site['company_name'];?></title><meta name="description" content="传递正确恋爱价值观，专注解决恋爱把妹问题，提供包括：撩妹套路、恋爱课程、把妹技巧、恋爱方法、微信聊天、约会攻略、狙击女神、挽回爱情、婚恋交友、相亲找对象等各类恋爱情感资讯，以及时下最流行的男性时尚资讯与服装搭配攻略。">
    <meta name="keywords" content="撩妹套路,浪迹情感,把妹技巧,微信聊天,约会攻略,恋爱课程,泡妞秘籍,征婚相亲">
    <link rel="shortcut icon" href="http://www.puawm.com/wp-content/themes/Nana3.23/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.puawm.com/wp-content/themes/Nana3.23/images/favicon.png">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--[if lt IE 9]><script src="http://www.puawm.com/wp-content/themes/Nana3.23/js/html5-css3.js"></script><![endif]-->
    <link rel="stylesheet" id="nfgc-main-style-css" href="css/style.css" type="text/css" media="all">
    <script src="js/push.js"></script><script async="" src="js/page.js"></script><script src="js/hm.js"></script><script type="text/javascript" src="js/jquery-1.js"></script>
    <script type="text/javascript" src="js/scrollmonitor.js"></script>
    <script type="text/javascript" src="js/flexisel.js"></script>
    <script type="text/javascript" src="js/stickySidebar.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/slides.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?b0106034cdc44a175466460da9d4eb85";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script><!--[if IE]>
    <div class="tixing"><strong>温馨提示：感谢您访问本站，经检测您使用的浏览器为IE浏览器，为了获得更好的浏览体验，请使用Chrome、Firefox或其他浏览器。</strong>
    </div>
    <![endif]-->
    <link rel="stylesheet" id="font-awesome-four-css" href="css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="css/dashicons.css" type="text/css" media="all">
    <link rel="stylesheet" id="menu-icons-extra-css" href="css/extra.css" type="text/css" media="all">
    <link rel="stylesheet" id="addtoany-css" href="css/addtoany.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-migrate.js"></script>
    <script type="text/javascript" src="js/addtoany.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script data-cfasync="false">
        window.a2a_config=window.a2a_config||{};a2a_config.callbacks=[];a2a_config.overlays=[];a2a_config.templates={};a2a_localize = {
            Share: "分享",
            Save: "收藏",
            Subscribe: "订阅",
            Email: "Email",
            Bookmark: "书签",
            ShowAll: "显示全部服务",
            ShowLess: "显示部分服务",
            FindServices: "查找服务",
            FindAnyServiceToAddTo: "动态查找任何用以添加的服务",
            PoweredBy: "Powered by",
            ShareViaEmail: "Share via email",
            SubscribeViaEmail: "Subscribe via email",
            BookmarkInYourBrowser: "添加为浏览器书签",
            BookmarkInstructions: "Press Ctrl+D or \u2318+D to bookmark this page",
            AddToYourFavorites: "添加至收藏夹",
            SendFromWebOrProgram: "Send from any email address or email program",
            EmailProgram: "Email program",
            More: "More&#8230;",
            ThanksForSharing: "Thanks for sharing!",
            ThanksForFollowing: "Thanks for following!"
        };

        (function(d,s,a,b){a=d.createElement(s);b=d.getElementsByTagName(s)[0];a.async=1;a.src="https://static.addtoany.com/menu/page.js";b.parentNode.insertBefore(a,b);})(document,"script");
    </script>
    <!-- Analytics by WP-Statistics v12.6.7 - https://wp-statistics.com/ -->
    <style>@media screen and (min-width: 550px){.pagination span.current {border: 1px solid #C42159;background: #C42159;}}#searchform button,.entry-content .cat a,.post-format a,.aside-cat,.page-links span,.page-links a:hover span,.tglx,.widget_categories a:hover,.widget_links a:hover,#sidebar .widget_nav_menu a:hover,#respond #submit,.comment-tool a:hover,.pagination a:hover,.pagination .prev,.pagination .next,#down a,.buttons a,.expand_collapse,#tag_letter li:hover,.foot .p2 li .isquare,.link-all a:hover,.meta-nav:hover,.new_cat li.hov .time,.rslides_tabs .rslides_here a,.fancybox-close,.wplist-btn{background: #C42159;}.widget_categories li:hover,.widget_links li:hover,#sidebar .widget_nav_menu li:hover{background-color:#C42159;}a:hover,.top-menu a:hover,.default-menu li a,#user-profile a:hover,#site-nav .down-menu > li > a:hover,#site-nav .down-menu > li.sfHover > a,#site-nav .down-menu > .current-menu-item > a,#site-nav .down-menu > .current-menu-item > a:hover,.scrolltext-title a,.cat-list,.archive-tag a:hover,.entry-meta a,.single-content a,.single-content a:visited,.single-content a:hover,.showmore span,.post_cat a,.single_info .comment a,.single_banquan a,.single_info_w a,.floor,.at,.at a,#dzq .readers-list a:hover em,#dzq .readers-list a:hover strong,#all_tags li a:hover,.showmore span,.new_cat li.hov .title,a.top_post_item:hover p,#related-medias .media-list .media-inner .media-name,#site-nav ul li.current-menu-parent>a,#primarys .cat-lists .item-st:hover h3 a,#post_list_box .archive-list:hover h2 a,.line-one .cat-dt:hover h2 a,.line-one .cat-lists .item-st:hover h3 a{color: #C42159;}.page-links span,.page-links a:hover span,#respond #submit,.comment-tool a:hover,.pagination a:hover,#down a,.buttons a,.expand_collapse,.link-all a:hover,.meta-nav:hover,.rslides_tabs .rslides_here a,.wplist-btn{border: 1px solid #C42159;}#dzq .readers-list a:hover{border-color: #C42159;}.sf-arrows>li>.sf-with-ul:focus:after,.sf-arrows>li:hover>.sf-with-ul:after,.sf-arrows>.sfHover>.sf-with-ul:after,.sf-arrows>li>.sf-with-ul:focus:after,.sf-arrows>li:hover>.sf-with-ul:after,.sf-arrows>.sfHover>.sf-with-ul:after{border-top-color: #C42159;}.sf-arrows ul li>.sf-with-ul:focus:after,.sf-arrows ul li:hover>.sf-with-ul:after,.sf-arrows ul .sfHover>.sf-with-ul:after{border-left-color: #C42159;}.cat-box .cat-title a,.cat-box .cat-title .syfl,.widget-title .cat,#top_post_filter li:hover,#top_post_filter .top_post_filter_active{border-bottom: 3px solid #C42159;}.entry-content .cat a{border-left: 3px solid #C42159;}.single-content h2,.archives-yearmonth{border-left: 5px solid #C42159;}.aside-cat{background: none repeat scroll 0 0 #C42159;}.new_cat li.hov{border-bottom: dotted 1px #C42159;}</style><style type="text/css">
        .ai-viewport-3                { display: none !important;}
        .ai-viewport-2                { display: none !important;}
        .ai-viewport-1                { display: inherit !important;}
        .ai-viewport-0                { display: none !important;}
        @media (min-width: 768px) and (max-width: 979px) {
            .ai-viewport-1                { display: none !important;}
            .ai-viewport-2                { display: inherit !important;}
        }
        @media (max-width: 767px) {
            .ai-viewport-1                { display: none !important;}
            .ai-viewport-3                { display: inherit !important;}
        }
    </style>
    <style>.theiaStickySidebar:after {content: ""; display: table; clear: both;}</style></head>
<body class="home blog" style="transform: none;">
<?php if(file_exists('mobile.php')){?>
<script type="text/javascript">
function IsPC()
{  
           var userAgentInfo = navigator.userAgent;  
           var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");  
           var flag = true;  
           for (var v = 0; v < Agents.length; v++) {  
               if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }  
           }  
           return flag;  
}            
if(!IsPC())window.location.href="<?php echo $mobile_url;?>";

</script>
<?php }?>
