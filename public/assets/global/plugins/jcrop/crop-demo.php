<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	// [x] => 250 [y] => 62 [w] => 399 [h] => 399
	
	$targ_w = $_POST['w'];
	$targ_h = $_POST['h'];
	$jpeg_quality = 100;

	$src = $_POST['imagem'];

	$img_r = imagecreatefromjpeg($src);

	$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

	imagecopyresampled($dst_r,$img_r,0,0,intval($_POST['x']),intval($_POST['y']), $targ_w,$targ_h, intval($_POST['w']),intval($_POST['h']));
	
	imagejpeg($dst_r,null,$jpeg_quality);
		
}
?>