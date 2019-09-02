<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>
<!--            接值（$good_id）-->
<?php $gossip=M('gossip')->where(array('gossip_id'=>$content_id))->find();?>
<nav class="breadcrumb"><a title="返回首页" href="index.php" data-wpel-link="internal">首页</a> &gt; <a href="" rel="category tag" data-wpel-link="internal"><?php $classify=M('classify')->where(array('classify_id'=>209))->find();echo $classify['classify_name'];?></a> &gt;  正文 </nav><div id="content" class="site-content" style="transform: none;">
    <div class="clear"></div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="code-block code-block-6" style="">
                <div class="abc-pc abc-site">
                    <a href="?m=course&a=index&classify_id=211" rel="nofollow" target="_blank" data-wpel-link="internal">
                        <img src="<?php $classify=M('classify')->where(array('classify_id'=>211))->find();echo $classify['classify_img'];?>"></a></div></div>
            <article id="post-41151" class="post-41151 post type-post status-publish format-standard hentry category-5">
                <header class="entry-header">
                    <h1 class="entry-title"><?php echo $gossip['gossip_title'];?>></h1>
                    <div class="single_info">
							<span class="xiaoshi">
                            <span class="leixing">
                                            <span class="yclx"><?php echo $gossip['gossip_author'];?></span>
                                    </span>
                        <a href="http://www.puawm.com/41151" rel="nofollow" target="_blank" data-wpel-link="internal"></a>&nbsp;
															</span>
                        <span class="date"><?php echo cover_time($gossip['date'],'Y/m/d')?>&nbsp;</span>
                        <span class="views">  浏览量 1,205</span>




                        <span class="edit"></span>
                    </div>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <div class="single-content">
                        <div class="code-block code-block-1" style="">
                            <div class="single_banquan"><span style="font-size: 18px;"><strong><span style="color: #77428D;"><?php echo $gossip['gossip_remarks'];?></span></strong>
                                   <span style="color: #000000;"> <?php echo $gossip['gossip_content'];?>    </span>
                                    <!--                                    <span style="color: #000000;">旨在帮助男生在社交中给与之相爱的女生带来真正的爱情体验，不让大家因为一时不恰当的举措，或是木讷呆板，或是自卑懦弱而错过自己最爱的人。</span>-->
                                    <!--                                    <strong><span style="color: #77428D;">同时我们将继续传递正确恋爱价值观，坚决抵制不良PUA，还“两性情感”一个真正纯净健康的社交环境！</span></strong></span></div><br></div>-->
                        <?php echo $gossip['gossip_content'];?>
                        <div class="addtoany_share_save_container addtoany_content addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="http://www.puawm.com/41151" data-a2a-title="别让这5大误区，害你撩妹困难重重" style="line-height: 32px;"><a class="a2a_button_wechat" href="http://www.puawm.com/#wechat" title="WeChat" rel="nofollow noopener" target="_blank" data-wpel-link="external"><span class="a2a_svg a2a_s__default a2a_s_wechat" style="background-color: rgb(123, 179, 46);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="#FFF"><path d="M20.674 12.458c-2.228.116-4.165.792-5.738 2.318-1.59 1.542-2.315 3.43-2.116 5.772-.87-.108-1.664-.227-2.462-.294-.276-.023-.602.01-.836.14-.774.438-1.517.932-2.397 1.482.16-.73.266-1.37.45-1.985.137-.45.074-.7-.342-.994-2.673-1.89-3.803-4.714-2.958-7.624.78-2.69 2.697-4.323 5.302-5.173 3.555-1.16 7.55.022 9.712 2.845a6.632 6.632 0 0 1 1.38 3.516zm-10.253-.906c.025-.532-.44-1.01-.984-1.027a.997.997 0 0 0-1.038.964.984.984 0 0 0 .977 1.02 1.017 1.017 0 0 0 1.05-.96zm5.35-1.028c-.55.01-1.01.478-1 1.012.01.554.466.987 1.03.98a.982.982 0 0 0 .99-1.01.992.992 0 0 0-1.02-.982z"></path><path d="M25.68 26.347c-.705-.314-1.352-.785-2.042-.857-.686-.072-1.408.324-2.126.398-2.187.224-4.147-.386-5.762-1.88-3.073-2.842-2.634-7.2.92-9.53 3.16-2.07 7.795-1.38 10.022 1.493 1.944 2.51 1.716 5.837-.658 7.94-.687.61-.934 1.11-.493 1.917.086.148.095.336.14.523zm-8.03-7.775c.448 0 .818-.35.835-.795a.835.835 0 0 0-.83-.865.845.845 0 0 0-.84.86c.016.442.388.8.834.8zm5.176-1.658a.83.83 0 0 0-.824.794c-.02.47.347.858.813.86.45 0 .807-.34.823-.79a.825.825 0 0 0-.812-.864z"></path></g></svg></span><span class="a2a_label">WeChat</span></a><a class="a2a_button_sina_weibo" href="http://www.puawm.com/#sina_weibo" title="Sina Weibo" rel="nofollow noopener" target="_blank" data-wpel-link="external"><span class="a2a_svg a2a_s__default a2a_s_sina_weibo" style="background-color: rgb(230, 22, 45);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="#FFF"><path d="M13.92 24.99c-4.303.424-8.02-1.52-8.3-4.346-.278-2.827 2.987-5.463 7.292-5.888 4.304-.426 8.018 1.52 8.297 4.345.274 2.83-2.987 5.468-7.29 5.89m8.61-9.38c-.367-.11-.62-.184-.428-.663.416-1.046.458-1.946.01-2.59-.846-1.204-3.155-1.14-5.8-.03 0-.004-.834.362-.62-.297.406-1.31.345-2.407-.29-3.04-1.435-1.437-5.255.055-8.53 3.33C4.422 14.77 3 17.37 3 19.617c0 4.3 5.513 6.913 10.907 6.913 7.07 0 11.776-4.105 11.776-7.37 0-1.97-1.66-3.09-3.15-3.55m4.693-7.87a6.89 6.89 0 0 0-6.55-2.12h-.002a.997.997 0 0 0-.765 1.182.99.99 0 0 0 1.18.765 4.91 4.91 0 0 1 4.66 1.508 4.899 4.899 0 0 1 1.02 4.787.995.995 0 1 0 1.894.615v-.004a6.883 6.883 0 0 0-1.44-6.732m-2.622 2.37a3.343 3.343 0 0 0-3.192-1.03.852.852 0 0 0-.655 1.016.854.854 0 0 0 1.016.657v.003a1.655 1.655 0 0 1 1.564.502c.406.453.514 1.066.338 1.606h.005a.858.858 0 1 0 1.63.528 3.345 3.345 0 0 0-.7-3.28"></path><path d="M14.16 19.87c-.15.26-.484.383-.746.275-.256-.104-.335-.393-.19-.646.15-.255.47-.378.725-.276.26.094.35.386.21.644m-1.375 1.76c-.417.666-1.308.957-1.98.65-.66-.302-.855-1.072-.44-1.72.413-.645 1.274-.933 1.94-.653.673.287.888 1.054.48 1.724m1.564-4.7c-2.047-.533-4.364.49-5.254 2.293-.904 1.84-.028 3.884 2.04 4.552 2.144.69 4.67-.368 5.55-2.354.865-1.943-.216-3.943-2.336-4.49"></path></g></svg></span><span class="a2a_label">Sina Weibo</span></a><a class="a2a_button_douban" href="http://www.puawm.com/#douban" title="Douban" rel="nofollow noopener" target="_blank" data-wpel-link="external"><span class="a2a_svg a2a_s__default a2a_s_douban" style="background-color: rgb(0, 119, 17);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M5.755 5.505h20.55v2.59H5.755v-2.59zm14.99 18.47l1.93-4.29h2.21v-9.97h-18v9.98h2.04l1.93 4.29h-5.78v2.51h21.85v-2.51l-6.18-.01zm-10.74-6.95v-4.88h11.68v4.88h-11.68zm7.99 6.95h-4.37l-1.93-4.29h8.24l-1.94 4.29z"></path></svg></span><span class="a2a_label">Douban</span></a><a class="a2a_button_renren" href="http://www.puawm.com/#renren" title="Renren" rel="nofollow noopener" target="_blank" data-wpel-link="external"><span class="a2a_svg a2a_s__default a2a_s_renren" style="background-color: rgb(0, 94, 172);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M18.74 3.266a14.24 14.24 0 0 0-5.48 0c0 8.96-.07 16.176-9.26 21.662A14.406 14.406 0 0 0 8.322 29c3.595-2.168 5.688-4.736 7.69-8.275 2 3.54 4.07 6.107 7.69 8.275A14.07 14.07 0 0 0 28 24.928c-9.19-5.487-9.26-12.7-9.26-21.662z"></path></svg></span><span class="a2a_label">Renren</span></a><a class="a2a_button_email" href="http://www.puawm.com/#email" title="Email" rel="nofollow noopener" target="_blank" data-wpel-link="external"><span class="a2a_svg a2a_s__default a2a_s_email" style="background-color: rgb(1, 102, 255);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#FFF" d="M26 21.25v-9s-9.1 6.35-9.984 6.68C15.144 18.616 6 12.25 6 12.25v9c0 1.25.266 1.5 1.5 1.5h17c1.266 0 1.5-.22 1.5-1.5zm-.015-10.765c0-.91-.265-1.235-1.485-1.235h-17c-1.255 0-1.5.39-1.5 1.3l.015.14s9.035 6.22 10 6.56c1.02-.395 9.985-6.7 9.985-6.7l-.015-.065z"></path></svg></span><span class="a2a_label">Email</span></a><a class="a2a_dd addtoany_share_save addtoany_share" href="https://www.addtoany.com/share#url=http%3A%2F%2Fwww.puawm.com%2F41151&amp;title=%E5%88%AB%E8%AE%A9%E8%BF%995%E5%A4%A7%E8%AF%AF%E5%8C%BA%EF%BC%8C%E5%AE%B3%E4%BD%A0%E6%92%A9%E5%A6%B9%E5%9B%B0%E9%9A%BE%E9%87%8D%E9%87%8D" data-wpel-link="external" rel="nofollow external noopener noreferrer"><span class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: rgb(1, 102, 255);"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g fill="#FFF"><path d="M14 7h4v18h-4z"></path><path d="M7 14h18v4H7z"></path></g></svg></span><span class="a2a_label a2a_localize" data-a2a-localize="inner,Share">分享</span></a></div></div>
                                    <div class="code-block code-block-5" style="">
                            <div class="single_banquan"><a href="http://www.puawm.com/1741" target="_blank" data-wpel-link="internal"><span style="font-size: 18px;"><strong>靓男学院PUA课程，</strong><span style="color: #000000;">教授恋爱心理学，把妹技巧，聊天，约会，私密空间，核心自信。没钱？不帅？也要让女神倒追你！</span><br><strong>【<u>点击前往课程中心</u>】</strong></span></a>
                            </div>
                                    </div>

                            </div>
                            <div class="clear"></div>
                            <div class="social-main">
                                <div class="clear"></div>
                            </div>												<div class="clear"></div>
                            <nav class="nav-single-c">
                                <nav class="navigation post-navigation" role="navigation">
                                    <h2 class="screen-reader-text">文章导航</h2>
                                </nav>
                            </nav>					</div><!-- .entry-content -->
            </article><!-- #post -->
            <!--相关文章                            -->
            <div class="abc-pc abc-site"><a href="http://www.puawm.com/1741" rel="nofollow" target="_blank" data-wpel-link="internal"><img src="images/1558725386.jpg"></a></div>				<div id="kpxgwz" class="line-one">
                <div class="cat-box">
                    <div class="tit">
                        <span class="name">相关文章</span>
                        <span class="plxiaoshi"><span class="keyword">
            	关键词：            </span></span>
                    </div>
                    <div class="clear"></div>
                    <div class="cat-site">
                        <ul class="cat-one-list">
                            <?php $gossip=M()->table('index_gossip n,index_relevance r')->where('r.classify_id =207 and r.content_id=n.gossip_id')->order('date desc')->select();foreach($gossip as $k=>$v){ ?>
                                <div class="cat-lists"><div class="item-st"><div class="thimg"><a href="<?php echo content_url($v['type_id'],$v['gossip_id'])?>" data-wpel-link="internal"><img src="<?php echo $v['gossip_pic'];?>" alt="<?php echo $v['gossip_title'];?>”"></a></div><p><a href="<?php echo content_url($v['type_id'],$v['gossip_id'])?>" data-wpel-link="internal"><?php echo $v['gossip_title'];?></a></p></div>
                                </div>
                            <?php } ?>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>									</main><!-- .site-main -->
    </div><!-- .content-area -->
    <?php require APP_ROOT.'public/right.php';?>
    <?php require APP_ROOT.'public/foot.php';?>