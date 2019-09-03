<?php require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>
<!--            接值（$good_id）-->
<?php $course=M('course')->where(array('course_id'=>$content_id))->find();?>
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
                    <h1 class="entry-title"><?php echo $course['course_title'];?>></h1>
                    <div class="single_info">
							<span class="xiaoshi">
                            <span class="leixing">
                                            <span class="yclx"><?php echo $course['course_author'];?></span>
                                    </span>
                        <a href="http://www.puawm.com/41151" rel="nofollow" target="_blank" data-wpel-link="internal"></a>&nbsp;
															</span>
                        <span class="date"><?php echo cover_time($course['date'],'Y/m/d')?>&nbsp;</span>
                        <span class="views">  浏览量 <?php echo $course['course_traffic'];?></span>




                        <span class="edit"></span>
                    </div>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <div class="single-content">
                        <div class="code-block code-block-1" style="">
                            <div class="single_banquan"><span style="font-size: 18px;"><strong><span style="color: #77428D;"><?php echo $course['course_remarks'];?></span></strong>
                                   <span style="color: #000000;"> <?php echo $course['course_content'];?>    </span>
                                    <!--                                    <span style="color: #000000;">旨在帮助男生在社交中给与之相爱的女生带来真正的爱情体验，不让大家因为一时不恰当的举措，或是木讷呆板，或是自卑懦弱而错过自己最爱的人。</span>-->
                                    <!--                                    <strong><span style="color: #77428D;">同时我们将继续传递正确恋爱价值观，坚决抵制不良PUA，还“两性情感”一个真正纯净健康的社交环境！</span></strong></span></div><br></div>-->

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
                            <?php $course2=M()->table('index_course n,index_relevance r')->where('r.classify_id =211 and r.content_id=n.course_id')->order('date desc')->select();foreach($course2 as $k=>$v){ ?>
                                <div class="cat-lists"><div class="item-st"><div class="thimg"><a href="<?php echo content_url($v['type_id'],$v['course_id'])?>" data-wpel-link="internal"><img src="<?php echo $v['course_pic'];?>" alt="<?php echo $v['course_title'];?>”"></a></div><p><a href="<?php echo content_url($v['type_id'],$v['course_id'])?>" data-wpel-link="internal"><?php echo $v['course_title'];?></a></p></div>
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

