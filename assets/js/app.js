$(document).foundation();
$(document).ready(function(e) {
	var width = $(window).width();
	if(width<480)
	{
    	//$('.h-separator').before('<br/>');
		$('.h-menu').css({
			'text-align':'center'
		});
		$('.h-contact li').css({
			'display':'table-cell'
		})
		$('.top-bar').css({
			'height':'auto',
		})
	}
	$(window).bind('resize',function(e) {
    var width = $(window).width();
	if(width<480)
	{
    	//$('.h-separator').before('<br/>');
		$('.h-menu').css({
			'text-align':'center'
		});
		$('.h-contact li').css({
			'display':'table-cell'
		})
		$('.top-bar').css({
			'height':'auto',
		})
	}
});
});


