<?php 

	class Produk {
		public 	$judul, //property dari kelas
				$penulis,
				$penerbit,
				$harga;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) { // variabel lokal
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function getLabel() {
			return "$this->penulis, $this->penerbit"; // method
		}
	}

	class CetakInfoProduk {
		public function cetak( $produk ){ // method cetak
			$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";// mengembalikan nilai sebuah string
		}
	}

	$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
	$produk2 = new Produk("Uncharted", "Nail Druckmann", "Sony Computer", 250000);

	echo "Komik : " . $produk1->getLabel();
	echo "<br>";
	echo "Game : " . $produk2->getLabel();


 ?>