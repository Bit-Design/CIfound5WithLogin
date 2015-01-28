<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Johan Cazier - <?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url() . APPPATH ?>views/stylesheets/app.css" />
	<script>
		var app_url = '<?php echo base_url() . APPPATH; ?>';
	</script>
	<script src="<?php echo base_url() . APPPATH ?>views/bower_components/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url() . APPPATH ?>views/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url() . APPPATH ?>views/bower_components/foundation/js/foundation.min.js"></script>
	<script src="<?php echo base_url() . APPPATH ?>views/js/app.js"></script>

	<!-- self made -->
	<script src="<?php echo base_url() . APPPATH ?>views/js/master.js"></script>
</head>
<body>
	<div class="masterwrapper">
		<?php echo $header; ?>
		<?php echo $content; ?>
		<?php echo $footer; ?>
	</div>
</body>
</html>