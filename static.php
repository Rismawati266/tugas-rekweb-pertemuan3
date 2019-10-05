<?php 

	class ContohStatic {
		public static $angka = 1; // variabel/property property bernama angka, property tsb punya keyword static

		public static function halo() { // method
			return "Halo.";
		}
	}

	echo ContohStatic::$angka; // mencetak angka 1. mengakses property atau method keyword static
	echo "<br>";
	echo ContohStatic::halo(); // tand kurung yaitu method


 ?>