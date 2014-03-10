/*
jQuery(document).ready(function($){

	if($.cookie("css")) {
			$("#main-css").attr("href",$.cookie("css"));
		}
	$(document).ready(function() { 
		$(".color-select-button a").click(function() { 
			$("#main-css").attr("href",$(this).attr('rel'));
			$.cookie("css",$(this).attr('rel'), {expires: 365, path: '/'});
			return false;
		});
	});
})
*/