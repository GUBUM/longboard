var $menuBg;
var $menuList
$(document).ready(function(){
	$menuBtn=$("#menu_icon");
	$menuBg=$("#menu_bg");
	$menuList=$("#submenu_m")
	$menuBg.css("height",$(document).innerHeight());
	$menuList.css("right",-$menuList.width())
	$("#menu_icon").bind("click",btnOpen);
	$("#submenu_m span").bind("click",btnClose);
})
function btnOpen(){
	$menuList.css("right",-$menuList.width());
	$menuBtn.parent().hide();
	$menuBg.show();
	$menuList.animate({"right":0},500,"easeOutCubic");
}
function btnClose(){
	$menuBg.hide();
	$menuBtn.parent().show();
}
