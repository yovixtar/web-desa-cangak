<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="./files/img/source/favicon.ico" type="image/x-icon" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="./assets/w3.css">
	<link rel="stylesheet" type="text/css" href="./assets/my.css">
	<link rel="stylesheet" type="text/css" href="./assets/my2.css">
	<script src="./assets/w3.js"></script>
	<script src="./assets/jquery 2.1.1.js"></script>
	<script src="./assets/jquery.simpleTicker/jquery.simpleTicker.js"></script>
	<script>
	window.onscroll = function() {scrollHeader()};

	function scrollHeader() {
	  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
	    w3.addClass('#k-header','w3-animate-top');
	    w3.removeClass('#k-header','w3-animate-opacity-out');
	    document.getElementById("k-header").style.opacity = "3";
	  } else {
	    w3.removeClass('#k-header','w3-animate-top');
	    w3.addClass('#k-header','w3-animate-opacity-out');
	    document.getElementById("k-header").style.opacity = "0";
	  }
	}
	
	$(function(){
	  $.simpleTicker($("#ticker-roll"),{'effectType':'roll'});
	});
	
	$(document).ready(function(){
		
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) 
			{
				$('.to-top').fadeIn();
			} 
			else 
			{
				$('.to-top').fadeOut();
			}
		});
		

		$('.to-top').click(function(){
			$('html, body').animate({scrollTop : 0},700);
			return false;
		});
		
	});
	</script>
	<style type="text/css">
		
	</style>
</head>