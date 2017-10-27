<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
	print_r($_GET);
if(isset($_GET['login'])){
	echo 'Tên đăng nhập là: ' . $_GET['username1'];
	echo "</br>";
	echo 'Mật khẩu là: ' . $_GET['password1'];
}

}
?>
