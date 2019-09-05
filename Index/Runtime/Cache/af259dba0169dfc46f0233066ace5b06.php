<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>

    <div id="main-search">

        <div id="searchbartag" class="plxiaoshi">
            <ul id="alert_box_tags">
                <li class="alert_box_tags_item"><a href="" title="撩妹套路有188篇文章" rel="tag" target="_blank" data-wpel-link="internal">撩妹套路</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e5%a5%b3%e7%94%9f" title="女生有140篇文章" rel="tag" target="_blank" data-wpel-link="internal">女生</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/pua" title="PUA有101篇文章" rel="tag" target="_blank" data-wpel-link="internal">PUA</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e6%92%a9%e5%a6%b9" title="撩妹有82篇文章" rel="tag" target="_blank" data-wpel-link="internal">撩妹</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e5%a6%b9%e5%ad%90" title="妹子有81篇文章" rel="tag" target="_blank" data-wpel-link="internal">妹子</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e8%b0%88%e6%81%8b%e7%88%b1" title="谈恋爱有51篇文章" rel="tag" target="_blank" data-wpel-link="internal">谈恋爱</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e6%80%8e%e4%b9%88%e5%92%8c%e5%a5%b3%e7%94%9f%e8%81%8a%e5%a4%a9" title="怎么和女生聊天有49篇文章" rel="tag" target="_blank" data-wpel-link="internal">怎么和女生聊天</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e7%ba%a6%e4%bc%9a" title="约会有44篇文章" rel="tag" target="_blank" data-wpel-link="internal">约会</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e8%81%8a%e5%a4%a9" title="聊天有42篇文章" rel="tag" target="_blank" data-wpel-link="internal">聊天</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e6%9c%8b%e5%8f%8b%e5%9c%88" title="朋友圈有40篇文章" rel="tag" target="_blank" data-wpel-link="internal">朋友圈</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e7%ba%a6%e4%bc%9a%e6%8a%80%e5%b7%a7" title="约会技巧有39篇文章" rel="tag" target="_blank" data-wpel-link="internal">约会技巧</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e9%95%bf%e6%9c%9f%e5%85%b3%e7%b3%bb" title="长期关系有39篇文章" rel="tag" target="_blank" data-wpel-link="internal">长期关系</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e4%b8%80%e4%b8%aa" title="一个有37篇文章" rel="tag" target="_blank" data-wpel-link="internal">一个</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e8%88%94%e7%8b%97" title="舔狗有35篇文章" rel="tag" target="_blank" data-wpel-link="internal">舔狗</a> </li><li class="alert_box_tags_item"><a href="http://www.puawm.com/tag/%e5%a5%b3%e4%ba%ba" title="女人有32篇文章" rel="tag" target="_blank" data-wpel-link="internal">女人</a> </li>				<div class="clear"></div>
            </ul>
            <ul id="alert_box_more">
                <li class="alert_box_more_left"></li>
                <p class="alert_box_more_main"><a href="http://www.puawm.com/6-2" target="_blank" data-wpel-link="internal">查看更多热门标签</a></p>
                <li class="alert_box_more_right"></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <nav class="breadcrumb" style="height:1px;line-height:1px;">

    </nav>
    <div id="content" class="site-content" style="transform: none;">
        <div id="gensui" style="transform: none;">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div class="clear"></div>
                    <div class="line-big">
                        <div class="xl3 xm3">
                            <div class="cat-box">
<!--                 首页   把妹技巧-->
                                <h3 class="cat-title"><span class="syfl"><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></span>
                                    <span class="catmore">
                                        <a href="<?php echo classify_url($classify['type_id'],$classify['classify_id']);?>" title="" data-wpel-link="internal">More&gt;</a></span>
                                </h3>
                                <div class="clear"></div>
                                <div class="cat-site">
                                    <?php $techniques=M()->table('index_techniques n,index_relevance r')->where('r.classify_id =207 and r.content_id=n.techniques_id')->order('date desc')->select();foreach($techniques as $k=>$v){ if($k < 8){ if($k==0){ ?>
                                    <div class="item">
                                        <a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" data-wpel-link="internal">
                                            <img  src="<?php echo $v['techniques_pic'];?>" alt="<?php echo $v['techniques_title'];?>"></a>
                                        <div style="z-index: 1;">
                                            <span class="txt"><?php echo $v['techniques_title'];?></span>
                                            <span class="txt-bg"></span>
                                        </div>
                                    </div>
                                        <div class="clear"></div>
                                    <ul class="cat-list">
                                    <?php } else{?>
                                        <span class="list-date"><?php echo cover_time($v['date'],'m/d')?></span>
                                        <li class="list-title"><a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" title="<?php echo $v['techniques_title'];?>" data-wpel-link="internal"><?php echo $v['techniques_title'];?></a></li>
                                    <?php }?>
                                   </ul>
                                        <?php }?>
                                    <?php }?>

                                </div>
                            </div>
                        </div>
