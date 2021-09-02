var $navi;
var topPos;
var scrollPos;
var $navitxt;
var $circle;
var overNum;
var scrollTop;
var posArray=[0,799,2290,2988,3217]
$(document).ready(function(){
	naviInit();
	naviEvent();
})
function naviInit(){
	$navi=$("#quick_navi");
	$navitxt=$(".navi_txt");
	$circle=$(".cir");
	scrollSet();	
	$navi.css("top",scrollPos+topPos);
	$navitxt.hide();
}
function naviEvent(){
	$circle.bind("mouseover",onOver);
	$navi.children().bind("mouseleave",onOut);
	$(document).bind("scroll",onScroll);
	$circle.bind("click",cirClick);
}
function onOver(){
	overNum=$circle.index($(this));
	onOut();
	$navitxt.eq(overNum).show();
	$navitxt.eq(overNum).animate({"text-indent":0},500,"easeOutCubic")
}
function onOut(){
	$navitxt.css("text-indent",126);
	$navitxt.hide();
}
function onScroll(){
	scrollSet();
	$navi.stop();
	$navi.animate({"top":scrollPos+topPos},800,"easeOutCubic");
}
function scrollSet(){
	scrollPos=$(document).scrollTop();
	topPos=$(window).innerHeight()/2-88;
	if(scrollPos>=397 && scrollPos<=1906){
		$circle.addClass("naviwhite");
		$(".navi_txt").addClass("txtwhite");
		$circle.css("border-color","white");
	}else{
		$circle.removeClass("naviwhite");
		$(".navi_txt").removeClass("txtwhite");
		$circle.css("border-color","#33ccff");		
	}
}
function cirClick(){
	clickNum=$circle.index($(this));
	scrollTop=posArray[clickNum];
	$("body,html").animate({"scrollTop":scrollTop},1000,"easeOutBack");
}