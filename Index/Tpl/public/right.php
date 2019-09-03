<div id="sidebar" class="widget-area" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
        <aside id="zonghe_post-5" class="widget widget_zonghe_post">
            <div id="top_post" class="right_box border_gray">
                <div class="right_box_content">
                    <ul id="top_post_filter">
                        <li id="zhan_post" class="top_post_filter_active"><?php $classify=M('classify')->where(array('classify_id'=>212))->find();echo $classify['classify_name'];?></li>
                        <div class="clear"></div>
                    </ul>
                    <?php $recommended=M()->table('index_recommended n,index_relevance r')->where('r.classify_id =212 and r.content_id=n.recommended_id')->order('date desc')->select();foreach($recommended as $k=>$v){?>
                        <a class="top_post_item zhan_post" href="<?php echo content_url($v['type_id'],$v['content_id']);?>" title="<?php echo $v['recommended_title'];?>" style="" target="_blank" data-wpel-link="internal">
                            <img src="<?php echo $v['recommended_pic'];?>" alt="<?php echo $v['recommended_title'];?>"	            	<div class="news-inner"><p><?php echo $v['recommended_title'];?></p><span class="views">阅读 <?php echo $v['recommended_traffic'];?>次</span><span class="comment"><?php echo cover_time($v['date'],'Y/m/d')?></span></div>
                            <div class="clear"></div>
                        </a>
                    <?php }?>


<!--                    <aside id="adwidget_imagewidget-2" class="widget AdWidget_ImageWidget"><a target="_blank" href="http://www.puawm.com/1741" alt="Ad" data-wpel-link="internal">-->
<!--                            <img style="width: 100%;" src="images/1558893200.jpg" alt="Ad"></a><div class="clear">-->
<!---->
<!--                        </div>-->
<!--                    </aside>-->
                </div>
            </div>

            <div class="clear"></div>
        </aside>
<!--        <aside id="adwidget_imagewidget-2" class="widget AdWidget_ImageWidget"><a target="_blank" href="http://www.puawm.com/1741" alt="Ad" data-wpel-link="internal">-->
<!--                <img style="width: 100%;" src="images/1558893200.jpg" alt="Ad"></a><div class="clear">-->
<!---->
<!--            </div>-->
<!--        </aside>-->
    </div>
</div>
