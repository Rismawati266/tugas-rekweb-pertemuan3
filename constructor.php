<?php 

	class Produk {
		public 	$judul = "judul", //property dari kelas
				$penulis = "penulis",
				$penerbit = "penerbit",
				$harga = 0;

		public function __construct( $judul, $penulis, $penerbit, $harga ) { // variabel lokal
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

		public function getLabel() {
			return "$this->penulis, $this->penerbit"; // method
		}
	}

	$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump",  30000);
	$produk2 = new Produk("Uncharted", "Nail Druckmann", "Sony Computer, 250000);

	echo "Komik : " . $produk3->getLabel();
	echo "<br>";
	echo "Game : " . $produk4->getLabel();


 ?>