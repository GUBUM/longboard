var $mainMenu;
var $mainTxt;
var overNum;
$(document).ready(function(){
	$mainMenu=$("#mainmenu_list a");
	$mainTxt=$("#main_txt li");
	$mainMenu.bind("mouseover",onOver);
	mainTxt(0);
})
function onOver(){
	overNum=$mainMenu.index($(this));
	mainTxt(overNum);
}
function mainTxt(newIndex){
	$mainTxt.css({"opacity":0,"margin-top":0});
	$mainTxt.hide();
	$mainTxt.eq(newIndex).show();
	$mainTxt.eq(newIndex).stop();
	$mainTxt.eq(newIndex).animate({"opacity":1,"margin-top":-83},1500,"easeOutBack");
}
