<?php 

	class Produk {
		public 	$judul, //property dari kelas
				$penulis,
				$penerbit,
				$harga,
				$jmlHalaman,
				$waktuMain;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) { // variabel lokal
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->waktuMain = $waktuMain;
		}

		public function getLabel() {
			return "$this->penulis, $this->penerbit"; // method
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

// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Nail Druckmann, Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump (Rp. 250000) - 50 Jam


 ?>