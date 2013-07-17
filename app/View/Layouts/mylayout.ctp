<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Login Page' ?>:
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('mycss');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
</head>
<body>
	<div id="container">
		<div id="header">
			<h1 style="text-align:center"><?php echo 'CakePHP Development Centre' ?></h1>
		</div>
		<div id="content" style="height:80%">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo "999, Cake Street, Cake City"
			?>
		</div>
	</div>
	
</body>
</html>
