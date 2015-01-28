$( document ).ready(function() {
	displaybg();
});
$( window ).resize(function() {
	displaybg();
});
function displaybg () {
	if($( window ).width() < 1200){
		$(".masterwrapper").css("background-image", "none");
	}else{
		$(".masterwrapper").css("background-image", "url(" + app_url + "images/background.png)");
	}
}