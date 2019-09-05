<?php require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>
<!--接参数-->
<?php $label_id=pg('label_id'); ?>
       <?php $techniques = M()->table('index_techniques n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.techniques_id')->select();?>
<nav class="breadcrumb"><a title="返回首页" href="index.php" data-wpel-link="internal">首页</a> &gt;标签 <a href="" data-wpel-link="internal"></a> &gt;  文章 </nav><div id="content" class="site-content" style="transform: none;">
    <div class="clear"></div>


    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div id="post_list_box" class="border_gray">
                <?php
                $shuju=[];
        $techniques2=M('techniques')->order('date desc')->select();foreach($techniques2 as $k=>$v){
            if(!empty($v['biaoqian'])){
                $valarr=unserialize($v['biaoqian']);
                if(in_array($label_id,$valarr)){
                    $shuju[]=$v['techniques_id'];
                }
            }
        }
 
                $perpage=11;$offset=($p-1)*$perpage;
                $techniques = M('techniques')->where(array('techniques_id'=>array('in',$shuju)))->order('date desc')->limit($offset,$perpage)->select();
                //echo M()->getlastsql();
                $total_num=M('techniques')->where(array('techniques_id'=>array('in',$shuju)))->count();
                foreach($techniques as $k=>$v){  ?>
                    <article id="post-41145" class="archive-list">
                        <figure class="thumbnail box-hide">
                            <a href="http://www.puawm.com/41145" data-wpel-link="internal"><img src="<?php echo $v['techniques_pic'];?>" alt="<?php echo $v['techniques_title'];?>"></a>
                        </figure>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php echo content_url($v['type_id'],$v['techniques_id'])?>" target="_blank" data-wpel-link="internal"><?php echo $v['techniques_title'];?></a></h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content">

			<span class="entry-meta">
				<span class="post_cat">
				<a href="http://www.puawm.com/category/%e6%8a%8a%e5%a6%b9%e6%8a%80%e5%b7%a7" rel="category tag" data-wpel-link="internal"><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></a>			</span>
				<span class="post_spliter">•</span>
				<span class="date" title="2019/08/29 19:36">4天前</span>
			</span>

                            <div class="archive-content">
                                <?php echo $v['techniques_content'];?>	</div>
                            <div class="archive-tag"><span class="views">  阅读 1,002 次  </span></div>
                            <div class="clear"></div>
                        </div><!-- .entry-content -->
                    </article>
                    <?php if (is_int($k / 3)) { ?>
                        <div class="abc-pc abc-site"><a href="?m=course&a=index&classify_id=211" target="_blank" data-wpel-link="internal"><img src="<?php $classify=M('classify')->where(array('classify_id'=>211))->find();echo $classify['classify_img'];?>"></a></div>
                    <?php }?>
                <?php }?>
                </ul>


            </div>
            <?php require APP_ROOT.'public/page.php';?>
        </main><!-- .site-main -->

    </section><!-- .content-area -->
    <!--    站长推荐-->
    <?php require APP_ROOT.'public/right.php';?>
</div><div class="clear"></div>
</div><!-- .site-content -->

<script type="text/javascript">
    function return_message()
    {
        <?php  $input = M('input')->where(array('type_id'=>$type_id,'show_switch'=>2,'required_switch'=>2,'input_pid'=>array('exp','is null')))->order('date asc')->select();  foreach($input as $k=>$v){?>
        if($("#<?php echo $v['field_name'];?>").val()=='')
        {
            alert("<?php echo $v['prompt'];?>");
            return false;
        }
        <?php }?>
    }
</script>
</div>
</div>
</div>
<?php require APP_ROOT.'public/foot.php';?>