<!--                        坏男孩问答-->
                        <div class="xl3 xm3">
                            <div class="cat-box">
                                <h3 class="cat-title"><span class="syfl"><?php $classify=M('classify')->where(array('classify_id'=>208))->find();echo $classify['classify_name'];?></span>
                                    <span class="catmore">
                                        <a href="<?php echo classify_url($classify['type_id'],$classify['classify_id']);?>" title="" data-wpel-link="internal">More&gt;</a></span>
                                </h3>
                                <div class="clear"></div>
                                <div class="cat-site">
                                    <?php $badbody=M()->table('index_techniques n,index_relevance r')->where('r.classify_id =208 and r.content_id=n.techniques_id')->order('date desc')->select();foreach($badbody as $k=>$v){ if($k<8){ if($k==0){ ?>
                                            <div class="item">
                                                <a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" data-wpel-link="internal">
                                                    <img  src="<?php echo $v['techniques_pic'];?>" alt="<?php echo $v['techniques_title'];?>"></a>
                                                <div style="z-index: 1;">
                                                    <span class="txt"><?php echo $v['techniques_title'];?></span>
                                                    <span class="txt-bg"></span>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <ul class="cat-list">
                                        <?php } else{?>
                                            <span class="list-date"><?php echo cover_time($v['date'],'m/d')?></span>
                                            <li class="list-title"><a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" title="<?php echo $v['techniques_title'];?>" data-wpel-link="internal"><?php echo $v['techniques_title'];?></a></li>
                                        <?php }?>
                                        </ul>
                                        <?php }?>
                                    <?php }?>

                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="abc-pc abc-site"><a href="?m=course&a=index&classify_id=211" rel="nofollow" target="_blank" data-wpel-link="internal">
                            <img src="<?php $classify=M('classify')->where(array('classify_id'=>211))->find();echo $classify['classify_img'];?>"></a></div><div class="line-one">
<!--                        把妹杂谈-->
                        <div class="cat-box">
                            <h3 class="cat-title"><span class="syfl"><?php $classify=M('classify')->where(array('classify_id'=>209))->find();echo $classify['classify_name'];?></span><span class="catmore"><a href="javascript:;" title="" data-wpel-link="internal">More&gt;</a></span></h3>
                            <div class="clear"></div>
                            <div class="cat-site">
                                <div class="cat-dt">
                                    <?php $gossip=M()->table('index_techniques n,index_relevance r')->where('r.classify_id =209 and r.content_id=n.techniques_id')->order('date desc')->select(); foreach($gossip as $k=>$v){ if($k ==0){ ?>
                                    <figure class="line-one-thumbnail">
                                        <a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" data-wpel-link="internal"><img src="<?php echo $v['techniques_pic'];?>" alt="<?php echo $v['techniques_title'];?>"></a>
                                    </figure>
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" target="_blank" data-wpel-link="internal"><?php echo $v['techniques_title'];?></a></h2>
                                    </header><!-- .entry-header -->
                                    <div class="entry-content">
                                        <div class="archive-content">
                                            <?php echo $v['techniques_remarks'];?>						</div>
                                        <div class="archive-tag">
                                            <span class="date"><?php echo cover_time($v['date'],'Y-m-d')?></span>
                                            <span class="views">  阅读 <?php echo $v['techniques_traffic'];?>	 次  </span></div>
                                        <div class="clear"></div>
                                            </div><!-- .entry-content -->
                                </div>
                                        <?php  } else{ ?>
                                <ul class="cat-one-list">
                                    <div class="cat-lists">
                                        <div class="item-st">
                                            <div class="thimg">
                                                <a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" data-wpel-link="internal"><img src="<?php echo $v['techniques_pic'];?>" alt="<?php echo $v['techniques_title'];?>"></a>						</div>
                                            <h3><a href="<?php echo content_url($v['type_id'],$v['content_id']);?>" data-wpel-link="internal"><?php echo $v['techniques_title'];?></a></h3>
                                            <div class="pricebtn"><span class="archive-tag">
								<span class="date"><?php echo cover_time($v['date'],'Y-m-d')?></span>
								<span class="views">  阅读 <?php echo $v['techniques_traffic']; ?> 次  </span></span></div>
                                        </div>
                                    </div>
                                </ul>
                                        <?php }?>
                                         <?php }?>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>

                    </div>
                    <div class="clear"></div>
                </main><!-- .site-main -->
            </div><!-- .content-area -->
<!--站长推荐              -->
            <?php require APP_ROOT.'public/right.php';?>
        </div><div class="clear"></div>
    </div>
    <div class="clear"></div>
</div><!-- .site-content -->
<?php require APP_ROOT.'public/foot.php';?>