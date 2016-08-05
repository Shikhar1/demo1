$(function(){
	$('.contentPadd h3').first().addClass('first_h3');
	$('.contentPadd.loginPage h3').addClass('first_h3');
	$('.contentInfoText, .contentInfoBlock').last().addClass('marg-bottom');
	$('.loginPage .contentInfoText').addClass('marg-top');
	
	$('.cart th').last().css('border-right','0px');
	$('.cart_prods').css('border-width','0px 1px 1px 0px');
	$('.cart_update').css('border-width','0px 1px 1px 0px');
	$('.cart_price').css('border-width','0px 0px 1px 0px');	
	$('.cart_total td:nth-child(2)').css('border-width','0px 1px 0px 0px');
	$('.desc p').first().css('padding-top','0px');
	
	$('ul').each(function (ul) {
	$(this).find('li').first().addClass('first');
	$(this).find('li').last().addClass('last');
	});	
	$('.banner').each(function (div) {
	$(this).find('div').first().addClass('first');
	$(this).find('div').last().addClass('last');
	
	});

});
$(function(){
	var keeper=$('.wrapper_pic_div'),
		zoomPic=$('.wrapper_pic_zoom, ').css({opacity:0})
	keeper
	 .bind('mouseenter',function(){
	  zoomPic
		.stop()
		.animate({opacity:1})
		
	 })
	 .bind('mouseleave',function(){
		zoomPic
			.stop()
			.animate({opacity:0})
	 })	

})


$(function(){
	$('.infoBoxContents .categories').hover( function(){
		$(this).stop().animate({marginLeft:'10px'},5000,'easeOutElastic');}, function(){
		$(this).stop().animate({marginLeft:'0px'},500,'easeOutElastic');}
	);
});	 	
