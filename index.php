<?php
	$font=realpath("./Poppins/Poppins-SemiBold.ttf");
	$image=imagecreatefromjpeg("modale.jpg");
	$color=imagecolorallocate($image,19,21,22);
	$color_1=imagecolorallocate($image,96,96,96);
	//$name="Vishal Gupta";
	$a=655;
    $name="Ibrahim Elabdellaoui";
	if(strlen($name)>=5&&strlen($name)<=7)
		$a+=(strlen($name)*15);
	else if(strlen($name)>=8&&strlen($name)<=10)
		$a+=(strlen($name)*8);
	else if(strlen($name)>=11&&strlen($name)<=12)
		$a+=(strlen($name)*5.2);
	else if(strlen($name)>=13&&strlen($name)<=15)
		$a+=(strlen($name)*1.5);
	else if(strlen($name)>=16&&strlen($name)<=18)
		$a=655;
	else if(strlen($name)>=19&&strlen($name)<=21)
		$a-=(strlen($name)*1.2);
	else if(strlen($name)>=22&&strlen($name)<=24)
		$a-=(strlen($name)*2);
	else if(strlen($name)>=25&&strlen($name)<=27)
		$a-=(strlen($name)*3);
	else if(strlen($name)>=28&&strlen($name)<=30)
		$a-=(strlen($name)*4);
	else
		$a=520;
	imagettftext($image,30,0,$a,490,$color,$font,$name);
	$date=date("d M,Y");
	imagettftext($image,19,0,790,975,$color_1,$font,$date);
	imagettftext($image,19,0,800,925,$color_1,$font,"25689418-1024");
	imagettftext($image,19,0,785,1025,$color_1,$font,"01h 30m 14s");
	imagejpeg($image,"certificate/".$name.".jpg");
    // imagejpeg($image);
    imagedestroy($image);
    echo"<script>alert('Successfully created your certificate, open folder certificate and watch your certificate')</script>";
