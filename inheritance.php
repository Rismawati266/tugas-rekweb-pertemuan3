<?php 

	class Produk {
		public 	$judul, //property dari kelas
				$penulis,
				$penerbit,
				$harga,
				$jmlHalaman,
				$waktuMain,
				$tipe;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) { // variabel lokal
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->waktuMain = $waktuMain;
			$this->tipe = $tipe;
		}

		public function getLabel() {
			return "$this->penulis, $this->penerbit"; // method
		}

		public function getInfoProduk() { // informasi lengakp dari sebuah produk
			$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

			return $str;
		}
	}

	class Komik extends Produk { // kelas child 
		public function getInfoProduk() {
			$str = "Komik : {$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
			return $str;
		}
	}

	class Game extends Produk {
		public function getInfoProduk() {
			$str = "Game : {$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
			return $str;
		}
	}


	class CetakInfoProduk {
		public function cetak( Produk $produk ){ // method cetak
			$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";// mengembalikan nilai sebuah string
			return $str;
		}
	}

	$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
	$produk2 = new Produk("Uncharted", "Nail Druckmann", "Sony Computer", 250000, 0, 50, "Game");

	echo $produk1->getInfoProduk();
	echo "<br>";
	echo $produk2->getInfoProduk();
	


 ?>