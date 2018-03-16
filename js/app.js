(function main(){
/* MENU ACCORDION OPEN CLOSE START	*/
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
/* MENU ACCORDION OPEN CLOSE END    */
/*----------------------------------*/
/* CHANGE PAGE ON CLICK BUTTON START*/
	$(".btn-danger").attr('href','http://localhost:8888/page1.php');
	$(".navbar-brand").attr('href','http://localhost:8888/index.php');
/* CHANGE PAGE ON CLICK BUTTON END  */	
	
})()