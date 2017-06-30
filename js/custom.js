$(document).ready(function() {
	$('a#one').click(function(){
		$('.service-details-one.service-details').css('display','table');
		$('.service-details-two.service-details').css('display','none');
		$('.service-details-three.service-details').css('display','none');
		$('.service-details-four.service-details').css('display','none');
		$('.service-details-five.service-details').css('display','none');
		$('.service-details-six.service-details').css('display','none');
		$('.service-details-seven.service-details').css('display','none');
	});
	$('a#two').click(function(){
		$('.service-details-two.service-details').css('display','table');
		$('.service-details-one.service-details').css('display','none');
		$('.service-details-three.service-details').css('display','none');
		$('.service-details-four.service-details').css('display','none');
		$('.service-details-five.service-details').css('display','none');
		$('.service-details-six.service-details').css('display','none');
		$('.service-details-seven.service-details').css('display','none');
	});
	$('a#three').click(function(){
		$('.service-details-one.service-details').css('display','none');
		$('.service-details-two.service-details').css('display','none');
		$('.service-details-three.service-details').css('display','table');
		$('.service-details-four.service-details').css('display','none');
		$('.service-details-five.service-details').css('display','none');
		$('.service-details-six.service-details').css('display','none');
		$('.service-details-seven.service-details').css('display','none');
	});
	$('a#four').click(function(){
		$('.service-details-one.service-details').css('display','none');
		$('.service-details-two.service-details').css('display','none');
		$('.service-details-three.service-details').css('display','none');
		$('.service-details-four.service-details').css('display','table');
		$('.service-details-five.service-details').css('display','none');
		$('.service-details-six.service-details').css('display','none');
		$('.service-details-seven.service-details').css('display','none');
	});
	$('a#five').click(function(){
		$('.service-details-one.service-details').css('display','none');
		$('.service-details-two.service-details').css('display','none');
		$('.service-details-three.service-details').css('display','none');
		$('.service-details-four.service-details').css('display','none');
		$('.service-details-five.service-details').css('display','table');
		$('.service-details-six.service-details').css('display','none');
		$('.service-details-seven.service-details').css('display','none');
	});
	$('a#six').click(function(){
		$('.service-details-one.service-details').css('display','none');
		$('.service-details-two.service-details').css('display','none');
		$('.service-details-three.service-details').css('display','none');
		$('.service-details-four.service-details').css('display','none');
		$('.service-details-five.service-details').css('display','none');
		$('.service-details-six.service-details').css('display','table');
		$('.service-details-seven.service-details').css('display','none');
	});
	$('a#seven').click(function(){
		$('.service-details-one.service-details').css('display','none');
		$('.service-details-two.service-details').css('display','none');
		$('.service-details-three.service-details').css('display','none');
		$('.service-details-four.service-details').css('display','none');
		$('.service-details-five.service-details').css('display','none');
		$('.service-details-six.service-details').css('display','none');
		$('.service-details-seven.service-details').css('display','table');
	});
	/***sub-menu**/
	$("#a1").hover(function(){
		$('#k1').css('display','table');
		$('#k2').css('display','none');
		$('#k3').css('display','none');
		$('#k4').css('display','none');
		$('#k5').css('display','none');
		$('#k6').css('display','none');
		$('#k7').css('display','none');
	});
	$("#a2").hover(function(){
		$('#k1').css('display','none');
		$('#k2').css('display','table');
		$('#k3').css('display','none');
		$('#k4').css('display','none');
		$('#k5').css('display','none');
		$('#k6').css('display','none');
		$('#k7').css('display','none');
	});
	$("#a3").hover(function(){
		$('#k1').css('display','none');
		$('#k2').css('display','none');
		$('#k3').css('display','table');
		$('#k4').css('display','none');
		$('#k5').css('display','none');
		$('#k6').css('display','none');
		$('#k7').css('display','none');
	});
	$("#a4").hover(function(){
		$('#k1').css('display','none');
		$('#k2').css('display','none');
		$('#k3').css('display','none');
		$('#k4').css('display','table');
		$('#k5').css('display','none');
		$('#k6').css('display','none');
		$('#k7').css('display','none');
	});
	$("#a5").hover(function(){
		$('#k1').css('display','none');
		$('#k2').css('display','none');
		$('#k3').css('display','none');
		$('#k4').css('display','none');
		$('#k5').css('display','table');
		$('#k6').css('display','none');
		$('#k7').css('display','none');
	});
	$("#a6").hover(function(){
		$('#k1').css('display','none');
		$('#k2').css('display','none');
		$('#k3').css('display','none');
		$('#k4').css('display','none');
		$('#k5').css('display','none');
		$('#k6').css('display','table');
		$('#k7').css('display','none');
	});
	$("#a7").hover(function(){
		$('#k1').css('display','none');
		$('#k2').css('display','none');
		$('#k3').css('display','none');
		$('#k4').css('display','none');
		$('#k5').css('display','none');
		$('#k6').css('display','none');
		$('#k7').css('display','table');
	});
	/**end-sub-menu**/
	//service scroll
	$("#service_btn").on('click',function() {
	var url = window.location.href;
	var array = url.split('/');
	var lastsegment = array[array.length-1];
	var h='index.php';
	if(lastsegment == h){
		var f = $("#service_blog").position().top - $('.uk-sticky-placeholder').height();
			$('html, body').animate({
				'scrollTop' : f
			},1500);
	}
	else{
			//alert("The paragraph was clicked.");
			window.location.replace("index.php");
			  var f = $("#service_blog").position().top - $('.uk-sticky-placeholder').height();
			$('html, body').animate({
				'scrollTop' : f
			},1500);
			
		}
});
	//scroll for footer link
	$("#QLinks-f").on('click',function() {
		var f = $("#service_blog").position().top - $('.uk-sticky-placeholder').height();
		$('html, body').animate({
			'scrollTop' : f
		},1500);
	});
	


});