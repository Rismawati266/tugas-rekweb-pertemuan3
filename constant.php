<?php 

	// define('NAMA', 'Sandika Galih'); // constanta nama dan nilainya sandika galih
	// echo NAMA; // tidak bisa di simpan di dalam kelas.

	// echo "<br>";

	// const UMUR = 32; // gapapa bisa simpan di kelas
	// echo UMUR;

	// class Coba {
	// 	const NAMA = 'Sandika';
	// }

	// echo Coba::NAMA;
	
	echo __LINE__;
	echo "<br>";
	echo __FILE__;
	echo "<br>";

	function coba() {
		return __FUNCTION__;
	}

	echo coba();

 ?>