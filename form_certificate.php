<?php
if(isset($_POST['name'])){
	$font=realpath("./Poppins/Poppins-SemiBold.ttf");
	$image=imagecreatefromjpeg("modale.jpg");
	$color=imagecolorallocate($image,19,21,22);
	$color_1=imagecolorallocate($image,96,96,96);
	//$name="Vishal Gupta";
	$a=655;
	if(strlen($_POST['name'])>=5&&strlen($_POST['name'])<=7)
		$a+=(strlen($_POST['name'])*15);
	else if(strlen($_POST['name'])>=8&&strlen($_POST['name'])<=10)
		$a+=(strlen($_POST['name'])*8);
	else if(strlen($_POST['name'])>=11&&strlen($_POST['name'])<=12)
		$a+=(strlen($_POST['name'])*5.2);
	else if(strlen($_POST['name'])>=13&&strlen($_POST['name'])<=15)
		$a+=(strlen($_POST['name'])*1.5);
	else if(strlen($_POST['name'])>=16&&strlen($_POST['name'])<=18)
		$a=655;
	else if(strlen($_POST['name'])>=19&&strlen($_POST['name'])<=21)
		$a-=(strlen($_POST['name'])*1.2);
	else if(strlen($_POST['name'])>=22&&strlen($_POST['name'])<=24)
		$a-=(strlen($_POST['name'])*2);
	else if(strlen($_POST['name'])>=25&&strlen($_POST['name'])<=27)
		$a-=(strlen($_POST['name'])*3);
	else if(strlen($_POST['name'])>=28&&strlen($_POST['name'])<=30)
		$a-=(strlen($_POST['name'])*4);
	else
		$a=520;
	imagettftext($image,30,0,$a,490,$color,$font,$_POST['name']);
	$date=date("d M,Y");
	imagettftext($image,19,0,790,975,$color_1,$font,$date);
	imagettftext($image,19,0,800,925,$color_1,$font,"25689418-1024");
	imagettftext($image,19,0,785,1025,$color_1,$font,"01h 30m 14s");
	imagejpeg($image,"certificate/".$_POST['name'].".jpg");
}
?>
<form method="post">
	<input type="textbox" name="name"/>
	<input type="submit"/>
</form>