<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Business LTD</title>

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet/less" type="text/css" href="_/components/less/style.css" />
	<link rel="stylesheet" type="text/css" href="_/components/less/font-awesome.min.css" />
	<script src="js/less.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('[data-toggle="popover"]').popover({
		    	html: true,
		    	animation: true,
		    	placement: 'top',
		    	trigger: 'hover'
		    }).on('shown.bs.popover', function () {
				var pos = parseInt($('.popover').css('top')) - 22 + 'px';
				$('.popover').css('top',pos);
			}); 

		    $('#popover-2').popover({
		    	html: true,
		    	animation: true,
		    	placement: 'top',
		    	trigger: 'hover',
		    	content: function() {
			        return $('.popover-content').html();
			      },
		    	title: function() {
			        return $('.popover-title').html();
			      }
		    }); 

			 $('[data-toggle="tooltip"]').tooltip();   

		});
	</script>
</head>
<body>
	<section id="headerSection">
		<?php include_once '_/components/php/navigation.php'; ?>
	</section>

	<section id="slideSection">
		<?php include_once '_/components/php/slide.php'; ?>
	</section>

	<section id="fieldSection">
		<?php include_once '_/components/php/field.php'; ?>
	</section>

	<section id="workSection">
		<?php include_once '_/components/php/work.php'; ?>
	</section>

	<section id="bannerSection">
		<?php include_once '_/components/php/banner.php'; ?>
	</section>

	<section id="footerSection">
		<?php include_once '_/components/php/footer.php'; ?>
	</section>	
</body>