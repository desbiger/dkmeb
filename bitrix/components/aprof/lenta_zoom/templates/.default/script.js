$(document).ready(function(){
	var image_cnt = 0;
	var slide_width = $("#aprof_simple_slider li").width();
	var slide_cnt = $("#aprof_simple_slider li").size();
	var slide = $("#aprof_simple_slider li");
	var slider_width = $("#aprof_simple_slider").width();
	var m = parseInt($(slide).css("margin-right"))+parseInt($(slide).css("margin-left"))+parseInt($(slide).css("padding-right"))+parseInt($(slide).css("padding-left"));
	var cnt = parseInt((slider_width+15)/(slide_width+15));
	var new_width = (slide_width+m)*cnt-m;
	var dw = $("#aprof_simple_slider").parent().width();
	$("#aprof_simple_slider").css("width",new_width+"px");
	$(".aprof-simple-slider-wraper").css("width",new_width+"px");
	slider_width = new_width;
	$("#aprof_simple_slider li a").click(function(){
		image_cnt = $("#aprof_simple_slider").find("li a").index($(this));
		var src = $(this).attr("data-src");
		var html = '<img src="'+src+'" style="display:block;position:absolute;left:-200000px;" id="aprof_slider_image_big" /><a href="javascript:void(0);" class="aprof-slider-image-rarr"></a><a href="javascript:void(0);" class="aprof-slider-image-larr"></a><a class="aprof-popup-close" href="javascript:void(0);"></a>';
		$("#aprof-popup-block .aprof-popup-block-content").html(html);
		$("#aprof-popup-block").show();
		$("#aprof_simple_slider").css({opacity:0});
		var w = $(this).attr("data-width");
		var l = dw/2-w/2;
		$("#aprof-popup-block .aprof-popup-block-content").append('<div id="aprof-slider-loader"></div>');
		$("#aprof-popup-block").css({
			left:l+"px",
			width:dw-l+"px"
		});
		$("#aprof_slider_image_big").bind("load",function(){
			$(this).removeAttr("style");
			$("#aprof-slider-loader").hide();
			$("#aprof-slider-loader").remove();
		});
	});
	$(".aprof-popup-close").live("click",function(){
		$("#aprof-popup-block").hide();
		$("#aprof_simple_slider").css("opacity",1);
	});
	$(".aprof-simple-slider-larr").click(function(){
		if($(this).attr("disabled")=="disabled") return false;
		$(this).attr("disabled","disabled");
		var l = $(this).parents("#aprof_simple_slider").find("ul").position().left;
		if(l<0){
			$("#aprof_simple_slider ul").animate({
				left:"+="+(slide_width+m)+"px"
			},500,function(){
				$(".aprof-simple-slider-larr").removeAttr("disabled");
				$(".aprof-simple-slider-rarr").removeAttr("disabled");
			});
		}
		else{
			
			$("#aprof_simple_slider ul").animate({
				left:"-"+(slide_cnt-cnt)*(slide_width+m)+"px"
			},500,function(){
				$(".aprof-simple-slider-larr").removeAttr("disabled");
				$(".aprof-simple-slider-rarr").removeAttr("disabled");
			});
		}
	});
	$(".aprof-simple-slider-rarr").click(function(){
		if($(this).attr("disabled")=="disabled") return false;
		$(this).attr("disabled","disabled");
		var l = $(this).parents("#aprof_simple_slider").find("ul").position().left;
		var image_id = parseInt((l*(-1)+slider_width)/slide_width);
		if(image_id<slide_cnt){
			$("#aprof_simple_slider ul").animate({
				left:"-="+(slide_width+m)+"px"
			},500,function(){
				$(".aprof-simple-slider-larr").removeAttr("disabled");
				$(".aprof-simple-slider-rarr").removeAttr("disabled");
			});
		}
		else{
			$("#aprof_simple_slider ul").animate({
				left:"0px"
			},500,function(){
				$(".aprof-simple-slider-larr").removeAttr("disabled");
				$(".aprof-simple-slider-rarr").removeAttr("disabled");
			});
		}
	});
	$(".aprof-slider-image-rarr").live("click",function(){
		image_cnt++;
		if(image_cnt==slide_cnt){
			image_cnt = 0;
		}
		var src= $("#aprof_simple_slider ul").find("a").eq(image_cnt).attr("data-src");
		var image = $("#aprof_simple_slider ul").find("a").eq(image_cnt);
		if($(image).attr("ready")!="ready"){
			$(image).attr("ready","ready");
			$("#aprof_slider_image_big").css({
				"position":"absolute",
				"left":"-1000000px"
			});
			$("#aprof-popup-block .aprof-popup-block-content").append('<div id="aprof-slider-loader"></div>');
		}
		$("#aprof_slider_image_big").attr('src',src);
		var w = $(image).attr("data-width");
		var l = dw/2-w/2;
		$("#aprof-popup-block").css({
			left:l+"px",
			width:dw-l+"px"
		});
		$("#aprof_slider_image_big").bind("load",function(){
			$(this).removeAttr("style");
			$("#aprof-slider-loader").hide();
			$("#aprof-slider-loader").remove();
		});
	});
	$(".aprof-slider-image-larr").live("click",function(){
		image_cnt--;
		if(image_cnt<0){
			image_cnt = slide_cnt-1;
		}
		var src= $("#aprof_simple_slider ul").find("a").eq(image_cnt).attr("data-src");
		var image = $("#aprof_simple_slider ul").find("a").eq(image_cnt);
		if($(image).attr("ready")!="ready"){
			$(image).attr("ready","ready");
			$("#aprof_slider_image_big").css({
				"position":"absolute",
				"left":"-1000000px"
			});
			$("#aprof-popup-block .aprof-popup-block-content").append('<div id="aprof-slider-loader"></div>');
		}
		$("#aprof_slider_image_big").attr('src',src);
		var w = $(image).attr("data-width");
		var l = dw/2-w/2;
		$("#aprof-popup-block").css({
			left:l+"px",
			width:dw-l+"px"
		});
		$("#aprof_slider_image_big").bind("load",function(){
			$(this).removeAttr("style");
			$("#aprof-slider-loader").hide();
			$("#aprof-slider-loader").remove();
		});
	});
});