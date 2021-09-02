	var $typeImg;
  	var $advWrap;
  	var $advWrapR;
  	var overNum;
  	var adv_h;
  	var $icon;
  	$(window).load(function(){
  		init();
  		onEvent();
  		onHeight();
  	})
  	$(window).resize(function(){
  		onHeight();
  	})
  	function init(){
  		$typeImg=$("#type_list li img");
  		$advWrap=$("#adv_wrap");
  		$advWrapR=$("#adv_right"); 
  		$icon=$("#icon_list li");
  	}
  	function onHeight(){
  		adv_h=$("#adv").height();
  		$advWrap.css("height",adv_h);
  		$advWrapR.css("height",adv_h);
  	}
  	function onEvent(){
  		$typeImg.bind("mouseover",imgOver);
  		$typeImg.bind("mouseout",imgOut);
  		$icon.bind("mouseover",iconOver);
  		$icon.bind("mouseout",iconOut);
  	}
  	function imgOver(){
  		overNum=$typeImg.index($(this));
  		$(this).attr("src","/longboard/img/type_over0"+(overNum+1)+".gif");
  	}
  	function imgOut(){
  		overNum=$typeImg.index($(this));
  		$(this).attr("src","/longboard/img/type0"+(overNum+1)+".gif");
  	}
  	function iconOver(){  		
  		$(this).css("margin-top",-30);
  	}
  	function iconOut(){
  		$icon.css("margin-top",0);
  	}
