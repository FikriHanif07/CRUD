<?php 
$koneksi = mysqli_connect("localhost","root","","program_sederhana1");
 if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
