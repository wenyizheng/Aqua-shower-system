<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/usr/local/http2/htdocs/fastadmin/public/../application/upper/view/upper/upper2.html";i:1502261224;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>2333</title>
	<link rel="stylesheet" type="text/css" href="__CDN__/upper/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="__CDN__/upper/css/htmleaf-demo.css">
	<link rel="stylesheet" href="__CDN__/upper/css/jquery-yys-slider.css">
</head>
<body>
	<div class="htmleaf-container">
		<!--<header class="htmleaf-header">-->
			<!--&lt;!&ndash;<h1>仿阴阳师官网jquery轮播图插件 <span>CSS3 Animated Cover Flow Rotator Plugin For JQuery</span></h1>&ndash;&gt;-->
			<!--&lt;!&ndash;<div class="htmleaf-links">&ndash;&gt;-->
				<!--&lt;!&ndash;<a class="htmleaf-icon icon-htmleaf-home-outline" href="http://www.htmleaf.com/" title="jQuery之家" target="_blank"><span> jQuery之家</span></a>&ndash;&gt;-->
				<!--&lt;!&ndash;<a class="htmleaf-icon icon-htmleaf-arrow-forward-outline" href="http://www.htmleaf.com/jQuery/Slideshow-Scroller/201707064614.html" title="返回下载页" target="_blank"><span> 返回下载页</span></a>&ndash;&gt;-->
			<!--&lt;!&ndash;</div>&ndash;&gt;-->
		<!--</header>-->
		<div class="content-part part-tese">
		    <div class="content-title"></div>
		    <div class="shadow"></div>
		    <div class="gallery_container">
		      <div class="gallery_wrap threeD_gallery_wrap" style="margin-left: -360px; margin-top: -260px;">
		      	<div href="javascript:;" class="gallery_item threeD_gallery_item gallery_left_middle">
		          <img src="__CDN__/upper/images/yys_banner1.jpg" class="show">
		          <div class="line-t"></div>
		          <div class="line-r"></div>
		          <div class="line-b"></div>
		          <div class="line-l"></div>
		        </div>
		        <div href="javascript:;" class="gallery_item threeD_gallery_item front_side">
		          <img src="__CDN__/upper/images/yys_banner2.jpg" class="show">
		          <div class="line-t"></div>
		          <div class="line-r"></div>
		          <div class="line-b"></div>
		          <div class="line-l"></div>
		        </div>
		        <div href="javascript:;" class="gallery_item threeD_gallery_item gallery_right_middle">
		          <img src="__CDN__/upper/images/yys_banner3.jpg" class="show">
		          <div class="line-t"></div>
		          <div class="line-r"></div>
		          <div class="line-b"></div>
		          <div class="line-l"></div>
		        </div>
		        <div href="javascript:;" class="gallery_item threeD_gallery_item gallery_out">
		          <img src="__CDN__/upper/images/yys_banner4.jpg" class="show">
		          <div class="line-t"></div>
		          <div class="line-r"></div>
		          <div class="line-b"></div>
		          <div class="line-l"></div>
		        </div>
		      </div>
		      <a class="prev" href="javascript:;"></a>
		      <a class="next" href="javascript:;"></a>
		    </div>
		  </div>
	</div>
	
	<script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
	<script src="__CDN__/upper/js/jquery-yys-slider.js"></script>
	<script>
	$(function(){
		$('.content-part.part-tese').addClass('show');
		$('.gallery_container').gallery_slider({imgNum: 4});
	})
	</script>
</body>
</html>