$(document).ready(function(){
				$("#1").fadeIn(1000);
				startSlider();
});
function startSlider(){
	imgs = $("#slider_container img").size();
	count = 2;
	setInterval(function(){
	if(count != 1){
		$("#slider_container #"+(count-1)).fadeOut(1000);				
	}else{
		$("#slider_container #"+imgs).fadeOut(1000);				
	}
	$("#slider_container #"+count).fadeIn(1000);				
	
	if(count == imgs){
		count=1;
	}else{
		count+=1;
	}},5000);
}