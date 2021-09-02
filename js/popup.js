var $pop;
var $close;
$(document).ready(function(){
	$menu=$(".popup");
	$pop=$("#popupBg");
	$close=$("#popup a");
	$menu.bind("click",onPop);
	$close.bind("click",popClose);
});
function onPop(){
	$pop.show();
}
function popClose(){
	$pop.hide();
}
