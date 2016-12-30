<?php 
include_once 'handler.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Color setup</title>
</head>
<body style="background-color: <?php echo $_COOKIE['color']?>">
	<form action="" method="POST">
		<select name="colors" id="colors">
			<option value="Выберите цвет" disabled>Выберите цвет</option>
			<?php 
				$cookieColor = empty($_COOKIE['color']) ? 'white' : $_COOKIE['color'];
				foreach ($colors as $color) { ?>
					<option value="<?php echo $color ?>" <?php 
					
					if($color == $cookieColor){
						echo 'selected'; } ?> <?php echo ">".$color ?></option>
			<?php } ?>
		</select>
		<input type="submit" value="Set color">
	</form>
	<?php 
	if(isset($_POST['colors'])) {
		echo "You've chosen " . $_POST['colors'] . " color!";
	} else {
		echo "Please, choose your color!";
	}
	?>
</body>
</html>