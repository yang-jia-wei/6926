<?php if (!defined('THINK_PATH')) exit(); require APP_ROOT.'public/head.php';?>
<?php require APP_ROOT.'public/top.php';?>
<nav class="breadcrumb"><a title="返回首页" href="" data-wpel-link="internal">首页</a> &gt; <a href="" data-wpel-link="internal">型男计划</a> &gt;  文章 </nav><div id="content" class="site-content" style="transform: none;">
    <div class="clear"></div>


    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div id="post_list_box" class="border_gray">
                <?php $perpage=11;$offset=($p-1)*$perpage; $plan = M()->table('index_plan n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.plan_id')->order('date desc')->limit($offset,$perpage)->select(); $total_num=M()->table('index_plan n,index_relevance r')->where('r.classify_id ='.$classify_id.' and r.content_id=n.plan_id')->count(); foreach($plan as $k=>$v){ ?>
                    <article id="post-41145" class="archive-list">
                        <figure class="thumbnail box-hide">
                            <a href="41145" data-wpel-link="internal">
                                <img src="<?php echo $v['plan_pic'];?>" alt="<?php echo $v['plan_title'];?>"></a>
                        </figure>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php echo content_url($v['type_id'],$v['plan_id'])?>" target="_blank" data-wpel-link="internal"><?php echo $v['plan_title'];?></a></h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content">

			<span class="entry-meta">
				<span class="post_cat">
				<a href="" rel="category tag" data-wpel-link="internal"><?php $classify=M('classify')->where(array('classify_id'=>207))->find();echo $classify['classify_name'];?></a>			</span>
				<span class="post_spliter">•</span>
				<span class="date" title="2019/08/29 19:36">4天前</span>
			</span>

                            <div class="archive-content">
                                <?php echo $v['plan_content'];?>	</div>
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
        <?php  $input = M('input')->where(array('type_id'=>$type_id,'show_switch'=>2,'required_switch'=>2,'input_pid'=>array('exp','is null')))->order('date asc')->select(); foreach($input as $k=>$v){?>
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