(function main(){
	$('#btn1').click(function() {
		$(".collapse").removeClass("show");
		$("#collapseOne").toggleClass("show");
	})
	$('#btn2').click(function(){
		$(".collapse").removeClass("show");
		$("#collapseTwo").toggleClass("show");
	})
	$('#btn3').click(function() {
		$(".collapse").removeClass("show");
		$("#collapseThree").toggleClass("show");
	})
})()