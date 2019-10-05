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

		public function getInfoLengkap() { // informasi lengakp dari sebuah produk
			$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
			if( $this->tipe == "Komik" ) {
				$str .= " - {$this->jmlHalaman} Halaman.";
			} else if ($this->tipe == "Game" ) {
				$str .= " ~ {$this->waktuMain} Jam.";
			}
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

	echo $produk1->getInfoLengkap();
	echo "<br>";
	

 ?>