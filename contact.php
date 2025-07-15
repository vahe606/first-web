<?php 
	$name=$_POST['username'];
	$email=$_POST['email'];
	$text_ar=$_POST['slug'];
	// echo $name."<br>".$email."<br>".$text_ar;

$txt=<<<llo

Name -- $name \n
Email -- $email \n
Message -- $text_ar \n



llo;


$mail=mail('vahe.sagatelyannn@gmail.com', $name, $txt);

if ($mail) {
	echo "true";
}else{
	echo "false";
}


?>