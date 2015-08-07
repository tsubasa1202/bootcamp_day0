<!DOCTYPE html>
<html lang="ja">
<head>
	<?php echo $this -> Html -> charset(); ?>
	<?php 
	echo $this -> Html -> meta('icon');
	echo $this -> Html -> css('bootstrap.min');
	echo $this -> Html -> css('stylesheet');


	?>

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>
	<div class="container-fluid">
		<?php 
		echo $this->element('header');
		echo $this->fetch('content');
		echo $this->element('footer'); 
		 
		
		
		?>
		
		
	</div>
</body>
</html>
