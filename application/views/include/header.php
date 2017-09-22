<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>lavie.com</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.bxslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.slicknav.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/masonry.pkgd.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/imagesloaded.pkgd.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/parallax.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		
		$('.slider').bxSlider({
			pagerCustom: '#bx-pager'
		});
		
		$('.slider2').bxSlider({
			auto:false,
			controls:true,
			pager:true,
			mode:'horizontal'
		});
		
		$('.menu').slicknav();

		var $grid = $('.grid').masonry({
			//columnWidth: 200,
			itemSelector: '.grid-item'
		});
		
		// layout Masonry after each image loads
		$grid.imagesLoaded().progress( function() {
		$grid.masonry('layout');
		});
	
		});
</script>
</head>

<body>