
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>

	<!-- start: CSS fi -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min','bootstrap-responsive.min','style','style-responsive'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	   <style type="text/css">
			body { background: url(../img/bg-login.jpg) !important; }
		</style>
		
		
</head>

<body>
	

			<?php echo $this->fetch('content'); ?>
	
	        <?php echo $this->element('sql_dump'); ?>

<!-- start: JavaScript-->

	<?php echo $this->Html->script(array('jquery-1.9.1.min','jquery-migrate-1.0.0.min','jquery-ui-1.10.0.custom.min','jquery.ui.touch-punch','modernizr','bootstrap.min','jquery.cookie','fullcalendar.min','jquery.dataTables.min')); ?>

	<?php echo $this->Html->script(array('excanvas','jquery.flot','jquery.flot.pie','jquery.flot.stack','jquery.flot.resize.min','jquery.chosen.min','jquery.uniform.min','jquery.cleditor.min','jquery.noty','jquery.elfinder.min','jquery.raty.min','jquery.iphone.toggle','jquery.uploadify-3.1.min','jquery.gritter.min','jquery.imagesloaded','jquery.masonry.min','jquery.knob.modified','jquery.sparkline.min','counter','retina','custom')); ?>
	<!-- end: JavaScript-->

</body>
</html>
