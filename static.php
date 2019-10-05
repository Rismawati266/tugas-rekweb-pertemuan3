<?php 

	// class ContohStatic {
		// public static $angka = 1; // variabel/property property bernama angka, property tsb punya keyword static

		// public static function halo() { // method
			// return "Halo." . self::$angka++. " kali.";
		// }
	// }

	// echo ContohStatic::$angka; // mencetak angka 1. mengakses property atau method keyword static
	// echo "<br>";
	// echo ContohStatic::halo(); // tand kurung yaitu method
	// echo "<hr>";
	// echo ContohStatic::halo();

	class Contoh {
		public $angka = 1;

		public function halo() {
			return "Halo" . $this->angka++ . " kali. <br>";
		}
	}

	$obj = new Contoh;
	echo $obj->halo();
	echo $obj->halo();
	echo $obj->halo();


 ?>