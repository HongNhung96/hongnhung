<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	print_r($_POST);
if(isset($_POST['login'])){
	echo 'Tên đăng nhập là: ' . $_POST['username1'];
	echo "</br>";
	echo 'Mật khẩu là: ' . $_POST['password1'];
}
}
	$checkmail="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
	$checkpass="/^([A-Z]){1}([\w_]+)$/";
	$username1=$_POST['username1'];
	$password1=$_POST['password1'];
	if (!preg_match($checkmail,$username1) || !preg_match($checkpass,$password1)) {
		echo "NG";
	}else {
		echo "OK";
	}

?>
