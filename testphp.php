<?php
if (isset($_GET['id'])) {
	echo "data nhận được là </br>";
foreach ($_GET as $key => $value) {
	echo $key ."=>". $value;
}
}

?>
