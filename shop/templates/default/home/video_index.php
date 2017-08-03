<?php defined('InShopNC') or exit('Access Invalid!');?>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/layout.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/dw/css/healthSchool_qty.css" rel="stylesheet" type="text/css">
<!-- 视频首页 start -->
<style>
.nch-breadcrumb-layout{background: #F8F8F8;}

</style>
<div class="healthSchoolBox_qty">
<div class="healthSchoolSmallBox_qty">
<!--健康讲堂banner开始-->
<div class="healthBannerBox_qty">
	<!--banner左边开始-->
<ul class="healthBannerLeft">
	<div class="healthLeft_qty">
	    <?php foreach($output['sub_class_list'] as $class) {?>
		<li class="color_qty"><?php echo $class['vd_name']?></span>
			<div class="healthHidden_qty">
				<div class="healthHiddenSmall_qty">
					<h4><?php echo $class['vd_name'] ?>介绍</h4>
					<div class="studyBox_qty">
						<p>
						   <?php echo mb_substr($class['vd_description'], 0,200,"utf-8")?>
						</p>
					</div>
					<?php if($class['child']&&is_array($class['child'])) {?>
					<h4 class="top_qty"><?php echo $class['vd_name'] ?>分类</h4>
					<div class="school_qty">
						<div class="list_qty">
						    <?php foreach($class['child'] as $child) {?>
							<a href=""><?php echo $child['vd_name']?></a>
							<?php }?>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</li>
		<?php }?>
	</div>
</ul>
<!--banner左边结束-->
<!--banner右边开始-->
<div class="healthBannerRight">
	<div class="ImgBox_qty">
		<?php echo loadadv(1054);?>
	</div>
	<ul class="btn_qty">
	</ul>
  	<div class="lrbtn_qty">
		<div class="left_qty"></div>
		<div class="right_qty"></div>
  	</div>
</div>
<!--banner右边结束-->
</div>
<!--健康讲堂banner结束-->
<!--小热门视频开始-->
<div class="healthBox_qty">
	<div class="healthImgBox_qty">
		<img src="<?php echo SHOP_TEMPLATES_URL;?>/dw/image/store_qty.png"/>
	</div>
	<div class="healthRightBox_qty">
		<div class="healthTopFont_qty">
			热门<span>视频</span>
		</div>
		<div class="healthBottomFont_qty">
			VID<span>EO</span>
		</div>
	</div>
</div>
<!--小热门视频结束-->
<!--热门视频开始-->
<div class="videoBox_qty">
    <?php foreach ($output['new_article_list'] as $k=>$video) {?>
   
    <?php if($video[item]&&is_array($video[item])) {?>
	<div class="videoFont_qty">.<?php echo $video['vd_name']?>.</div>
	<div class="videoList_qty">
		<ul>
		    <?php foreach($video['item'] as $childv) {?>
			<li>
				<a href="<?php echo urlShop("video","show",array("video_id"=>$childv['video_id']))?>">
					<img src="<?php if($childv[file_name]){echo UPLOAD_SITE_URL.'/shop/article/'.$childv['file_name'];}else{echo UPLOAD_SITE_URL.'/shop/common/loading.gif';}?>" width="285" height="266" data-url="<?php echo UPLOAD_SITE_URL;?>/shop/common/loading.gif"/>
					<div class="videoSmall_qty">
						<?php echo mb_substr($childv['video_title'], 0,8,"utf-8")?>
					</div>
				</a>
			</li>
			
			<?php }?>
		</ul>
	</div>
	
	<?php }?>
	<?php }?>
	
</div>
<!--热门视频结束-->
<!--小保健讲堂开始-->
<div class="healthBox_qty">
	<div class="healthImgBox_qty">
		<img src="<?php echo SHOP_TEMPLATES_URL;?>/dw/image/store_qty.png"/>
	</div>
	<div class="healthRightBox_qty">
		<div class="healthTopFont_qty">
			保健<span>讲堂</span>
		</div>
		<div class="healthBottomFont_qty">
			HEALTH<span> LECTURE ROOM</span>
		</div>
	</div>
</div>
<!--小保健讲堂结束-->
<!--保健讲堂开始-->
<div class="healthRoom_qty">
	<div class="healthRoomLeft_qty"></div>
	<div class="healthRoomRight_qty">
		<div class="healthRoomTop_qty">
			<ul>
				<li>
					<a href="">
						<img src="themes/image/detailList_qty.png"/>
						<div class="heathRoomFont_qty">
							<span>太常视频</span>
							<div>
								<img src="themes/image/eyes_qty_03.png"/>
								18
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="">
						<img src="themes/image/detailList_qty.png"/>
						<div class="heathRoomFont_qty">
							<span>太常视频</span>
							<div>
								<img src="themes/image/eyes_qty_03.png"/>
								18
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="healthRoomBottom_qty">
			<ul class="img_qty">
				<li>
					<a href="">
						<img src="themes/image/detailList_qty.png"/>
						<div class="healthRoomBs_qty">太常视频</div>
					</a>
				</li>
				<li>
					<a href="">
						<img src="themes/image/detailList_qty.png"/>
						<div class="healthRoomBs_qty">太常视频</div>
					</a>
				</li>
				<li>
					<a href="">
						<img src="themes/image/detailList_qty.png"/>
						<div class="healthRoomBs_qty">太常视频</div>
					</a>
				</li>
				<li>
					<a href="">
						<img src="themes/image/detailList_qty.png"/>
						<div class="healthRoomBs_qty">太常视频</div>
					</a>
				</li>
				<li>
					<a href="">
						<img src="themes/image/detailList_qty.png"/>
						<div class="healthRoomBs_qty">太常视频</div>
					</a>
				</li>
				<li>
					<a href="">
						<img src="themes/image/detailList_qty.png"/>
						<div class="healthRoomBs_qty">太常视频</div>
					</a>
				</li>
				<li>
					<a href="">
						<img src="themes/image/detailList_qty.png"/>
						<div class="healthRoomBs_qty">太常视频</div>
					</a>
				</li>
				<li>
					<a href="">
						<img src="themes/image/detailList_qty.png"/>
						<div class="healthRoomBs_qty">太常视频</div>
					</a>
				</li>
			</ul>
			<ul class="lrbtns_qty">
				<li class="lbtns_qty">&lt;</li>
				<li class="rbtns_qty">&gt;</li>
			</ul>
		</div>
	</div>
</div>
<!--保健讲堂结束-->
	</div>
</div>
<script>
$(".healthBannerLeft li").mouseover(function(){
$(".healthBannerLeft li").eq($(this).index()).addClass("color_qty").siblings().removeClass('color_qty');
});


/*
//banner轮播图
var box=$('.healthBannerRight');
var imgbox=$('.ImgBox_qty');
var imgboxa=$('.ImgBox_qty>a');
var rbtn=$('.right_qty');
var lbtn=$('.left_qty');
var btn=$('.btn_qty');
var length=imgboxa.length;
var flag=true;
console.log(imgboxa)
imgboxa.css('left','100%').eq(0).css('left','0');
for(var i=1;i<=length;i++){
    var str=i==1?'<li class="hot_qty">'+i+'</li>':'<li>'+i+'</li>';
    btn.append(str);
}

var $lis=$('.btn_qty>li');
var now=0;
var next=0;
var time=2000;
var t=setInterval(moveR,time);
function moveR(){
    next++;
    if(next==length){
        next=0;
    }
    imgboxa.eq(next).css('left','100%');
    imgboxa.eq(now).animate({'left':'-100%'});
    imgboxa.eq(next).animate({'left':'0'},function(){
        flag=true;
    });
    
    $lis.eq(now).removeClass('hot_qty');
    $lis.eq(next).addClass('hot_qty');
    now=next;
}

 function moveL(){
    next--;
    if(next<0){
        next=imgboxa.length-1;
    }
    imgboxa.eq(next).css('left','-100%');
    imgboxa.eq(now).animate({'left':'100%'});
    imgboxa.eq(next).animate({'left':'0'},function(){
        flag=true;
    });
    
    $lis.eq(now).removeClass('hot_qty');
    $lis.eq(next).addClass('hot_qty');
    now=next;
}

$lis.click(function(){
    if(!flag){return;}
    flag=false;
    var i=$(this).index();
    if(now==i){
        return;
    }
    if(now<i){
        imgboxa.eq(i).css('left','100%');
        imgboxa.eq(now).animate({'left':'-100%'},300);
        imgboxa.eq(i).animate({'left':'0'},300);
    }else if(now>i){
        imgboxa.eq(i).css('left','-100%');
        imgboxa.eq(now).animate({'left':'100%'},300);
        imgboxa.eq(i).animate({'left':'0'},300);
    }
    imgboxa.eq(now).animate({left:'100%'},300);
    imgboxa.eq(i).animate({left:'0'},300,function(){
        flag=true;
    });
    $lis.eq(now).removeClass('hot_qty');
    $lis.eq(i).addClass('hot_qty');
    next=now=i;
})
box.mouseover(function(){
    clearInterval(t);
})
box.mouseout(function(){
    t=setInterval(moveR,time);
})
rbtn.click(function(){
    if(flag){
        flag=false;
         moveR();
    }
   
})
lbtn.click(function(){
    if(flag){
        flag=false;
         moveL();
    }
   
})*/



//跑马车效果
var imgW=$('.img_qty li').width();
var index=0;
var s=setInterval(move,2000)
function move(){
	 $('.img_qty').stop(true,true)
     $('.img_qty').animate({marginLeft:-imgW},function(){
   	 $('.img_qty li:first').appendTo($('.img_qty'))
     $('.img_qty').css({marginLeft:0})
   })
}
$('.rbtns_qty').click(function(){
	move();
})
$('.lbtns_qty').click(function(){
	 $('.img_qty').stop(true,true)
	 $('.img_qty li:last').prependTo($('.img_qty'))
	 $('.img_qty').css({marginLeft:-imgW});
	 $('.img_qty').animate({marginLeft:0});
})
$('.healthRoomBottom_qty').hover(function(){
	clearInterval(s)
},function(){
	s=setInterval(move,2000)
})
</script>
<!-- 视频首页 end -->


