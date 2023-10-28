<?php
include './app/include/base/var.php';

$l = mysqli_connect($host,$user,$pass,$base);
if (!$l) {
	echo "ERROR : Tidak Bisa Menghubungkan Database !".PHP_EOL;
}
?>