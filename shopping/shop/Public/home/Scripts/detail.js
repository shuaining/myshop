$(function() {

	$('#shop_all_product').hover(function() {
		$('#shop_category_list').toggle();
	});

	$('#item_cover > .view_thumbs li').each(function(index) {
		$(this).hover(function() {
			$('#item_cover > .view_thumbs li').removeClass('current');
			$(this).addClass('current');
			$('#item_cover > .view_bd > .view').hide().eq(index).show();
		});
	});

	//倒计时
	timeDownFn({
		elem: $('#timedown'),
		endTime: $('#timedown').data("time"),
		endFunc: function() {
			$('#timedown').html("特卖已结束")
		}
	});

	$(window).scroll(function () {
		var $top = $('.detail_page').offset().top;
		var $scroTop = $(window).scrollTop();
		if($scroTop > $top){
			$('#tabs_bar').addClass('fixed');
		} else {
			$('#tabs_bar').removeClass('fixed');
		}
	});

	$('#tabs_bar li').click(function(){
		$(this).addClass('current').siblings('li').removeClass('current');
	});

});