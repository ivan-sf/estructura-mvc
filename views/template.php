<?php namespace views;
/**
* 
*/
$template = new Template();
class Template{
	
	function __construct()
	{
		?>

		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
			<link rel="stylesheet" href="views/estudiantes/estilos.css">
		</head>

		</html>
		<?php 
	}


	function __destruct()
	{
		?>
		<footer>FOOTER</footer>
		<?php 
	}
}
?>